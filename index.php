<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="askbox.css">
    <!-- ファビコン -->
    <link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <title>質問BOX</title>
</head>
<body>
    <div class="head">
        <form action="write.php" method="post">
        <h1 class="header">質問BOX</h1>
        <p class="p">『1人1つ以上の質問や疑問を投稿してね！』</p>
        <p class="p">題名<br><input type="text" name="title" placeholder="題名" rows="16" ><br>
        <p class="p">質問内容<br><textarea type="text" name="content" rows="8" cols="40" placeholder="質問内容や感じた疑問"></textarea><br>
        <input type="submit" value="送信" class="submit">
        </form>   
    </div>
<!-- 読み取り / 表示-->
<div class="p">
<h1 class="header">みんなの聞いてる質問</h1>
<?php
$file = fopen('data.txt','r');
flock($file, LOCK_EX);
if($file){
    while($line = fgets($file)){
        echo"<p>".$line."</p>";
    }
}
flock($file, LOCK_UN);
fclose($file);
?>
</div>
</body>
</html>

