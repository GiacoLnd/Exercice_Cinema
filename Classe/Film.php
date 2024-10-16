<?php
class Film{
    private string $titre;
    private string $synopsis;
    private int $anneeSortie;
    private int $duree;
    private Genre $genre;
    private Realisateur $realisateur;

    public function __construct(string $titre, string $synopsis,int $anneeSortie, int $duree, Genre $genre, Realisateur $realisateur){
        $this -> titre = $titre;
        $this -> synopsis = $synopsis;
        $this -> anneeSortie = $anneeSortie;
        $this -> duree = $duree;
        $this -> genre = $genre;
        $this -> genre -> recupererFilms($this);
        $this -> realisateur = $realisateur;
        $this -> realisateur -> recupererReal($this);
        
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


    public function __tostring(){
        return ".$this -> titre";
    }

}















?>