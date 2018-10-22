<?php

require_once './pokemon.php';

class Trainer{
    public $name;
    public $badges;
    public $pokemonCollection;

    function __construct(string $name)
    {
        $this->name = $name;
        $this->badges = 0;
        $this->pokemonCollection = [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function addPokemon(Pokemon $pokemon): void
    {
        $this->pokemonCollection[] = $pokemon;
    }

    public function hasPokemonOfElement(string $type): bool
    {
        foreach ($this->pokemonCollection as $pokemon) {
            if ($pokemon->getElement() === $type) {
                return true;
            }
        }
        return false;
    }
    public function receiveBadge(): void
    {
        $this->badges++;
    }
    public function loseBattle(): void
    {
        foreach ($this->pokemonCollection as $pokemon) {
            $pokemon->loseHealth(10);
        }
        $this->filterAlivePokemons();
    }
    private function filterAlivePokemons(): void
    {
        $this->pokemonCollection = array_filter(
            $this->pokemonCollection,
            function ($pokemon) {
                return $pokemon->getHealth() > 0;
            }
        );
    }
    public function displayAchievements(): void
    {
        echo $this->name . ' ' . $this->badges . ' ' . count($this->pokemonCollection) . PHP_EOL;
    }
}