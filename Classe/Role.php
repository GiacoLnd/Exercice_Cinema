<?php
class Role{
    private string $nomDuRole;
    private array $casts;

    
    public function __construct(String $nomDuRole){
        $this -> nomDuRole = $nomDuRole;
        $this -> casts = [];
    }


    public function getNomDuRole(): string
    {
        return $this->nomDuRole;
    }


    public function setNomDuRole(String $nomDuRole)
    {
        $this->nomDuRole = $nomDuRole;
    }



    public function getCasts() : Casting
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
        return $this -> nomDuRole;
     }
    

    public function afficherCast(){
        $result = "<h2>$this a été joué par les acteurs suivants :</h2>";
        foreach ($this->casts as $cast){
            $result .= "<strong>".$cast->getActeur()->getSurname()." ".$cast->getActeur()->getName()."</strong> dans le film <strong>".$cast->getFilm()->getTitre()."</strong><br>";
        }
        return $result;
    }
}


?>