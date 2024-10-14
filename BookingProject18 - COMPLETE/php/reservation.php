<?php

include("cone_db_reservation.php");

if (!empty($_POST["reservation__btn"])) {
    if (empty($_POST["re_names"]) or empty ($_POST["re_lastnames"]) or empty($_POST["re_email"]) or empty ($_POST["re_cel"]) or empty ($_POST["re_date"]) or empty($_POST["re_time"]) or empty ($_POST["re_service"])) {
    } else {
        $re_names = $_POST["re_names"];
        $re_lastnames = $_POST["re_lastnames"];
        $re_email = $_POST["re_email"];
        $re_cel = $_POST["re_cel"];
        $re_date = $_POST["re_date"];
        $re_time = $_POST["re_time"];
        $re_service = $_POST["re_service"];

        $sql = $conec -> query ("insert into datos_reservas(re_names, re_lastnames, re_email, re_cel, re_date, re_time, re_service) values('$re_names', '$re_lastnames', '$re_email', '$re_cel', '$re_date', '$re_time', '$re_service') ");
    }
}

?>