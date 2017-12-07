<html>
<head>
    <title>Audioplayer</title>
    <link type="text/css" rel="stylesheet" href="../mein-audioplayer/css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
</head>
<body>
<audio id="audioplayer">
    <?php
    $songs = array(
        array(  "pfad" => "mp3/sekt.mp3",
            "alt" => "Song 1",
            "titel" => "Sekt"),
        array(  "pfad" => "mp3/hummel.mp3",
            "alt" => "Song 2",
            "titel" => "Hummel"),
    );


    $max = count($songs)-1;
    $zufallszahl = rand(0, $max);

    echo "<source src='{$songs[$zufallszahl]['pfad']}'>";



    ?>

    HTML wird von deinem Browser nicht unterstützt...
</audio>
<div id="player" class="playerstyle">
    <div class="buttons">
        <img  onclick="playmusic()" src="../mein-audioplayer/img/play.png" id="playbutton" width="50" height="50">
        <img  onclick="repeat()" id="repeat" src="../mein-audioplayer/img/repeat.png" width="50" height="50">
        <img  onclick="soundon()" id="sound-on" src="../mein-audioplayer/img/music-on.png" width="50" height="50">
        <img  onclick="soundoff()" id="sound-off" src="../mein-audioplayer/img/music-off.png" width="50" height="50">
        <img  onclick="soundvolup()" id="soundvolup" src="../mein-audioplayer/img/soundvolup.png" width="50" height="50">
        <img  onclick="soundvoldown()" id="soundvoldown" src="../mein-audioplayer/img/soundvoldown.png" width="50" height="50">
        <button onclick="vor()">Vor</button>
        <button onclick="back()">Zurück</button>
        <button onclick="playlist()">Playlist</button>
        <span id="test">dfsd</span>
    </div>
    <div id="infofenster" class="infofensterstyle">
        <?php echo $songs['titel'] ?>
    </div>
    <div id="time" class="timestyle"><p>00:00//00:00</p></div>
    <div class="statusstyle">
        <span id="status">Es wird nichts abgespielt</span>
    </div>
    <div id="timeline" class="timelinestyle"></div>
    <script src="js/scripts.js"></script>
</div>
</body>
</html>






