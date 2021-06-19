<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Generator</title>
    <link rel = "stylesheet" href = "training.css">
</head>
<body>
    <img src="poze/logo.jpg" class="logo">
    
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href = "epic.php">HOME</a></li>
                <li><a href = "classment.php">CLASAMENT</a></li>
            </ul>
        </nav>
    </div>
    
    <div id="menuBtn">
        <img src="poze/menu.png" id="menu">
    </div>
      
    <form class = "training__form" action = "training.php">
        <h1 class = "training__title">GENERARE ANTRENAMENT</h1>
        <label>GEN</label>
        <select class = "training__select">
            <option selected disabled>Choose one</option>
            <option>Masculin</option>
            <option>Feminin</option>
        </select>
        <label>ÎNĂLȚIME</label>
        <select class = "training__select">
            <option selected disabled>Choose one</option>
            <option>sub 80 cm</option>
            <option>80-100 cm</option>
            <option>100-120 cm</option>
            <option>120-140 cm</option>
            <option>140-160 cm</option>
            <option>160-180 cm</option>
            <option>180-200 cm</option>
            <option>200+ cm</option>
        </select>
        <label>GREUTATE</label>
        <select class = "training__select">
            <option selected disabled>Choose one</option>
            <option>sub 30 kg</option>
            <option>30-40 kg</option>
            <option>40-50 kg</option>
            <option>50-70 kg</option>
            <option>70-90 kg</option>
            <option>90-110 kg</option>
            <option>110-130 kg</option>
            <option>130+ kg</option>
        </select>
        <label>VÂRSTĂ</label>
        <select class = "training__select">
            <option selected disabled>Choose one</option>
            <option>sub 10 ani</option>
            <option>10-15 ani</option>
            <option>15-20 ani</option>
            <option>20-30 ani</option>
            <option>30-40 ani</option>
            <option>40-50 ani</option>
            <option>50-65 ani</option>
            <option>65+ ani</option>
        </select>
        <label>GRUPA DE MUȘCHI 1</label>
        <select class = "training__select">
            <option selected disabled>Choose one</option>
            <option>Toate</option>
            <option>Membre superioare</option>
            <option>Abdomen</option>
            <option>Membre inferioare</option>
        </select>
        <label>GRUPA DE MUȘCHI 2</label>
        <select class = "training__select">
            <option selected disabled>Choose one</option>
            <option>Toate</option>
            <option>Membre superioare</option>
            <option>Abdomen</option>
            <option>Membre inferioare</option>
        </select>
        <label>LOCAȚIE</label>
        <select class = "training__select">
            <option selected disabled>Choose one</option>
            <option>Aer liber</option>
            <option>Acasă</option>
        </select>
        <label>DIFICULTATE</label>
        <select class = "training__select">
            <option selected disabled>Choose one</option>
            <option>Ușor</option>
            <option>Mediu</option>
            <option>Intensiv</option>
        </select>
        <input type = "submit" class = "training__btn" value = "Antrenează-mă!">
    </form>
    <script>
      var menuBtn =document.getElementById("menuBtn")
      var sideNav =document.getElementById("sideNav")
      var menu =document.getElementById("menu")
      sideNav.style.right = "-250px";
      
        menuBtn.onclick=function(){
            if(sideNav.style.right=="-250px"){
                sideNav.style.right = "0";
                menu.src="poze/close.png";
            }
            else{
                sideNav.style.right = "-250px";
                menu.src="poze/menu.png";
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
        });  
    </script>
</body>
</html>