<?php
class Genre{
    private string $nomDuGenre;
    private array $films;

    public function __construct(string $nomDuGenre){
        $this -> nomDuGenre = $nomDuGenre;
        $this -> films = [];
    }


    public function getNomDuGenre()
    {
        return $this->nomDuGenre;
    }


    public function setNomDuGenre($nomDuGenre)
    {
        $this->nomDuGenre = $nomDuGenre;
    }


    public function getFilms()
    {
        return $this->Films;
    }


    public function setFilms($Films)
    {
        $this->Films = $Films;
    }


    public function recupererFilms(Film $film){
        $this -> films[] = $film;
    }
    
    public function __tostring() : string
        {
    $this -> nomDuGenre;
    }

    public function afficherParGenre(){
        $result = "<h2>$this :</h2>";
        foreach ($this->films as $film){
            $result .= "$film<br>";
        }
        return $result;
    }


}
?>