@extends('layouts.index')


@section('title', 'タスク詳細')
@section('content')

<form class="form-inline" action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST" name="deleteForm">
    <a class="btn btn-outline-success mb-3" href="{{ route('tasks.edit', ['id' => $task->id]) }}" role="button">編集</a>
    @csrf
    <button type="submit" class="btn btn-danger mb-3">削除</button>
</form>
<table class="table">
    <tr>
        <th>ID</th>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <th>タスク</th>
        <td>{{ $task->name }}</td>
    </tr>
    <tr>
        <th>タスク内容</th>
        <td>{{ $task->content }}</td>
    </tr>
    <tr>
        <th>作成日時</th>
        <td>{{ $task->created_at->format('Y年m月d日 H:i') }}</td>
    </tr>
    <tr>
        <th>更新日時</th>
        <td>{{ $task->updated_at->format('Y年m月d日 H:i') }}</td>
    </tr>
</table>
<div class="link">
    <div class="link__back">
        <a class="btn btn-primary mb-3" href="/" role="button">戻る</a>
    </div>
</div>
@endsection