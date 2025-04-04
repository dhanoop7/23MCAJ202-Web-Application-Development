<?php
// Step 1: Store student names in an array
$students = array("John", "Aisha", "Zara", "Michael", "David");

// Step 2: Display original array
echo "Original Student List:\n";
print_r($students);

// Step 3: Sort in ascending order using asort
asort($students);
echo "\nStudent List in Ascending Order:\n";
print_r($students);

// Step 4: Sort in descending order using arsort
arsort($students);
echo "\nStudent List in Descending Order:\n";
print_r($students);
?>
