<?php
    ini_set("display_errors", 1);
    session_start();

	  include_once("./mail/mailer.php");

    $name         = $_POST['name'];
    $email        = $_POST['email'];
    $projectType  = $_POST['projectType'];
    $projectInfo  = $_POST['projectInfo'];

    $asunto2    =   "New message fernandoenzagaray.com";

    // mensaje
    $mensaje2 = '
    <div style="width:100%; text-align:center; background-color: #FFFFFF;">
        <div style="width:100%; text-align:center; border-bottom: 1px solid #111111;">
            <br />
            <br />
          <a href="http://www.fernandoenzagaray.com">
              <img src="http://www.fernandoenzagaray.com/images/logo-fe.png" style="width: 120px" alt="Cargando información..." title="fernandoenzagaray.com" />
          </a>
          <br><br>
          </div>
    </div>
    <div style="width:100%; text-align:center; background-color: #f8f8f8; border-bottom: 1px solid #111111; font-family: Arial, Helvetica, sans-serif">
          <br>
          <div>
            <b style="font-size: 20px;">&iexcl;Nuevo mensaje! </b><br /><br>


            <br><b>Nombre: '. $name .'</b><br>
            <br><b>Email: '.$email.'</b><br>
            <br><b>Project: '.$projectType.'</b><br>
            <br><b>Mensaje: '. nl2br($projectInfo) .'</b><br>


          </div>

                  <br>
      </div>

        <div style="width:100%; text-align:center; background-color: #111111;">
             <br>
              <a href="http://www.fernandoenzagaray.com">
                  <img src="http://www.fernandoenzagaray.com/images/logo.png"  style="width: 120px"  alt="Cargando información..." title="fernandoenzagaray.com" />
              </a>

              <br>br>br>
          </div>
    ';


    $email = new PHPMailer();
    $email->From      = 'info@fernandoenzagaray.com';
    $email->FromName  = 'FernandoEnzagaray.com';
    $email->Subject   = $asunto2;
    $email->IsHTML(true);
    $email->Body      = $mensaje2;
    $email->ClearReplyTos();
    $email->ClearAllRecipients();
    $email->AddReplyTo($mail);
    $email->AddAddress("info@fernandoenzagaray.com");
    $email->Send();


    header("Location: ./contact.html?sent=1");

?>