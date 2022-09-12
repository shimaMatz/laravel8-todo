@extends('layouts.index')


@section('title', 'タスク一覧')
@section('content')

<div class="task__add">
    <a class="btn btn-primary mb-3" href="{{ route('tasks.add') }}" role="button">＋タスクを追加する</a>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th class="text-center">タスク</th>
            <th class="text-center">アクション</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task) 
        <tr>
            <td class="text-center">{{ $task->name }}</td>
            <td class="text-center">
            <form class="form-inline" action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST" name="deleteForm">
            <a class="btn btn-outline-primary mb-3" href="{{ route('tasks.show', ['id' => $task->id]) }}" role="button">詳細</a>
            <a class="btn btn-outline-primary mb-3" href="{{ route('tasks.edit', ['id' => $task->id]) }}" role="button">編集</a>
            
            @csrf
                <button type="submit" class="btn btn-danger mb-3">削除</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection