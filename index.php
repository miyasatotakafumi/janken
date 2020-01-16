<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASKBOX</title>
</head>
<body>
    <form action="write.php" method="post">
    <h1>ASKBOX</h1>
    <p>授業お疲れ様でした！授業が終了したら、今日感じた疑問や質問を一人一つ以上してください！次回の講座のなかで講師から質問に対して回答します！こちらの質問BOXは匿名です！</p>
    タイトル：<input type="text" name="title"><br>
    質問内容：<textarea type="text" name="content" rows="4" cols="40"></textarea>
    <input type="submit" value="送信">
    </form>   

<!-- 読み取り -->
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


</body>
</html>

