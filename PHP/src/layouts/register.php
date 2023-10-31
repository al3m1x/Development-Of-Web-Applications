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
    <a href="gallery_html.php"><img src="pictures/goback.png" class="goback"></a>
    <form action="register_action" method="post" enctype="multipart/form-data">
        E-mail:
        <input type="text" name="email" id="email"><br>
        Login:    
        <input type="text" name="login" id="login"><br>
        Password:
        <input type="password" name="password" id="password"><br>
        Repeat password:
        <input type="password" name="password_r" id="password_r"><br>
        <input type="submit" value="Confirm" name="submit">
    </form>
    <?php
    include_once '../views/register_errors.php';
    ?>
</body>
</html>