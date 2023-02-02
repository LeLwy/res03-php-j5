<?php 

class User{
    
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    
    public function __construct(string $firstname, string $lastname, string $email){
        
        $this->id = -1;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
    
    public function getId() : int
    {
        return $this->id;
    }

    public function setId(string $id) : void
    {
        $this->id = $id;
    }
    
    public function getFirstName() : string
    {
        return $this->firstname;
    }

    public function setFirstName(string $firstname) : void
    {
        $this->firstname = $firstname;
    }
    
    public function getLastName() : string
    {
        return $this->lastname;
    }

    public function setLastName(string $lastname) : void
    {
        $this->lastname = $lastname;
    }
    
    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    //Méthodes
    
    public function getFullName() : string
    {
        
        return $this->firstname." ".$this->lastname;
    }
}

?>