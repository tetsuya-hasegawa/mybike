@extends('layouts.front')
@section('title', 'バイク記事')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>バイク記事</h2>
                <br>
                <h3>タイトル</h3>   
                <div class="title">
                    {{ $profile_form->title }}
                </div>
                <div>{{ $profile_form->body }}</div>
                      
                    <br>  
                    
                    <div class="caption mx-auto">
                         <img src="{{ $profile_form->image_path }}" width="100%" height="100%">
                    </div>
                    
                    <br>
                    
                    <div class="col-md-4">
                     <a href="{{ action('ProfileController@index') }}" role="button" class="btn btn-primary">トップページへ戻る</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
