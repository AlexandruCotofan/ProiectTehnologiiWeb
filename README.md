# Proiect: WoG (Workout Generator)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WoG (Workout Generator) - Raport Tehnic</title>
</head>
<body>
    <article>
        <header>
            <h1>WoG (Workout Generator) - Raport Tehnic</h1>
        </header>
        <div typeof = "sa:AuthorsList">
            <h2>Autori:</h2>
            <ul>
                <li typeof = "sa:ContributorRole" property = "schema:author">
                    <span typeof = "schema:Person" property = "schema:author">
                        <meta property = "schema:givenName" content = "Alexandru">
                        <meta property = "schema:familyName" content = "Coțofan">
                        <span property = "schema:name">Alexandru Coțofan</span>
                    </span>
                </li>
                <li typeof = "sa:ContributorRole" property = "schema:author">
                    <span typeof = "schema:Person" property = "schema:author">
                        <meta property = "schema:givenName" content = "Eusebiu">
                        <meta property = "schema:familyName" content = "Popescu">
                        <span property = "schema:name">Eusebiu Popescu</span>
                    </span>
                </li>
            </ul>
        </div>
        <section role = "doc-introduction">
            <h2>1. Introducere:</h2>
            <section role = "doc-abstract">
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
                    <h3>2.1. Interfața:</h3>
                    <p>Proiectul are la bază o pagină principală, o pagină de login, una de 
                        înregistrare, una cu generatorul, una cu antrenamentele 
                        generate, una cu rezultatul antrenamentelor, una cu statistici și 
                        una cu un clasament al celor mai active persoane.</p>
                    <section>
                        <h4>2.1.1. Pagina principală:</h4>
                        <p>Pagina principală este prima pagină a aplicației, care are rolul 
                            de a întâmpina fiecare utilizator, a prezenta pe larg aspectele 
                            aplicației și a face legătura cu paginile de login și clasamentul.</p>
                    </section>
                    <section>
                        <h4>2.1.2. Pagina de login:</h4>
                        <p>Pagina de login are rolul de a autentifica utilizatorii pentru ca 
                            aceștia să aibă acces la generator, să își poată reține datele și
                            să le poată accesa prin intermediul paginii de statistici. În 
                            cazul în care un utilizator nu are cont, își poate crea unul 
                            prin intermediul paginii de înregistrare.</p>
                    </section>
                    <section>
                        <h4>2.1.3. Pagina de înregistrare:</h4>
                        <p>Pagina de înregistrare are rolul de a permite utilizatorilor să 
                            își creeze cont dacă nu au. Acest cont va putea fi folosit pentru 
                            a primi acces deplin la aplicație.</p>
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
                            trimis la pagina cu rezultatul, unde va vedea numărul total de kcal arse estimate 
                            și va putea accesa pagina cu statistici sau clasamentul.</p>
                    </section>
                    <section>
                        <h4>2.1.5. Pagina de statistici:</h4>
                        <p>Pagina de statistici este pagina personală a fiecărui utilizator, unde vor fi afișate: 
                            numele, vârsta, înălțimea, greutatea, genul și exercițiile preferate, în ordinea 
                            numărului de execuții.</p>
                    </section>
                    <section>
                        <h4>2.1.6. Clasamentul:</h4>
                        <p>Această pagină, accesibilă de oricine, indiferent dacă are cont sau nu, afișează cele 
                            mai active persoane, în ordinea numărului de kcal arse. Informațiile disponibile sunt: 
                            numele, vârsta, înălțimea, greutatea, numărul de kcal arse și exercițiul preferat.</p>
                    </section>
                </section>
                <section>
                    <h3>2.2. Cazuri de utilizare:</h3>
                    <p>Această secțiune prezintă cazurile de utilizare ale aplicației pentru fiecare tip de utilizator: 
                        autentificat sau anonim.</p>
                    <section>
                        <h4>2.2.1. Utilizator anonim:</h4>
                        <p>Utilizatorul anonim va putea accesa pagina principală și, în cadrul ei, paginile de login, 
                            înregistrare și clasamentul. La apăsarea butonului către generator, va fi redirecționat 
                            către pagina de login.</p>
                    </section>
                    <section>
                        <h4>2.2.2. Utilizator autentificat:</h4>
                        <p>Utilizatorul autentificat va avea acces deplin la aplicație, putând genera un antrenament 
                            direct din pagina principală și având acces la propria pagină de statistici.</p>
                    </section>
                </section>
        </section>
        <section>
            <h2>3. Obiective viitoare:</h2>
            <section>
                <h3>3.1. Implementarea back-end-ului:</h3>
                <p>Momentan, fiecare pagină este o simplă demonstrație a felului cum va arăta proiectul finalizat, 
                    niciuna fiind funcțională. Proiectul final va conține un back-end, scris în limbajul PHP care va 
                    face aplicația complet funcțională.</p>
            </section>
            <section>
                <h3>3.2. Implementarea unei baze de date:</h3>
                <p>Deoarece utilizatorii vor trebui să se autentifice pentru acces deplin, va fi necesară menținerea 
                    unei baze de date care va reține fiecare cont.</p>
            </section>
            <section>
                <h3>3.3. Securitate:</h3>
                <p>Prevenția atacurilor cibernetice și a scurgerii de informații va fi o prioritate pentru aplicația finală.</p>
            </section>
        </section>
        <section role = "doc-conclusion">
            <h2>4. Concluzie:</h2>
            <p>În concluzie, această aplicație poate doar prezenta paginile Web la care vor avea acces utilizatorii, 
                funcționalitățile necesitând implementate în viitor.</p>
        </section>
    </article>
</body>
</html>
