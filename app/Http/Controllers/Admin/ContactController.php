<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Contact;
//use Storage; //追加


class ContactController extends Controller
{
   
   public function index(Request $request)
   {
       $cond_name = $request->cond_name;
       if ($cond_name != '') {
           // 検索されたら検索結果を取得する
           $posts = Contact::where('title', $cond_name)->get();
       } else {
           // それ以外はすべてのニュースを取得する
           $posts = Contact::all();
       }
       return view('admin.contact.index', ['posts' => $posts, 'cond_name' => $cond_name]);
    }
    
    
   public function edit(Request $request)
   {
      //Contact Modelからデータを取得する
      $contact = Contact::find($request->id);
      if (empty($contact)) {
       abort(404);   
      }
      return view('admin.contact.edit', ['contact_form' => $contact]);
    }
    
    
   public function update(Request $request)
   {
      $this->validate($request, Contact::$rules);
      $contact = Contact::find($request->id);
      $contact_form = $request->all();
      

       unset($contact_form['_token']);
       $contact->fill($contact_form)->save();

       
       return redirect('admin/contact/');
     //return redirect('admin/contact/edit?id=1');
  }
    
    
  public function delete(Request $request)
  {
      // 該当するContact Modelを取得
      $contact = Contact::find($request->id);
      // 削除する
      $contact->delete();
      return redirect('admin/contact/');
  }
}
