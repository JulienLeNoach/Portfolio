<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
  <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
  <!--Fonction Ajax pour envoyé mon formulaire sans rechargement de page-->
  <script type="text/javascript">
    function sendData() {
      var nom = document.getElementById("nom").value;
      var prenom = document.getElementById("prenom").value;
      var mail = document.getElementById("mail").value;
      $.ajax({
        type: 'post',
        url: 'mail.php',
        data: {
          nom: nom,
          prenom: prenom,
          mail: mail
        },
        success: function(response) {
          $('#sent').html("Message envoyé !");
        }
      });

      return false;
    }
  </script>
</head>

<body>

  <!--Boutton navbar-->


  <div class="btn-nav">
    <div class="anim-line">
      <div class="line"></div>
    </div>
  </div>
  <!--Navbar-->
  <nav class="navbar">
    <div class="block-menu">
      <div class="avatar">
        <img src="ressources/3242257.png" alt="portrait img">
      </div>
    </div>
    <div class="block-menu">
      <span class="navbar-block">
        <a href="#accueil">
          Accueil
        </a>
      </span>
    </div>
    <div class="block-menu">
      <span class="navbar-block">
        <a href="#exp">
          Parcours
        </a>
      </span>
    </div>
    <div class="block-menu">
      <span class="navbar-block">
        <a href="#portfolio">
          Portfolio
        </a>
      </span>
    </div>
    <div class="block-menu">
      <span class="navbar-block">
        <a href="#contact">
          Contact
        </a>
      </span>
    </div>

  </nav>

  <!-- Section Accueil -->


  <section class="accueil" id="accueil">
    <h1>Bienvenue sur mon portfolio</h1>
    <p class="anim-pres"></p>
    <a href="#exp" class="linkacc linkacc1">Parcours</a>
    <a href="#portfolio" class="linkacc linkacc2">Portfolio</a>
    <a href="https://drive.google.com/drive/folders/11sa6C9PWFgCOY3xxWU2UaCLjKsVY1YpF?usp=sharing/" target="blank" class="linkacc linkacc2">Lien vers le drive</a>

    <div class="networklist">
      <a href="https://github.com/JulienLeNoach" target="blank">
        <div class="media media1">
          <img src="ressources/github.svg" alt="github icon" class="networkicon">
        </div>
      </a>
      <a href="https://www.linkedin.com/in/julien-le-noach-aa8338221/" target="blank">
        <div class="media media2">
          <img src="ressources/linkedin.svg" alt="linkedin icon" class="networkicon">
        </div>
      </a>
    </div>
    <a href="#pres">
      <div class="btn-rond">
        <img src="ressources/arrowDown.svg" alt="arrow icon" class="icon-btn-rond">
      </div>
    </a>
  </section>

  <!--Section présentation-->

  <section class="presentation" id="pres">

    <h2 class="title-pres">Présentation</h2>

    <div class="pres-container">

      <div class="style-pres"></div>

      <div class="pres">
        <h3>Je suis Julien Le Noach, étudiant en BTS SIO</h3>
        <p>(Services Informatiques aux Organisations), Option SLAM (Solutions Logicielles et Application Métier)</p>
        <br>
        <p>
        Admissible au CESI de Brest pour le Bachelor
        Concepteur développeur d'applications, je suis à la
        recherche d’un poste de développeur en alternance à
        compter de septembre 2022 pour une durée d'un an.
        (3 semaines en entreprise/1 semaine en formation)</p>
      </div>

    </div>

  </section>
  <!-- Section experience -->

  <section class="experience" id="exp">

    <h2 class="title-travail-exp">Mon parcours</h2>

    <div class="container-exp">

      <div class="barre-verticale">
        <div class="icon-exp">
          <img src="ressources/web-development.png" alt="icone gauche">
        </div>
        <div class="icon-exp">
          <img src="ressources/graduation-hat.png" alt="icone gauche">
        </div>
        <div class="icon-exp">
          <img src="ressources/grande-ancre.png" alt="icone gauche">
        </div>
        <div class="icon-exp">
          <img src="ressources/plane.svg" class="avion" alt="icone gauche">
        </div>
      </div>


      <div class="flex-icon-exp">

        <div class="bloc b1">
          <div class="block-content">
            <p class="title-block">Stage en développement web - Tempora</p>
            <p class="txt-block">Développement d'une application web de planning et de prises de rendez-vous
              dans le domaine médical.<br>Tempora est une entreprise dynamique et innovatrice qui tente toujours de
              se démarquer par ses conceptions originales qui sont, d'abord et avant tout, adaptées aux besoins du
              client.</p>
          </div>
        </div>

        <div class="bloc b2">
          <div class="block-content">
            <p class="title-block">BTS SIO option SLAM</p>
            <p class="txt-block">L’option Solutions logicielles et applications métiers forme des spécialistes des
              logiciels (rédaction d’un cahier des charges, formulation des besoins et spécifications, développement,
              intégration au sein d'une société).</p>
          </div>
        </div>

        <div class="bloc b3">
          <div class="block-content">
            <p class="title-block">Technicien réseaux et telecom - Marine Nationale</p>
            <p class="txt-block">Il est chargé de l’établissement des liaisons radioélectriques ou filaires ainsi que du raccordement de systèmes d’information à tous types de réseaux y compris satellitaires. Spécialiste en informatique, il est responsable de la maintenance des systèmes de télécommunications et du matériel informatique. Il est le garant de la politique de sécurité informatique.</p>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!--Section portfolio-->
  <section class="portfolio" id="portfolio">
    <div class="test">
      <h2 class="title-portfolio">Portfolio</h2>
      <div class="container-projet">
        <a href="http://lycee.yves-thepot.pro.dns-orange.fr:20171/Portfolio/LaFleurphpv2/Site%20LaFleur.php" target="blank">
          <div class="block-projet">
            <div class="title-projet">Site LaFleur</div>
            <img src="ressources/LaFleur.jpg" alt="image fleur">
            <div class="content-projet">Création d'un site e-commerce avec PhP, MySQL.
            </div>
          </div>
        </a>
        <a href="http://lycee.yves-thepot.pro.dns-orange.fr:20171/Portfolio/BlackJack/" target="blank">
          <div class="block-projet">
            <div class="title-projet">BlackJack</div>
            <img src="ressources/blackjack.jpg" alt="image cartes">
            <div class="content-projet">Le BlackJack en Javascript. Une petite partie ?
            </div>
          </div>
        </a>
        <a href="" target="blank">
          <div class="block-projet">
            <div class="title-projet">Climb This !</div>
            <img src="ressources/climbing.jpg" alt="image climb">
            <div class="content-projet">Application web JEE qui vous aide à monter un mur d'escalade.
            </div>
          </div>
        </a>
      </div>
  </section>
  <section class="contact" id="contact">
    <h2><strong>Rentrons</strong> en Contact</h2>
    <form action="mail.php" method="post" onsubmit="return sendData();" name="contact" class="form-contact">
      <input type="text" name="nom" id="nom" required placeholder="Nom" class="ipt">
      <input type="text" name="prenom" id="prenom" required placeholder="Prenom" class="ipt">
      <textarea name="mail" id="mail" required placeholder="Votre message" id="" cols="30" rows="10" class="txt-contact"></textarea>
      <input type="submit" value="ENVOYER" class="ipt-sub"><a name='sent' id="sent">
      </a>
    </form>
  </section>
  <script src="js/app.js"></script>
</body>

</html>