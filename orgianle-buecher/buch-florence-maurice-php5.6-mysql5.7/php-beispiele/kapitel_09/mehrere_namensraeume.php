<?php
namespace Eins;
const zahl = 1;

namespace Zwei;
/* geht nicht, zahl ist im aktuellen Namensraum nicht definiert */
// echo zahl;
/* geht nicht, da Eins\zahl in Zwei\Eins\zahl aufgelöst wird */
//echo Eins\zahl; 
/* so geht es: */
echo \Eins\zahl;

?>