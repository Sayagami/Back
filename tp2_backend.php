<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$n = 4;

//Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
if ($n>1 && $n<10) {
    echo "es mayor 1";
}else{
    echo "es menor 10";
}
echo "<br>";
echo "<br>";

//Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
$num = 11;
if ($num>10 || $num<2) {
    echo "es mayor a 10";
}else {
    echo "es menor a 2";
}
echo "<br>";
echo "<br>";
/* Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”. */
$numero1 = 7;
$numero2 = 7;

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    
    echo "La suma de $numero1 + $numero2 es: $suma";
    echo "<br>";
    echo "La resta de $numero1 - $numero2 es: $resta";
    echo "<br>";
} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $division = $numero2/ $numero1;
    $restoDivision = $numero2 % $numero1;

    echo "La multiplicación de $numero1 * $numero2 es: $multiplicacion";
    echo "<br>";
    echo "La división entera de $numero2 / $numero1 es: $division";
    echo "<br>";
    echo "El resto de la división de $numero2 % $numero1 es: $restoDivision";
} else {
    echo "Los números ingresados son iguales";
}

?>
</body>
</html>