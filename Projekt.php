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
  <?php 
  if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
} 
  ?> 
  <div class="navbar">
        <img src="css/media/Logo.png" class ="navbar-img">
        <a href="/">«Home»</a>
        <div class="dropdown">
          
            <button class="dropbtn" onClick="changeMenu()"  id="dropbutton">Projekte <strong>☰</strong>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="dropdown-content" style="display:block;">
              <table> 

                <tr> 
 
                  <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Charleston in Neuzelle"> </input></form></td> 
     
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Gamification – Spielend Lernen"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Mathematische und physikalische Probleme"> </input></form></td> 

                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Studying abroad. Be familiar with Cambridge English Exam"> </input></form></td> 
 
                </tr> 
 
                <tr> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Einführung in die Traditionelle Chinesische Medizin"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Verborgenes Entdecken"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Lust auf Experimentieren?"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Dancing Queen"> </input></form></td> 
 
                </tr> 
 
                <tr> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Schulsanitätsdienst und Erste-Hilfe-Workshop"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Tausend und eine Nacht - Geheimnisse des Orients"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Do-It-Yourself nachhaltige Fashion"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Sprache und Kultur unserer ukrainischen und polnischen Klassenkameraden"> </input></form></td> 
 
                </tr> 
 
                <tr> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Nachhaltiges mit Papier"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Unser Klostergarten"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Bilderreise Südafrika"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Les relations franco-allemandes, mieux comprendre son voisin"> </input></form></td> 
 
                </tr> 
 
                <tr> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Akrobatik mit Zirkus- Zirkus mit Akrobatik?"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Neuzelle ‘erfahren’"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Theater mal anders - 'Teatr po polsku'"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Riesen und Großköpfe"> </input></form></td> 
 
                </tr> 
 
                <tr> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Fremdsprachentag in Neuzelle"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Do-It-Yourself Musik"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="Zeitreise zurück zu den Anfängen des Gymnasiums"> </input></form></td> 
 
                 <td><form method="POST"  action="Projekt.php"><input type="submit" id="submit" name="projekt" value="20 Jahre Schulgeschichte noch einmal erleben"> </input></form></td> 
 
                </tr> 
 
               </table> 
            </div>
          </div> 
        <?php 
        
        if(isset($_POST['language']) && $_POST['language'] == "🇩🇪") $_SESSION['language'] = "En";
        else if(isset($_POST['language']) && $_POST['language'] == "🇬🇧"){$_SESSION['language'] = "De";}
        if(isset($_SESSION['language']) && $_SESSION['language']== "En"){
          echo '<a href="#about">«About us»</a>';
          echo  '<form method="POST"  action="#"><input type="submit" id="submit" name="language" id="language" onclick="changeLanguage()" value="🇬🇧"> </input></form>';
        
        }else{
          echo '<a href="#about">«Über uns»</a> ';
          echo  '<form method="POST"  action="#"><input type="submit" id="submit" name="language" id="language" onclick="changeLanguage()" value="🇩🇪"> </input></form>';
       
        }
        ?>
      </div>
      <div class="nav-divider"></div>
  </header>
<body>
    

    <section class="text"> 
    <div class="title">
        <?php 
        $json = json_decode(file_get_contents('projekte.json'),true);
        $projekt = $json[$_POST['projekt']];
        $desc = "";
        $interview = "";
        if($_SESSION['language'] == "En"){
            $desc = $projekt['engdesc'] ;
       }else{
                    $desc = $projekt['desc'] ;
                    $interview = $projekt['inter'] ;
        }
   
        echo "<h1>". $projekt['name'] ."</h1>";
        echo " </div>

        <div class='description'><p>". $desc ."</p></div>";

        echo '<div class="media">      <video width="200vw" controls>
        <source src="css/media/'. $projekt['interview'] .'" type="video/mp4">
        <source src="mov_bbb.ogg" type="video/ogg">
        Your browser does not support HTML5 video.
      </video></div>
    
        </section>
    
        <section class="interviews">
            <div class="interview-title">
                <h1>Interview</h1>
            </div>
            <div class="transkript">
                <p>'. $interview .'
                </p>
            </div>
        </section>
        <section class="Galery">
        <div class="interview-title">
            <h1>Galery</h1>
        </div>
        <div class="pictures">';
        foreach($projekt['path'] as $image){
          echo '<img src="css/media/". $image .".png">';
        } 
            echo ' </div> </section>';
        ?>

<section class="footer">
  <div class="footer-team"><h1>Team</h1>
    <p>Christian</p>
    <p>Hannes</p>
    <p>Vitus</p>
    <p>Jonas</p>
    <p>Colin</p>
    <p>Moritz</p>

  </div>
  <div class="footer-divider"></div>
  <div class="footer-about" id="about">
  <?php 
       if(isset($_SESSION['language']) && $_SESSION['language']== "En"){
        echo '  <h1>About us</h1>
        <p>We are the WWW project. We are six 12th grade students and close friends who have set the goal of creating and presenting this website in one week. Our exact goal is to document and then present the project week 2023. The team is divided into 3 different teams: one for development, one for information gathering and one for processing and presenting the information. These work in close collaboration and intensive consultation with each other to ensure the best possible result.</p></div>
    ';
       }else{
        echo '  <h1>Über uns</h1>
        <p>Wir sind das WWW-Projekt. Wir sind sechs Schüler der 12. Klasse und enge Freunde, welche sich die Erstellung und Präsentation dieser Website in einer Woche zum Ziel gesetzt haben. Unser genaues Ziel besteht in der Dokumentation und anschließender Präsentation der Projektwoche 2023. Das Team ist in 3 verschiedene Teams geteilt: ein Team für die Entwicklung, eins für die Informationssammlung und ein Team für die Verarbeitung und Darstellung der Informationen. Diese arbeiten in enger Kollaboration und intensiver Absprache miteinander um ein bestmögliches Ergebnis zu gewährleisten. </p></div>
    ';
       }
       ?>
    <div class="socialmedia">
      <div class="footer-link"><a href="https://www.facebook.com/CampusimStiftNeuzelle" class="fa fa-facebook"></a></div>
      <div class="footer-link"><a href="https://www.youtube.com/@RahnEducation" class="fa fa-youtube"></a></div>
      <div class="footer-link"><a href="https://twitter.com/RahnEducation"class="fa fa-twitter"></a href="#"></div>
      <div class="footer-link"><a href="https://www.instagram.com/campus.im.stift.neuzelle/"class="fa fa-instagram"></a href="#"></div>
    </div>
</section>
      <script src="js/navbar.js"></script>
</body>
</html>