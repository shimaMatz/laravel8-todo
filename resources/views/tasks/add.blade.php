<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>タスク追加画面</title>
</head>

<style>
    h1 {
        text-align: center;
        padding: 30px;
    }
    .form {
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }
    .form-group {
        padding-bottom: 50px;
    }
    span {
        color: red;
    }
    input {
        width: 60%;
        height: 30px;
    }
    textarea {
        width: 60%;
    }
</style>

<body>

<h1>タスク追加</h1>

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
    <button type="submit" class="btn btn-primary mb-3">追加する</button>
</form>

</body>
</html>