<?php

echo "DEBUG: PHP Test Array: Hello\n";

$people = Array();

$people[0]['name'] = "Bob";
$people[0]['role'] = "Coder";

$people[1]['name'] = "Jen";

$people[2]['role'] = "TBH";

echo "Name: ". $people[0]['name'] . "\n";
echo "Role: ". $people[0]['role'] . "\n";

echo "Name: ". $people[1]['name'] . "\n";
echo "Role: ". $people[1]['role'] . "\n";

echo "Name: ". $people[2]['name'] . "\n";
echo "Role: ". $people[2]['role'] . "\n";

var_dump($people);

?>
