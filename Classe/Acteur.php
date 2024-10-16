<?php
class Acteur extends Personne{

    private array $casts;

    public function __construct (string $name, string $surname, string $gender, string $birthdate){
        parent::__construct($name, $surname, $gender, $birthdate);
        $this -> casts = [];
    }


    public function getCasts() : array
    {
        return $this->casts;
    }


    public function setCasts(array $casts)
    {
        $this->casts = $cast;
    }


    public function ajouterCast(Casting $cast){
        $this -> casts[] = $cast;
    }


    public function afficherCast(){
        $result = "<h2>$this, a incarné :</h2>";
        foreach ($this->casts as $cast){
            $result .= "<br>". $cast->getRole()->getNomDuRole()." dans le film ".$cast->getFilm()->getTitre()."<br>";
        }
        return $result;
    }
    }




?>