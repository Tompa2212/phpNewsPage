<?php
include 'connect.php';
session_start();

define('UPLPATH', 'img/');

$admin = false;
$uspjesnaPrijava = false;

if (isset($_POST['login'])) {

    $username = $_POST['username'];

    $sql = "SELECT id, korisnickoIme, lozinka, razina FROM `korisnici` WHERE korisnickoIme=?";

    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, 's', $username);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }

    mysqli_stmt_bind_result($stmt, $id, $korisnickoIme, $lozinka, $razina);

    mysqli_stmt_fetch($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0 and password_verify($_POST['password'], $lozinka)) {

        $_SESSION['korisnik'] = $korisnickoIme . '/' . $id;
        $_SESSION['razina'] = $razina;

        $uspjesnaPrijava = true;

        if ($razina == 0) $admin = false;
        if ($razina == 1) $admin = true;
    } else {
        require 'funkcije.php';
        print wrongPassword();
    }
}
?>
<?php
if (($uspjesnaPrijava == true and $admin == true) or (isset($_SESSION['korisnik']) and $_SESSION['razina'] == 1)) {
    $korisnickoIme = $_SESSION['korisnik'];
    $pos = strpos($korisnickoIme, '/');

    $id = substr($korisnickoIme, $pos + 1);
    $korisnickoIme = substr($korisnickoIme, 0, $pos);

    $sql = "SELECT clanci.id, clanci.naslov, clanci.sazetak, clanci.tekst, clanci.slika, clanci.arhiva, kategorije.naziv FROM `clanci`
            INNER JOIN korisnici ON clanci.idKorisnik = korisnici.id
            INNER JOIN kategorije ON clanci.idKategorija = kategorije.id
            WHERE korisnici.id=?
            ORDER BY clanci.id DESC";

    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, 'i', $id);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }
    mysqli_stmt_bind_result($stmt, $idClanak, $naslov, $sazetak, $tekst, $slika, $arhiva, $kategorija);

    $html = "";
    while (mysqli_stmt_fetch($stmt)) {
        if ($arhiva) $arhiva = 'checked';
        else $arhiva = '';

        include_once 'funkcije.php';
        $html .= adminForm($idClanak, $naslov, $sazetak, $tekst, $slika, $kategorija, $arhiva);
    }

    echo '
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
                                    <a href="administrator.php"><img src="./img/logo.svg" class="logo" alt="Logo"></a>
                                    <button class="nav__hamburger"><i class="fas fa-bars"></i></button>
                                </div>
                                <ul class="nav__links">
                                    <li><a href="#" class="nav__link" style="text-transform:capitalize;">' . $korisnickoIme . '</a></li>
                                    <li><a href="./unos.php" class="nav__link">Unesi novi članak</a></li>
                                    <li><a href="./logout.php" class="nav__link">Odjava</a></li>
                                </ul>
                            </div>
                        </nav>
                    </header>
                    <main class="container">
                        ' . $html . '
                    </main> 
                    <script src="./js/clanak.js"></script>          
                    <script src="./js/app.js"></script>
                </body>

                </html>
            ';
} elseif ($uspjesnaPrijava == true and $admin == false) {
    echo '
            <p>' . $korisnickoIme . ', nemate dovoljno prava za pristup ovoj stranici.</p>
            <a href="./index.php">Natrag</a>
            ';
}
?>


<?php
//BRISANJE I UREDIVANJE CLANAKA
if (isset($_POST['delete'])) {

    $idClanak = $_POST['idClanak'];

    $sql = "DELETE FROM clanci WHERE clanci.id=?";

    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, 's', $idClanak);

        mysqli_stmt_execute($stmt);
        print '<script>alert("Članak izbrisan");</script>';
        print '<script>izbrisiClanak(' . $idClanak . ');</script>';
    } else {
        print '<script>alert("Došlo je do pogreške u brisanju članka. Pokušajte ponovno.");</script>';
    }
}

if (isset($_POST['uredi'])) {

    $idClanak = $_POST['idClanak'];
    $picture = $_FILES['img-upload']['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    if (isset($_POST['archive'])) {
        $archive = 1;
    } else {
        $archive = 0;
    }

    $sql = "SELECT kategorije.id FROM kategorije
               WHERE kategorije.naziv=?";

    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, 's', $category);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }
    mysqli_stmt_bind_result($stmt, $categoryId);

    mysqli_stmt_fetch($stmt);

    $sql = "UPDATE clanci SET clanci.naslov=?, clanci.sazetak=?, clanci.tekst=?, clanci.slika=?, clanci.idKategorija=?
            INNER JOIN kategorije ON clanci.idKategorija = kategorije.id
            WHERE clanci.id=?";

    $query = "UPDATE clanci SET naslov='$title', sazetak='$description', tekst='$content',
                slika='$picture', idKategorija=$categoryId, arhiva='$archive' WHERE id=$idClanak ";

    $result = mysqli_query($dbc, $query);

    if ($result) echo '<script>alert("Članak uspješno uređen");</script>';
}
?>
