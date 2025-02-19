<?php
$fruits = ['Mango', 'Banana', 'Orange', 'Grapes', 'Watermelon'];
echo "<ol>";
for ($i = 0; $i < count($fruits); $i++) {
    echo "<li>" . $fruits[$i] . "</li>";
}
echo "</ol>";
?>