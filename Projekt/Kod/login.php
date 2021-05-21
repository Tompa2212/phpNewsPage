<?php
session_start();

if (isset($_SESSION['korisnik'])) {
    header("Location: administrator.php");
}
?>
<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debate Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="./css/main.css" type="text/css">
</head>

<body>
    <header class="header">
        <nav class="nav container">
            <div class="nav__center">
                <div class="nav__header">
                    <a href="index.php"><img src="./img/logo.svg" class="logo" alt="Logo"></a>
                    <button class="nav__hamburger"><i class="fas fa-bars"></i></button>
                </div>
                <ul class="nav__links">
                    <li><a href="./index.php" class="nav__link">Početna</a></li>
                    <li><a href="./kategorija.php?id=Svijet" class="nav__link">Svijet</a></li>
                    <li><a href="./kategorija.php?id=Sport" class="nav__link">Sport</a></li>
                    <li><a href="./login.php" class="nav__link">Administracija</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="form-cont">
            <h1 class>Login</h1>
            <h3>Unesite korisničko ime i lozinku</h3>
            <form action="./administrator.php" method="POST" id="form-login" class="form">
                <div class="form-control">
                    <label for="username">Korisničko ime:</label>
                    <input class="inputs" type="text" name="username" id="username" autocomplete="off">
                </div>

                <div class="form-control">
                    <label for="password">Lozinka:</label>
                    <input class="inputs" type="password" name="password" id="password">
                </div>

                <button class="form__btn" type="submit" name="login">Login</button>
                <a class="register" href="./registracija.php">Registriraj se</a>
            </form>
        </div>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>