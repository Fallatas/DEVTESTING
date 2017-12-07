<html>
<head>
    <title>Sildeshow</title>
    <script type="text/javascript">
        var Image = ["cancel-button.png","email-button.png","music-button.png"];

        var Image_number = 0;
        var Image_Length = Image.length - 1;

        function change_image(num) {
            Image_number = Image_Number + num;

            if(Image_Number > Image_Length){
                Image_Number = 0;
            }

            if(Image_Number < 0){
                Image_Number = Image_Length
            }

            document.slideshow.src= Image[Image_Number];

            return false;
        }

        function auto() {
            setInterval("change_image(1)", 3000);
        }
    </script>
</head>
<body>

    <img src="cancel-button.png" name="slideshow" />

    <table border="1">
        <tr>
            <td align="left"><a href="javascript.html" onclick="return changeImage(-1)">Previous</a></td>
            <td align="right"><a href="javascript:change_image(1)">Next</a></td>
            <td align="right"><a href="javascript:auto()">Auto</a></td>
        </tr>
    </table>
    <hr>
    <script>
        var pic1 = new Image();
        pic1.src = "cancel-button.png";
        var pic2 = new Image();
        pic2.src = "email-button.png";
        var pic3 = new Image();
        pic3.src = "music-button.png";

        function change_image() {
            pic3.src = "music-button.png";
        }

    </script>

    <img style="z-index: 1; position: absolute" src="cancel-button.png" name="bild1" width="200" height="200" onclick="change_image()"/>
    <img style="z-index: 2; position: absolute" src="email-button.png" name="bild2" width="200" height="200" />
    <img style="z-index: 3; position: absolute" src="music-button.png" name="bild3" width="200" height="200" />


</body>


</html>