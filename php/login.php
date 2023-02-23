<?php

	session_start();
	echo "Jestem";
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		echo "Jestem";
		exit();
	}

	$host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "weterynarz";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name),;
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM wlasciciele WHERE user='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				if (password_verify($haslo, $wiersz['pass']))
				{
					$_SESSION['zalogowany'] = true;
					$_SESSION['user_id'] = $wiersz['id_wlasciciela'];
					$_SESSION['imie'] = $wiersz['imie'];
					$_SESSION['nazwisko'] = $wiersz['nazwisko'];
					$_SESSION['numer_tel'] = $wiersz['numer_tel'];
					$_SESSION['adres'] = $wiersz['adres'];
					$_SESSION['kod_pocztowy'] = $wiersz['kod_pocztowy'];
					$_SESSION['miasto'] = $wiersz['miasto'];
					$_SESSION['pesel'] = $wiersz['pesel'];
					$_SESSION['adres_email'] = $wiersz['adres_email'];
					
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: home.php');
				}
				else 
				{
					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					header('Location: index.php');
				}
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>







