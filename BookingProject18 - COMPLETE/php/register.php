<?php

include("cone_db.php");

if (!empty($_POST["register_btn"])) {
    if (empty($_POST["name_reg"]) || empty($_POST["user_reg"]) || empty($_POST["email_reg"]) || empty($_POST["pass_reg"])) {
        echo "Por favor, complete todos los campos.";
    } else {
        $name = $_POST["name_reg"];
        $user = $_POST["user_reg"];
        $email = $_POST["email_reg"];
        $pass = $_POST["pass_reg"];

        // Asegúrate de que no haya inyecciones SQL
        $stmt = $cone->prepare("INSERT INTO datos_registro(name_reg, user_reg, email_reg, pass_reg) VALUES(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $user, $email, $pass);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Registro exitoso.";
        } else {
            echo "Error en el registro.";
        }
        $stmt->close();
    }
}

?>