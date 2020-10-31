<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>めしナビ - 一覧画面</title>
</head>
<body>
    <ul>
        @foreach ($restaurants as $restaurant)
            <li>
                <a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->name }}</a>
            </li>
        @endforeach
    </ul>    
</body>
</html>
