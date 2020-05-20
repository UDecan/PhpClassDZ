<?php

declare(strict_types=1);
namespace App;

class WorkWithNumbers
{
    protected string $number;

    /**
     * WorkWithNumbers constructor.
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /*
    * Возвращает сумму цифр числа
    */
    public function SumNumbers() : int
    {
        $sum = 0;
        for($i = 0; $i < strlen($this->number); $i++) {
            $sum += (int)$this->number[$i];
        }
        return $sum;
    }

    /*
     * Возвращает количество вхождений цифры в числе
     */
    public function NumberOccurrence(int $numeral) : int
    {
        $count = 0;
        for ($i = 0; $i < strlen($this->number); $i++){
            if ($numeral == $this->number[$i]){
                $count++;
            }
        }
        return $count;
    }
}