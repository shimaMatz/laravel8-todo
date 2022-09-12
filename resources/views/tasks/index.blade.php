<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>タスク一覧画面</title>
</head>
<body>

<style>
    .form {
        display: none;
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }
    .form-group {
        padding-bottom: 50px;
    }
</style>

<h1>タスク一覧画面</h1>
    
<div class="container">
    <div class="task__add">
        <a href="{{ route('tasks.add') }}">＋タスクを追加する</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>タスク</th>
                <th>アクション</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task) 
            <tr>
                <td>{{ $task->name }}</td>
                <td>
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
</div>

</body>
</html>