<?php
//Mostrar los números del 1 al 100.
 $i = 0;

while ($i <= 100) {
    print "<p>$i<p>";
    $i++;
}
//Mostrar los números del 100 al 1
$i = 100;
while ($i >= 1) {
    print "<p>$i<p>";
    $i--;
}
//Mostrar los números pares del 1 al 100.
$i = 2;
for ($i=2; $i <=100 ; $i += 2) { 
    print "<p>$i<p>";

}

//Mostrar los números impares del 1 al 100.
$i = 1;

do {
    if ($i % 2 != 0) {
        print "<p>$i<p> ";
    }
    $i++;
} while ($i <= 100);

//Mostrar la suma de los números de 1 a 20.
$suma = 0;
$i = 1;

while ($i <= 20) {
    $suma += $i;
    $i++;
}
print "<p>$suma<p>";

//Mostrar la suma de números pares de 1 a 20.
$suma = 0;
$i = 2;

while ($i <= 20) {
    $suma += $i;
    $i += 2;
}

print "<p>$suma<p>";

?>