<?php

require_once "Genre.php";
require_once "GameMode.php";
require_once "Videogame.php";
require_once "Steam.php";

//Videogames
$game1 = new Videogame("FIFA 24", 4, GameMode::Multiplayer, 69.99, [Genre::Sport]);
$game2 = new Videogame("The Witcher 3", 1, GameMode::SinglePlayer, 39.99, [Genre::Rol, Genre::Action]);
$game3 = new Videogame("Call of Duty: Modern Warfare", 5, GameMode::Multiplayer, 79.99, [Genre::FPS, Genre::Action]);
$game4 = new Videogame("Super Mario Odyssey", 1, GameMode::SinglePlayer, 59.99, [Genre::Platforms, Genre::Action]);

//Platform
$steamPlatform = new Steam();

//Add viedogame
$steamPlatform->addVideoGame($game1);
$steamPlatform->addVideoGame($game2);
$steamPlatform->addVideoGame($game3);
$steamPlatform->addVideoGame($game4);

//Average Price
$averagePrice = $steamPlatform->getAveragePrice();
echo "Average price of registered games: " . $averagePrice . "€" . PHP_EOL;

//Games by Genre
$gamesByGenre = $steamPlatform->getGameByGenre(Genre::Action);
foreach($gamesByGenre as $game) {
    echo $game->getName() . PHP_EOL;
}

?>