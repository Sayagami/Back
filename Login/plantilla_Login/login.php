<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

$ckuser = "admin";
$ckpass = 1234;

if ($user==$ckuser && $pass==$ckpass) {
    echo "dale padreee";
    header("location:./img/messi bien.jpg");
}else{
    echo "incorrecto";
    header ("location:./img/messi enojado.jpg" );
}
?>
