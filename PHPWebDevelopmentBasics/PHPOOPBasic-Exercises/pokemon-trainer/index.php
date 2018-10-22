<?php

include 'pokemon.php';
include 'trainer.php';

$elements = [];
$pokemons = [];

while(true){
    $input = explode(' ', trim(fgets(STDIN)));
    if($input[0] === 'Tournament'){
        break;
    }
    list($trainerName, $pokemonName, $pokemonElement, $pokemonHealth) = $input;

    $pokemons[] = new Pokemon($pokemonName, $pokemonElement,$pokemonHealth);
}

while (true){
    $element = trim(fgets(STDIN));
    if($element === 'End'){
        break;
    }

    $elements[] = $element;
}


/*
 function getTrainers(): array
{
    $trainers = array();
    while (true) {
        $pokemonInfo = explode(' ', trim(fgets(STDIN)));
        if ($pokemonInfo[0] === 'Tournament') {
            break;
        }
        $trainerName = $pokemonInfo[0];
        $pokemonName = $pokemonInfo[1];
        $pokemonElement = $pokemonInfo[2];
        $pokemonHealth = intval($pokemonInfo[3]);
        $trainer = trainerExists($trainers, $trainerName);
        $pokemon = new Pokemon($pokemonName, $pokemonElement, $pokemonHealth);
        if (!isset($trainer)) {
            $trainer = new Trainer($trainerName);
            $trainer->addPokemon($pokemon);
            $trainers[] = $trainer;
        } else {
            $trainer->addPokemon($pokemon);
        }
    }
    return $trainers;
}
*/
/*
function trainerExists(array $trainers, string $trainerName)
{
    foreach ($trainers as $trainer) {
        if ($trainer->getName() === $trainerName) {
            return $trainer;
        }
    }
    return null;
}
function doBattle(array $trainers)
{
    while (true) {
        $element = trim(fgets(STDIN));
        if ($element === 'End') {
            break;
        }
        foreach ($trainers as $trainer) {
            if ($trainer->hasPokemonOfElement($element)) {
                $trainer->receiveBadge();
            } else {
                $trainer->loseBattle();
            }
        }
    }
}
function listTournamentResults(array $trainers)
{
    usort($trainers, function (Trainer $firstTrainer, Trainer $secondTrainer) {
        return $firstTrainer->getBadgesCount() < $secondTrainer->getBadgesCount();
    });
    foreach ($trainers as $trainer) {
        $trainer->displayAchievements();
    }
}
 */

/*
 $trainers = getTrainers();
doBattle($trainers);
listTournamentResults($trainers);
 */