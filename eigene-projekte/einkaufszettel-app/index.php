<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Einkaufszettel</title>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h4>Meine Einkaufszettel App</h4>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <fieldset>
            <h3>Neue Produkte hinzufügen</h3> <br>
            <label class="ueberschrift">Bitte Namen meiner Produkte eingeben :</label> <br>
            <?php
            /* Input Felder werden erstellt. */
            $felderanzahl = 15;

            for($i = 1; $i <= $felderanzahl; $i++){

                echo "<input name='produktfelder$i'>";

                if ($i == 3){
                    echo "<br>";
                }elseif ($i == 6){
                    echo "<br>";
                }elseif ($i == 9){
                    echo "<br>";
                }elseif ($i == 12){
                    echo "<br>";
                }elseif ($i == 15){
                    echo "<br>";
                }
            }
            ?>
            <input type="submit" value="Produkte hinzufügen" id="senden">
        </fieldset>
    </form>
    <div class="content">
        <div class="content-left">
            <h2>Ausgewählte Produkte</h2> <br>
            <?php
            for($i = 1; $i <= $felderanzahl; $i++){

                if (isset($_POST["produktfelder$i"])){

                    $produkt = "produkt$i";
                    $produkt = $_POST["produktfelder$i"];

                    $waren = array($produkt);

                    foreach ($waren as $ware ){

                        if(empty($ware)){

                            echo "<span style='color: greenyellow'>Es wurde kein Produkt angegeben.</span><br>";

                        }else{
                            /* Hier wird jedem Produkt eine eigene Klasse und ID vergeben */
                            echo "<span style='cursor: pointer' id='select$i' class='test$i'>" . $ware . "</span> <br>";
                        }
                    }
                }
            }
            ?>
        </div>
        <div class="content-right">
            <div id="page">
                <h1 id="header">List</h1>
                <img src="img/logo_v2.png">
                <h2>Produktliste</h2>
                <ul>
                    <li id="one" class="hot">Deine Produkte</li>
                </ul>
            </div>
            <button>Einkaufszettel jetzt losschicken ?</button>
        </div>
    </div>
</body>
</html>