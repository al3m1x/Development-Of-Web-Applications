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
    <a href="galleryshow_html.php"><img src="pictures/picture_icon.png" class="picture_icon"></a><br><br>
    <a href="favlist_html.php"><img src="pictures/favourite.jpg" class="favourite_icon"></a><br><br>
    <a href="register.php">Zarejestruj się</a>
    <?php if (empty($_SESSION['logged'])) {
        $_SESSION['logged']=0;
    }
    if ($_SESSION['logged'] != 1)
    echo '<a href="login.php">Zaloguj się</a><br><br>' ;
        if ($_SESSION['logged'] == 1) {
    echo '<a href="logout.php">Wyloguj się</a><br>';
    echo 'Jesteś obecnie zalogowany.<br><br>'; }
    ?>
    <form action="gallery_html_action" method="post" enctype="multipart/form-data">
        Watermark:
        <input type="text" name="watermark" id="watermark"><br>
        Title:    
        <input type="text" name="title" id="title"><br>
        Author:
        <input type="text" name="author" id="author"><br>
        Choose image:
        <input type="file" name="plik" id="plik">
        <input type="submit" value="Upload image" name="submit">
    </form>
    <?php
        include_once '../views/gallery_errors.php';
    ?>
</body>
</html>

