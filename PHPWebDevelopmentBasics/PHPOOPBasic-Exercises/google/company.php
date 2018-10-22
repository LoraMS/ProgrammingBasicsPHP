<?php

class Company
{
    public $name;
    public $department;
    public $salary;

    public function __construct(string $name, string $department, float $salary)
    {
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        number_format($this->salary, 2, '.', '');
    }

}