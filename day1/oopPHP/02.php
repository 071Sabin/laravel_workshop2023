<?php

class student
{
    private $name;
    private $age;
    private $roll;

    // public function __construct()
    // {
    //     echo "hello there!!";
    // }

    public function set($a, $b, $c)
    {
        // USING $this TO ACCESS THE PRIVATE MEMBERS(PM).PM CAN BE ACCESSED INSIDE THIS CLASS ONLY.
        $this->name = $a;
        $this->age = $b;
        $this->roll = $c;
    }
    public function show()
    {
        // DOT(.) IS USED FOR CONCATINATION IN PHP, AS WE USE + FOR CONCATINATION IN JAVA.
        echo "Name:" . $this->name . "<br>";
        echo "Age:" . $this->age . "<br>";
        echo "Roll: " . $this->roll . "<br>";
    }
}

// CREATING AN OBJECT FOR STUDENT CLASS AND PASSING ARGUMENTS
$s1 = new student();
$s1->set("John", "22", "3");
$s1->show();

echo "<hr>";

// CREATING ANOTHER CLASS FOR STUDENT CLASS AND PASSING ANOTHER ARGUMENTS
$s2 = new student();
$s2->set("abraham", "23", "2");
$s2->show();


// this is to just call when the variables are public. public $name......;
// $s = new Student();
// $s->name = 'abc';
// echo $s->name;

?>