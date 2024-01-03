<?php

namespace DesignPattern\Structural\Facade\FileConverter\Compress\Types;

use DesignPattern\Structural\Facade\FileConverter\Compress\Compress;

class GZCompress implements Compress
{

    public function compress(string $fileName): void
    {
        echo "File has been Compressed To GZ File\n";
    }
}