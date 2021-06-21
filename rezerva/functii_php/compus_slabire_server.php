<?php

    include("connection.php");
    include("function.php");
  
    
    $service=new User(NULL, [
    
    "uri" => "http://got-soap-service.com"
    
]);

class User
{
    public $email;
    public $gen;
    public $inaltime;
    public $greutate;
    public $varsta;
    public $grupa_muschi_1;
     public $grupa_muschi_2;
    public $locatie;
    public $dificultate;
    
    public function setInaltime($inaltime)
    {
            $this->inaltime=$inaltime;
    }
     public function getInaltime()
    {
         return $this->inaltime;
      
    }
     public function setGreutate($greutate)
    {
            $this->greutate=$greutate;
    }
     public function getGreutate()
    {
         return $this->greutate;
      
    }
     public function setVarsta($varsta)
    {
            $this->varsta=$varsta;
    }
     public function getVarsta()
    {
         return $this->varsta;
      
    }
     public function setGrupa_muschi1($grupa_muschi_1)
    {
            $this->grupa_muschi_1=$grupa_muschi_1;
    }
     public function getGrupa_muschi1()
    {
         return $this->grupa_muschi_1;
      
    }
     public function setGrupa_muschi2($grupa_muschi_2)
    {
            $this->grupa_muschi_2=$grupa_muschi_2;
    }
     public function getGrupa_muschi2()
    {
         return $this->grupa_muschi_2;
      
    }
     public function setLocatie($locatie)
    {
            $this->locatie=$locatie;
    }
     public function getLocatie()
    {
         return $this->locatie;
      
    }
     public function setDificultate($dificultate)
    {
            $this->dificultate=$dificultate;
    }
     public function getDificultate()
    {
         return $this->dificultate;
      
    }
    public function setGen($gen)
    {
            $this->gen=$gen;
    }
     public function getGen()
    {
         return $this->gen;
      
    }
    public function insertDb($user_data)
    {
        $mysqli= NEW MySQLi ('localhost','root','','login_db');
        $email=$user_data['email'];
        $this->email=$email;
    

        $insert= $mysqli->query("INSERT INTO info(inaltime,greutate,grupa_muschi_1,grupa_muschi_2,locatie,dificultate,email) VALUES ('$this->inaltime','$this->greutate','$this->grupa_muschi_1','$this->grupa_muschi_2', '$this->locatie','$this->dificultate','$email')");
    
    }
    public function generare_frumoasa(){
               
        header('Location: random.php');
        die;
    }
}       
 















