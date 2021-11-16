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

<h3>Realice un programa para determinar el sueldo semanal de un trabajador con base en las horas trabajadas y el pago por hora, considerando que después de las 40 horas cada hora se considera como excedente y se paga el doble.</h3>
Horas de trabajo = {{$h=55}} <br> 
Sueldo por hora = {{$hn=260}} <br>

@if($h<40)
El pago es de {{$r=$h*$hn}}
@else
El pago es de {{$r=($h-40)*(2*$hn)+(40*$hn)}}
@endif
</body>
</html>