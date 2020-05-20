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
     *
     */
    public function LittleFioReturn(): string
    {
        if(preg_match('/^(\S+)\s+(\S)\S*\s+(\S)\S*$/', $this->fio, $Res))
            return $Res[1] . ' ' . $Res[2] . '. ' . $Res[3] . '.';
    }
}