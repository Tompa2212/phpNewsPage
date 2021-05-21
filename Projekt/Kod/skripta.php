<?php
session_start();
$korisnik = $_SESSION['korisnik'];
$pos = strpos($korisnik, '/');
$id = substr($korisnik, $pos + 1);

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $picture = $_FILES['img-upload']['name'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $date = date('d.m.Y');
    $date = date('d.m.Y', strtotime($date));

    isset($_POST['cb']) ? $archive = 1 : $archive = 0;

    include 'connect.php';

    $target_dir = 'img/' . $picture;
    move_uploaded_file($_FILES["img-upload"]["tmp_name"], $target_dir);

    $sql = "SELECT kategorije.id FROM kategorije WHERE kategorije.naziv = ?";

    $stmt = mysqli_stmt_init($dbc);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $category);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }

    mysqli_stmt_bind_result($stmt, $categoryID);

    mysqli_stmt_fetch($stmt);

    $sql = "INSERT INTO clanci (datum, naslov, sazetak, tekst, slika, idKategorija, arhiva, idKorisnik) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, 'sssssiii', $date, $title, $description, $content, $picture, $categoryID, $archive, $id);

        mysqli_stmt_execute($stmt);
        print '<script>alert("Članak unesen u bazu.");</script>';
    }
}
?>

<?php
print '
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
                    <li><a href="#" class="nav__link">Svijet</a></li>
                    <li><a href="./sport.html" class="nav__link">Sport</a></li>
                    <li><a href="./login.php" class="nav__link">Administracija</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <section class="report">
            <div class="report__header">
                <span class="report__category">' . strtoupper($category) . '</span>
                <h1 class="report__heading">' . $title . '</h1>
                <h2 class="report__description">' . $description . '</h2>
                <span class="report__author"></span>
                <small class="report__date">' . $date . '</small>
            </div>
            <div class="report__center">
                <img src="' . $target_dir . '" alt="' . $description . '" class="report__img">
                <div class="report__text">
                    <p class="report__paragraph">
                        ' . $content . '
                    </p>
                </div>
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
';

mysqli_close($dbc);
?>

