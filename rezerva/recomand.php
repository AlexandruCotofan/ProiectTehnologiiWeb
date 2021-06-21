<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Generator</title>
    <link rel = "stylesheet" href = "css/training.css">
    <style type="text/css">
        .temp h1{
            text-align: center;
            text-transform: capitalize;
            margin-bottom: 3%;
            color: aqua;
        }
        .temp input{
            display: block;
            width: 60%;
            margin: 0 auto;
            height: 60px;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 20px;
            padding: 1px 7px;
            text-transform: capitalize;
        }
        #content{
            width: 60%;
            margin:2% auto;
            
             padding: 1px 7px;
             text-transform: capitalize;
            color: #ccc;
            font-size: 18px;
            
        }
    </style>
</head>
<body>
<!--    <img src="poze/logo.jpg" class="logo">-->
    
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href = "epic.php">HOME</a></li>
            </ul>
        </nav>
    </div>
    
    <div id="menuBtn">
        <img src="poze/menu.png" id="menu">
    </div>
    
    <div class="temp">
        <?php
        echo "<br>"; echo "<br>";
        ?>
        <h1> La aceste sali vei primi reducere la abonament pentru ca folosesti aplicatia noastra!</h1>
         <?php
        echo "<br>"; echo "<br>";
        ?>
        <input type="text" onkeyup="imu(this.value)" placeholder="live search">
        <div id="content">
            Introdu numele unei sali de fitness...
        </div>
        <script type="text/javascript">
            let content =document.getElementById('content');
            
            function imu(x){
                if(x.length==0){
                    content.innerHTML= ' Introdu numele unei sali de fitness...'
                }
                else{
                    var XML=new XMLHttpRequest();
                    XML.onreadystatechange=function(){
                        
                        if(XML.readyState==4 && XML.status==200){
                            content.innerHTML=XML.responseText;
                        }
                    };
                    XML.open('GET','search.php?q='+x,true);
                    XML.send();
                }
            }
         </script>
    </div>
</body>
</html>