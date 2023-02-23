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
<link rel="stylesheet" href="Lekarze.css" media="screen">
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
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-1">Nasi specjaliści</h3>
		
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
				
				
				$sql = 'SELECT woc.nazwa from lekarze inner join woc_lekarze ON lekarze.id_lek = woc_lekarze.id_lek inner join woc on woc_lekarze.id_woc = woc.id_woc where woc_lekarze.id_lek = 1';
				$result = $conn->query($sql);
				
				$sql1 = 'SELECT imie, nazwisko, opis from lekarze where id_lek = 1';
				$result1 = $conn->query($sql1);
				

				if ($result1->num_rows > 0) {
				// output data of each row
				while($row1 = $result1->fetch_assoc()) {
					echo "<strong>" . $row1["imie"] . " " . $row1["nazwisko"].  "</strong><br>" . $row1["opis"] . "<br>";}
				} 
				echo "<strong>Wykształcenie, osiągnięcia, certyfikaty:</strong><br>";
				if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "*" . $row["nazwa"] .";<br>";}
				} 
				
				echo "<br><br>";
				
				$sql2 = 'SELECT woc.nazwa from lekarze inner join woc_lekarze ON lekarze.id_lek = woc_lekarze.id_lek inner join woc on woc_lekarze.id_woc = woc.id_woc where woc_lekarze.id_lek = 2';
				$result2 = $conn->query($sql2);
				
				$sql3 = 'SELECT imie, nazwisko, opis from lekarze where id_lek = 2';
				$result3 = $conn->query($sql3);
				

				if ($result3->num_rows > 0) {
				// output data of each row
				while($row3 = $result3->fetch_assoc()) {
					echo "<strong>".$row3["imie"] . " " . $row3["nazwisko"].  "</strong><br>" . $row3["opis"] . "<br>";}
				} 
				echo "<strong>Wykształcenie, osiągnięcia, certyfikaty:</strong><br>";
				if ($result2->num_rows > 0) {
				// output data of each row
				while($row2 = $result2->fetch_assoc()) {
					echo "*" . $row2["nazwa"] .";<br>";}
				} 
				
				echo "<br><br>";
				
				$sql4 = 'SELECT woc.nazwa from lekarze inner join woc_lekarze ON lekarze.id_lek = woc_lekarze.id_lek inner join woc on woc_lekarze.id_woc = woc.id_woc where woc_lekarze.id_lek = 3';
				$result4 = $conn->query($sql4);
				
				$sql5 = 'SELECT imie, nazwisko, opis from lekarze where id_lek = 3';
				$result5 = $conn->query($sql5);
				

				if ($result5->num_rows > 0) {
				// output data of each row
				while($row5 = $result5->fetch_assoc()) {
					echo "<strong>".$row5["imie"] . " " . $row5["nazwisko"].  "</strong><br>" . $row5["opis"] . "<br>";}
				} 
				echo "<strong>Wykształcenie, osiągnięcia, certyfikaty:</strong><br>";
				if ($result4->num_rows > 0) {
				// output data of each row
				while($row4 = $result4->fetch_assoc()) {
					echo "*" . $row4["nazwa"] .";<br>";}
				} 
				
				echo "<br><br>";
				
				$sql6 = 'SELECT woc.nazwa from lekarze inner join woc_lekarze ON lekarze.id_lek = woc_lekarze.id_lek inner join woc on woc_lekarze.id_woc = woc.id_woc where woc_lekarze.id_lek = 4';
				$result6 = $conn->query($sql6);
				
				$sql7 = 'SELECT imie, nazwisko, opis from lekarze where id_lek = 4';
				$result7 = $conn->query($sql7);
				

				if ($result7->num_rows > 0) {
				// output data of each row
				while($row7 = $result7->fetch_assoc()) {
					echo "<strong>".$row7["imie"] . " " . $row7["nazwisko"].  "</strong><br>" . $row7["opis"] . "<br>";}
				} 
				echo "<strong>Wykształcenie, osiągnięcia, certyfikaty:</strong><br>";
				if ($result6->num_rows > 0) {
				// output data of each row
				while($row6 = $result6->fetch_assoc()) {
					echo "*" . $row6["nazwa"] .";<br>";}
				} 
				
				echo "<br><br>";
				
				$sql8 = 'SELECT woc.nazwa from lekarze inner join woc_lekarze ON lekarze.id_lek = woc_lekarze.id_lek inner join woc on woc_lekarze.id_woc = woc.id_woc where woc_lekarze.id_lek = 5';
				$result8 = $conn->query($sql8);
				
				$sql9 = 'SELECT imie, nazwisko, opis from lekarze where id_lek = 5';
				$result9 = $conn->query($sql9);
				

				if ($result9->num_rows > 0) {
				// output data of each row
				while($row9 = $result9->fetch_assoc()) {
					echo "<strong>".$row9["imie"] . " " . $row9["nazwisko"].  "</strong><br>" . $row9["opis"] . "<br>";}
				} 
				echo "<strong>Wykształcenie, osiągnięcia, certyfikaty:</strong><br>";
				if ($result8->num_rows > 0) {
				// output data of each row
				while($row8 = $result8->fetch_assoc()) {
					echo "*" . $row8["nazwa"] .";<br>";}
				} 
				
				echo "<br><br>";
				
				$sql10 = 'SELECT woc.nazwa from lekarze inner join woc_lekarze ON lekarze.id_lek = woc_lekarze.id_lek inner join woc on woc_lekarze.id_woc = woc.id_woc where woc_lekarze.id_lek = 6';
				$result10 = $conn->query($sql10);
				
				$sql11 = 'SELECT imie, nazwisko, opis from lekarze where id_lek = 6';
				$result11 = $conn->query($sql11);
				

				if ($result11->num_rows > 0) {
				// output data of each row
				while($row11 = $result11->fetch_assoc()) {
					echo "<strong>".$row11["imie"] . " " . $row11["nazwisko"].  "</strong><br>" . $row11["opis"] . "<br>";}
				} 
				echo "<strong>Wykształcenie, osiągnięcia, certyfikaty:</strong><br>";
				if ($result10->num_rows > 0) {
				// output data of each row
				while($row10 = $result10->fetch_assoc()) {
					echo "*" . $row10["nazwa"] .";<br>";}
				}

				echo "<br><br>";
				
				$sql12 = 'SELECT woc.nazwa from lekarze inner join woc_lekarze ON lekarze.id_lek = woc_lekarze.id_lek inner join woc on woc_lekarze.id_woc = woc.id_woc where woc_lekarze.id_lek = 7';
				$result12 = $conn->query($sql12);
				
				$sql13 = 'SELECT imie, nazwisko, opis from lekarze where id_lek = 7';
				$result13 = $conn->query($sql13);
				

				if ($result13->num_rows > 0) {
				// output data of each row
				while($row13 = $result13->fetch_assoc()) {
					echo "<strong>".$row13["imie"] . " " . $row13["nazwisko"].  "</strong><br>" . $row13["opis"] . "<br>";}
				} 
				echo "<strong>Wykształcenie, osiągnięcia, certyfikaty:</strong><br>";
				if ($result12->num_rows > 0) {
				// output data of each row
				while($row12 = $result12->fetch_assoc()) {
					echo "*" . $row12["nazwa"] .";<br>";}
				} 
				
				echo "<br><br>";
				
				$conn->close();
				?>
      </div>
    </section>
    
    
    <footer class="u-align-left u-clearfix u-footer u-grey-80 u-footer" id="sec-d40d"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <span>Wszelkie prawa zastrzeżone</span></br>
        <span>Pomoc przy obrópce css - Nicepage</span> 
    </section>
  </body>
</html>