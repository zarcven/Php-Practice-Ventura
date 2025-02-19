<?php
$fruits = ['apple','banana','orange'];
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);
/*
Question 15: What is the output of var_dump($chunkedArray);?
Answer:
array(2) {
  [0]=>
  array(2) {
    [0]=>
    string(5) "apple"
    [1]=>
    string(6) "banana"
  }
  [1]=>
  array(1) {
    [0]=>
    string(6) "orange"
  }
}
*/
?>