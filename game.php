<?php
// ranks and suits for cards
$ranks = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
$suits = ['♠', '♥', '♦', '♣'];

// function to get random card
function getRandomCard()
{
    global $ranks, $suits;
    $rank = $ranks[array_rand($ranks)];
    $suit = $suits[array_rand($suits)];
    return $rank . ' ' . $suit;
}

// Function to get random 5 cards
function generateHand()
{
    $hand = [];
    for ($i = 0; $i < 5; $i++) {
        $hand[] = getRandomCard();
    }
    return $hand;
}

// get the player's hand
$playerHand = generateHand();
