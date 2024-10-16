<?php
class Realisateur extends Personne{
    private array $films;

    public function __construct( $name,  $surname,  $gender, $birthdate){
        parent::__construct($name, $surname, $gender, $birthdate);
        $this -> films = [];
    }

    


    public function getFilms()
    {
        return $this -> films;
    }


    public function setFilms(array $films)
    {
        $this -> films = $film;
    }


    public function recupererReal(Film $film){
        $this -> films[] = $film;
    }


    public function filmoReal(){
        $result = "<h2>$this :</h2>";
        foreach ($this->films as $film){
            $result .= "<br>". $film->getTitre();
        }
        return $result;
    }
}

?>