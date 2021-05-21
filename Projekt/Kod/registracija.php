<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Debate - Registracija</title>
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
        <div class="form-cont" style="padding-top: 7vh;">
            <h1 class>Registracija</h1>
            <h3>Unesite potrebne podatke za registraciju</h3>
            <form action="./registracija.php" method="POST" id="form-register" class="form">
                <div class="form-control">
                    <label for="name">Ime:</label>
                    <input class="inputs" type="text" name="name" id="name" autocomplete="off">
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="surname">Prezime:</label>
                    <input class="inputs" type="text" name="surname" id="surname" autocomplete="off">
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="username">Korisničko ime:</label>
                    <input class="inputs" type="text" name="usernameR" id="usernameRegister" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-control">
                    <label for="password">Lozinka:</label>
                    <input class="inputs" type="password" name="passwordR" id="passwordRegister">
                    <small></small>
                </div>

                <div class="form-control">
                    <label for="password2">Potvrdite Lozinku:</label>
                    <input class="inputs" type="password" name="password2" id="passwordRegister2">
                    <small></small>
                </div>

                <button class="form__btn" type="submit" name="register">Registracija</button>
            </form>
        </div>
    </div>
    <script src="./js/app.js"></script>
    <script src="./js/register.js"></script>
</body>

<?php
if (isset($_POST['register'])) {

    include 'connect.php';

    $firstname = $_POST['name'];
    $lastname = $_POST['surname'];
    $username = $_POST['usernameR'];
    $password = $_POST['passwordR'];
    $password = password_hash($password, CRYPT_SHA256);

    $sql = "SELECT korisnickoIme FROM korisnici WHERE korisnickoIme = ?";

    $stmt = mysqli_stmt_init($dbc);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }
    if (mysqli_stmt_num_rows($stmt) > 0) {
        print '<script>alert("Korisničko ime već postoji.");</script>';
    } else {
        $sql = "INSERT INTO korisnici(ime,prezime,korisnickoIme,lozinka) VALUES(?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($dbc);

        if (mysqli_stmt_prepare($stmt, $sql)) {

            mysqli_stmt_bind_param($stmt, 'ssss', $firstname, $lastname, $username, $password);

            mysqli_stmt_execute($stmt);
            print '<script>alert("Uspješna registracija");</script>';
        }
    }
    mysqli_close($dbc);
}

?>

</html>