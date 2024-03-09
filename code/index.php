<?php
//Task 1
/*Imagine a lot of code here*/
$very_bad_unclear_name = "15 chicken wings";

//Write your code here:
$order = &$very_bad_unclear_name;
$order .= 'and 20 nuggets with cheese sauce';//concatenation

//Don't change the line below
echo "\nYour order is: $very_bad_unclear_name";

//Task 2
$value = 1234;//integer
echo "<br>";// "\n"
echo $value;

echo "<br>";

$value2 = 15.555;//float
echo $value2;

echo "<br>";
echo $value2 - 3.555;// output 12

echo "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo "Разница в расходах - ".($last_month - $this_month);

echo "<br>";
//Task 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;// the average number of days to learn a language
echo $days_per_language;