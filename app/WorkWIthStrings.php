<?php

declare(strict_types=1);
namespace App;

class WorkWIthStrings
{
    protected string $fio;

    /**
     * WorkWIthStrings constructor.
     * @param string $fio
     */
    public function __construct(string $fio)
    {
        $this->fio = $fio;
    }

    /**
     * @return string
     */
    public function getFio(): string
    {
        return $this->fio;
    }

    /**
     * @param string $fio
     */
    public function setFio(string $fio): void
    {
        $this->fio = $fio;
    }

    /*
     * Возвращает сокращенное ФИО
     */
    public function LittleFioReturn(): string
    {
        $littleFIO = explode(" ", $this->fio);
        return $littleFIO[0] . ' ' . $littleFIO[1][0] . '. ' . $littleFIO[2][0] . '.';
    }
}