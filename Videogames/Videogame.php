<?php

require_once "Genre.php";
require_once "GameMode.php";

class Videogame {

    private string $name;
    private int $numPlayers;
    private GameMode $gameMode;
    private float $price;
    private array $genres = [];
   

    public function __construct(string $name, int $numPlayers, GameMode $gameMode, float $price, array $genres = []) {

        $this->name = $name;
        $this->numPlayers = $numPlayers;
        $this->gameMode = $gameMode;
        $this->price = $price;
        $this->genres = $genres;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getGameMode(): GameMode {
        return $this->gameMode;
    }

    public function getNumPlayers(): int {
        return $this->numPlayers;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function addGenre(Genre $genre): void {
        $this->genres[] = $genre;
    }

    public function getGenres(): array {
        return $this->genres;
    }
}
?>