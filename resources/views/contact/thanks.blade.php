@extends('layouts.profile')
@section('title', '送信完了フォーム')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>メッセージ送信完了</h2>
                <br>
                <h2>本文</h2>
               
                    <div class="form-group row">
                        <label class="col-md-2">メッセージ本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ "送信完了しました。" }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="col-md-4">
                     <a href="{{ action('ProfileController@index') }}" role="button" class="btn btn-primary">トップページへ戻る</a></a>
                   </div>
            </div>
        </div>
    </div>
@endsection