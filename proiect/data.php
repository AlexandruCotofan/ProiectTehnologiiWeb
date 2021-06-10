<?php
include 'functii_php/fetch_data.php';

      $sql = "SELECT * FROM clasament";
      $result = mysqli_query($conn, $sql);
        
        //storring in array;
$data=array();
while($row=mysqli_fetch_assoc($result))
{
    $data[]=$row;
}
//returning response in JSON format


echo json_encode($data);
?>