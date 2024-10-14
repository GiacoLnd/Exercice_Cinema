<?php
class Film{
    private string $titre;
    private string $synopsis;
    private int $dateDeSortie;
    private int $duree;
    private Acteur $acteur;

    public function __construct(string $titre, string $synopsis,int $dateDeSortie, int $duree, Acteur $acteur){
        $this -> titre = $titre;
        $this -> synopsis = $synopsis;
        $this -> dateDeSortie = $dateDeSortie;
        $this -> duree = $duree;
        $this -> acteur = $acteur;
        $this -> acteur -> récupérerActeur($this);
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


    public function getDateDeSortie()
    {
        return $this->dateDeSortie;
    }


    public function setDateDeSortie($dateDeSortie)
    {
        $this->dateDeSortie = $dateDeSortie;
    }


    public function getDuree()
    {
        return $this->duree;
    }


    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getActeur()
    {
            return $this->acteur;
    }


    public function setActeur($acteur)
    {
            $this->acteur = $acteur;
    }


    public function __tostring(){
        return ".$this -> titre";
    }









}



?>