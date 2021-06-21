<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Training</title>
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

    <section class = "training__container">
        <h1 class = "training__title">ANTRENAMENT GENERAT:</h1>
        <section class = "training__container__item">
            <img src = "poze/pushup.jpg" class = "training__container__item__image">
            <p>Ordine: 1</p>
            <p>Tip exercițiu: Flotări</p>
            <p>Număr: 20</p>
            <p>Instrucțiuni: Întindeți corpul în linie dreaptă, sprijinit de degetele de la picioare 
                și palmele mâinilor, brațele întinse. Pentru o singură flotare îndoiți brațele până 
                când pieptul atinge sau este aproape de podea, apoi împingeți brațele până când 
                reveniți la poziția inițială.</p>
            <p>Ardere estimată: 3.4 kcal</p>
            <button class = "training__btn">Marcați drept terminat</button>
        </section>
        <section class = "training__container__item">
            <img src = "poze/squat.jpg" class = "training__container__item__image">
            <p>Ordine: 2</p>
            <p>Tip exercițiu: Genuflexiuni</p>
            <p>Număr: 20</p>
            <p>Instrucțiuni: Rămâneți în picioare cu brațele întinse înainte. Pentru o singură 
                genuflexiune îndoiți picioarele până când coapsele sunt paralele cu podeaua, apoi 
                împingeți picioarele până când reveniți la poziția inițială.
            </p>
            <p>Ardere estimată: 3.1 kcal</p>
            <button class = "training__btn">Marcați drept terminat</button>
        </section>
        <section class = "training__container__item">
            <img src = "poze/lunge.jpg" class = "training__container__item__image">
            <p>Ordine: 3</p>
            <p>Tip exercițiu: Fandări</p>
            <p>Număr: 30</p>
            <p>Instrucțiuni: Porniți dintr-o poziție verticală. Pentru o singură fandare, 
                faceți un pas în față și îndoiți picioarele până când ambele formează 
                un unghi de 90°. Rămâneți în această poziție câteva secunde, apoi reveniți la 
                poziția inițială.
            </p>
            <p>Ardere estimată: 2.9 kcal</p>
            <button class = "training__btn">Marcați drept terminat</button>
        </section>
        <a class = "training__btn" href = "results.php">Încheiați antrenamentul</a>
    </section>

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