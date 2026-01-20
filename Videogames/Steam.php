<?php

require_once "Videogame.php";
require_once "Genre.php";

class Steam {

    private array $videogames = [];

    public function __construct(array $videogames = []) {

        $this->videogames = $videogames;
    }

    public function addVideoGame(Videogame $game): void {
        $this->videogames[] = $game;
    }

    public function getAllVideogames(): array {
        return $this->videogames;
    }

    public function getAveragePrice(): float {

        $total = 0;

        foreach($this->videogames as $game) {
            $total += $game->getPrice();
        }

        return $total / count($this->videogames);
    }

    public function getGameByGenre(Genre $genre): array {

        $gamesByGenre = [];

        foreach($this->videogames as $game) {
            $genresIn = $game->getGenres();
            if(in_array($genre, $genresIn, true)) {
                $gamesByGenre[] = $game;
            }
        }
        return $gamesByGenre;
    }
}
?>