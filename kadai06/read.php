<?php

// ファイルを開く
$openFile = fopen('data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)) {
    $strs[] = $str;

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>アンケート結果</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>ビール　アンケート結果</h1>

        <table border='1'>
            <tr>
                <th>time</th>
                <th>name</th>
                <th>email</th>
                <th>likes</th>
                <th>aroma</th>
            </tr>

<?php
foreach($strs as $str){
?>
    <tr>
      <td><?php echo $str['time']; ?></td>
      <td><?php echo $str['name']; ?></td>
      <td><?php echo $str['email']; ?></td>
      <td><?php echo $str['likes']; ?></td>
      <td><?php echo $str['aroma']; ?></td>
    </tr>

    <?php
    }
    ?>

    //$time . $name . $email . $likes . $aroma 
// ファイルを閉じる
<?php
fclose($openFile);

?>
        </table>
    </body>
  </html>