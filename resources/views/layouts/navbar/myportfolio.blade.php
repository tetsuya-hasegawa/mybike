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
                <div><strong><font color="red">【CRUD処理】</strong></font>
                <ul>
            　　    
            　　<li><strong>記事投稿</strong></strong></li>
            　　<li><strong>記事編集</strong></li>
            　　<li><strong>記事削除</strong></li>
            　　<li><strong>画像投稿</strong></li>
            　　<li><strong>記事一覧表示</strong></li>
            　　</ul>
            　　</div>
            　　
            　　<div><strong><font color="red">【データベースについて】</strong></font>
                <ul>
            　　    
            　　<li><strong>migrationファイルの作成</strong></strong></li>
            　　<li><strong>モデルファイルの作成</strong></li>
            　　<li><strong>varidationをモデルファイルに記述</strong></li>
            　　<li><strong>投稿記事をデータベースに入力</strong></li>
            　　<li><strong>データベースのリレーション</strong></li>
            　　</ul>
                </div>
                
                <div><strong><font color="red">【お問い合わせ機能】</strong></font>
                <ul>
            　　    
            　　<li><strong>TOP画面にお問い合わせボタンの設置</strong></strong></li>
            　　<li><strong>お問い合わせ入力</strong></li>
            　　<li><strong>確認画面</strong></li>
            　　<li><strong>session機能を使ってお問い合わせ内容を修正</strong></li>
            　　<li><strong>送信</strong></li>
            　　<li><strong>Admin側でお問い合わせ内容を一覧で表示</strong></li>
            　　</ul>
                </div>
                      
                <div><strong><font color="red">【ナビゲーションバー】</strong></font>
                <ul>
            　　    
            　　<li><strong>TOP画面上にナビゲーションバーを設置</strong></strong></li>
            　　<li><strong>ナビゲーションバーにプロフィールを表示</strong></li>
            　　<li><strong>ナビゲーションバーにポートフォリオ内容を表示</strong></li>
            　　<li><strong>このアプリの簡単な説明を表示</strong></li>
            　　</ul>
                </div>   
                   
                 
                <div><strong><font color="red">【使っている環境、ソフトについて】</strong></font>
                <ul>
            　　    
            　　<li><strong>cloud9</strong></strong></li>
            　　<li><strong>github</strong></li>
            　　<li><strong>aws-s3で画像保存</strong></li>
            　　</ul>
                </div>   
                
                
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
