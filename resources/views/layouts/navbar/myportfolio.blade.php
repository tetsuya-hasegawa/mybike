@extends('layouts.front')
@section('title', 'ポートフォリオ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ポートフォリオ機能紹介</h2>
                <br>
                 
                <div class="title">
                   <strong>ポートフォリオ</strong>
                </div>
                <div>
                このポートフォリオ(ブログ)では、以下に挙げる機能を実装しています。
                </div>
                <br><br><br>
                <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; background-color: honeydew ;">
                <div><strong><font size="4" color="blue">【CRUD処理】</font></font>
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
            　　<div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; background-color: honeydew ;">
            　　<div><strong><font size="4" color="blue">【データベースについて】</strong></font>
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
                <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; background-color: honeydew ;">
                <div><strong><font size="4" color="blue">【お問い合わせ機能】</strong></font>
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
                <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; background-color: honeydew ;">
                <div><strong><font size="4" color="blue">【ナビゲーションバー】</strong></font>
                <ul>
            　　    
            　　<li><strong>TOP画面上にナビゲーションバーを設置</strong></strong></li>
            　　<li><strong>ナビゲーションバーにプロフィールを表示</strong></li>
            　　<li><strong>ナビゲーションバーにポートフォリオ内容を表示</strong></li>
            　　<li><strong>今までのプログラミング勉強の進捗について記述</strong></li>
            　　</ul>
                </div> 
                </div> 
                 <br><br><br><br>
                 <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; background-color: honeydew ;">
                <div><strong><font size="4" color="blue">【スキルセットについて】</strong></font>
                <ul>
            　　    
            　　<li><strong>環境;&emsp;Cloud9</strong></li>
            　　<li><strong>言語;&emsp;HTML、CSS、PHP 7.3.11</strong></li>
            　　<li><strong>フレームワーク;&emsp;Laravel 5.8.38</strong></li>
            　　<li><strong>ツール;&emsp;GitHub、Laravel Mix、AWS S3</strong></li>
            　　<li><strong>OS;&emsp;Linux、Mac</strong></li>
            　　
            　　</ul>
                </div>  
                </div>
                <br><br>
                 特にセッション【クライアント=サーバー間の接続を維持する仕組み】を使ったお問い合わせ機能に苦労しました。
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
