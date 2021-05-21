<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Debate - Sport</title>
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
    <main class="container">
        <?php
        include 'connect.php';
        $id = $_GET['id'];

        $sql = "SELECT clanci.datum, clanci.naslov, clanci.sazetak, clanci.tekst, clanci.slika, korisnici.ime, korisnici.prezime, kategorije.naziv
        FROM clanci 
        INNER JOIN korisnici on clanci.idKorisnik = korisnici.id
        INNER JOIN kategorije ON clanci.idKategorija = kategorije.id
        WHERE clanci.id = ?";

        $stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }

        mysqli_stmt_bind_result($stmt, $datum, $naslov, $sazetak, $tekst, $slika, $ime, $prezime, $kategorija);

        mysqli_stmt_fetch($stmt);

        print '
            <section class="report">
            <div class="report__header">
                <span class="report__category">' . strtoupper($kategorija) . '</span>
                <h1 class="report__heading">' . $naslov . '</h1>
                <h2 class="report__description">' . $sazetak . '</h2>
                <span class="report__author">Autor: ' . $ime . ' ' . $prezime . '</span>
                <small class="report__date">' . $datum . '</small>
            </div>
            <div class="report__center">
                <img src="img/' . $slika . '" alt="' . $naslov . '" class="report__img">
                <div class="report__text">
                    <p class="report__paragraph">
                        ' . $tekst . '
                    </p>
                </div>
            </div>
        </section>
        ';
        ?>
    </main>
    <footer class="footer">
        <div class="container">
            <p class="footer__copyright">&copy; Copyright EL DEBATE. All rights reserved.</p>
        </div>
    </footer>
    <script src="./js/app.js"></script>
</body>

</html>