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

<h3> Realice un programa que, con base en una calificación proporcionada (0-10), indique con letra la calificación que le corresponde: • 10 es “A” • 9 es “B” • 8 es “C” • 7 y 6 son “D” • 5 a 0 son “F”</h3>
Calificacion = {{$c=5}} <br> 
@if($c==10 )
La calificacion es una A
@elseif($c==9)
La calificacion es una B
@elseif ($c===8 )
La calificacion es una C
@elseif ($c===7 or $c===6)
La calificacion es una D 
@else
La calificacion es una F
@endif

</body>
</html>