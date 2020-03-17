<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRTOWEB : lpb de tout les rebeux</title>
    <link rel="stylesheet" href="<?= siteurl ?>/src/main.css/">
    <link rel="stylesheet" href="<?= siteurl ?>/src/mobile.css/">
    <script src="https://kit.fontawesome.com/381cd9e6df.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="nav">
        <div class="container">
          <div class="part">
            <h1>STRTOWEB</h1>
          </div>
          <div class="part pc">
            <p class="link">Accueil <i class="fas fa-chevron-right"></i></p>
            <p class="link">Sites partenaires <i class="fas fa-chevron-right"></i></p>
            <p class="link">F.A.Q <i class="fas fa-chevron-right"></i></p>
            <p class="link">Nous Contacter <i class="fas fa-chevron-right"></i></p>
            <a class="btn link">Espace Client <i class="fas fa-arrow-right"></i></a>
          </div>
          <div class="part mobile">
            <i class="fa fa-bars hamburger-icon" style="font-size: 1.5rem;" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="head">
        <div class="dropdown">
          <div class="container">
            <p class="link">Accueil <i class="fas fa-chevron-right"></i></p>
            <p class="link">Sites partenaires <i class="fas fa-chevron-right"></i></p>
            <p class="link">F.A.Q <i class="fas fa-chevron-right"></i></p>
            <p class="link">Nous Contacter <i class="fas fa-chevron-right"></i></p>
            <a class="btn link">Espace Client <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="container">
          <div class="part" style="display:flex;">
            <h1>Créez votre projet de A à Z avec STRTOWEB</h1>
            <h2>Nous avons réaliser StrToWeb.com pour pouvoir moduler votre site internet, Autoriser les paiements en ligne, et automatiser les actions.Le site une version temporaire est ne represente pas la version finale.</h2>
            <div class="btns">
              <a class="btn-head">Estimer mon site <i class="fas fa-arrow-right"></i></a>
              <a class="btn-head2">Nos sites</a>
            </div>
          </div>
          <div class="part pc">
            <img src="https://themes.startbootstrap.com/sb-ui-kit-pro/assets/img/drawkit/color/drawkit-content-man-color.svg" alt="">
          </div>
        </div>
      </div>
      <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="#fff"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </body>
</html>
<script type="text/javascript">

$(".dropdown").slideUp();
$( window ).resize(function() {
  $(".dropdown").slideUp();
});

$(".hamburger-icon").click(function(){
  $(".dropdown").slideToggle();
  $(".dropdown").css('display', 'flex');

});

</script>
