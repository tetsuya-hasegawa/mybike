<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Contact;
use App\ContactHistory;
use Carbon\Carbon;
use Storage; //追加

class ContactController extends Controller
{
   
    public function add(Request $request)
    {
        
        //こちらのコードはconfirmで保存する前なので使えない
        //$contact = new Contact;
        //$form = $contact->get()->toArray();
        
        
        //Contactモデルのフィールドと同じキーを持つ連想配列を取得
        $form = array(
          'name' =>'',
          'mail' =>'',
          'title' =>'',
          'body' =>''
        ); 
             
             
        //dd($form);
        
        
        if (isset($form['name'])) {
         $form['name'] = $request->session()->get('name');
        }
        if (isset($form['mail'])) {
         $form['mail'] = $request->session()->get('mail');
        }
        if (isset($form['title'])) {
          $form['title'] = $request->session()->get('title');
        }
         if (isset($form['body'])) {
          $form['body'] = $request->session()->get('body');
        }
         
        //$form = $request->session()->all();

        return view('contact.contact', ['form' => $form]);
    }
    
    //createをinputへ変更する事
    public function input(Request $request)
    {
           // 以下を追記
       //Varidationを行う
     $this->validate($request, Contact::$rules);

      // $contact = new Contact;
       $form = $request->all();
       
           $request->session()->put('name', $form['name']);
           $request->session()->put('mail', $form['mail']);
           $request->session()->put('title', $form['title']);   
           $request->session()->put('body', $form['body']);   
       
   
      //フォームから送信されてきた_tokenを削除する
      //unset($form['_token']);
        
      //これでviewで入力したデータがカラムに代入されます
      //$requestとデータベースとの紐つけの作業をしています
      //$contact->fill($form); 
        
      return view('contact.confirm', ['contact_form' => $form]);
    }
    
    //confirmをcheckにする事
    public function confirm(Request $request)
   {
        

      $contact = new Contact;
      $form = $request->all();

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
        
         // データベースに保存する
      $contact->fill($form);
      $contact->save();
      
       // 以下を追記
       $history = new ContactHistory;
       $history->contact_id = $contact->id;
       $history->edited_at = Carbon::now();
       $history->save();
      
      
      
      //フォーム入力画ページのviewを表示
      return redirect('contact/thanks');
    }
    
   
    public function thanks(Request $request)
      {
      //$request->session()->flush();
       $request->session()->forget(['name', 'mail', 'title', 'body']);
       return view('contact.thanks');
      }
  
}
