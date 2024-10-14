<?php
include("cone_db_reservation.php");

// Manejo de la lógica de la agenda
$reservas = [];
if ($result = $conec->query("SELECT * FROM datos_reservas")) {
    while ($row = $result->fetch_assoc()) {
        $reservas[] = $row; // Almacena cada reserva en un array
    }
    $result->close();
}

$conec->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../media/img/favicon.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/agenda.css">
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
                <li class="header__li"><a href="../php/reserva.php" class="header__link">Reservas</a></li>
                <li class="header__li"><a href="../php/agenda.php" class="header__link agenda">Agenda</a></li>
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

<!-- --------------------AGENDA SECTION START-------------------- -->

    <div class="agenda__container">
        <div class="agenda__section">
            <h3 class="agenda__h3">Agenda</h3>
            
            <div class="agenda__table-container">
                <table class="agenda__table">
                    <thead class="agenda__table-head">
                        <tr class="agenda__table-tr">
                            <th class="agenda__table-th">Nombres</th>
                            <th class="agenda__table-th">Apellidos</th>
                            <th class="agenda__table-th">Fecha</th>
                            <th class="agenda__table-th">Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($reservas as $reserva): ?>
                        <tr class="agenda__table-tr">
                            <td class="agenda__table-td"><?php echo htmlspecialchars($reserva['re_names']); ?></td>
                            <td class="agenda__table-td"><?php echo htmlspecialchars($reserva['re_lastnames']); ?></td>
                            <td class="agenda__table-td"><?php echo htmlspecialchars($reserva['re_date']); ?></td>
                            <td class="agenda__table-td">
                            <?php
                            $time_parts = explode(':', $reserva['re_time']);
                            $formatted_time = $time_parts[0] . ':' . $time_parts[1];
                            echo htmlspecialchars($formatted_time);
                            ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

<!-- --------------------AGENDA SECTION END-------------------- -->

<!-- --------------------FOOTER SECTION START-------------------- -->

<footer class="footer" id="footer">
    <div class="footer__sections-container">
        <div class="footer__left footer-sections">
            <h3 class="footer__name">Barber's Den</h3>
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
            Copyright &copy; 2024 <span class="footer__copy-span">Barber's Den</span>
        </p>
    </div>
</footer>   

<!-- --------------------FOOTER SECTION END-------------------- -->
</body>
<script src="../js/login&singup.js"></script>
</html>