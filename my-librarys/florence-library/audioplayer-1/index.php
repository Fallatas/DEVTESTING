<html>
<head>
    <title>Audioplayer 1</title>
    <style>
        body {
            background: #666;
        }

        button {
            border: none;
            cursor: pointer;
        }

        button#playpausebtn {
            background:url(images/pause.png) no-repeat;
            width: 12px;
            height: 14px;
        }

        button#mutebtn {
            background: url("images/speaker.png");
            width: 5px;
            height: 14px;
        }
    </style>
    <script>
        function initAudioPlayer() {
            var audio,playbtn, seek_bar,mutebtn;

            audio = new Audio();
            audio.src = "papa-roach-video-1.mp4";
            audio.loop = true;
            audio.play();

            playbtn = document.getElementById("playpausebtn");
            mutebtn = document.getElementById("mutebtn");

            playbtn = addEventListener("click",playPause);
            mutebtn = addEventListener("click", mute);

            function playPause() {
                if(audio.paused){
                    audio.play();
                    playbtn.style.background = "url (images/pause.png) no-repeat";
                }else {
                    audio.pause();

                }
            }

            function mute() {
                if(audio.muted){
                    audio.muted = false;
                }else{
                    audio.muted = true;
                }
            }

        }



        window.addEventListener("load",initAudioPlayer);
    </script>
</head>
<body>
      <img src="images/play.png" id="playpausebtn" width="30px">
      <img src="images/speaker.png" id="playpausebtn" width="30px">
</body>
</html>