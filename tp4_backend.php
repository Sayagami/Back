<?php
//Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
$numero_par = [];

for ($i = 2; $i <= 20; $i += 2) {
    $numero_par[] = $i;
}
foreach ($numero_par as $numero) {
    print $numero . "<br>";
}

//. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
//matriz. Mostrar el esquema del array con print_r().
$datos_del_usuario = ["Pedro", "Ana", 34, 1];
echo"<br>";
print_r($datos_del_usuario);

//Crear un array asociativo e introducir los siguientes valores:Nombre: Pedro Apellido: Torres Dirección: Av. Mayor 3703 Teléfono: 1122334455

$datos = [
          "Nombre"=> "Pedro",
          "Apellido"=> "Torres",
          "Dirección"=> "Av. Mayor 3703",
          "Teléfono"=> 1122334455
];

//Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
echo"<br>";
foreach ($ciudades as $indice => $ciudad){
print("<br>La ciudad con el indice $indice tiene el nombre $ciudad");
}
//Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. Ejemplo: El índice de Madrid es MD.
$ciudades_initial = [
                    "MD"=>"Madrid",
                    "BCL"=>"Barcelona",
                    "LD"=>"Londres",
                    "NY"=>"New York",
                    "LA"=>"Los Angeles",
                    "CCG"=>"Chicago"
];
echo"<br>";
foreach($ciudades_initial as $indice => $ciudad ){
    print "<br> El índice de $ciudad es $indice";
}
?>

