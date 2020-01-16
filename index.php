<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>匿名質問BOXくん</title>
</head>
<body>
    <form action="write.php" method="post">
    <h1>匿名質問BOXくん</h1>
    <p>授業お疲れ様でした！質問を一人一つ以上してください！</p>
    <p>次回の講座のなかで講師から質問に対して回答します！</p>
    <p>こちらの質問BOXは匿名ですので、恥ずかしがらずに！</p>
    タイトル：<input type="text" name="title">
    質問内容：<input type="" name="content">
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

