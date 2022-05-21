<?php
$name = $_POST['name'];
$email = $_POST['email'];
$likes = $_POST['likes'];
$aroma = $_POST['aroma'];

// 記入時間
$time = date('Y/m/d H:i:s');

// ファイルオープン
$file = fopen('data/data.txt', 'a');

// ファイルに書き込み
fwrite($file, $time . $name . $email . $likes . $aroma . "\n");

// ファイルに保存
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>ご回答ありがとうございました。</h1>
    <h2>確認はこちらから↓</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
