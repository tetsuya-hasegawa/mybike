@extends('layouts.profile')
@section('title', 'お問い合わせ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>本文</h2>
               
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
                     {{ csrf_field() }}
                    <div class="col-md-4">
                    <a href="{{ action('Admin\ContactController@index') }}" role="button" class="btn btn-primary">戻る</a>
                    </div>  
                    
                   {{-- 以下を追記　--}}
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($contact_form->histories != NULL)
                                @foreach ($contact_form->histories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div> 
                    
            </div>
        </div>
    </div>
@endsection