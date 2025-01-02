<?php
// oop.php

class StringProcessor {
    private $strings;

    public function __construct($strings) {
        $this->strings = $strings;
    }

    public function processStrings() {
        foreach ($this->strings as $string) {
            $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);
            $reversedString = strrev($string);

            echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
        }
    }
}

$strings = ["Hello", "World", "PHP", "Programming"];
$stringProcessor = new StringProcessor($strings);
$stringProcessor->processStrings();
?>
