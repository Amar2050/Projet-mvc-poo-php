<?php

require_once "Modele/GameManager.php";

class GameController {
    private $gameManager;

    public function __construct(){
        $this->gameManager = new GameManager();
        $this->gameManager->loadGames();
    }

    public function displayGames(){
        $games = $this->gameManager->getGames();
        require_once "view/games.view.php";
    }
    public function newGameForm(){
        require_once "view/new.game.view.php";
    }
    public function newGameValidation(){
        echo "validation";
    }


}
