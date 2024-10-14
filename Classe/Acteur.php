<?php
class Acteur extends Personne{
    private array $films;

    public function __construct(string $name, $surname, $gender, $birthdate){
        parent :: __construct($name, $surname, $gender, $birthdate);
        $this -> films = [];
    }
    

    public function getFilm()
    {
        return $this->films;
    }


    public function setFilm($films)
    {
        $this-> films = $film;

        return $this;
    }


    public function récupérerActeur($film){
        $this -> films[] = $film;
    }

    public function filmoActeur(){
        $result = "<h2>$this :</h2>";
        foreach ($this -> films as $film){
            $result .= $film ;
        }
        return $result;
    }

}


?>