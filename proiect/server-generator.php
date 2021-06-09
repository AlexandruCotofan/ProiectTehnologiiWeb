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
    public $grupa_muschi;
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
     public function setGrupa_muschi($grupa_muschi)
    {
            $this->grupa_muschi=$grupa_muschi;
    }
     public function getGrupa_muschi()
    {
         return $this->grupa_muschi;
      
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
    

        $insert= $mysqli->query("INSERT INTO info(inaltime,greutate,grupa_muschi,locatie,dificultate,email) VALUES ('$this->inaltime','$this->greutate','$this->grupa_muschi', '$this->locatie','$this->dificultate','$email')");
    
    }
    public function generare_frumoasa(){
               
        header('Location: random.php');
        die;
//                $fileName = $this->grupa_muschi . ".json";
//                $locatie = $this->locatie;
//                $json = file_get_contents($fileName);
//                $json_data = json_decode($json, true);
//
//                if($locatie == "Aer liber" || $locatie == "Acasa"){
//                    foreach($json_data as $element){
//                        if($element['tip'] == "acasa"){
//                            echo'<p class="nume">' . $element['nume'] . '</p>';
//                            echo'<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
//                            echo'<p class="descriere">' . $element['descriere'] . '</p>';
//                            echo'<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
//                        }
//                    }
//                }
//                else{
//                    foreach($json_data as $element){
//                        echo'<p class="nume">' . $element['nume'] . '</p>';
//                        echo'<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
//                        echo'<p class="descriere">' . $element['descriere'] . '</p>';
//                        echo'<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
//                    }
//                }
    }
}       
 















