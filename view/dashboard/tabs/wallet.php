<div class="banner">
  <h1><i class="far fa-wallet"></i> Porte monnaie</h1>
  <p>L'argent de votre porte monnaie vous permet de ne plus avoir a utiliser votre carte ou paypal pour effectuer des paiement. Vous pouvez le recharger depuis le tableau de bord.</p>
</div>
<div class="panel">
  <div class="parti">
    <div class="infos">
      <table>
        <tr>
          <th>Porte monnaie - (<?= $user->GetMonnaie() ?>€)</th>
        </tr>
        <?= $user->GetMonnaieHistory() ?>

      </table>
    </div>
</div>
</div>
