<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
    <div class="text-center">
       <h1>Login</h1>
       <h4>Sistema de inventario</h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usuario</label>
              <input type="name" class="form-control" name="username" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="">
        </div>
        <!-- <div class="form-group">
          <div class="g-recaptcha" data-sitekey="6Lfclh8jAAAAABJc7WH2AgGxnUjUkw9cWKMh97Li"></div>
        </div> -->

       <!--  <?php
    /* $datos;$captcha;
    if(isset($_POST['datos'])){ 
       $datos = $_POST['datos'];}	
	if(isset($_POST['g-recaptcha-response'])){
       $captcha=$_POST['g-recaptcha-response'];}
	if(!$captcha){
       echo 'Chequea la Captcha';}
	$secretKey = "6Lfclh8jAAAAABJc7WH2AgGxnUjUkw9cWKMh97Li";
    $ip = $_SERVER['REMOTE_ADDR']; */
	//Chequear captcha con Google
	/* $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    $responseKeys = json_decode($response,true);
    if(intval($responseKeys["success"]) !== 1) {
       echo '<h4>Error!</h4>';
        } else { */
    //si la captcha es correcta se escribe los datos introducidos
	   /* echo '<div id="result">'.$datos.'</div>';} */
?> -->

        <div class="form-group">
                <button type="submit" class="btn btn-danger" style="border-radius:0%">Login</button>
        </div>
        
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
