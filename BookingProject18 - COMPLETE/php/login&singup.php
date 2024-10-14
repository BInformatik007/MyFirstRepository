<?php
include("login.php");
include("register.php");
include("cone_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../media/img/favicon.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/login&singup.css">
    <link rel="stylesheet" href="../css/font.css">
    <title>Barber's Den</title>
</head>
<body>
    <div class="wrapper">

<!-- --------------------HEADER SECTION START-------------------- -->

            <nav class="header__nav">

                <div class="nav__logo">
                    <h2>Barber's Den</h2>
                </div>
    
                <div class="nav__menu" id="navMenu">
                    <ul class="header__ul">
                        <li class="header__li"><a href="#" class="header__link">Home</a></li>
                        <li class="header__li"><a href="#" class="header__link">Blog</a></li>
                        <li class="header__li"><a href="#" class="header__link">Service</a></li>
                        <li class="header__li"><a href="#" class="header__link">About</a></li>
                    </ul>
                </div>
    
                <div class="nav__button">
                    <button class="btn white-btn" id="loginBtn" onclick="login()">Iniciar Sesión</button>
                    <button class="btn" id="registerBtn" onclick="register()">Registrarse</button>
                </div>
    
                <div class="nav__menu-btn">
                    <i class='bx bx-menu' onclick="myMenuFunction()"></i>
                </div>
    
            </nav>

<!-- --------------------HEADER SECTION END-------------------- -->

<!-- --------------------FORM SECTION START-------------------- -->

        <form method="POST" class="form__box">

<!-- --------------------LOGIN SECTION START-------------------- -->

            <div class="login__container" id="login">
                <div class="top">
                    <span>No tienes una cuenta? <a href="#" onclick="register()">Regístrate</a></span>
                    <header class="header__form">Iniciar Sesión</header>
                </div>

                <div class="input__box">
                    <input type="text" class="input__field" placeholder="Usuario" name="user_login">
                    <i class="bx bx-user"></i>
                </div>

                <div class="input__box">
                    <input type="password" class="input__field" placeholder="Contraseña" name="pass_login">
                    <i class="bx bx-lock-alt"></i>
                </div>

                <div class="input__box">
                    <input type="submit" class="submit" value="Iniciar Sesión" name="login_btn" onclick="log()">
                </div>
                
            </div>

<!-- --------------------LOGIN SECTION END-------------------- -->

<!-- --------------------REGISTRATION SECTION START-------------------- -->

            <div class="register__container" id="register">
                <div class="top">
                    <span>Ya tienes una cuenta? <a href="#" onclick="login()">Inicia Sesión</a></span>
                    <header class="header__form">Registrarse</header>
                </div>
                <div class="two__forms">

                    <div class="input__box">
                        <input type="text" class="input__field" placeholder="Nombre" name="name_reg">
                        <i class="bx bx-user"></i>
                    </div>

                    <div class="input__box">
                        <input type="text" class="input__field" placeholder="Usuario" name="user_reg">
                        <i class="bx bx-user"></i>
                    </div>

                </div>

                <div class="input__box">
                    <input type="email" class="input__field" placeholder="Correo electrónico" name="email_reg">
                    <i class="bx bx-envelope"></i>
                </div>

                <div class="input__box">
                    <input type="password" class="input__field" placeholder="Contraseña" name="pass_reg">
                    <i class="bx bx-lock-alt"></i>
                </div>

                <div class="input__box">
                    <input type="submit" class="submit" value="Registrar" name="register_btn" onclick="reg()">
                </div>
                
            </div>

<!-- --------------------REGISTRATION SECTION END-------------------- -->

        </form>

<!-- --------------------FORM SECTION END-------------------- -->

    </div>
</body>
<script src="../js/login&singup.js"></script>
</html>