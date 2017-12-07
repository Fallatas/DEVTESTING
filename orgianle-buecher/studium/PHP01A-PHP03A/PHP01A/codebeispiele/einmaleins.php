<html>
<body>
<table border="1">
<?php
  $i = 1;
  for ($j = 1; $j <= 10; $j++)
  {
    print "<tr>\n";
    for ($i = 1; $i <= 10; $i++)
    {
      print " <td>$j * $i = ".($j*$i)."</td>";
    }
    print "</tr>\n";
  }
?>
</table>
</body>
</html>