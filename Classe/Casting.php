<?php
Class Casting{
    private Acteur $acteur;
    private Film $film;
    private Role $role;

    public function __construct(Acteur $acteur, Film $film, Role $role){
        $this -> acteur = $acteur;
        $this -> film = $film;
        $this -> role = $role;
        $this -> acteur -> ajouterCast($this);
        $this -> film -> ajouterCast($this);
        $this -> role -> ajouterCast($this);
    }


    public function getActeur(): Acteur
    {
        return $this->acteur;
    }


    public function setActeur(Acteur $acteur)
    {
        $this->acteur = $acteur;

    }


    public function getRole(): Role
    {
        return $this->role;
    }


    public function setRole(Role $role)
    {
        $this->role = $role;
    }

    public function getFilm(): Film
    {
        return $this->film;
    }


    public function setFilm(Film $film)
    {
        $this->film = $film;
    }
    
    
    public function castingInfos(){
        return $this -> acteur -> getSurname() ." ". $this -> acteur -> getName() ." joue le role de ". $this -> role -> getNomDuRole()." dans le film ". $this -> film -> getTitre();
    }






 
}


?>