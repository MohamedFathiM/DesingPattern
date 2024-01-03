<?php

namespace DesignPattern\Structural\Facade\FileConverter\FileScanner;

abstract class FileScanner
{
    protected string $file;

    /**
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    abstract public function scan(): bool;

}