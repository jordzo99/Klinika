<?php

session_start();


if(!isset($_SESSION['user_id'])) header('Location: index.php');

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="I like dogs, About Us, Owning a dog is great fun, Care of Your Dog, Warm Puppy, Subscribe, location, follow us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Oferta</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Umów-wizyte.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
 </head>
	<body class="u-body">
		<header class="u-clearfix u-header u-header" id="sec-5c97">
			<div class="u-clearfix u-sheet u-sheet-1">
			<a href="home.php" data-page-id="88774345" class="u-image u-logo u-image-1" data-image-width="198" data-image-height="198" title="Strona główna">
            <img src="images/Free_Sample_By_Wix.jpg" class="u-logo-image u-logo-image-1" data-image-width="94"></a>
			<nav data-position="" class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
				<div class="menu-collapse">
				<a class="u-button-style u-nav-link" href="#">
				<svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></symbol></defs></svg></a></div>
       
	   
	  <!-Menu poziome ->
				<div class="u-custom-menu u-nav-container">
					<ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="home.php">Strona główna</a>
							</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" style="padding: 10px 20px;">O nas</a>
								<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Lekarze.php">Lekarze</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Opinie.php">Opinie</a>
								</li></ul>
								</div>
							</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" style="padding: 10px 20px;">Wizyty</a>
								<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Oferty.php">Oferta</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Umów-wizyte.php">Umów wizyte</a>
								</li></ul>
								</div>
							</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" style="padding: 10px 20px;">Moje konto</a>
								<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Moje-konto.php">Moje dane</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Moje-wizyty.php">Moje wizyty</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Pupile.php">Pupile</a>
								</li><li class="u-nav-item">
								<?php
									echo '<a class="u-button-style u-nav-link u-white u-text-hover-palette-2-base" href="php/logout.php">Wyloguj się!</a>';
								?> 								 
								</li></ul>
								</div>
						</li></ul>
				</div>
		  
		 <!-Menu pionowe po zminimalizowaniu strony ->		  
				<div class="u-custom-menu u-nav-container-collapse">
					<div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
						<div class="u-sidenav-overflow">
							<div class="u-menu-close"></div>
							<ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="home.php">Strona główna</a>
							</li><li class="u-nav-item"><a class="u-button-style u-nav-link">O nas</a>
								<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Lekarze.php">Lekarze</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Opinie.php">Opinie</a>
								</li></ul>
								</div>
							</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Wizyty</a>
								<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Oferty.php">Oferty</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Umów-wizyte.php">Umów wizyte</a>
								</li></ul>
								</div>
							</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Moje konto</a>
								<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Mojek-konto.php">Moje dane</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Moje-wizyty.php">Moje wizyty</a>
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Pupile.php">Pupile</a>
								</li><li class="u-nav-item">
								<?php
									echo '<a class="u-button-style u-nav-link u-text-active-black u-text-hover-palette-2-base" href="php/logout.php">Wyloguj się!</a>';
								?>  
								</li></ul>
								</div>
						</div>
					</div>
						<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
				</div>
		  
		  
			</nav>
			</div>
		</header> 
    <section class="u-clearfix u-image u-section-1" id="carousel_2db0" data-image-width="1280" data-image-height="914">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-center-xs u-text u-text-1">Umów się na wizytę</h3>
        <div class="u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-name">
              <label for="name-7f6f" class="u-form-control-hidden u-label">Nazwa</label>
              <input type="text" placeholder="Data" id="name-7f6f" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-7f6f" class="u-form-control-hidden u-label">E-mail</label>
              <input type="email" placeholder="Uwagi" id="email-7f6f" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-name u-form-group-3">
              <label for="name-7718" class="u-form-control-hidden u-label">Nazwa</label>
              <input type="text" placeholder="Lekarz" id="name-7718" name="name-1" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-name u-form-group-4">
              <label for="name-11c9" class="u-form-control-hidden u-label">Nazwa</label>
              <input type="text" placeholder="Pupil" id="name-11c9" name="name-2" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style">Zapisz</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Dziękujemy! Twoja wiadomość została wysłana. </div>
            <div class="u-form-send-error u-form-send-message"> Nie można wysłać wiadomości. Proszę poprawić błędy i spróbować ponownie. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-left u-clearfix u-footer u-grey-80 u-footer" id="sec-d40d"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <span>Wszelkie prawa zastrzeżone</span></br>
        <span>Pomoc przy obrópce css - Nicepage</span> 
    </section>
  </body>
</html>