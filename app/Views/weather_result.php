<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeIgniter4 天気結果</title>
</head>
<body>
    <h1><?= esc($weather['name']) ?>の天気</h1>
    <p>気温：<?= esc($weather['main']['temp']) ?>℃</p>
    <p>天気：<?= esc($weather['weather'][0]['description']) ?></p>
    <p>湿度：<?= esc($weather['main']['humidity']) ?>％</p>
    <p>風速：<?= esc($weather['wind']['speed']) ?>m/s</p>
    <a href="/weather">他の都市を確認</a>
</body>
</html>