<?php
class Genre{
    private string $nomDuGenre;

    public function __construct(string $nomDuGenre){
        $this -> nomDuGenre = $nomDuGenre;
    }


    public function getNomDuGenre()
    {
        return $this->nomDuGenre;
    }


    public function setNomDuGenre($nomDuGenre)
    {
        $this->nomDuGenre = $nomDuGenre;
    }

    public function __tostring(){
        $this -> nomDuGenre;
    }
}
?>