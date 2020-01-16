<?php
$file = fopen('data.txt','r');
flock($file, LOCL_EX);
if($file){
    while($line = fgets($file)){
        echo"<p>".$line."</p>";
    }
}
flock($file, LOCK_UN);
fclose($file);
?>