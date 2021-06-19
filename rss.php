<?php
 
$web_url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
 
$str = "<?xml version='1.0' ?>";
$str .= "<rss version='2.0'>";
    $str .= "<channel>";
        $str .= "<title>FORMAT RSS</title>";
        $str .= "<description>CLASAMENT</description>";
        $str .= "<language>romana</language>";
        $str .= "<link>$web_url</link>";
 
        $conn = mysqli_connect("localhost", "root", "", "login_db");
        $result = mysqli_query($conn, "SELECT * FROM clasament ORDER BY nr_antrenamente DESC");
 
        while ($row = mysqli_fetch_object($result))
        {
            $str .= "<item>";
                $str .= "<nume>" .$row->user_name . "</nume>";
                $str .= "<nr_antrenamente>" .$row->nr_antrenamente . "</nr_antrenamente>";
                $str .= "<email>" . $row->email. "</email>";
                $str .= "<calorii>" .  $row->calorii . "</calorii>";
                $str .= "<preferat>" . $row->antrenament_pref . "</preferat>";
            $str .= "</item>";
        }
 
    $str .= "</channel>";
$str .= "</rss>";
 
file_put_contents("rss.xml", $str);
  header("Location: rss.xml");
?>