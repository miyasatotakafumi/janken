<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $title = $_POST["title"];
    $content = $_POST["content"];
    ?>
    <p>タイトル：<?= htmlspecialchars($title, ENT_QUOTES);?></P>
    <p>内容：<?= htmlspecialchars($content, ENT_QUOTES);?></p>

    

</body>
</html>