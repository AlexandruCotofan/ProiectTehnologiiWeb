# Proiect: WoG (Workout Generator)
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <article>
        <header>
            <h1>WoG (Workout Generator) - Raport Tehnic</h1>
        </header>
        <div typeof="sa:AuthorsList">
            <h2>Autori:</h2>
            <ul>
                <li typeof="sa:ContributorRole" property="schema:author">
                    <span typeof="schema:Person" property="schema:author">
                        <meta property="schema:givenName" content="Alexandru">
                        <meta property="schema:familyName" content="Coțofan">
                        <span property="schema:name">Alexandru Coțofan</span>
                    </span>
                </li>
                <li typeof="sa:ContributorRole" property="schema:author">
                    <span typeof="schema:Person" property="schema:author">
                        <meta property="schema:givenName" content="Eusebiu">
                        <meta property="schema:familyName" content="Popescu">
                        <span property="schema:name">Eusebiu Popescu</span>
                    </span>
                </li>
            </ul>
        </div>
        <section role="doc-introduction">
            <h2>1. Introducere:</h2>
            <section role="doc-abstract">
                <h3>1.1. Abstract:</h3>
                <p>Să se creeze o aplicație Web ce le oferă utilizatorilor diverse tipuri de antrenamente
                    sportive personalizate în funcție de greutate, înălțime, vârstă, gen și altele.
                    Utilizatorii autentificați vor putea să specifice preferințe pentru antrenamentul dorit:
                    grupe de mușchi, durată, locație (aer liber, acasă) etc, iar aplicația va genera o rutină
                    cu instrucțiuni detaliate, plus exemple foto/video. Aplicația va oferi statistici relevante
                    pentru fiecare utilizator în parte, care vor fi disponibile și ca flux de date RSS. Mai mult,
                    un clasament al celor mai activi utilizatori va fi disponibil public, inclusiv în formatele
                    JSON și PDF.</p>
            </section>
        </section>
        <section>
            <h2>2. Descriere:</h2>
            <section>
                <h3>2.1. Front-end:</h3>
                <p>Proiectul are la bază o pagină de autentificare, una de
                    înregistrare, una de verificare, o pagină principală, una cu generatorul, una cu antrenamentele
                    generate, una cu rezultatul antrenamentului curent, una cu un clasament al celor mai active
                    persoane,
                    două cu statistici globale și personale, o pagină de citate motivaționale, una
                    cu săli recomandate și un link spre un calculator IMC extern. Majoritatea paginilor conțin un
                    header cu link-uri spre pagina de autentificare și clasament.</p>
                <section>
                    <h4>2.1.1. Pagina de autentificare:</h4>
                    <p>Pagina de autentificare este prima pagină a aplicației pentru un utilizator neautentificat și
                        are rolul de a autentifica utilizatorii pentru ca aceștia să aibă acces la generator,
                        să își poată reține datele și să poată apărea în clasament. Pentru a se autentifica,
                        utilizatorii
                        vor trebui să își introducă adresa de email și parola aleasă. În cazul în care un utilizator
                        nu are cont, își poate crea unul prin intermediul paginii de înregistrare.</p>
                </section>
                <section>
                    <h4>2.1.2. Pagina de înregistrare:</h4>
                    <p>Pagina de înregistrare are rolul de a permite utilizatorilor să
                        își creeze cont dacă nu au. Acest cont va putea fi folosit pentru
                        a primi acces deplin la aplicație. Utilizatorii vor trebui să își introducă
                        username-ul, parola, adresa de email, genul și vârsta. După crearea contului, vor
                        putea verifica contul prin intermediul unui link trimis pe email.</p>
                </section>
                <section>
                    <h4>2.1.3. Pagina de verificare:</h4>
                    <p>După urmarea link-ului trimis pe email, utilizatorii vor ajunge la pagina de verificare, care
                        le va valida contul, permițându-le accesul la restul aplicației.
                    </p>
                </section>
                <section>
                    <h4>2.1.4. Pagina principală:</h4>
                    <p>Pagina principală este prima pagină a aplicației, care are rolul
                        de a întâmpina fiecare utilizator, a prezenta pe larg aspectele
                        aplicației și a face legătura cu paginile de login, clasamentul, cele de statistici,
                        citate, săli și calculatorul IMC extern.</p>
                </section>
                <section>
                    <h4>2.1.4. Generatorul de antrenamente:</h4>
                    <p>Partea importantă a aplicației, acest generator primește informații
                        de la utilizator prin intermediul unui formular cu multiple selecții,
                        utilizatorul specificând genul, înălțimea, greutatea, vârsta, grupa de
                        mușchi pe care o dorește antrenată în principal, locația și dificultatea.</p>
                    <p>După introducerea datelor, utilizatorul le va trimite aplicației, care va
                        genera un antrenament personal pe baza lor: fiecare parte a antrenamentului
                        conține o imagine demonstrativă, numărul de ordine, numele exercițiului, durata,
                        instrucțiunile de executare, arderile estimate și un buton pentru a declara
                        încheierea sa. În orice moment, antrenamentul poate fi încheiat, utilizatorul fiind
                        trimis la pagina cu rezultatul, unde va putea accesa pagina cu statistici personale
                        sau clasamentul.</p>
                </section>
                <section>
                    <h4>2.1.5. Paginile de statistici:</h4>
                    <p>Aplicația conține două pagini de statistici: una de statistici globale și una de
                        statistici personale.</p>
                    <ul>
                        <li>Pagina de statistici globale conține, pentru fiecare utilizator, username-ul,
                            adresa de email, caloriile arse și antrenamentul preferat. Această pagină este
                            disponibilă și drept flux de date RSS.
                        </li>
                        <li>Pagina de statistici personale este pagina personală a fiecărui utilizator,
                            unde vor fi afișate: numărul de antrenamente, caloriile arse și antrenamentul
                            preferat, atât în total, cât și în cadrul lunii curente, și în comparație cu luna
                            precedentă.</li>
                    </ul>
                </section>
                <section>
                    <h4>2.1.6. Clasamentul:</h4>
                    <p>Această pagină, accesibilă de oricine, indiferent dacă are cont sau nu, afișează cele
                        mai active persoane, în ordinea numărului de kcal arse. Informațiile disponibile sunt:
                        numele, vârsta, înălțimea, greutatea, numărul de kcal arse și exercițiul preferat.</p>
                </section>
                <section>
                    <h4>2.1.7. Pagina de citate motivaționale:</h4>
                    <p>Această pagină conține un buton care generează câteva citate printr-un apel AJAX. După trei
                        utilizări, butonul dispare. De asemenea, pagina conține un link spre pagina principală.
                    </p>
                </section>
                <section>
                    <h4>2.1.8. Pagina de săli recomandate:</h4>
                    <p>Această pagină conține o bară de căutare care, la introducerea de caractere, prezintă toate
                        sălile disponibile ale căror nume încep cu caracterele introduse.
                    </p>
                </section>
            </section>
            <section>
                <h3>2.2. Back-end:</h3>
                <p>Această secțiune prezintă operațiile din spate ale aplicației pentru oferirea serviciilor
                    de către front-end. Funcțiile au fost realizate în PHP, datele despre conturi sunt
                    menținute într-o bază de date externă, iar antrenamentele sunt stocate în fișiere JSON.</p>
                <section>
                    <h4>2.2.1. Baza de date:</h4>
                    <p>Baza de date la care se conectează aplicația conține 6 tabele: users, info, clasament,
                        statistici, sali_sport și curent, fiecare cu propriile roluri:</p>
                    <ul>
                        <li>users: responsabil de administrarea fiecărui cont, câmpurile din acest tabel sunt:</li>
                        <ul>
                            <li>user_id: stochează id-ul fiecărui utilizator printr-un număr întreg.</li>
                            <li>user_name: stochează username-ul fiecărui utilizator.</li>
                            <li>password: stochează parola fiecărui utilizator.</li>
                            <li>email: stochează adresa de email a fiecărui utilizator, servind drept cheie primară.
                            </li>
                            <li>vkey: stochează cheia de verificare a fiecărui utilizator după crearea contului.</li>
                            <li>verified: verifică dacă un utilizator este verificat sau nu, folosind valorile 1 și 0.
                            </li>
                            <li>createdate: stochează data creării fiecărui cont.</li>
                            <li>gen: stochează genul fiecărui utilizator.</li>
                            <li>varsta: stochează vârsta fiecărui utilizator.</li>
                        </ul>
                        <li>info: responsabil de stocarea tuturor antrenamentelor generate, câmpurile din acest tabel
                            sunt:</li>
                        <ul>
                            <li>id: stochează id-ul fiecărui antrenament.</li>
                            <li>email: stochează email-ul utilizatorului care a realizat acest antrenament.</li>
                            <li>inaltime: stochează înălțimea aleasă pentru antrenament.</li>
                            <li>greutate: stochează greutatea aleasă pentru antrenament.</li>
                            <li>grupa_muschi_1: stochează prima grupă musculară aleasă pentru antrenament.</li>
                            <li>grupa_muschi_2: stochează a doua grupă musculară aleasă pentru antrenament,
                                în cazul în care a fost ales un regim compus.</li>
                            <li>locatie: stochează locația aleasă pentru antrenament.</li>
                            <li>dificultate: stochează dificultatea aleasă pentru antrenament.</li>
                            <li>data: stochează data la care a fost generat antrenamentul</li>
                            <li>calorii: stochează valoarea calorică a antrenamentului generat.</li>
                        </ul>
                        <li>clasament: responsabil de administrarea clasamentului, câmpurile din acest tabel sunt:</li>
                        <ul>
                            <li>nr_crt: stochează id-ul fiecărei intrări din clasament.</li>
                            <li>user_name: stochează username-ul fiecărui utilizator care apare în clasament.</li>
                            <li>email: stochează email-ul fiecărui utilizator care apare în clasament.</li>
                            <li>nr_antrenamente: stochează numărul de antrenamente realizate de fiecare utilizator
                                care apare în clasament.</li>
                            <li>antrenament_pref: stochează antrenamentul preferat al fiecărui utilizator.</li>
                            <li>calorii: stochează caloriile arse de fiecare utilizator până în prezent.</li>
                        </ul>
                        <li>statistici: responsabil de administrarea statisticilor, câmpurile din acest tabel sunt:</li>
                        <ul>

                            <li>id: stochează id-ul fiecărei intrări din paginile de statistici.</li>
                            <li>email: stochează email-ul fiecărui utilizator care apare în paginile de statistici.</li>
                            <li>antrenament_pref: stochează antrenamentul preferat al fiecărui utilizator.</li>
                            <li>nr_crt: stochează id-ul fiecărei intrări din paginile de statistici.</li>
                            <li>calorii: stochează caloriile arse de fiecare utilizator până în prezent.</li>
                        </ul>
                        <li>curent: responsabil de administrarea statisticilor utilizatorului conectat,
                            câmpurile din acest tabel sunt:</li>
                        <ul>
                            <li>id: stochează id-ul utilizatorului curent.</li>
                            <li>nume: stochează username-ul utilizatorului curent.</li>
                            <li>email: stochează email-ul utilizatorului curent.</li>
                            <li>nr_antrenamente: stochează numărul de antrenamente realizate de utilizatorul curent.
                            </li>
                            <li>antrenament_pref: stochează antrenamentul preferat al utilizatorului curent.</li>
                            <li>calorii: stochează caloriile arse de utilizatorului curent.</li>
                        </ul>
                        <li>sali_sport: responsabil de administrarea sălilor de sport disponibile, câmpurile din
                            acest tabel sunt:</li>
                        <ul>
                            <li>id: stochează id-ul fiecărei săli de sport din baza de date.</li>
                            <li>nume: stochează numele fiecărei săli de sport din baza de date.</li>
                        </ul>
                    </ul>
                </section>
                <section>
                    <h4>2.2.2. Conexiunea la baza de date:</h4>
                    <p>Conexiunea la baza de date se realizează prin funcții PHP atașate fișierelor relevante,
                        fiecare având aceste linii de cod:</p>
                    <figure typeof="schema:SoftwareSourceCode">
                        <figcaption>Cod de conectare la BD:</figcaption>
                        <pre>
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
                        </pre>
                    </figure>
                </section>
                <section>
                    <h4>2.2.3. Înregistrarea și autentificarea:</h4>
                    <p>La înregistrarea unui cont, dacă adresa de email nu exista în tabelul users, datele sunt
                        încărcate
                        în tabel, se generează vkey pentru verificare, se setează câmpul verified la 0 și se trimite un
                        email de confirmare la adresa introdusă. La folosirea link-ului de confirmare, dacă cheia se
                        potrivește, câmpul verified devine 1.</p>
                    <p>Pentru autentificare, se trimit datele pentru verificare și, dacă se potrivesc cu baza de date,
                        utilizatorul este autentificat și are acces deplin la aplicație, putându-se deloga oricând pe
                        pagina principală.</p>
                </section>
                <section>
                    <h4>2.2.4. Generarea antrenamentului:</h4>
                    <p>După introducerea tuturor datelor în formular și trimiterea sa, acestea sunt încărcate în tabelul
                        info, urmând să fie folosite pentru calcularea regimului de antrenament, alături de fișierele
                        JSON
                        asociate fiecărei grupe musculare. Momentan, singurul câmp care contează este câmpul "locație".
                    </p>
                </section>
                <section>
                    <h4>2.2.5. Actualizarea clasamentului:</h4>
                    <p>După confirmarea încheierii antrenamentului prin apăsarea butonului de încheiere, utilizatorul
                        este
                        trimis în pagina results.php, unde are loc actualizarea clasamentului: datele sunt preluate din
                        tabelele info și users, urmând ca cele relevante să fie introduse în tabelul clasament, astfel:
                    </p>
                    <figure typeof="schema:SoftwareSourceCode">
                        <figcaption>Cod de actualizare a clasamentului:</figcaption>
                        <pre>
$arrayLength = count($vector);
$i = 0;
while ($i < $arrayLength) {
    $bam = $vector[$i];
    $sql = "SELECT count(*) as total from info where email='$vector[$i]'";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $ceva = $data['total'];
    $sql3 = "select user_name from users where email='$vector[$i]'";
    $resultat = $conn->query($sql3);
    $data = mysqli_fetch_assoc($resultat);
    $user = $data['user_name'];
    $sql2 = "insert into clasament(email,nr_antrenamente,user_name) values ('$bam','$ceva','$user')";
    echo $bam;
    echo $ceva;
    echo $user;
    $result = $conn->query($sql2);
    if (!$result) {
    $sql1 = "update clasament set nr_antrenamente='$ceva' where email='$bam'";
    $result = $conn->query($sql1);
    }
    $i++;
}
                            </pre>
                    </figure>
                </section>
                <section>
                    <h4>2.2.6. Apelurile AJAX:</h4>
                    <p>Această aplicație conține două apeluri AJAX, fiecare cu propriul rol:</p>
                    <ul>
                        <li>Primul apel AJAX este responsabil de preluarea datelor din clasament, pentru a putea
                            fi afișate în cadrul tabelului, astfel:</li>
                        <figure typeof="schema:SoftwareSourceCode">
                            <figcaption>Cod AJAX pentru preluarea datelor din clasament:</figcaption>
                            <pre>
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "functii_php/data.php";
    var asynchronous = true;
    
    ajax.open(method, url, asynchronous);
    ajax.send();
    
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        console.log(data); //for debugging
    
        var html = "";
        for (var a = 0; a < data.length; a++) {
            var email = data[a].email;
            var user_name = data[a].user_name;
            var nr_antrenamente = data[a].nr_antrenamente;
            var calorii = data[a].calorii;
            var antrenament_pref = data[a].antrenament_pref;
    
            //appending  at html
            html += "&lt;tr&gt;";
            html += "&lt;td&gt;" + user_name + "&lt;/td&gt;";
            html += "&lt;td&gt;" + email + "&lt;/td&gt;";
            html += "&lt;td&gt;" + nr_antrenamente + "&lt;/td&gt;";
            html += "&lt;td&gt;" + calorii + "&lt;/td&gt;";
            html += "&lt;td&gt;" + antrenament_pref + "&lt;/td&gt;";
            html += "&lt;/tr&gt;";
        }
    
        document.getElementById("data").innerHTML = html;
        }
    }
                            </pre>
                        </figure>
                        <li>Al doilea apel AJAX este responsabil de generarea citatelor motivaționale astfel:</li>
                        <figure typeof="schema:SoftwareSourceCode">
                            <figcaption>Cod AJAX pentru generarea citatelor motivaționale:</figcaption>
                            <pre>
var nr = 1;
var userContainer = document.getElementById("user-info");
var btn = document.getElementById("btn");
btn.addEventListener("click", function () {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'http://localhost/rezerva/mot-' + nr + '.json');
    ourRequest.onload = function () {
        var ourData = JSON.parse(ourRequest.responseText);
        renderHTML(ourData);
    };
    ourRequest.send();
    nr++;
    if (nr &gt; 3) {
        btn.classList.add("hide-me");
    }
});

function renderHTML(data) {
    var htmlString = "";
    for (i = 0; i &lt; data.length; i++) {
        //        htmlString += "&lt;p&gt;&lt;center&gt;" + data[i].name + " a trimis mesajul:" + data[i].mesaj + ".&lt;/center&gt;&lt;/p&gt;";
        htmlString += "&lt;p&gt;&lt;center&gt;" + data[i].name + " said: " + "&lt;/center&gt;&lt;/p&gt;";
        htmlString += "&lt;p&gt;&lt;center&gt;" + data[i].mesaj + ".&lt;/center&gt;&lt;/p&gt;";
    }
    userContainer.insertAdjacentHTML('beforeend', htmlString);
}
                            </pre>
                        </figure>
                    </ul>
                </section>
                <section>
                    <h4>2.2.7. Fluxul RSS:</h4>
                    <p>Fluxul de date RSS este fișierul srss.xml, disponibil pe pagina statistici.php.</p>
                </section>
            </section>
        </section>
        <section>
            <h2>3. Împărțirea sarcinilor:</h2>
            <section>
                <h3>3.1. Eusebiu Popescu:</h3>
                <p>Sarcinile preluate de Eusebiu Popescu au fost concentrate pe partea de back-end, majoritatea
                    codului PHP fiind responsabilitatea sa. Cu toate acestea, sunt câteva pagini ale căror stil
                    a fost realizat de el, de exemplu epic.php.</p>
            </section>
            <section>
                <h3>3.2. Alexandru Coțofan:</h3>
                <p>Sarcinile preluate de Alexandru Coțofan au fost concentrate pe partea de front-end,
                    organizarea codului și, ocazional, propunerea de funcții pentru colegul de echipă.</p>
            </section>
        </section>
        <section role="doc-conclusion">
            <h2>4. Concluzie:</h2>
            <p>În concluzie, această aplicație are rolul de a genera antrenamente pentru utilizatori, a le 
                permite să își măsoare progresul și a îi motiva să continue să se antreneze prin competiție sau 
                citate motivaționale.</p>
        </section>
    </article>
</body>
</html>
