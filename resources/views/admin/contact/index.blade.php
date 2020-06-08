@extends('layouts.profile')
@section('title', 'お問い合わせ一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>メール一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\ContactController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value={{ $cond_name }}>
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">名前</th>
                                <th width="20%">メール</th>
                                <th width="20%">タイトル</th>
                                <th width="30%">コメント</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $contact)
                                <tr>
                                    <th>{{ $contact->id }}</th>
                                    <td>{{ \Str::limit($contact->name, 100) }}</td>
                                    <td>{{ \Str::limit($contact->mail, 20) }}</td>
                                    <td>{{ \Str::limit($contact->title, 100) }}</td>
                                    <td>{{ \Str::limit($contact->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ContactController@edit', ['id' => $contact->id]) }}">表示</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\ContactController@delete', ['id' => $contact->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection