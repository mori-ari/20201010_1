<?php

$time = date("Y-m-d H:i:s");
$name =$_POST['name'];
$title =$_POST['title'];
$discription =$_POST['discription'];
$img_name =$_FILES['img']['name'];

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

// ファイルを開く
$file = fopen('./data/data.txt', 'a');

// ファイルに書き込み
fwrite($file, h($time).","); // \nで改行。これはシングルクォーテーションでは動かない
fwrite($file, h($name).","); 
fwrite($file, h($title).",");
fwrite($file, h($discription).",");
fwrite($file, h($img_name)."\n");
//画像を保存
move_uploaded_file($_FILES['img']['tmp_name'], './upload/' . $img_name);

// ファイルを閉じる
fclose($file);


?>

<html>

<head>
    <meta charset="utf-8">
    <title>データ登録</title>
</head>

<body>

    <h1>ご登録ありがとうございました</h1>
    <ul>
        <li><a href="post.php">戻る</a></li>
        <li><a href="read.php">結果</a></li>
    </ul>

</body>

</html>
