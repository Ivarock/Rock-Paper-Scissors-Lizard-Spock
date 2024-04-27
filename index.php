<?php

echo "Let's play rock, paper, scissors, lizard, spock, dynamite\n";

// Constants for game choices
const ROCK = 0;
const PAPER = 1;
const SCISSORS = 2;
const LIZARD = 3;
const SPOCK = 4;
const DYNAMITE = 5;

// Conditions for who beats who

$conditions = [
    ROCK => [SCISSORS, LIZARD],
    PAPER => [ROCK, SPOCK],
    SCISSORS => [PAPER, LIZARD],
    LIZARD => [SPOCK, PAPER],
    SPOCK => [ROCK, SCISSORS],
    DYNAMITE => [ROCK, PAPER, SCISSORS, LIZARD, SPOCK]
];

// Map string choices to constants
$choice = [
    "rock" => ROCK,
    "paper" => PAPER,
    "scissors" => SCISSORS,
    "lizard" => LIZARD,
    "spock" => SPOCK,
    "dynamite" => DYNAMITE
];

$computerChoice = array_rand($conditions);

$playerChoice = strtolower(readline("Please enter your choice: "));

if (!array_key_exists($playerChoice, $choice)) {
    echo "Invalid choice! Please choose Rock, Paper, Scissors, Lizard, Spock or Dynamite \n";
    return;
}

$playerChoice = $choice[$playerChoice];

if (in_array($computerChoice, $conditions[$playerChoice])) {
    echo "Player wins!\n";
} elseif (in_array($playerChoice, $conditions[$computerChoice])) {
    echo "Computer wins!\n";
} else {
    echo "It's a tie\n";
}

echo "Computer chose: " . array_search($computerChoice, $choice) . "\n";

