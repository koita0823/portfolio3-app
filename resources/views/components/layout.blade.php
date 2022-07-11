<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, 
            maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>感情記録アプリ</title>
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">  
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script src="{{ mix('/js/app.js') }}"></script>
    </head>
    <body>{{ $slot }}</body>
</html>    