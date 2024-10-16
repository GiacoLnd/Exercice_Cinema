<?php
class Realisateur extends Personne{
    private array $films;

    public function __construct(string $name, string $surname, string $gender, string $birthdate){
        parent::__construct($name, $surname, $gender, $birthdate);
        $this -> films = [];
    }
    

    public function getFilms(): string 
    {
        return $this -> films;
    }


    public function setFilms(array $films)
    {
        $this -> films = $film;
    }


    public function ajouterFilm(Film $film){
        $this -> films[] = $film;
    }


    public function filmoReal(){
        $result = "<h2>$this , a réalisé:</h2>";
        foreach ($this->films as $film){
            $result .= "<br>". $film->getTitre()."<br>";
        }
        return $result;
    }
}

?>