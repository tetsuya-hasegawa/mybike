<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

use App\ProfileHistory;

use Carbon\Carbon;


class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
         // 以下を追記
        // Varidationを行う
        $this->validate($request, Profile::$rules);

        $profile = new Profile;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$profile->image_path に画像のパスを保存する
        if (isset($form['image'])) {
           $path = $request->file('image')->store('public/image');
           $profile->image_path = basename($path);
        } else {
           $profile->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $profile->fill($form);
        $profile->save();
        return redirect('admin/profile/create');
    }
   public function index(Request $request)
   {
       $cond_title = $request->cond_title;
       if ($cond_title != '') {
           // 検索されたら検索結果を取得する
           $posts = Profile::where('title', $cond_title)->get();
       } else {
           // それ以外はすべてのニュースを取得する
           $posts = Profile::all();
       }
       return view('admin.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
     public function edit(Request $request)
  {
      // Profile Modelからデータを取得する
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
  }


   public function update(Request $request)
  {
      $this->validate($request, Profile::$rules);
      $profile = Profile::find($request->id);
      $profile_form = $request->all();
      if ($request->remove == 'true') {
           $profile_form['image_path'] = null;
       } elseif ($request->file('image')) {
           $path = $request->file('image')->store('public/image');
           $profile_form['image_path'] = basename($path);
       } else {
           $profile_form['image_path'] = $profile->image_path;
       }

       unset($profile_form['_token']);
       unset($profile_form['image']);
       unset($profile_form['remove']);
       $profile->fill($profile_form)->save();

       // 以下を追記
       $history = new ProfileHistory;
       $history->profile_id = $profile->id;
       $history->edited_at = Carbon::now();
       $history->save();

       return redirect('admin/profile/');
     //return redirect('admin/profile/edit?id=1');
  }
      

  
  // 以下を追記
  public function delete(Request $request)
  {
      // 該当するProfile Modelを取得
      $profile = Profile::find($request->id);
      // 削除する
      $profile->delete();
      return redirect('admin/profile/');
  }
}
