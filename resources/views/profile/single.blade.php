@extends('layouts.front')
@section('title', 'バイク記事')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>バイク記事</h2>
                   
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $profile_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $profile_form->body }}</textarea>
                        </div>
                    </div>
                    
                    <div class="caption mx-auto">
                         <img src="{{ $profile_form->image_path }}" width="100%" height="100%">
                    </div>
                    <br>
                    
                    {{ csrf_field() }}
                    <div class="col-md-4">
                     <a href="{{ action('ProfileController@index') }}" role="button" class="btn btn-primary">トップページへ戻る</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
