<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
   
    public function add()
    {
        return view('contact.contact');
    }
    
    public function create(Request $request)
    {
         // 以下を追記
        // Varidationを行う
        $this->validate($request, Contact::$rules);

        $contact = new Contact;
        $form = $request->all();
        
     // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
         // データベースに保存する
        $contact->fill($form);
        $contact->save();
        //フォーム入力画ページのviewを表示
        return redirect('contact/contact');
    }
}
