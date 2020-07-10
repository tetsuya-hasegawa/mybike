@extends('layouts.front')
@section('title', 'ポートフォリオ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>haseのポートフォリオ詳細</h2>
                <br>
                 
                <div class="title">
                   ポートフォリオ
                </div>
                <div>
                <strong>このポートフォリオでは、以下に挙げる機能を実装しています。</strong>
                </div>
                <br><br><br>
                <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
                <div><strong><font color="red">【CRUD処理】</strong></font>
                <ul>
            　　 
            　　<li><strong>ログイン認証</strong></strong></li>    
            　　<li><strong>記事投稿</strong></strong></li>
            　　<li><strong>記事編集</strong></li>
            　　<li><strong>記事削除</strong></li>
            　　<li><strong>画像投稿</strong></li>
            　　<li><strong>記事一覧表示</strong></li>
            　　</ul>
            　　</div>
            　　</div>
            　　<br><br><br>
            　　<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
            　　<div><strong><font color="red">【データベースについて】</strong></font>
                <ul>
            　　    
            　　<li><strong>migrationファイルの作成</strong></strong></li>
            　　<li><strong>モデルファイルの作成</strong></li>
            　　<li><strong>varidationをモデルファイルに記述</strong></li>
            　　<li><strong>データベースを使って投稿記事を保存</strong></li>
            　　<li><strong>投稿履歴をデータベースのリレーションを使って表示</strong></li>
            　　</ul>
                </div>
                </div> 
                <br><br><br>
                <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
                <div><strong><font color="red">【お問い合わせ機能】</strong></font>
                <ul>
            　　    
            　　<li><strong>TOP画面にお問い合わせボタンの設置</strong></strong></li>
            　　<li><strong>ユーザーの入力機能</strong></li>
            　　<li><strong>入力確認画面</strong></li>
            　　<li><strong>session機能を使ってお問い合わせ内容を修正</strong></li>
            　　<li><strong>送信機能</strong></li>
            　　<li><strong>Admin側でお問い合わせ内容を一覧で表示</strong></li>
            　　</ul>
                </div>
                </div> 
                <br><br><br>  
                <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
                <div><strong><font color="red">【ナビゲーションバー】</strong></font>
                <ul>
            　　    
            　　<li><strong>TOP画面上にナビゲーションバーを設置</strong></strong></li>
            　　<li><strong>ナビゲーションバーにプロフィールを表示</strong></li>
            　　<li><strong>ナビゲーションバーにポートフォリオ内容を表示</strong></li>
            　　<li><strong>今までのプログラミング勉強の進捗について記述</strong></li>
            　　</ul>
                </div> 
                </div> 
                 <br><br><br><br>
                 <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
                <div><strong><font color="red">【スキルセットについて】</strong></font>
                <ul>
            　　    
            　　<li><strong>環境</strong>--Cloud9</li>
            　　<li><strong>言語</strong></strong>--HTML、CSS、PHP</li>
            　　<li><strong>フレームワーク</strong>--Laravel</li>
            　　<li><strong>ツール</strong>--GitHub、Laravel Mix,AWS S3</li>
            　　<li><strong>OS</strong>--Linux,Mac</li>
            　　
            　　</ul>
                </div>  
                </div>
                <br><br><br><br>
                 これらの機能で特に私が自分で考えて実装した機能が
                 <ul>
                 <li><strong>TOP画面から個別記事に飛ぶ機能<strong></li>
                 <li><strong>お問い合わせ【CROUD処理】<strong></li>
                 <li><strong>ナビゲーションバー<strong></li>
                 <li><strong>データベースのセッション機能<strong></li>
                 </ul>
                 このようになります。
                <br><br><br><br>
                    <br>
                    <div style="line-height: 2em">
                    <div class="col-md-4">
                     <a href="{{ action('ProfileController@index') }}" role="button" class="btn btn-primary">トップページへ戻る</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
