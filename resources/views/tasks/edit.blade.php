@extends('layouts.index')


@section('title', 'タスク編集')
@section('content')

<div class="error">
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach
</div>

<form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST" class="form">
@csrf
    <div class="form-group">
        <label for="name" class="form-label">タスク<span>(必須)</span></label><br>
        <input type="text" name="name" class="form-control" maxlength="30" placeholder="タスクは30文字で書きましょう。" value="{{ old('name', $task->name) }}">
    </div>
    <div class="form-group">
        <label for="content">タスク内容<span>(必須)</span></label><br>
        <textarea rows="5" name="content" class="form-control" placeholder="タスク内容を具体的に書きましょう">{{ old('content', $task->content) }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-3">更新</button>
</form>

@endsection