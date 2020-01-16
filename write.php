<link rel="stylesheet" type="text/css" href="askbox.css">
<div class="p">
<?php
    $title = $_POST["title"];
    $content = $_POST["content"];
    ?>

    <p>タイトル：<?= htmlspecialchars($title, ENT_QUOTES);?></P>
    <p>内容：<?= htmlspecialchars($content, ENT_QUOTES);?></p>
    <p ><a href="index.php" class="p" >戻る</p>

<?php
$str = date("Y/m/d")."<br />".$title."<br />".$content."<br />";
$file = fopen("data.txt","a");
flock($file, LOCK_EX);
fwrite($file,$str."\n");
flock($file, LOCK_UN);
fclose($file);
?>

</div>