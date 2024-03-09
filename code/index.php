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

echo "<br>";

//Task 12
echo 8 ** 2;

echo "<br>";

//Task 13
$my_num = 1234;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo $answer;

echo "<br>";

//Task 14
$a = 10;
$b = 3;
$result = $a % $b;
echo $result;
echo "<br>";
if ($result === 0)
    echo "Делится " . $result;
else
    echo "Делится с остатком " . $result;

echo "<br>";

$st = pow(2,10);
$root = sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$arr_sum = 0;
foreach ($arr as $number)
    $arr_sum += $number ** 2;
echo "Корень суммы квадартов элементов - " . sqrt($arr_sum);

$square_root1 = sqrt(379);
echo "<br>" . "Корень из числа 379, округлённый до целых: " . round($square_root1);
echo "<br>" . "Корень из числа 379, округлённый до десятых: " . round($square_root1,1);
echo "<br>" . "Корень из числа 379, округлённый до сотых: " . round($square_root1,2);

$square_root2 = sqrt(587);
echo "<br>" . "Корень из числа 587, округленный в меньшую сторону: " . floor($square_root2);
echo "<br>" . "Корень из числа 587, округленный в большую сторону: " . ceil($square_root2);

$arr_number = [4,-2,5,19,-130,0,10];
echo "<br>" . "Максимальное число: " . max($arr_number);
echo "<br>" . "Минимальное число: " . min($arr_number);

echo "<br>" .  rand(1,100);//random value 1-100
$arr_random = [];
for ($i = 0; $i < 10; $i++)
    $arr_random[$i] = rand(1,100);

$a = 66;
$b = 128;
echo "<br>" . abs($a-$b);
$Array = [1,2,-1,-2,3,-3];
$newArray = [];
echo "<br>" . "Массив с положительными числами: ";
for($i = 0;$i < 6; $i++)
    $newArray[$i] = abs($Array[$i]);
foreach($newArray as $num)
    echo $num . " ";

$numberDiv = 52;
$arrDiv = [];
for($i = 1;$i <= $numberDiv;$i++)
    if($numberDiv % $i == 0)
        $arrDiv[] = $i;
echo "<br>" . "Делители числа " . $numberDiv . ": ";
foreach ($arrDiv as $num)
    echo $num . " ";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumOfDigits = 0;
$counter = 0;
while($sumOfDigits <= 10) {
    $sumOfDigits += $array[$counter];
    $counter += 1;
}
echo "<br>" .  "Нужно сложить $counter первых элементов";