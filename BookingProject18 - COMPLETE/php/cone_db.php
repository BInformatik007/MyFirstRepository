<?php

$cone = mysqli_connect("localhost", "root", "", "registro");

if (!$cone) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
