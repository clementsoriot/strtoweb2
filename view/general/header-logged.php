<div class="header">
  <div class="nav">
    <div class="container">
      <div class="part">
        <h1>STRTOWEB</h1>
      </div>
      <div class="part pc">
        <a  href="<?= siteurl ?>/" class="link">Accueil <i class="fas fa-chevron-right"></i></a>
        <a  href="<?= siteurl ?>/nos-partenaires/" class="link">Sites partenaires <i class="fas fa-chevron-right"></i></a>
        <a  href="<?= siteurl ?>/vos-questions/" class="link">F.A.Q <i class="fas fa-chevron-right"></i></a>
        <a  href="<?= siteurl ?>/contactez-nous/" class="link">Nous Contacter <i class="fas fa-chevron-right"></i></a>
        <a href="<?= siteurl ?>/action/logout/true/" class="link">Deconnexion <i class="fas fa-arrow-right"></i></a>
        <a href="<?= siteurl ?>/tableau-de-bord/" class="btn link">Tableau de bord <i class="fas fa-arrow-right"></i></a>

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
        <h1>Forgez l'identité de votre entreprise !</h1>
        <h2><span class="selector">Votre entreprise</span> a besoin d'une <span class="light">identité</span> sur internet qui lui ait propre.</h2><h2>Construisons <span class="light">ensemble</span> votre projet numérique !</h2>
        <div class="btns">
          <a class="btn-head">Estimer mon site <i class="fas fa-arrow-right"></i></a>
          <a class="btn-head2">Nos sites</a>
        </div>
      </div>
      <div class="part pc">
        <img height="300" src="<?= siteurl ?>/src/images/undraw_contract_uy56.svg/" alt="">
      </div>
    </div>
  </div>
  <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="#fff"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
</div>
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
