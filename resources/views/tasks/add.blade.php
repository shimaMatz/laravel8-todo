@extends('layouts.index')


@section('title', 'タスク追加')
@section('content')

<div class="error">
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
</div>

<form action="{{ route('tasks.store') }}" method="POST" class="form">
@csrf
    <div class="form-group">
        <label for="name" class="form-label">タスク<span>(必須)</span></label><br>
        <input type="text" name="name" class="form-control" maxlength="30" placeholder="タスクは30文字で書きましょう。">
    </div>
    <div class="form-group">
        <label for="content" class="form-label">タスク内容<span>(必須)</span></label><br>
        <textarea name="content" class="form-control" id="content" rows="5" placeholder="タスク内容を具体的に書きましょう"></textarea>
    </div>
    <a class="btn btn-outline-primary mb-3" href="/" role="button">戻る</a>
    <button type="submit" class="btn btn-primary mb-3">追加する</button>
</form>

@endsection