<?php

namespace App;
require_once "vendor/autoload.php";

$workWithNumbers = new WorkWithNumbers("77723423742");
echo "\n" . "Число: " . $workWithNumbers->getNumber() . "\n";
echo "Сумма цифр числа: " . $workWithNumbers->SumNumbers() . "\n";
$numeral = 7;
echo \sprintf("Количество вхождений числа {%s}: ", $numeral) . $workWithNumbers->NumberOccurrence($numeral) . "\n";

$workWithStrings = new WorkWIthStrings("Хасанов Aртур Mаратович");
echo "\n" . "Полный вариант: " . $workWithStrings->getFio() . "\n";
echo "Скоращенный вариант: " . $workWithStrings->LittleFioReturn() . "\n";


$workWithFiles = new WorkWithFiles("./Property/The Words.txt");
echo "\n" . $workWithFiles->ReadingFile() . "\n";
$workWithFiles->WritingFile("./CreatedFiles/hello.txt", "./Property/Hello world!");