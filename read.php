<html>

<head>
    <meta charset="utf-8">
    <title>データ登録</title>
</head>

<body>
<table border="1">
<tr>
    <th>日付</th>
    <th>名前</th>
    <th>タイトル</th>
    <th>説明文</th>
    <th>画像</th>
</tr>

<?php
// ファイルを開く
$file = fopen('./data/data.txt','r');
// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    //第1=ターゲット⽂字, 第2=元の⽂字列
    $array = explode("," , $str);
    echo '<tr>';
    echo '<td>'.$array[0].'</td>';
    echo '<td>'.$array[1].'</td>';
    echo '<td>'.$array[2].'</td>';
    echo '<td>'.$array[3].'</td>';
    echo '<td><img width="100" src="./upload/'.$array[4].'"></td>';
    echo '</tr>';
}
// ファイルを閉じる
fclose($file);

?>
</table>

    <ul>
        <li><a href="post.php">戻る</a></li>
    </ul>

</body>

</html>