var pause = new Image();
pause.src = "img/stop.png";

var player = document.getElementById("audioplayer");
var music_control = 0;
player.volume = 0.5;


function playmusic() {
    if(music_control === 0){
        player.play();
        document.getElementById("playbutton").src = "img/stop.png";
        music_control = 1;
        zeitanzeige();
        playcontrol();
        var playinfo = document.getElementById("status").innerHTML = "<span>Song wird abgespielt.</span>";
    }else if(music_control === 1) {
        player.pause();
        document.getElementById("playbutton").src = "img/play.png";
        var pauseinfo = document.getElementById("status").innerHTML = "<span>Song wurde gestoppt.</span>";
        music_control = 0;
    }
}

function playcontrol() {
    if (music_control === 1){
        if (player.currentTime === player.duration){
            document.getElementById("playbutton").src = "img/play.png";
            music_control = 0;
        }else {
            window.setTimeout("playcontrol()",0);
        }
    }
}

function soundon() {
    player.muted = false;
    var pauseinfo = document.getElementById("status").innerHTML = "<span>Sound ist an.</span>";
}

function soundoff() {
    player.muted = true;
    var pauseinfo = document.getElementById("status").innerHTML = "<span>Sound wurde auf stumm geschaltet.</span>";
}

function repeat() {
    if(music_control === 1){
        player.currentTime = 0;
        var repeatinfo = document.getElementById("status").innerHTML = "<span>Song wurde zurückgesetzt.</span>";
    }
}
function soundvolup() {
    player.volume = 1.0;
    var soundupinfo = document.getElementById("status").innerHTML = "<span>Die Lautstärke wurde erhöht.</span>";
}

function soundvoldown() {
    player.volume = 0.3;
    var sounddowninfo = document.getElementById("status").innerHTML = "<span>Die Lautstärke wurde verringert.</span>";
}

function zeitanzeige() {

    if(music_control === 1){
        var songtime = player.duration;
        var full_min = Math.floor(songtime / 60);
        var full_sec = Math.floor(songtime - (full_min * 60));

        if (full_min < 10) {
            full_min = "0" + full_min;
        }

        if (full_sec < 10){
            full_sec = "0" + full_sec;
        }

        var currenttime = player.currentTime;
        var current_min = Math.floor(currenttime / 60);
        var current_sec = Math.floor(currenttime - (current_min * 60));

        if (current_min < 10) {
            current_min = "0" + current_min;
        }

        if (current_sec < 10){
            current_sec = "0" + current_sec;
        }

        document.getElementById("time").innerHTML = "<p>" + current_min + ":" + current_sec + "/" + full_min + ":" + full_sec + "</p>";
        window.setTimeout("zeitanzeige()",0);
    }
}

function vor() {
    
}

function playlist() {
    var songs = ["mp3/one-step-closer.mp3","mp3/points-of-authority.mp3","mp3/with-you.mp3"];
    var anzahl = songs.length;



}




