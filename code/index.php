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
echo "<br />";// "\n"
echo $value;

echo "<br />";

$value2 = 15.555;//float
echo $value2;

echo "<br />";
echo $value2 - 3.555;// output 12

echo "<br />";
$last_month = 1187.23;
$this_month = 1089.98;
echo "Разница в расходах : ".($last_month - $this_month);

echo "<br />";
//Task 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;// the average number of days to learn a language
echo $days_per_language;

echo "<br />";

//Task 12
echo 8 ** 2;

echo "<br />";

//Task 13
$my_num = 1234;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo $answer;

echo "<br />";

//Task 14
$a = 10;
$b = 3;
$result = $a % $b;
echo $result;
echo "<br />";
if ($result === 0) {
    echo "Делится $result";
}
else {
    echo "Делится с остатком $result";
}

echo "<br />";

$st = pow(2,10);
$root = sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$arr_sum = 0;
foreach ($arr as $number)
{
    $arr_sum += $number ** 2;
}
echo "Корень суммы квадартов элементов : " . sqrt($arr_sum);

$square_root1 = sqrt(379);
echo "<br />Корень из числа 379, округлённый до целых: " . round($square_root1);
echo "<br />Корень из числа 379, округлённый до десятых: " . round($square_root1,1);
echo "<br />Корень из числа 379, округлённый до сотых: " . round($square_root1,2);

$square_root2 = sqrt(587);
echo "<br />Корень из числа 587, округленный в меньшую сторону: " . floor($square_root2);
echo "<br />Корень из числа 587, округленный в большую сторону: " . ceil($square_root2);

$arr_number = [4,-2,5,19,-130,0,10];
echo "<br />Максимальное число: " . max($arr_number);
echo "<br />Минимальное число: " . min($arr_number);

echo "<br />" .  rand(1,100);//random value 1-100
$arr_random = [];
for ($i = 0; $i < 10; $i++)
{
    $arr_random[$i] = rand(1, 100);
}

$a = 66;
$b = 128;
echo "<br />" . abs($a-$b);
$Array = [1,2,-1,-2,3,-3];
$newArray = [];
echo "<br />Массив с положительными числами: ";
for ($i = 0;$i < 6; $i++)
{
    $newArray[$i] = abs($Array[$i]);
}
foreach ($newArray as $num)
{
    echo $num . " ";
}

$numberDiv = 52;
$arrDiv = [];
for ($i = 1;$i <= $numberDiv;$i++)
{
    if (($numberDiv % $i) == 0) {
        $arrDiv[] = $i;
    }
}
echo "<br />Делители числа $numberDiv : ";
foreach ($arrDiv as $num) {
    echo $num . " ";
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumOfDigits = 0;
$counter = 0;
while( 10 >=  $sumOfDigits) {
    $sumOfDigits += $array[$counter];
    $counter += 1;
}
echo "<br />Нужно сложить $counter первых элементов";

//Task 15
function printStringReturnNumber(): int
{
    echo "<br />Hello, World!";
    return 7355608;
}
$my_num = printStringReturnNumber();
echo "<br />" . $my_num;

//Task 16
function increaseEnthusiasm(string $string): string
{
    return $string . "!";
}
echo "<br />" . increaseEnthusiasm("Hello,World");
function repeatThreeTimes(string $string):string
{
    return str_repeat($string, 3);
}
echo "<br />" . repeatThreeTimes("Hello!");

echo "<br />" . repeatThreeTimes(increaseEnthusiasm("Hi"));
function cut(string $string, int $number = 10): string
{
    return mb_strcut($string, 0, $number, 'utf-8');
}

function StrRecursion(array $arr): void
{
    if (count($arr) > 0) {
        echo $arr[0] . " ";
        array_shift($arr);
        StrRecursion($arr);
    }
}

echo "<br />Массив с помощью рекурсии : ";
StrRecursion($Array);

function SumOfDigits(int $number): int
{

    $SumDigits =  array_sum(str_split($number));
    if (9 < $SumDigits) {
        return SumOfDigits($SumDigits);
    }
    return $SumDigits;
}

echo "<br />" . SumOfDigits(589123085123);

//Task 17
function StringX(string $string, int $number): array
{
    $array = [];
    for ($i = 1; $i <=$number;$i++){
        $array[$i] = str_repeat($string,$i);
    }
    return $array;
}
echo "<br />";
foreach (StringX("x",7) as $str)
{
    echo $str;
}

function arrayFill(string $string, int $number):array
{
    return str_split(str_repeat($string,$number),strlen($string));
}

echo "<br />";

foreach (arrayFill("x",5) as $str){
    echo $str;
}
$doubleArray = [[1,2,3],[4,5],[6]];
function SumOfDigitsDoubleArray(array $array): int
{
    $sum = 0;
    foreach ($array as $Array){
        foreach ($Array as $number){
            $sum +=$number;
        }
    }
    return $sum;
}
echo "<br />Сумма числе в двумерном массиве : " . SumOfDigitsDoubleArray($doubleArray);

$newDoubleArray = [];
$counter = 0;
for ($i = 0; $i < 3; $i++)
{
    for($j = 0; $j < 3;$j++)
    {
        $newDoubleArray[$i][$j] =$counter++;
    }
}
$massive = [2,5,3,9];
$result = $massive[0] * $massive[1] +$massive[2]*$massive[3];
echo "<br />$result";

$user = ["name" => "Давыдов", "surname" => "Павел", "patronymic" => "Алексеевич"];
echo "<br />";
echo $user["name"] . ' ' . $user["surname"] . ' '. $user["patronymic"];

$date = ["year" => "2023", "month" => "March", "day" => "9"];
echo "<br />";
echo $date["year"] . ' ' . $date["month"] . ' ' . $date["day"] . ' ';

$array = ['a', 'b', 'c', 'd', 'e'];
echo "<br />Количество элементов: " . count($array); // quantity of elements
echo "<br />Последний элемент: " . end($array); // last element
echo "<br />Предпоследний: " . prev($array); // penultimate element
echo "<br />";