<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="css/navbar.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/footer.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/index.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  </main>
  <body>
    <section class="hero">
      <div class="hero-title">
       <?php 
       if(isset($_SESSION['language']) && $_SESSION['language']== "En"){
        echo ' <h1>Projectweek 2023</h1>';
       }else{
        echo ' <h1>Projektwoche 2023</h1>';
       }
       ?>
      </div>
      
    </section>
      <section class="Projects">
        <div class="nav-divider"></div>
        <div class="right-divider"></div>
        <div class="left-divider"></div>
        <button class ="previous" id="previous" onclick="previous()">◄</button>
        <button class ="next" id="next" onclick="next()">►</button>
       
          <div class="rotation">
            <div class="project hidden" id="hidden"style="display: block;">
              
          </div>
              <?php 
                $json = json_decode(file_get_contents('projekte.json'),true);
                $projects = $json;
                $i = 0;
              foreach($projects as $project){
                $desc = "";
                if(isset($_SESSION['language']) && $_SESSION['language']== "En"){
               $desc = $project['engdesc'];
                }else{
                  $desc = $project['desc'];}
                $visable = "";
                if($i <2){
                 
                  $visable = "block";
                }else{
                  $visable ="none";
                }
            
                $pid = $i +1;
              echo '<div class="project" id="rotation-'. $i .'" style="display: '. $visable .';">
              <form method="POST"  action="Projekt.php" id="projekt-form'. $i .'">
              <a href="" onclick="document.getElementById("projekt-form'. $i .'").submit();">
              <img src="css/media/www Symbole '. $pid .'.png"> 
              <div class="text-container">
                  <h1>'. $project['name'] .'</h1>
                  <p>'. $desc .'</p>
              </div>
              <input type="hidden" id="submit" name="projekt" value="'. $project['name'] .'"> </input>
              </a>
              </form>
          </div>';
          $i += 1;
              }
              ?>
          </div></div></div>

         
<div class="welcome">
<div class="welcome-title">
<?php 
       if(isset($_SESSION['language']) && $_SESSION['language']== "En"){
        echo '  <h1>Welcome to the Projectweek of 2023!</h1>
        <p>Welcome to the official page of the project week 2023, in which the 20th anniversary of the free grammar school in the monastery Neuzelle is the focus. Despite everything, for many years, regular project weeks are organized in which students participate in unique projects and present them afterwards. From languages to culture, science, sports and crafts, everything is there!</p>';
       }else{
        echo '  <h1>Willkommen in der Projektwoche 2023!</h1>
        <p>Willkommen zur offiziellen Seite der Projektwoche 2023, in welcher das 20. Jubiläum des 
          freien Gymnasiums im Stift Neuzelle im Mittelpunkt steht. Trotz allem werden seit vielen 
          Jahren, regelmäßig Projektwochen organisiert, in denen die Schüler an einzigartigen 
          Projekten teilnehmen und diese anschließend präsentieren. Von Sprachen über Kultur, 
          Wissenschaft, Sport und Handwerk ist alles dabei!</p>';
       }
       ?>
</div>
</div>
      </section>
<section class="highlights">
<div class="highlight-title">
  <h1>Highlights</h1>
</div>
<div class="highlight-links">
<table>

<?php 
       if(isset($_SESSION['language']) && $_SESSION['language']== "En"){
        echo '  <tr> <td><a href="#">Student  concert «</a></td></tr>
        <tr> <td><a href="#">Talentfestival «</a></td></tr>
        <tr> <td><a href="#">Orchestra «</a></td></tr>';
       }else{
        echo '  <tr> <td><a href="#">Schülerkonzert «</a></td></tr>
        <tr> <td><a href="#">Talentefest «</a></td></tr>
        <tr> <td><a href="#">Orchester «</a></td></tr>';
       }
       ?>

</table>
</div>
</section>

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
      <div class="footer-link"><a href="#" class="fa fa-facebook"></a></div>
      <div class="footer-link"><a href="#"class="fa fa-twitter"></a href="#"></div>
      <div class="footer-link"><a href="#"class="fa fa-instagram"></a href="#"></div>
    </div>
</section>
    <script src="js/navbar.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>