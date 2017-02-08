
  <style media="screen">
    html {
      overflow: hidden;
    }

    .main {
      position:absolute;
      width: 100%;
      height: 100%;
      z-index: 100;
    }

    .pull-up{
      animation-duration: 1s;
      animation-name: slide_up;
    }

    .land_menu {
      margin-top:100px;
    }

    .land_menu li {
      display: inline-block;

    }

    @-webkit-keyframes slide_up {
      from {
        top:0;
      }
      to {
        top:-150%;
      }

    }


    @keyframes slide_up {
      from {
        width:100%;
        top:0;
      }
      to {
        top:-100%;
      }
    }
  </style>

  <div class="teal darken-1 center main">

    <div>
      <div class="container">
        <div class="row center-align" style="margin-top:10px;">
          <div class="col s6 m4 l2 offset-s3 offset-m4 offset-l5">
            <img src="img/profil_landing.png" alt="Me" class="responsive-img circle z-depth-1"/>
          </div>
        </div>
        <h2>Simon Bruguerolle</h2>
        <h5><i class="material-icons">code</i><span>Full-Stack Web Developer</span></h5>
      </div>
    </div>

    <!-- <ul class="land_menu">
      <li class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="Présentation"><a href="index.php" class="neutral" ><i class="large material-icons">home</i></a></li>
      <li class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="Parcours"><a href="parcours.php" class="neutral" ><i class="large material-icons">school</i></a></li>
      <li class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="Portfolio"><a href="portfolio.php" class="neutral" ><i class="large material-icons">polymer</i></a></li>
      <li class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="CV"><a href="cv.php" class="neutral" ><i class="large material-icons">person_pin</i></a></li>
      <li class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="Contact"><a href="contact.php" class="neutral" ><i class="large material-icons">email</i></a></li>
    </ul> -->

    <div class="center pull-down" style="position: absolute;bottom: 15px;width:100%;">

      <a class="btn-floating waves-effect waves-circle waves-teal white" id="pull"><i class="material-icons black-text">keyboard_arrow_down</i></a>
    </div>
  </div>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-81022401-1', 'auto');
    ga('send', 'pageview');

  </script>
