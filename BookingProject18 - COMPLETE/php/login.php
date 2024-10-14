<?php

include("cone_db.php");

if (!empty($_POST["login_btn"])) {
    if (empty($_POST["user_login"]) || empty($_POST["pass_login"])) {
        echo "Por favor, complete todos los campos.";
    } else {
        $user = $_POST["user_login"];
        $pass = $_POST["pass_login"];

        $stmt = $cone->prepare("SELECT * FROM datos_registro WHERE user_reg = ? AND pass_reg = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($datos = $result->fetch_object()) {
            header("location:../html/index.html");
            exit();
        } else {
            echo "Credenciales incorrectas.";
        }
        $stmt->close();
    }
}

?>