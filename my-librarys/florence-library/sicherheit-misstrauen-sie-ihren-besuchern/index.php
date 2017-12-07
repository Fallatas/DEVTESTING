<?php
echo "<strong style='color: red'>Sicherheit - misstrauen Sie Ihren Besuchern</strong>";
echo "<br>";
echo "<hr style='color: red'>";

$superuser = false;
if(false){
    $superuser = true;
}
if(isset($superuser) && $superuser == true){
    echo "Sie dürfen rein.";
}else{
    echo "Sie dürfen nicht rein."
        . "<br>\n";
}

echo "<strong style='color: red'>Bösartige Formulareingaben</strong>";
echo "<br>";
echo "<hr style='color: red'>";
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"  method="get">
    <label>Suchbegriff:</label> <br>
    <input type="text" name="suche" size="80" />
    <br>
    <input type="submit"> <br>
</form>
<?php
if(isset($_GET["suche"])){
    echo "Ihre Suche nach <br>" . stripcslashes($_GET["suche"])
        . "<hr> hat folgende Ergebnisse ...";
}
?>
<p>Lorem ipsum dolor sit amet... amet. <!-- und viel weiterer Text ---></p>
