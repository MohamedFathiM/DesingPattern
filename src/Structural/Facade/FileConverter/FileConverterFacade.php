<?php

namespace DesignPattern\Structural\Facade\FileConverter;

use DesignPattern\Structural\Facade\FileConverter\Compress\Compress;
use DesignPattern\Structural\Facade\FileConverter\Compress\Types\ZipCompress;
use DesignPattern\Structural\Facade\FileConverter\Converter\Audio\AudioConverter;
use DesignPattern\Structural\Facade\FileConverter\Converter\Audio\AudioTypes;
use DesignPattern\Structural\Facade\FileConverter\Converter\Converter;
use DesignPattern\Structural\Facade\FileConverter\Converter\Video\VideoConverter;
use DesignPattern\Structural\Facade\FileConverter\Converter\Video\VideoTypes;
use DesignPattern\Structural\Facade\FileConverter\FileScanner\Audio\MP3FileScanner;
use DesignPattern\Structural\Facade\FileConverter\FileScanner\FileScanner;
use DesignPattern\Structural\Facade\FileConverter\FileScanner\Video\MP4FileScanner;
use DesignPattern\Structural\Facade\FileConverter\Normalizer\Audio\AudioNormalizer;
use DesignPattern\Structural\Facade\FileConverter\Normalizer\Normalizer;
use DesignPattern\Structural\Facade\FileConverter\Normalizer\Video\VideoNormalizer;

class FileConverterFacade
{
    private string $file;
    private bool $isAudio = true;
    private FileScanner $fileScanner;
    private Normalizer $normalizer;
    private Converter $converter;
    private Compress $compress;

    public function __construct(string $filePath)
    {
        $this->file = $filePath;
        $this->detectType();
        $this->load();
    }

    private function detectType()
    {
        if (preg_match('/\.(mp3|aa|aac)/i', $this->file)) {
            $this->fileScanner = new MP3FileScanner($this->file);
            $this->normalizer = new AudioNormalizer();
            $this->converter = new AudioConverter();
            $this->compress = new ZipCompress();
        } else {
            $this->fileScanner = new MP4FileScanner($this->file);
            $this->normalizer = new VideoNormalizer();
            $this->converter = new VideoConverter();
            $this->compress = new ZipCompress();
            $this->isAudio = false;
        }
    }

    private function load()
    {
        if ($this->fileScanner->scan()) {
            $this->normalizer->normalize($this->file);
        } else {
            throw new CorruptedFileException();
        }
    }

    public function convert()
    {
        if ($this->isAudio) {
            $this->converter->convert($this->file, AudioTypes::AUDIO_MP3, AudioTypes::AUDIO_AAC);
        } else {
            $this->converter->convert($this->file, VideoTypes::AUDIO_AVI, VideoTypes::AUDIO_MP4);
        }
        $this->compress->compress($this->file);
    }
}
