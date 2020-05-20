<?php

declare(strict_types=1);
namespace App;

class WorkWithFiles
{
    protected string $path;

    /**
     * WorkWithFiles constructor.
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /*
     * Полностью считывает файл по указанному пути
     */
    public function ReadingFile(): string
    {
        return htmlentities(file_get_contents($this->path));
    }

    /*
     * Создает файл в папке с введенным текстом
     */
    public function WritingFile(string $filename, string $str)
    {
        $fd = fopen($filename, 'w') or die("не удалось создать файл");
        fwrite($fd, $str);
        fclose($fd);
    }
}