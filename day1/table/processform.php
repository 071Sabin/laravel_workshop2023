<?php

$naam = "$_POST[name]";
$e_mail = "$_POST[email]";
$pwdd = "$_POST[password]";

$link = mysqli_connect("127.0.0.1", "root", "", "laravel") or die(mysql_error());
$q = "insert into laravel1 (namee, email, pwd) values ('$naam', '$e_mail', '$pwdd')";


mysqli_query($link, $q) or die(mysql_error());
echo "Inserted" . $naam;
echo "

";
mysqli_close($link);
?>