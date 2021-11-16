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

$array = array (1,5,5,8,2,9);
$ap=0;
$rp=0;
for($i=0;$i<6;$i++){     
    if($array[$i]>=6){
        $ap=$ap+1;
    }else{
        $rp=$rp+1;
    }}
echo $rp;
echo "&nbsp; Reprobados<br>";
echo "      ";
echo $ap;
echo "&nbsp;Aprobados";

?> 
</body>
</html>