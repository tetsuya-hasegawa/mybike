@extends('layouts.front')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>haseのブログへようこそ</h2>
                <br>
                 
                <div class="title">
                   プロフィール
                </div>
                <div>こんにちは。管理人のhaseです。<br>
                当ブログを見てくださりありがとうございます♪( ´θ｀)ノ
                </div><br>
                <div>
                このブログは私の独断と偏見を元に私の好きなバイクを紹介していくブログです。
                </div><br>
                なので普通のバイクではなく、
            　　<br>
            　　<ul>
            　　    
            　　<li><strong>圧倒的スペック</strong></li>
            　　<li><strong>見た目がカッコいい</strong></li>
            　　<li><strong>あり得ない技術を駆使したバイク</strong></li>
            　　<li><strong>ほぼレーシングマシンのようなバイク</strong></li>
            　　
            　　</ul>
            　　こういったバイクを紹介していきます。
                      
                <div style="line-height: 2em">
                最後までお付き合いくださいね♪
                </div>
                    <br>
                    
                    <div class="col-md-4">
                     <a href="{{ action('ProfileController@index') }}" role="button" class="btn btn-primary">トップページへ戻る</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
