<?php

namespace OpinionRoll;

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

$n = intval(fgets(STDIN));
$person = [];
for($i = 0; $i < $n; $i++){
    $line = explode(' ', fgets(STDIN));
    $person[] = new Person($line[0], intval($line[1]));
}

$filtered = array_filter($person, function($item){
    return $item->getAge() > 30;
});

usort($filtered, function(Person $p1, Person $p2){
    return $p1->getName() <=> $p2->getName();
});

foreach ($filtered as $key=>$value){
    echo $value->getName().' - '.$value->getAge()."\n";
}
