<?php
  define('ROOTPATH', __DIR__);

  include(ROOTPATH.'/header.php');
?>

<div class="container">
    <div class="card-panel">
      <h2 class="valign-wrapper hide-on-small-only"><i class="medium material-icons">school</i> Mon Parcours</h2>
      <h5 class="valign-wrapper hide-on-med-and-up"><i class="medium material-icons">school</i> Mon Parcours</h5>

      <p>Voici une description de mon parcours scolaire depuis le bac: <br/>
        <ul>
          <li class="parco">

            <h5 class='center-align'>
              <i style='display:block;'><img src="img/Diploma.png" alt="Bac S"></i>
              Bac Scientifique :
            </h5>
            <div>
              J'ai passé mes années de lycée dans le lycée Alphonse Daudet à Nîmes. J'ai commencé mon lycée par une seconde avec
              option ISN (Informatique et Sciences du Numérique). <br/>
              Je suis ensuite passé en 1ère S en option Anglais Européen, qui m'a permis de passer la certification de Cabridge
              que j'ai réussie.<br/>
              Ma terminale s'est bien passée et j'ai obtenu mon bac S avec mention assez bien et mention européenne en 2014.
            </div>
          </li>
          <li class="parco">
            <h5 class='center-align'>DUT Informatique : </h5>
            <div>
              J'ai été accepté à l'IUT de Montpellier/Sète par le biais de l'APB (Admission Post-Bac). J'ai donc commencé à
              suivre ce cursus le 1er septembre 2014 et ai obtenu mes 3 premiers semestre sans problèmes. Actuellement en fin de 2ème
              année, je reste confiant quant au passage de mon DUT.
            </div>
          </li>
          <li class="parco">
            <h5 class='center-align'>ECE Paris : </h5>
            <div>
              Après avoir obtenu mon DUT, je suivrai la formation cycle ingénieur de l'ECE Paris, pour m'orienter vers la majeure systèmes d'information,
              cybersécurité et big data.
            </div>
          </li>
        </ul>
      </p>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#parcours').addClass('active');
    });
  </script>

  <?php
    include(ROOTPATH.'/footer.php');
  ?>
