<?php
$page = 3;
$a = -12;
$b = -12;
if (($a >= 0) and ($b >= 0)){
    $text = $a + $b;
}elseif (($a < 0) or ($b < 0)){
    if ($a < $b){
        $text = $b - $a;
    }else{
        $text = $a - $b;
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="menu">
    <a href="1.php">1.рнр</a>
    <a href="2.php">2.рнр</a>
    <a href="3.php">3.рнр</a>
</div>
<div class="answer">
    <p>Числa: <? echo 'a = ', $a, ' ,b = ', $b?></p>
    <p>Ответ: <? echo $text ?> </p>
</div>
</body>
</html>
