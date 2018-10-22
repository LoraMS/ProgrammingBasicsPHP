<?php

class Number
{
    public $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function lastDigitAsWord()
    {
        $lastDigit = $this->number % 10;
        $digitAsWord = '';
        switch ($lastDigit) {
            case 0:
                $digitAsWord = 'zero';
                break;
            case 1:
                $digitAsWord = 'one';
                break;
            case 2:
                $digitAsWord = 'two';
                break;
            case 3:
                $digitAsWord = 'tree';
                break;
            case 4:
                $digitAsWord = 'four';
                break;
            case 5:
                $digitAsWord = 'five';
                break;
            case 6:
                $digitAsWord = 'six';
                break;
            case 7:
                $digitAsWord = 'seven';
                break;
            case 8:
                $digitAsWord = 'eight';
                break;
            case 9:
                $digitAsWord = 'nine';
                break;
        }

        return $digitAsWord;
    }
}