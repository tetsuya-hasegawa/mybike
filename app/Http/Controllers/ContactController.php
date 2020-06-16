<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Contact;
use Storage; //追加

class ContactController extends Controller
{
   
    public function add()
    {
        return view('contact.contact');
    }
    
    
    public function confirm(Request $request)
    {
           // 以下を追記
       //Varidationを行う
     $this->validate($request, Contact::$rules);

     $contact = new Contact;
     $form = $request->all();
        
      //フォームから送信されてきた_tokenを削除する
     unset($form['_token']);
        
      //これでviewで入力したデータがカラムに代入されます
      //$requestとデータベースとの紐つけの作業をしています
     $contact->fill($form); 
        
      //return redirect('contact/confirm');
      return view('contact.confirm', ['contact_form' => $contact]);
    }
    
    
    public function create(Request $request)
   {
        

      $contact = new Contact;
      $form = $request->all();
        
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
        
         // データベースに保存する
      $contact->fill($form);
      $contact->save();
      //フォーム入力画ページのviewを表示
      return redirect('contact/thanks');
      // return view('contact.thanks');
    }
    
   
    public function thanks()
      {
       return view('contact.thanks');
      }
  
}
