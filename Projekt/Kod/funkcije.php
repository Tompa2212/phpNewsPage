<?php
function adminForm($idClanak, $naslov, $sazetak, $tekst, $slika, $kategorija, $arhiva)
{
    return
        '
            <div class="form-cont" id="' . $idClanak . '" style="padding:3rem;margin-bottom:2rem;border:1px solid lightgray;">
                <h1>' . $naslov . '</h1>
                <form action="" method="POST" enctype="multipart/form-data" id="form-clanak" class="form">

                    <div class="form-control">
                        <label for="title">Naslov članka:</label>
                        <input type="text" value="' . $naslov . '" class="inputs" name="title" id="title" placeholder="Title" autocomplete="off">
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="description">Opis članka:</label>
                        <textarea class="inputs" name="description" id="description" cols="30" rows="10">' . $sazetak . '</textarea>
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="content">Sadržaj članka:</label>
                        <textarea class="inputs" name="content" id="content" cols="30" rows="10">' . $tekst . '</textarea>
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="imgUpload" class="img-upload">
                            ' . $slika . '
                        </label>
                        <input id="imgUpload" value="' . $slika . '" type="file" name="img-upload" accept="image/png, image/jpeg" />
                        <img src="' . UPLPATH . $slika . '" width=250px style="display:block;object-fit:cover;">
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="category">Kategorija:</label>
                        <select name="category" id="category" value="' . $kategorija . '">
                            <option value="Sport">Sport</option>
                            <option value="Svijet">Svijet</option>
                        </select>
                        <small></small>
                    </div>
                    <div class="form-control">
                        <label for="archive">Arhiva:</label>
                        <input type="checkbox" name="archive" id="archive" ' . $arhiva . '/>
                    </div>
                    <input type="hidden" name="idClanak" value="' . $idClanak . '"/>
                    <button class="form__btn id="uredi"" type="submit" name="uredi">Uredi</button>
                    <button class="form__btn" id="izbriši" type="submit" name="delete">Izbriši</button>
                </form>
            </div>
        ';
}

function wrongPassword()
{
    return
        '
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
                                <a href="index.html"><img src="./img/logo.svg" class="logo" alt="Logo"></a>
                                <button class="nav__hamburger"><i class="fas fa-bars"></i></button>
                            </div>
                            <ul class="nav__links">
                                <li><a href="./index.php" class="nav__link">Početna</a></li>
                                <li><a href="#" class="nav__link">Svijet</a></li>
                                <li><a href="./clanak.php" class="nav__link">Sport</a></li>
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
                            <div class="form-control error">
                                <label for="username">Korisničko ime:</label>
                                <input class="inputs" type="text" name="username" id="username" autocomplete="off">
                                <small>Pogrešno korisničko ime ili lozinka</small>
                            </div>

                            <div class="form-control error">
                                <label for="password">Lozinka:</label>
                                <input class="inputs" type="password" name="password" id="password">
                                <small>Pogrešno korisničko ime ili lozinka</small>
                            </div>

                            <button class="form__btn" type="submit" name="login">Login</button>
                            <a class="register" href="./registracija.php">Registriraj se</a>
                        </form>
                    </div>
                </div>
                <script src="./js/app.js"></script>
            </body>

            </html>
        ';
}
