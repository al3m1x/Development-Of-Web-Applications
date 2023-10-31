
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Moje Hobby - Juliusz Radziszewski</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <link rel="stylesheet" href="static/style.css">
    </head>
    <body>
    <nav id="start" class="navigation">
        <ul>
            <li id="main"><a href="index_html.php">Strona Główna</a></li>
            <li id="rower"><a href="rower_html.php">Rower</a></li>
            <li>
                <div class="sub-menu">
                    <div class="button">
                <button class="dart">Dart 
                </button></div>
                <div class="sub-content">
                    <a href="dart_html.php#first" class="solid">Zasady gry</a>
                  <a href="dart_html.php#second" class="solid">Profesjonalne turnieje</a>
                  <a href="dart_html.php#third" class="solid">Gra amatorska</a>
                </div>
              </div>
            </li>
            <li id="e-sport"><a href="e-sport_html.php">E-Sport</a></li>
            <li id="football"><a href="football_html.php">Piłka nożna</a></li>
            <li id="form"><a href="form_html.php">Formularz</a></li>
            <li id="gallery"><a href="gallery_html.php">Galeria</a></li>
        </ul>
    </nav>
    <br><br><br><br><br><br><br>
    <a href="gallery_html.php"><img src="pictures/form_icon.png" class="form_icon"></a> <br><br>
    <a href="register.php">Zarejestruj się</a>
    <?php if (empty($_SESSION['logged'])) {
                $_SESSION['logged']=0;
            }
    if ($_SESSION['logged'] != 1)
    echo '<a href="login.php">Zaloguj się</a><br><br>' ;
    if ($_SESSION['logged'] == 1) {
        echo '<a href="logout.php">Wyloguj się</a><br>';
        echo 'Jesteś obecnie zalogowany.<br><br>'; } ?>
    <?php
            for ($i=1;$i<$sites+1;$i++) {
                echo '<a href="galleryshow_html.php?page=' . $i . '">Page ' . $i . '</a><br>';
            }
            echo '<br><br>';


            if (empty($_GET['page'])) {
                $page=1;
            }
            else {
            $page=$_GET['page']; 
            }

$value=($page*5)-5;
$img1=1+$value; $img2=2+$value; $img3=3+$value; $img4=4+$value; $img5=5+$value;

require_once '../views/gallery_viewpage.php';

    ?>
</body>
</html>
