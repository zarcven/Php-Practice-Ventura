<?php
$person1 = [
    'first_name' => 'Maeve',
    'last_name' => 'Reid',
    'email' => 'reid@gmail.com'
];
$people = [
    $person1, //...[$person1]
    [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com'
    ],
    [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com'
    ],
];
echo $people[0]['first_name'];
echo $people[2]['email'];
/*
Question 13: What is the output of echo $people[0]['first_name'];?
Answer: Maeve

Question 14: What is the output of echo $people[2]['email'];?
Answer: jane@gmail.com
*/
?>