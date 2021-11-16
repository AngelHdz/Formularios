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

<h3>Realice un programa para obtener la tabla de multiplicar de un entero K comenzando desde el 1.</h3>
El numero es = {{$s=7}} <br> 
@for($i=1; $i<10; $i++)
    {{$r=$s*$i}}
    <br>
    @endfor
</body>
</html>