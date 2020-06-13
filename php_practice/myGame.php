<?php
require_once('Soccer.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クラスを利用する</title>
</head>
<body>
<pre>
    <?php
    $player1 = new Soccer('シンジ');
    $player1->who();
    $player1->play();
    ?>
    <?php
    $player2 = new Soccer("ツバサ");
    echo "{$player2}";
    ?>
</pre>
</body>
</html>