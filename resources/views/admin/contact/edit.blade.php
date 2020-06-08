@extends('layouts.profile')
@section('title', 'お問い合わせ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>本文</h2>
                <form action="{{ action('Admin\ContactController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">お名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $contact_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="mail" value="{{ $contact_form->mail }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">題名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $contact_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メッセージ本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $contact_form->body }}</textarea>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection