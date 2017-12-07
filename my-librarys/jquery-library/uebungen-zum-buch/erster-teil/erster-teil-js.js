/* 1. Beispiel - Hier wird die Überschrift druch anklicken entfernt */

/* Durch $(':header') wird ausgewählt wo etwas passieren soll.*/
/* Druch on() wird durch klicken die Funktion ausgegeben.*/

$(':header').on('click',function () {
   $(this).remove();
});

/*2. Beispiel - Hier werden die ausgewählten Elemente mit einer kleinen Animation ausgegeben*/

/* Durch $('li') wird ausgewählt - WO !!- etwas passieren soll.*/
/* Durch .hide() werden die ausgewählten Elemente versteckt.*/
/* Durch .fadeIn() werden die ausgewählten Elemente wieder eingeblendet und durch den Parameter 2000 Verzögert so entsteht die Animation.*/

$('li').hide().fadeIn(2000);

/*3. Beispiel - Hier noch einmal das gleiche nur das bei diesem Beispiel das Element über eine Class aufgerufen wird.*/

/* Duch $('.auswahl') wird ausgewählt - WO !!- etwas passieren soll.*/
/* Durch .hide() werden die ausgewählten Elemente versteckt.*/
/* Durch .fadeIn() werden die ausgewählten Elemente wieder eingeblendet und durch den Parameter 2000 Verzögert so entsteht die Animation.*/

$('.auswahl').hide().fadeIn(2000);

/*4. Beispiel - JQwery_Objekte in Variablen zwischenspeichern.*/

/* Die Schreibweise ist ähnlich wie bei PHP.*/
/* Hier wird der Variable $listitems alle auf der befindlichen Internetseite li - Elemente zugewiesen.*/
/* Dies ist praktisch wenn man mit einem Query Objekt öffters arbeitet. */

$listitems = $('li');

/*5. Beispiel - Hier werden alle Elemente ausgewählt welche UNGLEICH !! der ID ONE !! sind. */

/* Durch $('span[id != "one"]') wird ausgewählt - WO !!- etwas passieren soll.*/
/* Durch .hide() werden die ausgewählten Elemente versteckt.*/
/* Durch .delay() wird für eine Pause gesorgt die Zeit entspricht dem angegebenen Parameter.*/
/* Durch .fadeIn() werden die ausgewählten Elemente wieder eingeblendet und durch den Parameter 1400 Verzögert so entsteht die Animation.*/

$('span[id!="one"]').hide().delay(500).fadeIn(1400);

/*6. Beispiel - Hier werden alle Elemente ausgewählt welche UNGLEICH !! der ID ONE !! sind.*/


