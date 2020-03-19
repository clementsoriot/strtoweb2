<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRTOWEB : lpb de tout les rebeux</title>
    <link rel="stylesheet" href="http://localhost/strtoweb2/src/main.css/">
    <link rel="stylesheet" href="http://localhost/strtoweb2/src/mobile.css/">
    <script src="https://kit.fontawesome.com/381cd9e6df.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  </head>
  <body>
    <div class="dashboard">
      <div class="nav">
        <div class="part">
          <h1>StrToWeb <span>FR</span></h1>
          <i class="fas fa-bars hamburger-icon"></i>
        </div>
        <div class="part">
          <i class="far fa-bell"></i>
          <i class="far fa-envelope"></i>
          <p>Anne marie</p>
          <img src="https://images.unsplash.com/photo-1520719627573-5e2c1a6610f0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=60&h=60&fit=crop&ixid=eyJhcHBfaWQiOjF9" alt="">
        </div>
      </div>
      <div class="content">
        <div class="left" id="part">
          <div class="part">
            <h4>Informations</h4>
            <p onclick=""><i class="fab fa-accessible-icon"></i> Tableau de bord</p>
            <p><i class="fas fa-chart-line"></i> Analytiques</p>
          </div>
          <div class="part">
            <h4>Mes sites</h4>
            <p onclick="LeftDropDowntkt(1)"><i class="far fa-window-maximize"></i> Web-Hamadi</p>
            <div class="in" id="1" style="display:none">
              <p><i class="fas fa-cogs"></i> Gérer</p>
              <p><i class="far fa-file-alt"></i> Factures</p>
              <p><i class="far fa-eye"></i> Surveillance</p>
              <p><i class="far fa-comments"></i>Chat développeur</p>
            </div>

          </div>
          <div class="part">
            <h4>Mes projets</h4>
            <p onclick="LeftDropDowntkt(0)"><i class="fas fa-plus"></i> Créer un projet</p>
            <div class="in" id="0" style="display:none">
              <p><i class="fab fa-accessible-icon"></i> En parler avec nous</p>
            </div>
            <p onclick="LeftDropDowntkt(-1)"><i class="fas fa-file-alt"></i> Projet #1</p>
            <div class="in" id="-1" style="display:none">
              <p><i class="fas fa-cogs"></i> Gérer</p>
            </div>
          </div>
        </div>
        <div id="right" class="right">
          <?php require root.pre.'view/dashboard/'.pre.'surveillance.php'; ?>
        </div>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
<script type="text/javascript">


$(".hamburger-icon").click(function(){
  $(".left").animate({
      width: "toggle"
    });
  $(".dropdown").css('display', 'flex');
});

function LeftDropDowntkt(id){
  $('#'+ id).slideToggle();
}


</script>
