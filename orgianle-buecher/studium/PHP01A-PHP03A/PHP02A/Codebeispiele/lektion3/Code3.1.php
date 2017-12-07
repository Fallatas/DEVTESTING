<html>
  <body>
<?php
if(isset($_REQUEST['id']))
{
  print "    <p>Die id = ".$_REQUEST['id']."</p>\n";
}
else
{
?>
    <form action="<?php print $_SERVER['SELF_PHP']; ?>" method="post">
      <input type="hidden" name="id" value="17">
      <input type="submit" value="absenden">
    </form>
<?php
}
?>
  </body>
</html>
