<?php

//Importing .php files according to the class name same with file name.
spl_autoload_register(function ($class_name) {
    require $class_name . ".php";
});

// After creating object of class 'one' below, 'one' will be argument in $class_name and will be passed to require method.
// Require method will be as: "require one.php" as 'one' class name is passed as argument.
$t = new one();
$t->show();

echo "<hr>";

$t1 = new two();
$t1->show();

?>