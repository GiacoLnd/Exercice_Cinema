<?php 

class Personne{
    protected string $name;
    protected string $surname;
    protected string $gender;
    protected Datetime $birthdate;


    public function __construct(string $name, string $surname, string $gender, String $birthdate){
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> gender = $gender;
        $this -> birthdate = new DateTime($birthdate);
    }

    public function getName() : string
    {
        return $this->name;
    }


    public function setName($name) 
    {
        $this->name = $name;
    }


    public function getSurname() : string
    {
        return $this->surname;
    }


    public function setSurname($surname)
    {
        $this->surname = $surname;
    }


    public function getGender() : string
    {
        return $this->gender;
    }


    public function setGender($gender)
    {
        $this->gender = $gender;
    }


    public function getBirthdate() : String
    {
        return $this->birthdate->format('d/m/Y');
    }


    public function setBirthdate($birthdate)
    {
        $this->birthdate = new DateTime($birthdate);

    }


    public function __toString(){
        return $this -> surname ." ". $this -> name;
    }


    function calculteAge(): int{                      // Intégration du calcul de l'âge de la personne
        $naissance = $this->birthdate->format("Y");
        $annee = date("Y");
        $age = $annee - $naissance; 
        return $age;
    }


    public function getInfos(){
        return "<br>".$this." (".$this -> gender.", ".$this->calculteAge()." ans) est né le ". $this->getBirthdate();
    }
}
?>