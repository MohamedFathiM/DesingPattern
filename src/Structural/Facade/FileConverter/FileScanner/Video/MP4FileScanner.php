<?php

namespace DesignPattern\Structural\Facade\FileConverter\FileScanner\Video;

use DesignPattern\Structural\Facade\FileConverter\FileScanner\FileScanner;

class MP4FileScanner extends FileScanner
{

    public function scan(): bool
    {
        return (bool)rand(0, 1);
    }
}