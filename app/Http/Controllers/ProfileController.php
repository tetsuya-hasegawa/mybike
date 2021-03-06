<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

// 追記
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // profile/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('profile.index', ['headline' => $headline, 'posts' => $posts]);
    }
    
    public function single(Request $request)
    {
      // Profile Modelからデータを取得する
      //これは実験コードです
      //$id = 1;
      //$profile = Profile::find($id);
        $profile = Profile::find($request->id);
        return view('profile.single',['profile_form' => $profile]);
    }
}