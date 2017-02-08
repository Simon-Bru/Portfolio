<?php
  define('ROOTPATH', __DIR__);

  include(ROOTPATH.'/header.php');
?>

  <div class="container">
    <div class="card-panel">
      <h2 class="valign-wrapper hide-on-small-only"><i class="medium material-icons">polymer</i> Mes Projets</h2>
      <h5 class="valign-wrapper hide-on-med-and-up"><i class="medium material-icons">polymer</i> Mes Projets</h5>
			<p>Voici les projets que j'ai réalisés et ceux auxquels j'ai contribué</p>

      <div class="row projects-row">

        <!-- Project Presentation Card -->
        <div class="card hoverable col s12 m8">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/S-I-M.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Seen In Movie</span>
            <i class="material-icons right card-plus">more_vert</i>
            <p><a target="_blank" href="http://seeninmovies.lukasbargoin.fr">Visiter</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Seen In Movie<i class="material-icons right">close</i></span>
            <p>Site web de e-commerce réalisé en Html5/CSS3 avec la structure du framework Bootstrap pour la responsivité.
              Côté back-end, PHP et MySQL avec une architecture MVC.<br>
              Projet réalisé dans le cadre de l'IUT en groupe de trois.</p>
            <img src="img/seeninmovies.png" alt="SeenInMovies" class="responsive-img center-block hide-on-small-only" style="cursor:pointer;" onclick="window.open('http://seeninmovies.lukasbargoin.fr')"/>
            <button type="button" name="acceder" class="btn waves-effect waves-light center-block" onclick="window.open('http://seeninmovies.lukasbargoin.fr')" style="margin-top: 20px;">Accéder</button>
          </div>
        </div>

        <div class="col s12 m4 center">
          <i class="medium material-icons">account_balance</i>
          <h5>Projet Banque</h5>
          <span>Projet Banque en java basé sur les principes de la programmation orientée objet.</span>
          <button class="btn waves-effect waves-light green center-block" title="Application Banque (.jar)" onclick="window.open('Banque.jar')">
            <i class="material-icons left" id="btn_asset">cloud</i>Telecharger
          </button>
        </div>
      </div>

      <div class="row projects-row">

        <div class="col s12 m4 center">
          <div class="container">
            <img src="img/Joomla.png" alt="Joomla" class="responsive-img center-block"/>
            <h5>IUT Community</h5>
            <span class="desc">Un site communautaire pour les membre de l'IUT fonctionnant sur le principe d'annonces. Conçu grace au CMS Joomla.</span>
            <button onclick="window.open('http://iutcommunity.bargoinlukas.fr/')" class="btn waves-effect waves-light center-block" title="IUT Community">Accéder</button>
          </div>
        </div>


        <!-- Project Presentation Card -->
        <div class="card hoverable col s12 m8">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/intranet.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Intranet de Gestion de Projets de l'IUT</span>
            <i class="material-icons right card-plus">more_vert</i>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Intranet de Gestion de Projets de l'IUT<i class="material-icons right">close</i></span>
            <p>Intranet dédié à la gestion de projets de l'IUT réalisé en Html5/CSS3/Bootstrap 3, jQuery et PHP/MySQL.
              Projet réalisé avec une architecture modulaire et l'utilisation de requêtes asynchrones.<br>
              Conception dans le cadre des projets tuteurés de deuxième année de DUT au sein d'une équipe de trois.
            </p>
            <img src="img/um.png" alt="UniversitéMontpellier" class="responsive-img center-block hide-on-small-only" style="width:100px;"/>

          </div>
        </div>
      </div>

      <div class="row projects-row">
        <div class="card hoverable col s12">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/nottx.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Section Quest de Nottx</span>
            <i class="material-icons right card-plus">more_vert</i>
            <p><a href="http://www.nottx.com/quest/" target="_blank">Visiter</a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Section Quest de Nottx<i class="material-icons right">close</i></span>
            <p>Un blog anonyme réservé aux utilisateurs de Nottx. Projet parmis les autres pages fournies dans le cadre de mon stage au sein de
              l'entreprise Nottx.
              Réalisé grâce aux technologies Html5/CSS3/Bootstrap3, jQuery et PHP/MySQL avec une utilisation récurrente des requêtes
              asynchrones.
            </p>
            <img src="img/Nottx.png" alt="Nottx" class="responsive-img center-block hide-on-small-only" style="cursor:pointer;width:400px;" onclick="window.open('http://www.nottx.com/quest/')"/>
            <button type="button" name="access" class="btn waves-effect waves-light center-block" onclick="window.open('http://www.nottx.com/quest/')">Accéder</button>
          </div>
        </div>
      </div>

      </div>

      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#portfolio').addClass('active');
    });
  </script>
  <?php
    include(ROOTPATH.'/footer.php');
  ?>
