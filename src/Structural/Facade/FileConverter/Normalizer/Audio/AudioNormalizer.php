<?php

namespace DesignPattern\Structural\Facade\FileConverter\Normalizer\Audio;

use DesignPattern\Structural\Facade\FileConverter\Normalizer\Normalizer;

class AudioNormalizer implements Normalizer
{

    public function normalize(string $fileName): void
    {
        echo "Iam normalizing {$fileName} due to some data corrupt\n";
    }
}