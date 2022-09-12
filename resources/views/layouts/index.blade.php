<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
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

<h1>@yield('title')</h1>
<div class="container">

@yield('content')


</div>
</body>
</html>