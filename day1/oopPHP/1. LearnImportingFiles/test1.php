<?php


//Simple importing of .php files with REQUIRE.
//Check test2.php file for more importing functions.
require 'one.php';
require 'two.php';

$t = new one();
$t->show();
echo "<br>";
$t1 = new two();
$t1->show();

?>