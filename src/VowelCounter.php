<?php

namespace VowelCounter;

class VowelCounter
{
    const VOWELS = ['a', 'e', 'i', 'o', 'u'];

    /**
     * @param \SplFileObject $file
     * @return int
     */
    public function countVowelsInFile(\SplFileObject $file): int
    {
        $vowelCount = 0;
        $file->rewind();
        foreach ($file as $line) {
            $vowelCount += $this->countVowelsInAString($line);
        }
        return $vowelCount;
    }

    /**
     * @param string $text
     * @return int
     */
    public function countVowelsInAString(string $text): int
    {
        $vowelCount = 0;
        foreach (count_chars($text, 1) as $character => $count) {
            if (in_array(strtolower(chr($character)), static::VOWELS)) {
                $vowelCount += $count;
            }
        }

        return $vowelCount;
    }
}