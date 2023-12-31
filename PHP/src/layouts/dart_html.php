<!doctype html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <title>Moje Hobby - Juliusz Radziszewski</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/dart-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script>
        $( function() {
          $( "#dialog" ).dialog({
            autoOpen: false,
            show: {
              effect: "blind",
              duration: 1000
            },
            hide: {
              effect: "explode",
              duration: 1000
            }
          });
       
          $( "#opener" ).on( "click", function() {
            $( "#dialog" ).dialog( "open" );
          });
        } );
        </script>
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
    <h1>Darts(rzutki)</h1>
<div class="space"><br><br><br><br><br><br><br><br></div>
<div class="orange-strap"></div>
    <img id="orange-strap" src="pictures/orange-strap.jpg" alt="orange-strap">
    <div class="header"><strong>Darts(rzutki)</strong></div>
<h2 id="first">Zasady gry</h2>
<img src="pictures/odl.jpg" id="odl" title="Odległość od tarczy" alt="Odległość od tarczy">
<img src="pictures/dart-board.png" id="dart-board" title="Dart Board" alt="Dart Board">
<div class="p1">
<p id="p1">Dart to gra, a raczej różne powiązane ze sobą gry, w których celem jest trafianie niewielkimi lotkami w tarczę zawieszoną na ścianę. Obecnie jednak zasady gry są ustandaryzowane.
    Mecz rozgrywa między sobą dwójka graczy, która startuje rozgrywkę z 501 punktami. Ten, komu pierwszemu uda się pozbyć wszystkich punktów, zwycięża daną rundę. Liczbę rzuconych
    punktów trzema lotkami odejmuje się od wyniku i rzuty wykonuje drugi gracz aż do zakończenia danej rundy.
</p>
<img src="pictures/odl.jpg" id="odl1" title="Odległość od tarczy" alt="Odległość od tarczy">
<img src="pictures/dart-board.png" id="dart-board1" title="Dart Board" alt="Dart Board"> <div class="space2"><br><br><br><br></div>
</div>
<img src="pictures/tarcza.jpg" id="tarcza" title="Tarcza" alt="Tarcza">
<div class="p2">
<p id="p2">Na tarczy znajdują się pola z wartościami od 1 do 20 oraz dwie środkowe wartości (wewnętrzna jest warta 50 punktów, a zewnętrzna 25). Zielone oraz czerwone prostokąty to 
    strefy z mnożnikami. Ten zewnętrzny, mnoży rzuconą wartość razy dwa, a wewnętrzny razy trzy. Tak więc najwyższą możliwą wartością do rzucenia w jednym rzucie jest 60 punktów.
    Aby zejść ze swoim poziomem punktów do 0, należy wykonać rzut w pole z mnożnikiem x2 (np. mając 20 punktów celujemy w podwójną 10). Jeśli nasz rzut jest warty więcej niż ilość
    pozostałych punktów, kończymy daną turę, a liczba punktów pozostaje jaka była przed rzutem.
</p>
</div>
<img src="pictures/tarcza.jpg" id="tarcza1" title="Tarcza" alt="Tarcza">
<h2 id="second">Profesjonalne turnieje</h2>
<img src="pictures/pub2.jpg" id="pub3" title="Pub" alt="Pub">
<div class="p3">
<p id="p3">Dart większość ludzi kojarzy z barową grą, piciem piwa i zabawą. Po części mają oni rację. Jednak należy pamiętać, że dart jest uznaną w Europie dyscypliną sportową 
    (choć nadal nieoficjalną - nie jest to sport olimpijski). Przez cały rok odbywają się liczne turnieje z ogromnymi nagrodami, a tysiące ludzi kibicują swoim zawodnikom zarówno
    na żywo, jak i przez telewizor. </p>
</div>
<img src="pictures/pub2.jpg" id="pub31" title="Pub" alt="Pub">
    <p class="p4">Najsilniejszymi nacjami w darcie pod względem zawodników są zdecydowanie Anglia, Szkocja, Walia i Holandia, choć Polska też ma swoich reprezentantów, którzy jeżdżą regularnie
        na największe turnieje. Obecnym mistrzem świata jest Peter Wright - wiekowy już zawodnik ze Szkocji, który znany jest ze swojej interesującej aparycji. To pokazuje, że w 
        Darcie wiek się nie liczy, a doświadczenie jest niezwykle cenne.
    </p>
    <p class="p5">Najbardziej znanym polskim zawodnikiem darta jest Krzysztof Ratajski, który często zaskakuje w pojedynkach z najlepszymi graczami na świecie. Obecnie znaduje się on
        na 19 miejscu w rankingu najlepiej zarabiających graczy w tej dyscyplinie. Dzięki niemu dart zyskał nowych fanów w naszym kraju, po jego świetnym występie na 
        Mistrzostwach Świata PDC 2 lata temu.
    </p>
    <img src="pictures/wright.jpg" id="wright" title="Peter Wright" alt="Peter Wright">
    <img src="pictures/ratajski.jpg" id="ratajski" title="Krzysztof Ratajski" alt="Krzysztof Ratajski">
    <div class="space"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div><br><br><br><br><br><br>
<h2 id="third">Gra amatorska</h2>
<p id="p4">Osobiście jestem wielkim fanem tej dyscypliny i sam uczęszczam na lokalne turnieje. Praktycznie w każdym średnim i większym mieście organizowane są cotygodniowe ligi i turnieje 
    dla graczy darta, gdzie każdy może uczestniczyć w sportowej rywalizacji i spędzić czas ze znajomymi. Przykładem jest Tczewska Liga Darta organizowana stale od kilku lat, która 
    zyskuje coraz więcej graczy, którzy ciągle rozwijają się i tworzą zgraną grupę jeżdżącą na większe turnieje.
</p>
<br>
<img src="pictures/tld1.jpg" id="tld1" title="Tczewska Liga Darta" alt="Tczewska Liga Darta">
<img src="pictures/tld2.jpg" id="tld2" title="Tczewska Liga Darta" alt="Tczewska Liga Darta">
<div id="dialog" title="Turniej Świąteczny Tczewskiej Ligi Darta">
    <video id="video1" width="720" height="480" controls>
      <source src="pictures/turniej-tld.mp4" type="video/mp4">
  </video>
  </div>
  <div class="space"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
  <div id="btn_place"></div>

<br><br><br><br><br><br><br><br><br>
    <a id="undo1" href="rower.html"><img src="pictures/undo.jpg" id="undo" alt="undo"></a>
    <a id="goto1" href="e-sport.html"><img src="pictures/goto.jpg" id="goto" alt="goto"></a>
    <script src="script-dart.js"></script>
    <footer><strong><a href="#start" id="gotostart">Idź do początku strony</a><br>
        Wykonanie: Juliusz Radziszewski, Informatyka grupa 1., 05.11.2022</strong></footer>
</body>
</html>