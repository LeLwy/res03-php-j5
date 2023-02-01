<?php 

class School{
    
    private int $id;
    private User $teacher;
    private array $students;
    
    public function __construct(User $teacher){
        
        $this->id = -1;
        $this->teacher = $teacher;
        $this->students = [];
    }
    
    public function getId() : int
    {
        return $this->id;
    }

    public function setId(string $id) : void
    {
        $this->id = $id;
    }
    
    public function getTeacher() : User
    {
        return $this->teacher;
    }

    public function setTeacher(string $teacher) : void
    {
        $this->teacher = $teacher;
    }
    
    public function getStudents() : array
    {
        return $this->students;
    }

    public function setStudents(string $students) : void
    {
        $this->students = $students;
    }
    
    //Méthodes
    
    public function addStudent(Student $student) : array
    {
        
        $this->students.array_push($student);
        
        return $this->students;
    }
    
    public function removeStudent(Student $student) : array
    {
        
        $updatedStudents = [];
        
        for($i = 0; $i < count($this->students); $i++)
        {
            if ($this->students[$i]->getId() === $student->getId())
            {
                unset($this->students[$i]);
                return $this->students[$i];
            } 
        }
        
        return $this->students;
    }
}

?>