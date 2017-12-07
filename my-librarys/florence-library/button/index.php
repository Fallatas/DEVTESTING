<html>
<head>
    <title>Button</title>
<script type="text/javascript">
    sourceImage = new Image();

    function changeImage(target,image){
        sourceImage.src = image;
        document.getElementById(target).src = sourceImage.src;
    }
</script>
</head>
<body>
    <h5>Button</h5>
    <img style="z-index:0; position:absolute; top: 0px; left: 0px;" src="button.png" border="0" />
    <img style="z-index:1; position:absolute; top: 0px; left: 0px;" id="hintergrund"  src="hintergrund.png" usemap="#map" />

    <map name="map">
        <area shape="poly" coords="99,200,136,282,168,266,152,233,189,220,205,252,238,242,201,163,169,175,181,200,145,213,132,187" href="buchstabe1.html" onMouseOver="changeImage('hintergrund','buchstabe1.png');" onMouseOut="changeImage('hintergrund','hintergrund.png');"/>
        <area shape="poly" coords="223,156,259,233,348,207,338,190,285,204,277,188,329,174,319,158,269,172,263,160,318,144,310,128" href="buchstabe2.html" onMouseOver="changeImage('hintergrund','buchstabe2.png');" onMouseOut="changeImage('hintergrund','hintergrund.png');" />
        <area shape="poly" coords="330,126,367,203,451,185,441,165,391,176,362,117" href="buchstabe3.html" onMouseOver="changeImage('hintergrund','buchstabe3.png');" onMouseOut="changeImage('hintergrund','hintergrund.png');" />
        <area shape="poly" coords="428,105,464,183,498,177,483,148,505,147,523,139,527,133,527,120,520,107,504,98,486,97,427,104" href="buchstabe4.html" onMouseOver="changeImage('hintergrund','buchstabe4.png');" onMouseOut="changeImage('hintergrund','hintergrund.png');" />
    </map>






</body>

</html> 