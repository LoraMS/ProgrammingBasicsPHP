<?php

class DateModifier
{
    public $start;
    public $end;
    private $difference;

    public function __construct(string $start, string $end)
    {
        $this->start = str_replace(' ', '-', $start);
        $this->end = str_replace(' ', '-', $end);
    }

    private function calculateDifference(): string
    {
        $start = new DateTime($this->start);
        $end = new DateTime($this->end);
        $differenceInDays = $start->diff($end);
        $this->difference = $differenceInDays->format('%a');
        return $this->difference;
    }
    public function __toString()
    {
        $this->calculateDifference();
        return $this->difference . PHP_EOL;
    }
}