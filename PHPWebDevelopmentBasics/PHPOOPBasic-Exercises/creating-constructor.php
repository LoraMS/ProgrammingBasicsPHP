<?php

namespace CreatingConstructor;

class Person{

    private $name;
    private $age;

    function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->name . " " . $this->age;
    }
}

$name = trim(fgets(STDIN));
$age = intval(trim(fgets(STDIN)));
$p = new Person($name, $age);
echo $p;
