<?php
require 'header.php';
require 'DBcon.php';
$config=require'database.php';
$db=DBcon::getDB($config);
?>

<?php
require 'footer.php';
?>
