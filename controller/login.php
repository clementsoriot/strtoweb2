<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRTOWEB : lpb de tout les rebeux</title>
    <link rel="stylesheet" href="http://localhost/strtoweb2/src/main.css/">
    <link rel="stylesheet" href="http://localhost/strtoweb2/src/mobile.css/">
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
            <h1>Nous sommes corporate nous sommes gentils</h1>
            <h2><span class="selector">Faites nous confiance</span> on va vou la mettre <span class="light">identité</span> sur internet qui lui ait propre.</h2><h2>Construisons <span class="light">ensemble</span> votre projet numérique !</h2>
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
    <div class="auth-form">
      <div class="container">
        <div class="part pc">
          <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="">
        </div>
        <div class="part">
          <form class="" method="post">
            <h4>Espace Membre</h4>
            <input type="text" placeholder="Adresse mail" name="" value="">
            <input type="text" placeholder="Mot de passe" name="" value="">
            <button type="submit" name="button">Nike zebi</button>
            <p class="error">erreur sa mere</p>

            <a href="#">J'ai oublié mon mot de passe</a>

          </form>
        </div>

      </div>
      <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="#1f2d41"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>
    <div class="footer">
      <div class="container">
        <div class="top">
          <div class="col">
            <h4>STRTOWEB</h4>
            <p>Création de site internet</p>
            <p>Landing</p>
            <p>Landing</p>
            <p>Landing</p>
            <p>Landing</p>
          </div>
          <div class="col">
            <h4>Product</h4>
            <p>Landing</p>
            <p>Landing</p>
            <p>Landing</p>
            <p>Landing</p>
            <p>Landing</p>
          </div>
          <div class="col">
            <h4>Product</h4>
            <p>Landing</p>
            <p>Landing</p>

          </div>
          <div class="col">
            <h4>Product</h4>
            <p>Landing</p>
            <p>Landing</p>
            <p>Landing</p>
            <p>Landing</p>
          </div>
          <div class="col">
            <h4>Product</h4>
            <p>Landing nike zebi</p>
            <p>Landing</p>
            <p>Landing</p>
            <p>Landing</p>

          </div>
        </div>
        <div class="hr"></div>
        <div class="bottom">
          <p>StrToWeb @ 2020</p>
          <p>politique de confidentialité</p>
        </div>
      </div>
    </div>
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
