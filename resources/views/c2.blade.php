<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <html>
<body>

<h3> Realice un programa para leer las calificaciones de N alumnos y determine el número de aprobados y reprobados.</h3>
{{$ap=null}}
{{$rp=null}}
Las calificaciones son
@for($i=0;$i<6;$i++)
<?php
$array = array (1,5,5,8,2,9);
    if($array[$i]>=6){
        $ap=$ap+1;
    }else{
        $rp=$rp+1;}
        echo $array[$i];
        echo '  '
?>
@endfor<br>
El total de alumnos aprobados {{$ap}} <br>
El total de alumnos reprobados {{$rp}}
</body>
</html>