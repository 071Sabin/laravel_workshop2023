<?php
// Inheritance in php
// include vs require_once

class person
{
    private $name;
    private $age;
    private $is_mad;

    //Accepts and Assign the name age and is_mad arguments from object.
    public function set_person($name, $age, $is_mad)
    {
        $this->name = $name;
        $this->age = $age;
        $this->is_mad = $is_mad;
    }

    // function to show the elements passed from the object.
    public function show_person()
    {
        echo "Name:" . $this->name . "<br>";
        echo "Age:" . $this->age . "<br>";
        echo "Is_mad: " . $this->is_mad . "<br>";
    }
}

class student extends person
{
    private $roll;
    private $batch;


    public function set_student($roll, $batch)
    {
        $this->roll = $roll;
        $this->batch = $batch;
    }

    // function to show the elements passed from the object.
    public function show_student()
    {
        echo "Roll:" . $this->roll . "<br>";
        echo "Batch:" . $this->batch . "<br>";
    }
}

// HERE WE ARE INHERITING CLASS "person" TO CLASS "student"
// ALL THE FUNCTIONS THAT CLASS "person" HAS CAN BE ACCESSED INSIDE "student" class.
// here we are using $this because all the variables are private.

// Creating an object for the method student and using the function of person class.
$s1 = new student();
$s1->set_person('Sabin', '20', true); //function of person class.
$s1->show_person();

echo "<hr>";

// Creating another object for the functions inside student class.
$s2 = new student();
$s2->set_student(909, 'CSE');
$s2->show_student();
?>