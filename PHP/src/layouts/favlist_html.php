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
                    <a href="dart.html#first" class="solid">Zasady gry</a>
                  <a href="dart.html#second" class="solid">Profesjonalne turnieje</a>
                  <a href="dart.html#third" class="solid">Gra amatorska</a>
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
    <?php 
    if (empty($_SESSION['logged'])) {
                $_SESSION['logged']=0;
            }
    if ($_SESSION['logged'] != 1)
    echo '<a href="login.php">Zaloguj się</a><br><br>' ;
    if ($_SESSION['logged'] == 1) {
        echo '<a href="logout.php">Wyloguj się</a><br>';
        echo 'Jesteś obecnie zalogowany.<br><br>'; }?>
    <?php
        echo '<form action="fav_delete" method="post">';
        if(!empty($_SESSION['fav'])) {
        foreach($_SESSION['fav'] as $imgs) {
            $imgs_r = str_replace('img', '', $imgs);
            $titleVarName = 'title'.$imgs_r;
            $title = $$titleVarName;
            $authorVarName = 'author'.$imgs_r;
            $author = $$authorVarName;
            echo '<div class="imageshow"><a href="images/images_with_watermark/' . $imgs . '.png" target="_blank"><img src=images/images_mini/' . $imgs . '.png></a>';
            echo 'Title: ' . $title . ' ' ; echo 'Author: ' . $author  ; echo '<br>'; 
            echo   '<input type="checkbox" id="fav_del" name="fav_del[]" value="' . $imgs . '">'; echo '<label for="fav_del"> Delete from favourites</label></div><br>';
        }
    }
    if(!empty($_SESSION['fav'])) {
        echo '<button class="imageshow" type="submit">Usuń zaznaczone z zapamiętanych</button>'; }
        echo '</form>';

    ?>
</body>
</html>