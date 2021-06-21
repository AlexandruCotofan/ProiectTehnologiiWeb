<?php
 
$web_url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
 
$str = "<?xml version='1.0' ?>";
$str .= "<rss version='2.0'>";
    $str .= "<channel>";
        $str .= "<title>FORMAT RSS</title>";
        $str .= "<description>STATISTICI</description>";
        $str .= "<language>romana</language>";
        $str .= "<link>$web_url</link>";
 
        $conn = mysqli_connect("localhost", "root", "", "login_db");
        $result = mysqli_query($conn, "SELECT * FROM statistici ORDER BY nr_crt DESC");
 
        while ($row = mysqli_fetch_object($result))
        {
            $str .= "<item>";
                 $str .= "<id>" .$row->id . "</id>";
                $str .= "<email>" .$row->email . "</email>";
                $str .= "<nr_antrenamente>" .$row->nr_crt. "</nr_antrenamente>";
                $str .= "<calorii>" .  $row->calorii . "</calorii>";
                $str .= "<preferat>" . $row->antrenament_pref . "</preferat>";
            $str .= "</item>";
        }
 
    $str .= "</channel>";
$str .= "</rss>";
 
file_put_contents("srss.xml", $str);
  header("Location: srss.xml");
?>