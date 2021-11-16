<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$t=55;
$hn=260;
$he=$hn*2;
$r=0;
if($t<=40){
    $r=$t*$hn;
    echo $r;}
else {
    $e=$t-40;
    $r=($e*$he)+40*$hn;
    echo $r;
}
?>
</body>
</html>