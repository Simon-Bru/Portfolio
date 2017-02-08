<?php
  define('ROOTPATH', __DIR__);

  include(ROOTPATH.'/header.php');
?>

  <div class="container">
    <div class="card-panel" style="padding:0.75rem;">
      <h2 class="valign-wrapper hide-on-small-only"><i class="medium material-icons">person_pin</i> Mon CV</h2>
      <h5 class="valign-wrapper hide-on-med-and-up"><i class="medium material-icons">person_pin</i> Mon CV</h5>

      <div class="row" style="margin-top:20px;">
        <div class="col s12 m5 l4" id="CV-left">

          <img src="img/profil.png" alt="Moi" class="left responsive-img" style="max-width:29%;margin-right:10px;"/>
          <ul class="infos">
            <li><h4 style="margin:0px;">Simon Bruguerolle</h4></li>
            <li>20 ans</li><br>
            <li class="valign-wrapper"><i class="material-icons">location_on</i><span>14 rue Durand, 34000 Montpellier</span></li>
            <li class="valign-wrapper"><i class="material-icons">phone</i> 0621181215</li>
            <li class="valign-wrapper"><i class="material-icons">mail</i> bruguerollesimon@gmail.com</li>
          </ul>

          <h4 class="CV-title valign-wrapper"><i class="small material-icons">language</i>Langues parlées</h4>
          <ul class="infos">
            <li><b>- Anglais</b> (niveau B1)</li>
            <li><b>- Italien</b> (niveau A2)</li>
          </ul>

          <h4 class="CV-title valign-wrapper"><i class="small material-icons">code</i>Compétences</h4>
          <div class="skills-container">
            <div class="row">
              <div class="skill col s6">
                <img src="img/html-css.png" alt="Html/CSS" class="logo"/>
                <span class="center">
                  Html5 / CSS3<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
              <div class="skill col s6">
                <img src="img/boostrap.png" alt="Bootstrap" class="logo"/>
                <span class="center">
                  Bootstrap 3<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
            </div>

            <div class="row">
              <div class="skill col s6">
                <img src="img/php.png" alt="PHP" class="logo"/>
                <span class="center">
                  PHP<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
              <div class="skill col s6">
                <img src="img/mysql.png" alt="MySQL" class="logo"/>
                <span class="center">
                  MySQL<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="skill col s6">
                <img src="img/js.png" alt="Javascript" class="logo"/>
                <span class="center">
                  Javascript<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
              <div class="skill col s6">
                <img src="img/jquery.png" alt="PHP" class="logo"/>
                <span class="center">
                  jQuery<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
            </div>

            <div class="row">
              <div class="skill col s6">
                <img src="img/java.svg" alt="Java" class="logo"/>
                <span class="center">
                  Java<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
              <div class="skill col s6">
                <img src="img/Python.svg" alt="Python" class="logo"/>
                <span class="center">
                  Python<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
            </div>

            <div class="row">
              <div class="skill col s6">
                <img src="img/C.png" alt="C" class="logo"/>
                <span class="center">
                  Langage C<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
              <div class="skill col s6">
                <img src="img/git.png" alt="Git" class="logo"/>
                <span class="center">
                  Git, SVN<br>
                  <i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i><i class="material-icons tiny">star</i>
                </span>
              </div>
            </div>
            <div class="row">
              <span class="col s12">
                <b>Compétences supplémentaires:</b> Shell, jUnit, Node.js, Microsoft Office, Adobe Photoshop, Adobe Illustrator, StarUML...<br>
                <b>IDE:</b> Eclipse, Atom, Android Studio...
              </span>
            </div>
          </div>

          <h4 class="CV-title">Autres Informations</h4>
          <ul class="infos">
            <li><u><b>Permis de conduire</b></u> obtenu en 2014.</li>
            <li><u><b>Sports: </b></u>15 ans de judo, 5 ans de skateboard, 2 ans de tennis, 4 ans de snowboard...</li>
            <li><u><b>Musique: </b></u>10 ans de trompette au conservatoire et grand amateur de musiques en tous genres.</li>
            <li><u><b>Loisirs: </b></u>Cinéma, art, jeux-vidéos, cuisine...</li>
          </ul>

        </div>


        <div class="col s12 m7 l8" id="CV-right">
          <div class="center" style="padding-top:20px; padding-bottom: 20px;">
            <h3><u>Développeur d'applications web/logiciel</u></h3>
            <h4><q>Motivé et prêt à s'invesir</q></h4>
          </div>

          <h4 class="CV-title valign-wrapper"><i class="small material-icons">school</i>Formation</h4>
          <ul class="infos center">
            <li class="li_title">2016-2019: Cycle Ingénieur à Paris</li>
            <li>Au sein de l'ECE Paris. </li>
            <li class="li_title">2014-2016: DUT informatique à Montpellier</li>
            <li>A l'IUT de Montpellier/Sète, obtenu avec cursus poursuite d'études en semestre 4.</li>
            <li class="li_title">2012-2014: Baccalauréat scientifique à Nîmes</li>
            <li>Obtenu avec mention Assez Bien (13.8/20) et mention Européenne au lycée Alphonse Daudet à Nîmes avec comme enseignement spécifique SVT
              et comme enseignement de spécialité ISN.</li>
            <li class="li_title">2012: Passage de la certification de Cambridge à Nîmes</li>
            <li>Obtenu dans le cadre de l'option anglais européen</li>
          </ul>

          <h4 class="CV-title valign-wrapper"><i class="small material-icons">work</i>Expérience Professionnelle</h4>
          <ul class="infos center">
            <li class="li_title">Eté 2016: Développement web en freelance</li>
            <li>Réalisation de petits projets webs pour des particuliers.</li>
            <li class="li_title">Février-Mai 2016: Stage de développeur web chez Nottx à Londres</li>
            <li>Stage en entreprise de 3 mois au sein de l'entreprise Nottx en tant que développeur web. Développement de diverses pages pour le site <a target="_blank" href="http://www.nottx.com/">Nottx</a>.</li>
            <li class="li_title">Eté 2015: Peinture en bâtiments dans le privé à Nîmes</li>
            <li>Rénovation et peinture d'une vieille cuisine ainsi que deux pièces jointes.</li>
            <li class="li_title">Eté 2014: Travail de terrassier dans le privé à Montpellier</li>
            <li>Une journée de travail en tant que terassier, avec ramassage de terre et creusage de tranchées pour une piscine.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#cv').addClass('active');
    });
  </script>
  <?php
    include(ROOTPATH.'/footer.php');
  ?>
