<?php

    include("connection.php");
    include("function.php");
  
    
    $service=new User(NULL, [
    
    "uri" => "http://got-soap-service.com"
    
]);

class User
{
    public $tip;
    public $your_goal;
  
    
    public function setTip($tip)
    {
            $this->tipe=$tip;
    }
     public function getTip()
    {
         return $this->tip;
      
    }
     public function setGoal($your_goal)
    {
            $this->your_goal=$your_goal;
    }
     public function getGoal()
    {
         return $this->your_goal;
      
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
 















