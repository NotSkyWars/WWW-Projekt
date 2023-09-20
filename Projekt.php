<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/footer.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/projekt.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title>Document</title>
</head>
<header id="nav-menu" aria-label="navigation bar">
    <div class="navbar">
        <img src="css/media/Logo.png" class ="navbar-img">
        <a href="#home">«Home»</a>
        <div class="dropdown">
            <button class="dropbtn" onClick="changeMenu()"  id="dropbutton">Projekte <strong>☰</strong>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="dropdown-content" style="display:block;">
                <table> 

                    <tr> 
     
                     <td><form method="POST" href="index.html" action="index.html"><input type="submit" id="submit" name="Charleston in Neuzelle" value="Charleston in Neuzelle"> </input></form></td> 
     
                     <td><a href="#2"> Gamification – Spielend Lernen </a></td> 
     
                     <td><a href="#3"> Mathematische und physikalische Probleme </a></td> 
     
                     <td><a href="#4"> Studying abroad. Be familiar with Cambridge English Exam </a></td> 
     
                    </tr> 
     
                    <tr> 
     
                     <td><a href="#5"> Einführung in die Traditionelle Chinesische Medizin </a></td> 
     
                     <td><a href="#6"> Verborgenes Entdecken </a></td> 
     
                     <td><a href="#7"> Lust auf Experimentieren? </a></td> 
     
                     <td><a href="#8"> Dancing Queen </a></td> 
     
                    </tr> 
     
                    <tr> 
     
                     <td><a href="#9"> Schulsanitätsdienst und Erste-Hilfe-Workshop </a></td> 
     
                     <td><a href="#10"> Tausend und eine Nacht - Geheimnisse des Orients </a></td> 
     
                     <td><a href="#11"> Do-It-Yourself nachhaltige Fashion </a></td> 
     
                     <td><a href="#12"> Sprache und Kultur unserer ukrainischen und polnischen Klassenkameraden </a></td> 
     
                    </tr> 
     
                    <tr> 
     
                     <td><a href="#13"> Nachhaltiges mit Papier </a></td> 
     
                     <td><a href="#14"> Unser Klostergarten </a></td> 
     
                     <td><a href="#15"> Bilderreise Südafrika </a></td> 
     
                     <td><a href="#16"> Les relations franco-allemandes, mieux comprendre son voisin </a></td> 
     
                    </tr> 
     
                    <tr> 
     
                     <td><a href="#17"> Akrobatik mit Zirkus- Zirkus mit Akrobatik? </a></td> 
     
                     <td><a href="#18"> Neuzelle ‘erfahren’ </a></td> 
     
                     <td><a href="#19"> Theater mal anders - 'Teatr po polsku' </a></td> 
     
                     <td><a href="#20"> Riesen und Großköpfe </a></td> 
     
                    </tr> 
     
                    <tr> 
     
                     <td><a href="#21"> Fremdsprachentag in Neuzelle </a></td> 
     
                     <td><a href="#22"> Do-It-Yourself Musik </a></td> 
     
                     <td><a href="#23"> Zeitreise zurück zu den Anfängen des Gymnasiums </a></td> 
     
                     <td><a href="#24"> 20 Jahre Schulgeschichte noch einmal erleben </a></td> 
     
                    </tr> 
     
                   </table> 
            </div>
          </div> 
        <a href="#about">«Über uns»</a>
        <a href="#" id="language" onclick="changeLanguage()">🇩🇪</a>
      </div>
      <div class="nav-divider"></div>
  </header>
<body>
    

    <section class="text"> 
    <div class="title">
        <?php 
        $json = json_decode(file_get_contents('projekte.json'),true);
        $projekt = $json[$_POST['projekt']];
        echo "<h1>". $projekt['name'] ."</h1>";
        echo " </div>

        <div class='description'><p>". $projekt['desc'] ."</p></div>";

        echo '<div class="media">      <video width="200vw" controls>
        <source src="css/media/'. $projekt['name'] .'.mp4" type="video/mp4">
        <source src="mov_bbb.ogg" type="video/ogg">
        Your browser does not support HTML5 video.
      </video></div>
    
        </section>
    
        <section class="interviews">
            <div class="interview-title">
                <h1>Interview</h1>
            </div>
            <div class="transkript">
                <p>'. $projekt['desc'] .'
                </p>
            </div>
        </section>
        <section class="Galery">
        <div class="interview-title">
            <h1>Galery</h1>
        </div>
        <div class="pictures">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            <img src="css/media/Logo.png">
            
        </div>
    </section>'
        ?>



    <section class="footer">
        <div class="footer-team"><h1>Team</h1>
          <p>Christian</p>
          <p>Hannes</p>
          <p>Vitus</p>
          <p>Jonas</p>
          <p>Colin</p>
          <p>Jonas</p>
      
        </div>
        <div class="footer-divider"></div>
        <div class="footer-about" id="about"><h1>Über uns</h1>
          <p>Wir sind das WWW-Projekt. Wir sind sechs Schüler der 12. Klasse und enge Freunde, welche sich die Erstellung und Präsentation dieser Website in einer Woche zum Ziel gesetzt haben. Unser genaues Ziel besteht in der Dokumentation und anschließender Präsentation der Projektwoche 2023. Das Team ist in 3 verschiedene Teams geteilt: ein Team für die Entwicklung, eins für die Informationssammlung und ein Team für die Verarbeitung und Darstellung der Informationen. Diese arbeiten in enger Kollaboration und intensiver Absprache miteinander um ein bestmögliches Ergebnis zu gewährleisten. </p></div>
      
          <div class="socialmedia">
            <div class="footer-link"><a href="#" class="fa fa-facebook"></a></div>
            <div class="footer-link"><a href="#"class="fa fa-twitter"></a href="#"></div>
            <div class="footer-link"><a href="#"class="fa fa-instagram"></a href="#"></div>
          </div>
      </section>
      <script src="js/navbar.js"></script>
</body>
</html>