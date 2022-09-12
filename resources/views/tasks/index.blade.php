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

<h1>タスク一覧画面</h1>
    
<div class="container">
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
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">詳細</a>
                <a href="">編集</a>
                <a href="">削除</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>