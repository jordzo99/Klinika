<?php
ini_set('default_charset', 'UTF-8');
session_start();


if(!isset($_SESSION['user_id'])) header('Location: index.php');

	
	if (isset($_POST['opinie']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność nickname'a
		$opinie = $_POST['opinie'];
		$data=date('Y-m-d H:i:s');
		
		//Sprawdzenie długości nicka
		if ((strlen($opinie)<5))
		{
			$wszystko_OK=false;
			$_SESSION['e_opinie']="Opinia musi się składać z co najmniej 5 znaków!";
		}
		

		$wlas = $_SESSION['user_id'];
	


		
		
		//Zapamiętaj wprowadzone dane
		$_SESSION['fr_opinie'] = $opinie;

		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				
				
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					if (!mysqli_set_charset($polaczenie, 'utf8'))
				{
				$output = 'Nie można ustanowić kodowania dla połączenia z bazą danych.';
				include 'output.html.php';
				exit();
				}
					if ($polaczenie->query("INSERT INTO opinie VALUES (NULL, '$opinie', '$data', '$wlas')"))
					{
						$_SESSION['udanaedodawanie']=true;
						header('Location: Opinie.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
	
	
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
<link rel="stylesheet" href="Opinie.css" media="screen">
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
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Wizyty.php">Umów wizyte</a>
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
								</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Wizyty.php">Umów wizyte</a>
								</li></ul>
								</div>
							</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Moje konto</a>
								<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Moje-konto.php">Moje dane</a>
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
    <section class="u-clearfix u-image u-section-1" id="carousel_2db0" data-image-width="1280" data-image-height="989">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h1 class="u-text u-text-1">Opinie</h1><br><br>
		<?php
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weterynarz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (!mysqli_set_charset($conn, 'utf8'))
{
    $output = 'Nie można ustanowić kodowania dla połączenia z bazą danych.';
    include 'output.html.php';
    exit();
}


$sql = "SELECT opinie, data, id_wlasciciela FROM opinie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<strong>" . $row["data"] . "</strong><br>" . $row["opinie"].  "<br><br>";
  }
} else {
  
}
$conn->close();
?>
<div class="u-form u-form-1">
          <form method="post" >
	
		<br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_opinie']))
			{
				echo $_SESSION['fr_opinie'];
				unset($_SESSION['fr_imie']);
			}
		?>"  placeholder="Opinia" name="opinie" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_opinie']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_opinie'].'</div>';
				unset($_SESSION['e_opinie']);
			}
		?>
		

		
		<br />
		 <div class="u-align-center u-form-group u-form-submit" >
              <input type="submit" value="Dodaj" class="u-align-center u-form-group u-form-submit" />
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
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