<?php
session_start();
?>
https://www.php-einfach.de/php-tutorial/php-sessions/

<form action="index.php" method="post">
    Dein Name: <br />
    <input type="Text" name="name" />
    <input type="Submit" />
</form>
<?php

if(isset($_SESSION['besucht'])) {
    echo "Du hast die Seite zuvor besucht";
    unset($_SESSION['besucht']);
} else {
    echo "Du hast die Seite zuvor NICHT besucht";
    $_SESSION['besucht'] = true;
}

/* https://www.php-einfach.de/php-tutorial/php-sessions/ */
?>