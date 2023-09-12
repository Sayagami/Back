<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//Imprima por pantalla: “Hola mundo”.
echo "Hola Mundo" . "<br><br>";

//Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
$Saludo = "Hola Mundo";
echo "Un Saludo: $Saludo <br><br>";

//Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.
$a = 12;
$b = 29;
$resultado = $a + $b ;
echo "La suma de $a y $b es de:  $resultado  <br><br>"; // Suma
$resultado = $a - $b ;
echo "La resta de $a y $b es de:  $resultado  <br><br>"; // Resta
$resultado = $a * $b ;
echo "La Multiplicacion de $a y $b es de:  $resultado  <br><br>"; // Multiplicacion
$resultado = $a / $b ;
echo "La divicion  de $a y $b es de:  $resultado  <br><br>"; // Divicion
$resultado = $a ** $b ;
echo "El resto de una divicion entre $a y $b es de:  $resultado  <br><br>"; // Resto de divicion entera

//Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.
$celcios = 20;
$Fahrenheit = ($celcios * 9 / 5) + 30;
echo " Grados Fahrenheit es de  $Fahrenheit <br><br>";

// Implementar algoritmos que permitan:
// Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm
$base = 18;
$altura = 12;
$perimetro = $base * $altura;
echo "El Perimetro es de : $perimetro <br><br>";

// Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.
$radio = 30;
$perimetro = 2 * M_PI * $radio;
$area = M_PI * pow($radio, 2);
echo "El Radio es de: $radio cm <br><br>";
echo "El perimetro es: $perimetro  <br> <br>";
echo "El Area es de : $area ";



?>
</body>
</html>