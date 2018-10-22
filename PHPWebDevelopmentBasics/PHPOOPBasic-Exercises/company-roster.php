<?php

class Employee{
    public $name;
    public $salary;
    public $position;
    public $department;
    public $email;
    public $age;

    function __construct($name, $salary, $position, $department, $email = "n\a", $age = -1)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function printInfo(string $department): void
    {
        if ($this->department === $department) {
            $salary = number_format($this->salary, 2, ".", "");
            echo $this->name . ' ' . $salary . ' ' . $this->email . ' ' . $this->age . PHP_EOL;
        }
    }
}

$n = intval(trim(fgets(STDIN)));
$employees = [];
$departmentsAvgSalary = [];
for($i = 0; $i < $n; $i++){
    $line = explode(' ', trim(fgets(STDIN)));
    $employee = new Employee($line[0], floatval($line[1]), $line[2], $line[3]);

    if (count($line) > 4) {
        for ($j = 4; $j < count($line); $j++) {
            $extra = $line[$j];
            if (preg_match('/\b(\d+)\b/', $extra)) {
                $employee->setAge(intval($extra));
            } else {
                $employee->setEmail($extra);
            }
        }
    }

    $employees[] = $employee;
}

//print_r($employees);

foreach ($employees as $employee) {
    $department = $employee->getDepartment();
    $salary = $employee->getSalary();
    if (!array_key_exists($department, $departmentsAvgSalary)) {
        $departmentsAvgSalary[$department] = 0;
    }
    $departmentsAvgSalary[$department] += $salary;
}
arsort($departmentsAvgSalary, SORT_NUMERIC);
reset($departmentsAvgSalary);
$highestPaidDeparment = key($departmentsAvgSalary);
usort($employees, function (Employee $firstEmployee, Employee $secondEmployee) {
    return $firstEmployee->getSalary() < $secondEmployee->getSalary();
});
echo 'Highest Average Salary: ' . $highestPaidDeparment . PHP_EOL;
foreach ($employees as $employee) {
    $employee->printInfo($highestPaidDeparment);
}