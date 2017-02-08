<?php
  define('ROOTPATH', __DIR__);

  include(ROOTPATH.'/header.php');
?>

  <div class="container">
    <div class="card-panel z-index-1">
      <h2 class="valign-wrapper hide-on-small-only"><i class="medium material-icons">mail</i> Me Contacter</h2>
      <h5 class="valign-wrapper hide-on-med-and-up"><i class="medium material-icons">mail</i> Me Contacter</h5>

      <?php
      if(isset($_GET['envoi'])){
        if($_GET['envoi'] == 'true'){
          echo('Votre message a bien été envoyé !');
        }
        if($_GET['envoi'] == 'false') {
          echo('Veuillez remplir tous les champs.');
        }
        if($_GET['envoi'] == 'error'){
          echo('Erreur lors de l\'envoi du mail, veuillez réessayer.');
        }
      }
      ?>
      <div class="row">
        <div class="col s12">
          <p>
            Je suis auto-entrepreneur et peux réaliser tous types de projets web ou logiciels, du site d'e-commerce/application au site vitrine.
            Je réalise tous mes sites de manière responsive et sous contrôle de version.
            N'hésitez pas à me contacter pour de plus amples informations via ce formulaire:
          </p>
        </div>
      </div>

      <div class="row">
        <form method="post" class="col s12" id="contact-form">
          <div class="input-field col s12 m6">
            <input required type="text" id="nom" name="nom" class="validate">
            <label for="nom" class="valign-wrapper"><i class="tiny material-icons">account_circle</i>Nom</label>
          </div>
          <div class="input-field col s12 m6">
            <input required type="text" name="sujet" id="sujet" class="validate">
            <label for="sujet" class="valign-wrapper"><i class="tiny material-icons">title</i>Sujet</label>
          </div>

          <div class="input-field col s12">
            <textarea required id="message" name="message" class="materialize-textarea validate" rows="5" placeholder="Entrez votre message ici"></textarea>
            <label for="message" class="valign-wrapper"><i class="tiny material-icons">edit</i>Message:  </label>
          </div>

          <div class="input-field col s12">
            <input required type="email" name="email" id="email" class="validate">
            <label for="email">@ Adresse e-mail</label>
          </div>

          <div class="input-field col s12 m5 l4">
            <button class="btn waves-effect waves-light" type="submit" id="submit"/>
              Envoyer
              <i class="material-icons right">send</i>
            </button>

            <i class="material-icons teal-text right hide" id="mail-valid">check</i>
            <i class="material-icons red-text right hide" id="mail-invalid">error</i>


            <div  class="right" id="loader">
              <div class="preloader-wrapper small valign-wrapper">
                <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                    <div class="circle"></div>
                  </div><div class="gap-patch">
                    <div class="circle"></div>
                  </div><div class="circle-clipper right">
                    <div class="circle"></div>
                  </div>
                </div>

                <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                    <div class="circle"></div>
                  </div><div class="gap-patch">
                    <div class="circle"></div>
                  </div><div class="circle-clipper right">
                    <div class="circle"></div>
                  </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                    <div class="circle"></div>
                  </div><div class="gap-patch">
                    <div class="circle"></div>
                  </div><div class="circle-clipper right">
                    <div class="circle"></div>
                  </div>
                </div>

                <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                    <div class="circle"></div>
                  </div><div class="gap-patch">
                    <div class="circle"></div>
                  </div><div class="circle-clipper right">
                    <div class="circle"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#contact').addClass('active');

      $('#email').focusout(function(){
        if($('#email').val().split('@')[1] != undefined){
          if($('#email').val().split('@')[1].indexOf('.') < 0){
            setTimeout(function(){
              $('#email').removeClass('valid');
              $('#email').addClass('invalid');
            }, 100);
          }
        }
      });

      $('#submit').click(function(event){
        event.preventDefault();
        var darray = {};
        var bool = true;
        $('.validate').each(function(index){
          if($(this).val() == "" || $(this).hasClass('invalid')){
            bool = false;
            $(this).addClass('invalid');
          }
          else {
            darray[$(this).attr('id')] = $(this).val();
          }
        });

        if(bool){
          $('#loader').children().addClass('active');
          $('.validate').each(function(index){
            $(this).addClass('disable');
          });

          setTimeout(function(){
            console.log(darray);
            $.post({
              url: 'mail.php',
              data: darray,
              dataType: 'json',
              success: function(data, status){
                if(data.success){
                  setTimeout(function(){
                    $('#loader').addClass('hide');
                    $('#mail-valid').removeClass('hide');
                  }, 200);
                }
                else {
                  setTimeout(function(){
                    $('#loader').addClass('hide');
                    $('#mail-invalid').removeClass('hide');
                  }, 200);

                }
              },
              error: function(result, status, error){
                console.log('mail failed '+error);
              }
            });
          }, 200);
        }
      });
    });
  </script>
  <?php
    include(ROOTPATH.'/footer.php');
  ?>
