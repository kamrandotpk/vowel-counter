<?php

use PHPUnit\Framework\TestCase;
use VowelCounter\VowelCounter;

class VowelCounterTest extends TestCase
{
    public function testFileContainsNoVowels(): void
    {
        $vowelCounter = new VowelCounter();

        $file = new \SplTempFileObject();
        $file->fwrite("Fly\n");
        $file->fwrite("Myths\n");

        $this->assertEquals(0, $vowelCounter->countVowelsInFile($file));
    }

    public function testEmptyFileContainsNoVowels(): void
    {
        $vowelCounter = new VowelCounter();
        $file = new \SplTempFileObject();

        $this->assertEquals(0, $vowelCounter->countVowelsInFile($file));
    }

    public function testCountVowelsInFileObject(): void
    {
        $vowelCounter = new VowelCounter();

        $file = new \SplTempFileObject();
        $file->fwrite("This is the first line\n");
        $file->fwrite("And this is the second.\n");

        $this->assertEquals(12, $vowelCounter->countVowelsInFile($file));
    }

    public function testCountVowelsInAString(): void
    {
        $vowelCounter = new VowelCounter();
        $str = "There are 11 vowels in this sentence.";

        $this->assertEquals(11, $vowelCounter->countVowelsInAString($str));
    }

    public function testCountVowelsInAnEmptyString(): void
    {
        $vowelCounter = new VowelCounter();
        $str = "";

        $this->assertEquals(0, $vowelCounter->countVowelsInAString($str));
    }
    
}