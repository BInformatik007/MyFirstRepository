<?php
include("reservation.php");
include("cone_db_reservation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../media/img/favicon.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/reserva.css">
    <link rel="stylesheet" href="../css/font.css">
    <title>Barber's Den</title>
</head>
<body>
    <!-- --------------------HEADER SECTION START-------------------- -->
        
    <nav class="header__nav">
        <div class="nav__logo">
            <h2>Barber's Den</h2>
        </div>

        <div class="nav__menu" id="navMenu">
            <ul class="header__ul">
                <li class="header__li"><a href="../html/index.html" class="header__link">Inicio</a></li>
                <li class="header__li"><a href="../php/reserva.php" class="header__link reserva">Reservas</a></li>
                <li class="header__li"><a href="../php/agenda.php" class="header__link">Agenda</a></li>
                <li class="header__li"><a href="#footer" class="header__link">Contacto</a></li>
            </ul>
        </div>

        <div class="nav__button">
            <a href="../php/login&singup.php"><button class="btn" id="loginBtn">Iniciar Sesión</button></a>
            <a href="../php/login&singup.php"><button class="btn" id="registerBtn">Registrarse</button></a>
        </div>

        <div class="nav__menu-btn">
            <i class='bx bx-menu' onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!-- --------------------HEADER SECTION END-------------------- -->

<!-- --------------------RESERVATION SECTION START-------------------- -->

    <div class="reservation__container">
        <div class="reservation__section">
            <form method="POST" class="reservation__form" id="reservation__form">
                <h3 class="reservation__h3">Realiza tu reserva</h3>

                <div class="fieldset__container">
                <fieldset class="reservation__fieldset">
                    <legend class="reservation__legend">Información del Cliente</legend>
                    <div class="reservation__inputbox">
                        <input type="text" placeholder="Nombres" class="reservation__input" name="re_names" required>
                    </div>

                    <div class="reservation__inputbox">
                        <input type="text" placeholder="Apellidos" class="reservation__input" name="re_lastnames" required>
                    </div>

                    <div class="reservation__inputbox">
                        <input type="email" placeholder="Correo electrónico" class="reservation__input" name="re_email" required>
                    </div>

                    <div class="reservation__inputbox">
                        <input type="tel" placeholder="Número celular" class="reservation__input" name="re_cel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="000-000-0000" required>
                    </div>
                </fieldset>

                <fieldset class="reservation__fieldset">
                    <legend class="reservation__legend">Información de reserva</legend>
                    <div class="reservation__inputbox">
                        <input type="date" placeholder="Fecha de reservación" class="reservation__input" name="re_date" id="appointment-date" name="appointment-date" required>
                    </div>

                    <div class="reservation__inputbox">
                        <input type="time" placeholder="Hora de reservación" class="reservation__input" name="re_time" id="appointment-time" name="appointment-time" min="08:00" max="22:00" required>
                        <p id="error-message" style="color:red;"></p>
                    </div>

                    <div class="reservation__inputbox">
                        <select class="reservation__datalist" name="re_service">
                            <option value="" class="reservation__options" disabled selected>Selecciona un servicio</option>
                            <hr>
                            <option value="Corte_de_Cabello" class="reservation__options">Corte de Cabello</option>
                            <option value="Arreglo_de_Barba" class="reservation__options">Arreglo de Barba</option>
                            <option value="Afeitado" class="reservation__options">Afeitado</option>
                            <option value="Tratamientos_Capilares" class="reservation__options">Tratamientos Capilares</option>
                            <option value="Tinte_de_Cabello_y_Barba" class="reservation__options">Tinte de Cabello y Barba</option>
                            <option value="Corte_para_Niños" class="reservation__options">Corte para Niños</option>
                            <option value="Cejas" class="reservation__options">Cejas</option>
                            <option value="Limpieza_Facial" class="reservation__options">Limpieza Facial</option>
                            <option value="Tratamientos_de_Keratina" class="reservation__options">Tratamientos de Keratina</option>
                        </select>
                    </div>
                </fieldset>
                </div>

                <div class="reservation__btn-container">
                    <input type="submit" value="Reservar" class="reservation__btn" name="reservation__btn" id="reservation__btn" onclick="reservation__btn()">
                </div>

            </form>
        </div>
    </div>

<!-- --------------------RESERVATION SECTION END-------------------- -->

<!-- --------------------FOOTER SECTION START-------------------- -->

<footer class="footer" id="footer">

<div class="footer__sections-container">
    <div class="footer__left footer-sections">
        <h3 class="footer__name">Barber's Ben</h3>
        
        <ul class="footer__ul">
            <li class="footer__li"><a href="../html/index.html">Inicio</a></li>
            <li class="footer__li"><a href="../php/reserva.php">Reservas</a></li>
            <li class="footer__li"><a href="../php/agenda.php">Agenda</a></li>
            <li class="footer__li"><a href="../html/index.html #main">Sobre Nosotros</a></li>
        </ul>
    </div>
    
    <div class="footer__center footer-sections">
        <div class="footer__logo-container">
            <img src="../media/img/logo.jpg" alt="logo" class="footer__logo-img">
        </div>
    </div>
    
    <div class="footer__right footer-sections">
        <div class="footer__icons-container">
            <div class="ig icons"><i class='bx bxl-instagram'></i></div>
            <div class="tt icons"><i class='bx bxl-tiktok'></i></div>
            <div class="lk icons"><i class='bx bxl-linkedin'></i></div>
            <div class="ws icons"><i class='bx bxl-whatsapp'></i></div>
        </div>
    </div>
</div>

<div class="footer__copy-container">
    <p class="footer__copy">
        Copyright &copy; 2024 <span class="footer__copy-span">Barber's Ben</span>
    </p>
</div>

</footer>   

<!-- --------------------FOOTER SECTION END-------------------- -->
</body>
<script src="../js/login&singup.js"></script>
<script src="../js/reserva.js"></script>
</html>