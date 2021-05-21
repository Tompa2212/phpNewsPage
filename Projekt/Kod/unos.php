<?php
session_start();
$korisnickoIme = $_SESSION['korisnik'];
$pos = strpos($korisnickoIme, '/');
$korisnickoIme = substr($korisnickoIme, 0, $pos);
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Debate - Unos članka</title>
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
                    <li><a href="#" class="nav__link" style="text-transform:capitalize;"><?php echo $korisnickoIme; ?></a></li>
                    <li><a href="./unos.php" class="nav__link">Unesi novi članak</a></li>
                    <li><a href="./logout.php" class="nav__link">Odjava</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="form-cont">
            <h1>Informacije o članku</h1>
            <form action="./skripta.php" method="POST" enctype="multipart/form-data" id="form-clanak" class="form">

                <div class="form-control">
                    <label for="title">Naslov članka:</label>
                    <input type="text" class="inputs" name="title" id="title" placeholder="Title" autocomplete="off">
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="description">Opis članka:</label>
                    <textarea class="inputs" name="description" id="description" cols="30" rows="10"></textarea>
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="content">Sadržaj članka:</label>
                    <textarea class="inputs" name="content" id="content" cols="30" rows="10"></textarea>
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="imgUpload" class="img-upload">
                        Izaberi sliku
                    </label>
                    <input id="imgUpload" type="file" name="img-upload" accept="image/png, image/jpeg" />
                    <span style="font-size: 1.4rem;" class="img-file">Nije izabrana slika</span>
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="category">Kategorija:</label>
                    <select name="category" id="category">
                        <option value="empty" selected></option>
                        <option value="Sport">Sport</option>
                        <option value="Svijet">Svijet</option>
                    </select>
                    <small></small>
                </div>
                <div class="form-control">
                    <label for="archive">Arhiva:</label>
                    <input type="checkbox" name="cb" id="archive">
                </div>
                <button class="form__btn" type="submit" name="submit">Pošalji</button>
                <button class="form__btn" type="reset">Odustani</button>

            </form>
        </div>
    </main>
    <script src="./js/clanak.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>