<?php

namespace DesignPattern\Structural\Facade\FileConverter\Normalizer\Video;

use DesignPattern\Structural\Facade\FileConverter\Normalizer\Normalizer;

class VideoNormalizer implements Normalizer
{
    public function normalize(string $fileName): void
    {
        echo "Iam normalizing The Video {$fileName} due to some data corrupt\n";
    }
}