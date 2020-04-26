  <?php
ini_set('display_errors','Off');

  if(!empty($ClassMvc->Get('webmail'))):
    $MailId = htmlspecialchars(addslashes($ClassMvc->Get('webmail')));

    if(!$user->VerifyIHaveBeenWM($MailId)):
      header('location:'.siteurl);
    endif;

    foreach ($user->VerifyIHaveBeenWM($MailId) as $value) {
      $mail = new M();
      $mail->set($value->wm_imap_adr,$value->wm_imap_port,$value->wm_adress,$value->wm_password);
    }
  else:
    header('location:'.siteurl);
  endif;

  if(isset($_GET['Visionneur'])):
    ob_get_clean();
      if(empty($mail->Mail()['message'])):
        ?>
        <script>
          document.location.reload(true);
        </script>
        <?php
      else:
        echo '<b>'.htmlspecialchars($mail->Mail()['from']) . '</b><br/>';
        echo $mail->Mail()['message'];
        echo '<br/><p><a onclick="delete_mail(\''.$mail->Mail()['id'].'\')">Supprimer se mail</a></p>';
      endif;
 
    exit();
  endif;
  ?>
  <div id="Visionneur" class="modal">
    <div class="modal-content">
      <span class="close" onclick="modal_open('Visionneur','close')">&times;</span>
      <div id="content_v" style="width:100%">
        <iframe style="width:100%;border:none;height:70vh;" src="" id="tessst"></iframe>
      </div>
    </div>
  </div>


  <div class="banner">
    <h1><i class="fal fa-envelope"></i> WebMail <span><?= $user->VerifyIHaveBeenWM($MailId)[0]->wm_adress ?></span></h1>
    <p>Acceder à vos mails depuis StrToWeb !</p>
  </div>
  <div class="panel">
    <div class="parti">
      <div class="infos">
        <table class="mail">
          <tr>
            <th>WebMail - <?= $user->VerifyIHaveBeenWM($MailId)[0]->wm_adress ?></th>
          </tr>
          
          <?= $mail->ListWMBox() ?>

        </table>
      </div>
  </div>
</div>

<script type="text/javascript">
    function delete_mail(id){
      document.getElementById("tessst").src = "?Visionneur=true&mail_id="+id+"&delete=true";
      document.getElementById('mail-id-'+id).style.display = "none";
    }


      function modal_open(modal,op,id){


        

      var modal = document.getElementById(modal);

      // Get the button that opens the modal
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on the button, open the modal
      if(op == "close"){
        modal.style.display = "none";
      } else {
        modal.style.display = "block";

        document.getElementById("tessst").src = "?Visionneur=true&mail_id="+id; 
      }

      // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      }

</script>
