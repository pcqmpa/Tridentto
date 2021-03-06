<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $mensa ='';

    if($mensaje != '')
    {
      $mensa = $mensaje;
    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tridentto-home</title>
    <link rel="stylesheet" href="<?= base_url(); ?>css/materialize.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>css/site.css" >
  </head>
  <body class="deep-orange darken-2">


  <input type="hidden" id="mensaje" value="<?= $mensa; ?>" />

    <div class="div-contenedor-login row">
      <div id="login-page" class="col s12 card-panel z-depth-4">
        <?= form_open('/seguridad/login'); ?>
            <div class="row">
              <div class="input-field col s12 center-align">
                <img src="<?= base_url(); ?>images/avatar.png" alt="logo" class="circle" width="80" height="80" />
                <h5 class="center" >Login</h5>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="usuario" type="text" name="usuario">
                <label for="usuario">Usuario</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="usuario" type="password" name="password">
                <label for="usuario">Password</label>
              </div>
              <div class="input-field col s12">
                <input type="checkbox" id="logrecordar" name="logrecordar">
                <label for="logrecordar">Recordar Contraseña</label>
              </div>
            </div>
            <div class="input-field col s12">
              <input type="submit" name="submit_val" id="btn-login" value="Login" class="btn waves-effect waves-light deep-orange accent-3 col s12">
            </div>
        <?= form_close(); ?>
        <br/>
        <div class="div-registro-pass col s12">
          <div class="row">
            <a href="#" class="col s6">Resgistrate!</a>
            <a href="#" class="col s6">Olvide mi password!</a>
          </div>
        </div>
      </div>



    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/materialize.js"></script>
    <script type="text/javascript">
      
      $(function(){

        var mensaje = $("#mensaje").val();
        alert(mensaje);

      });

    </script>
  </body>
</html>
