<?php

require_once 'company.php';
require_once 'pokemon.php';
require_once 'parents.php';
require_once 'child.php';
require_once 'car.php';

class Person
{
    private $name;
    private $company;
    private $pokemon;
    private $parents;
    private $children;
    private $car;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        $company = isset($this->company)
            ? PHP_EOL . $this->company->getName() . ' '
            . $this->company->getDepartment() . ' '
            . $this->company->getSalary() . PHP_EOL
            : PHP_EOL;
        $car = isset($this->car)
            ? PHP_EOL . $this->car->getModel() . ' '
            . $this->car->getSpeed() . PHP_EOL
            : PHP_EOL;
        $pokemon = isset($this->pokemon)
            ? $this->listPokemon()
            : PHP_EOL;
        $parents = isset($this->parents)
            ? $this->listParents()
            : PHP_EOL;
        $children = isset($this->children)
            ? $this->listChildren()
            : PHP_EOL;
        $stringToReturn = $this->name . PHP_EOL;
        $stringToReturn .= 'Company:' . $company;
        $stringToReturn .= 'Car:' . $car;
        $stringToReturn .= 'Pokemon:' . $pokemon;
        $stringToReturn .= 'Parents:' . $parents;
        $stringToReturn .= 'Children:' . $children;
        return $stringToReturn;
    }

    private function listPokemon(): string
    {
        $stringToReturn = PHP_EOL;
        foreach ($this->pokemon as $currPokemon) {
            $stringToReturn .= $currPokemon->getName() . ' ' . $currPokemon->getType() . PHP_EOL;
        }
        return $stringToReturn;
    }

    private function listParents(): string
    {
        $stringToReturn = PHP_EOL;
        foreach ($this->parents as $currParent) {
            $stringToReturn .= $currParent->getName() . ' ' . $currParent->getBirthday() . PHP_EOL;
        }
        return $stringToReturn;
    }

    private function listChildren(): string
    {
        $stringToReturn = PHP_EOL;
        foreach ($this->children as $child) {
            $stringToReturn .= $child->getName() . ' ' . $child->getBirthday() . PHP_EOL;
        }
        return $stringToReturn;
    }

    public function addPokemon(Pokemon $pokemon)
    {
        $this->pokemon[] = $pokemon;
    }

    public function addParent(Parents $parents)
    {
        $this->parents[] = $parents;
    }

    public function addChildren(Child $children)
    {
        $this->children[] = $children;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Company
     */
    public function getCompany() : Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    /**
     * @return array
     */
    public function getPokemon(): array
    {
        return $this->pokemon;
    }

    /**
     * @return array
     */
    public function getParents(): array
    {
        return $this->parents;
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->car;
    }

    public function setCar(Car $car)
    {
        $this->car = $car;
    }
}