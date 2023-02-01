<?php 

class User{
    
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private array $grades;
    
    public function __construct(string $firstname, string $lastname, string $email, array $grades){
        
        $this->id = -1;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->grades = $grades;
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
    
    public function getGrades() : array
    {
        return $this->grades;
    }

    public function setGrades(string $grades) : void
    {
        $this->grades = $grades;
    }
    
    //Méthodes
    
    public function getFullName() : string
    {
        
        return $this->firstname." ".$this->lastname;
    }
    
    public function addGrade($int) : array
    {
        
        $this->grades.array_push($int);
        
        return $this->grades;
    }
    
    public function removeGrade($int) : array
    {
        
        for($i = 0; $i < count($this->students); $i++)
        {
            if ($this->grades[$i] === $int)
            {
                unset($this->grades[$i]);
                return $this->grades[$i];
            } 
        }
        
        return $this->grades;
    }
    
    public function getAverage() : float
    {
        
        $total = 0;
        
        for($i = 0; $i < count($this->grades); $i++){
            
            $total += $this->grades[$i];
        }
        
        return $total/count($this->grades);
    }
}

?>