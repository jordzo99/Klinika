<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność nickname'a
		$imie = $_POST['imie'];
		
		//Sprawdzenie długości nicka
		if ((strlen($imie)<2))
		{
			$wszystko_OK=false;
			$_SESSION['e_imie']="Imie musi posiadać co najmniej dwa znaki!";
		}
		
		if (ctype_alpha($imie)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_imie']="Imie może składać się tylko z liter (bez polskich znaków)";
		}
		
		$nazwisko = $_POST['nazwisko'];
		
		//Sprawdzenie długości nicka
		if ((strlen($nazwisko)<2))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko']="Nazwisko musi posiadać co najmniej dwa znaki!";
		}

		if (ctype_alpha($nazwisko)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko']="Nazwisko może składać się tylko z liter (bez polskich znaków)";
		}

		$numer_tel = $_POST['numer_tel'];
		
		//Sprawdzenie długości nicka
		if ((strlen($numer_tel)!=9) && (strlen($numer_tel)!=11)) 
		{
			$wszystko_OK=false;
			$_SESSION['e_numer_tel']="Numer telefonu musi się składać z 9 lub 11 cyfr";
		}
		
		if (ctype_digit($numer_tel)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_numer_tel']="Numer telefonu może składać się tylko z cyfr";
		}
		
		$adres = $_POST['adres'];		
		
		if ((strlen($adres)<5) )
		{
			$wszystko_OK=false;
			$_SESSION['e_adres']="Adres musi zawierac co najmniej 5 znaków";
		}
		
		$kod_pocztowy = $_POST['kod_pocztowy'];
		
		//Sprawdzenie długości nicka
		if (!preg_match('/^[0-9]{2}-?[0-9]{3}$/Du', $kod_pocztowy)) 
		{
			$wszystko_OK=false;
			$_SESSION['e_kod_pocztowy']="Kod pocztowy musi się składać z 5 cyfr i mieć postać __-___";
		}
		
		$miasto = $_POST['miasto'];
		
		if (ctype_alpha($miasto)==false)
		{
			$wszystko_OK=false;
			$_SESSION['miasto']="Miasto może składać się tylko z liter (bez polskich znaków)";
		}
		
		$pesel = $_POST['pesel'];
		
		//Sprawdzenie długości nicka
		if ((strlen($pesel)!=11) || ctype_digit($pesel)==false) 
		{
			$wszystko_OK=false;
			$_SESSION['e_pesel']="Pesel musi się składać z 11 cyfr";
		}
		
		$peselB = filter_var($pesel, FILTER_VALIDATE_FLOAT);
		
		if ((filter_var($peselB, FILTER_VALIDATE_FLOAT)==false) || ($peselB!=$pesel))
		{
			$wszystko_OK=false;
			$_SESSION['e_pesel']="Podaj poprawny pesel!";
		}
		
		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		if (!preg_match('/^[a-zA-Z0-9\.\-_]+\@[a-zA-Z0-9\.\-_]+\.[a-z]{2,6}$/D', $email)) 
		{
			$wszystko_OK=false;
			$_SESSION['e_kod_pocztowy']="Kod pocztowy musi się składać z 5 cyfr i mieć postać __-___";
		}
		
		$login = $_POST['login'];
		$loginB = filter_var($login, FILTER_SANITIZE_STRING);
		
		//Sprawdzenie długości nicka
		if ((strlen($login)<3))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Login musi składać się z co najmniej 3 znaków!";
		}
		
		
		//Sprawdź poprawność hasła
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		
		
		
		//Zapamiętaj wprowadzone dane
		$_SESSION['fr_imie'] = $imie;
		$_SESSION['fr_nazwisko'] = $nazwisko;
		$_SESSION['fr_numer_tel'] = $numer_tel;
		$_SESSION['fr_adres'] = $adres;
		$_SESSION['fr_kod_pocztowy'] = $kod_pocztowy;
		$_SESSION['fr_miasto'] = $miasto;
		$_SESSION['fr_pesel'] = $pesel;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_login'] = $login;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
		$data=date('Y-m-d H:i:s');
		
		
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
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id_wlasciciela FROM wlasciciele WHERE adres_email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_email = $rezultat->num_rows;
				if($ile_takich_email>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				//Czy login jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id_wlasciciela FROM wlasciciele WHERE login='$login'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_login = $rezultat->num_rows;
				if($ile_takich_login>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_login']="Istnieje już osoba o takim loginie! Wybierz inny.";
				}
				
				//Czy numer telefonu jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id_wlasciciela FROM wlasciciele WHERE numer_tel='$numer_tel'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_login = $rezultat->num_rows;
				if($ile_takich_login>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_numer_tel']="Istnieje już osoba o takim numerze telefonu.";
				}
				
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					if ($polaczenie->query("INSERT INTO wlasciciele VALUES (NULL, '$imie', '$nazwisko', '$numer_tel', '$adres', '$kod_pocztowy', '$miasto', '$pesel', '$email', '$login', '$haslo_hash', '$data')"))
					{
						
						
						$_SESSION['udanarejestracja']=true;
						header('Location: home.php');
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
    <meta name="keywords" content="Russian Blue Cat, Pet Love, #01, #02, #03, #04, Vet clinic, Rescue a Pet, Need a Sweet Heart?">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Rejestracja.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    

  </head>
  <body class="u-body u-overlap">
    <section class="u-clearfix u-image u-section-1" id="carousel_a13f" data-image-width="1280" data-image-height="781">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-center u-text u-text-1">
          <span style="font-size: 3rem; font-weight: 700;">Zarejestruj si</span>
          <span style="font-size: 3.75rem; font-weight: 700;">
            <span style="font-size: 3rem;">ę</span>
            <span style="font-weight: 700;"></span>
          </span>
        </h3>
        <img src="images/Free_Sample_By_Wix1.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="198" data-image-height="198" data-href="index.php" data-page-id="285027748">
        <div class="u-form u-form-1">
          <form method="post" >
	
		<br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_imie']))
			{
				echo $_SESSION['fr_imie'];
				unset($_SESSION['fr_imie']);
			}
		?>"  placeholder="Imie" name="imie" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_imie']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_imie'].'</div>';
				unset($_SESSION['e_imie']);
			}
		?>
		
		 <br><input type="text" value="<?php
			if (isset($_SESSION['fr_nazwisko']))
			{
				echo $_SESSION['fr_nazwisko'];
				unset($_SESSION['fr_nazwisko']);
			}
		?>" placeholder="Nazwisko" name="nazwisko" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
				<?php
			if (isset($_SESSION['e_nazwisko']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_nazwisko'].'</div>';
				unset($_SESSION['e_nazwisko']);
			}
		?>
		
		
		
		  <br><input type="text"  value="<?php
			if (isset($_SESSION['fr_numer_tel']))
			{
				echo $_SESSION['fr_numer_tel'];
				unset($_SESSION['fr_numer_tel']);
			}
		?>" placeholder="Numer telefonu" name="numer_tel" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
						<?php
			if (isset($_SESSION['e_numer_tel']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_numer_tel'].'</div>';
				unset($_SESSION['e_numer_tel']);
			}
		?>
		
		<br><input type="text"  value="<?php
			if (isset($_SESSION['fr_adres']))
			{
				echo $_SESSION['fr_adres'];
				unset($_SESSION['fr_adres']);
			}
		?>" placeholder="Adres" name="adres" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_adres']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_adres'].'</div>';
				unset($_SESSION['e_adres']);
			}
		?>
		
		<br><input type="text"  value="<?php
			if (isset($_SESSION['fr_kod_pocztowy']))
			{
				echo $_SESSION['fr_kod_pocztowy'];
				unset($_SESSION['fr_kod_pocztowy']);
			}
		?>" placeholder="Kod pocztowy: __-___" name="kod_pocztowy" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_kod_pocztowy']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_kod_pocztowy'].'</div>';
				unset($_SESSION['e_kod_pocztowy']);
			}
		?>
		
		<br><input type="text"  value="<?php
			if (isset($_SESSION['fr_miasto']))
			{
				echo $_SESSION['fr_miasto'];
				unset($_SESSION['fr_miasto']);
			}
		?>" placeholder="Miasto" name="miasto" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_miasto']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_miasto'].'</div>';
				unset($_SESSION['e_miasto']);
			}
		?>
		
		<br><input type="text"  value="<?php
			if (isset($_SESSION['fr_pesel']))
			{
				echo $_SESSION['fr_pesel'];
				unset($_SESSION['fr_pesel']);
			}
		?>" placeholder="Pesel" name="pesel" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_pesel']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_pesel'].'</div>';
				unset($_SESSION['e_pesel']);
			}
		?>
		
		<br><input type="text"  value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" placeholder="E-mail: _@_._" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
		
		<br><input type="text"  value="<?php
			if (isset($_SESSION['fr_login']))
			{
				echo $_SESSION['fr_login'];
				unset($_SESSION['fr_login']);
			}
		?>" placeholder="Login - min. 3 znaki" name="login" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_login']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_login'].'</div>';
				unset($_SESSION['e_login']);
			}
		?>
		
		<br><input type="password"  value="<?php
			if (isset($_SESSION['fr_haslo1']))
			{
				echo $_SESSION['fr_haslo1'];
				unset($_SESSION['fr_haslo1']);
			}
		?>" placeholder="Hasło - min. 8 znaków" name="haslo1" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>
		
		<br><input type="password"  value="<?php
			if (isset($_SESSION['fr_haslo2']))
			{
				echo $_SESSION['fr_haslo2'];
				unset($_SESSION['fr_haslo2']);
			}
		?>" placeholder="Powtórz hasło" name="haslo2" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
		
		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error" style="color:white;">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>
		
		<br />
		 <div class="u-align-center u-form-group u-form-submit" >
              <input type="submit" value="Zarejestruj się" class="u-align-center u-form-group u-form-submit" />
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
		<input type="hidden" value="" name="recaptchaResponse">
		
	</form>
        </div>
      </div>
    </section>
    
    

  </body>
</html>