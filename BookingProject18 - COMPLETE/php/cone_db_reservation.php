<?php

$conec = mysqli_connect("localhost", "root", "", "reserva");

if (!$conec) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>