<?php
class Film{
    private string $titre;
    private string $synopsis;
    private int $anneeSortie;
    private int $duree;
    private Genre $genre;
    private Realisateur $realisateur;
    private array $casts;

    public function __construct(string $titre, string $synopsis,int $anneeSortie, int $duree, Genre $genre, Realisateur $realisateur){
        $this -> titre = $titre;
        $this -> synopsis = $synopsis;
        $this -> anneeSortie = $anneeSortie;
        $this -> duree = $duree;
        $this -> genre = $genre;
        $this -> genre -> ajouterFilm($this);
        $this -> realisateur = $realisateur;
        $this -> realisateur -> ajouterFilm($this);
        $this -> casts = [];
        
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

    }


    public function getSynopsis()
    {
        return $this->synopsis;
    }


    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
    }


    public function getAnneeSortie()
    {
        return $this->anneeSortie;
    }


    public function setAnneeSortie($anneeSortie)
    {
        $this->anneeSortie = $anneeSortie;
    }


    public function getDuree()
    {
        return $this->duree;
    }


    public function setDuree($duree)
    {
        $this->duree = $duree;
    }


    public function getGenre()
    {
        return $this->genre;
    }


    public function setGenre(Genre $genre)
    {
        $this->genre = $genre;
    }
    
    public function getRealisateur()
    {
        return $this -> realisateur;
    }


    public function setRealisateur(Realisteur $realisateur)
    {
        $this -> realisateur = $realisateur;
    }


    public function getCasts()
    {
        return $this->casts;
    }


    public function setCasts(Casting $casts)
    {
        $this->casts = $cast;
    }


    public function ajouterCast(Casting $cast){
        $this -> casts[] = $cast;
    }


    public function __toString(){
        return $this -> titre;
    }


    public function getInfos(){
        return "<h2>".$this." (". $this->anneeSortie.")</h2> Durée : ".$this->duree." minutes<br> Synopsis : ".$this->synopsis;
    }

    public function afficherCast(){
        $result = "<h2>$this</h2>";
        foreach ($this->casts as $cast){
            $result .= $cast->getRole()->getNomDuRole()." a été incarné par ".$cast->getActeur()->getSurname()." ".$cast->getActeur()->getName()."<br>";
        }
        return $result;
    }






}















?>