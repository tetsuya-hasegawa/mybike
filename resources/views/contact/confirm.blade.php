@extends('layouts.profile')
@section('title', 'お問い合わせ確認フォーム')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>以下の内容で送信してよろしいですか？</h2>
                <br>
                <h2>本文</h2>
                <form action="{{ action('ContactController@confirm') }}" method="post" enctype="multipart/form-data">
                    
        
                    <div class="form-group row">
                        <label class="col-md-2">お名前</label>
                        <div class="col-md-10">
                            {{ $contact_form['name']}}
                            <input type="hidden" class="form-control" name="name" value="{{ $contact_form['name'] }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            {{ $contact_form['mail']}}
                            <input type="hidden" class="form-control" name="mail" value="{{ $contact_form['mail'] }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">題名</label>
                        <div class="col-md-10">　
                       　　  {{$contact_form['title'] }}
                            <input type="hidden" class="form-control" name="title" value="{{ $contact_form['title'] }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メッセージ本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $contact_form['body'] }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                   <div class="col-md-4">
                   <a href="{{ action('ContactController@input') }}" role="button" class="btn btn-primary">修正</a>
                   <br>
                   <br>
                   <input type="submit" class="btn btn-primary" value="送信">
                   </div>
                </form>

            </div>
        </div>
    </div>
@endsection