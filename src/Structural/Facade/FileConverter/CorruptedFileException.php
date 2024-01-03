<?php

namespace DesignPattern\Structural\Facade\FileConverter;

class CorruptedFileException extends \Exception
{

    public function __construct()
    {
        parent::__construct('Cannot Convert This File Type');
    }
}