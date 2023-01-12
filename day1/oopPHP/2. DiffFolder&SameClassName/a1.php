<?php

// Name space is used to seperate files with same name and same classes too.
// Using namespace
//use Abc;

//After assigning a name space to each files then we have to use namespace. Namespaces are representatives now.

// require namespace/filename.php;
require 'Abc/one.php';
require 'Pqr/one.php';

//Object 't1' is created with class name 'one' having namespace 'Abc';
$t1 = new Abc\one();
//Object 't2' is created with class name 'one' having namespace 'Pqr';
$t2 = new Pqr\one();

$t1->show();

echo "<br>";

$t2->show();

?>