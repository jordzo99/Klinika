<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: home.php');
		exit();
	}

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Skontaktuj się z nami">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Zaloguj</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="O-nas.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

  </head>
  <body data-home-page="index.php" data-home-page-title="O nas" class="u-body">
    <section class="u-align-left u-clearfix u-image u-section-1" id="carousel_bab7" data-image-width="1920" data-image-height="1366">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img src="images/Free_Sample_By_Wix1.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="198" data-image-height="198">
        <h3 class="u-align-center-xs u-text u-text-1">Zaloguj się</h3>
        <div class="u-expanded-width-xs u-form u-form-1">
	<form action="login.php" method="post">
	
		<br /> <input type="text" name="login" placeholder="Login" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/> <br />
		 <input type="password" name="haslo" placeholder="Hasło" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/> 
		 		<div class="u-align-center u-form-group u-form-submit" >
	<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?></div>
		 
		 
		<div class="u-align-center u-form-group u-form-submit" >
		
              <input type="submit" value="Zaloguj" class="u-align-center u-form-group u-form-submit" />
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
		<input type="hidden" value="" name="recaptchaResponse">

	</form>
	

        </div>
        <a href="Rejestracja.php" data-page-id="1008410497" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2">Zarejestruj się</a>
      </div>
    </section>
 
 


  </body>
</html>