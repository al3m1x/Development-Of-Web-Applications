<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <title>Moje Hobby - Juliusz Radziszewski</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/form-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script>
        $( function() {
          $( document ).tooltip();
        } );
        </script>
    <script src="plugin/build/index.js"></script>
<script>
$(function(){
    $('.marker-animation').markerAnimation();
  });</script>
</head>
<body>
    <div id="theme">
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
    <div class="space"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
    <div id="btn_place"></div>
    <h2>Wypełnij poniższy formularz</h2>
<div class="form">
    <form id="form2" action="czytaj.php" method="post">
        <div class="marker-animation">
        <label for="firstname">Podaj imię:</label></div> <br>
        <input type="text" id="firstname" name="firstname" autocomplete="off"> <br><br>
        <div class="marker-animation">
        <label for="lastname">Podaj nazwisko:</label></div> <br>
        <input type="text" id="lastname" name="lastname" autocomplete="off"> <br><br>

        <label class="marker-animation">Zaznacz swoją płeć:</label> <br>
        <input type="radio" id="male" name="gender" value="Mężczyzna">
        <label for="male">Mężczyzna    </label>
        <input type="radio" id="female" name="gender" value="Kobieta">
        <label for="female">Kobieta    </label>
        <input type="radio" id="nogender" name="gender" value="Nie chcę podawać">
        <label for="nogender">Nie chcę podawać</label><br><br>

        <label class="marker-animation">Wybierz swój stan:</label> <br>
        <label for="person">
        <select id="person">
            <option value="pracujący">Osoba pracująca</option>
            <option value="uczeń">Uczeń</option>
            <option value="student">Student</option>
            <option value="emeryt">Emeryt</option>
            <option value="rencista">Rencista</option>
            <option value="bezrobotny">Bezrobotny</option>
        </select>
    </label><br><br>
    
    
    
        <label class="marker-animation">Wybierz najlepszą według Ciebie podstronę:</label> <br>
        <input type="radio" id="rower1" name="fav_site" value="Rower">
        <label for="rower1">Rower</label><br>
        <input type="radio" id="dart1" name="fav_site" value="Dart">
        <label for="dart1">Dart</label><br>
        <input type="radio" id="e-sport1" name="fav_site" value="E-Sport">
        <label for="e-sport1">E-Sport</label><br>
        <input type="radio" id="football1" name="fav_site" value="Piłka Nożna">
        <label for="football1">Piłka Nożna</label><br><br>
    
    
        <label class="marker-animation">Ile czasu tygodniowo poświęcasz na swoje hobby?</label> <br>
        <label for="hours">
        <select id="hours">
            <option value="0-1h">0-1h</option>
            <option value="1-2h">1-2h</option>
            <option value="2-4h">2-4h</option>
            <option value="4-7h">4-7h</option>
            <option value="7-10h">7-10h</option>
            <option value="10h+">10h+</option>
        </select>
    </label><br><br>
    
    
        <label class="marker-animation">Podziel się swoją opinią na temat strony.</label> <br>
        <textarea id="textarea1" maxlength="200" name="comment" rows="8" cols="90" title="Maksymalna ilość znaków:200!">
        </textarea> <br>
        <textarea id="textarea2" maxlength="200" name="comment" rows="20" cols="40" title="Maksymalna ilość znaków:200!">
        </textarea> <br>
        <input id="reset" type="reset" value="Resetuj">
        <input type="submit" value="Wyślij">
        <br><br>
    </form>
</div>
<div id="div10"></div>
    <br><br>
<a id="undo1" href="football.html"><img src="pictures/undo.jpg" id="undo" alt="undo"></a>


<footer><strong><a href="#start" id="gotostart">Idź do początku strony</a><br>
    Wykonanie: Juliusz Radziszewski, Informatyka grupa 1., 05.11.2022</strong></footer>
</div>
<script src="script.js"></script>
</body>
</html>