<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeIgniter4 天気情報</title>
</head>
<body>
    <h1>codeIgniter4 天気情報</h1>
    <form action="/weather/getWeather" method="post">
        <?= csrf_field() ?>
        <label for="city">都市名を入力してください</label>
        <input type="text" name="city" id="city" required>
        <button type="submit">天気を取得</button>
    </form>
    <?php if (isset($error)) : ?>
        <p style="color:red;"><?= esc($error) ?></p>
    <?php endif; ?>
</body>
</html>