@extends('layouts.front')
@section('title', 'このブログについて')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>haseのブログについて</h2>
                <br>
                 
                <div class="title">
                   オススメバイク
                </div>
                <div>このブログは私の独断と偏見によりオススメのバイクを紹介しています。</div>
                      
                    
                    <br>
                    
                    <div class="col-md-4">
                     <a href="{{ action('ProfileController@index') }}" role="button" class="btn btn-primary">トップページへ戻る</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
