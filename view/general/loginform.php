<?php $user->login_form(); ?>
<div class="auth-form">
  <div class="container">
    <div class="part pc">
      <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="">
    </div>
    <div class="part">
      <form class="" method="post">
        <h4>Espace Membre</h4>
        <input type="text" placeholder="Adresse mail" name="login[user]">
        <input type="text" placeholder="Mot de passe" name="login[pass]">
        <button type="submit" name="button">Nike zebi</button>
        <p class="error" style="<?php if(!$user->auth): echo 'display:none;'; endif;?>"><?= $user->auth ?></p>

        <a href="#">J'ai oublié mon mot de passe</a>

      </form>
    </div>

  </div>
  <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="#1f2d41"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
</div>
