<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Debate</title>
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

        $query = "SELECT clanci.id, clanci.naslov, clanci.sazetak, clanci.slika FROM clanci
                    INNER JOIN kategorije ON clanci.idKategorija = kategorije.id
                    WHERE kategorije.naziv='Sport' AND clanci.arhiva=0
                    LIMIT 4;
                 ";

        $result = mysqli_query($dbc, $query);

        ?>
        <section class="news">
            <div class="news__header">
                <h2 class="category">Sport</h2>
            </div>
            <div class="news__center">
                <?php
                while ($clanak = mysqli_fetch_array($result)) {
                    print '
                        <article class="article">
                            <input type="hidden" value="' . $clanak['id'] . '">
                            <div class="article__header">
                                <img src="./img/' . $clanak['slika'] . '" alt="' . $clanak['naslov'] . '" class="article__img">
                            </div>
                            <div class="article__content">
                                <span class="article__category">SPORT</span>
                                <h3 class="article__heading">' . $clanak['naslov'] . '</h3>
                                <p class="article__description">
                                    ' . $clanak['sazetak'] . '
                                </p>
                            </div>
                        </article>
                    ';
                }
                ?>


            </div>
        </section>

        <section class="news">
            <div class="news__header">
                <h2 class="category">Svijet</h2>
            </div>
            <div class="news__center">
                <?php

                $query = "SELECT clanci.id, clanci.naslov, clanci.sazetak, clanci.slika FROM clanci
                    INNER JOIN kategorije ON clanci.idKategorija = kategorije.id
                    WHERE kategorije.naziv='Svijet' AND clanci.arhiva=0
                    LIMIT 4;
                 ";

                $result = mysqli_query($dbc, $query);
                while ($clanak = mysqli_fetch_array($result)) {
                    print '
                        <article class="article">
                            <input type="hidden" value="' . $clanak['id'] . '">
                            <div class="article__header">
                                <img src="./img/' . $clanak['slika'] . '" alt="' . $clanak['naslov'] . '" class="article__img">
                            </div>
                            <div class="article__content">
                                <span class="article__category">Svijet</span>
                                <h3 class="article__heading">' . $clanak['naslov'] . '</h3>
                                <p class="article__description">
                                    ' . $clanak['sazetak'] . '
                                </p>
                            </div>
                        </article>
                    ';
                }
                ?>


            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <p class="footer__copyright">&copy; Copyright EL DEBATE. All rights reserved.</p>
        </div>
    </footer>
    <script src="./js/app.js"></script>
</body>

</html>