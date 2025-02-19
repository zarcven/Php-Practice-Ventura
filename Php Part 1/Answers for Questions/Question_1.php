<?php
class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = "Alice";
$person->age = 25;

print_r($person);
/* What is the out of print_r($person);?
Answer:
Person Object
(
    [name] => Alice
    [age] => 25
)
*/
?>
