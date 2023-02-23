<?php

session_start();

require_once '../database/connection.php';

header('Content-type: Application/json; charset: UTF-8');

$passwordSalt = 'XDNBB8876_+)887';



$queryNewUser = $pdo->prepare('INSERT INTO wlasciciele (`imie`, `nazwisko`, `numer_tel`, `adres`, `kod_pocztowy`, `miasto`, `pesel`, `adres_email`, `login`, `haslo`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');


$queryNewUser->execute(array(
 
      $_POST['imie'], $_POST['nazwisko'], $_POST['numer_tel'], $_POST['adres'], $_POST['kod_pocztowy'], $_POST['miasto'], $_POST['pesel'], $_POST['adres_email'], $_POST['login'], hash('sha256', $_POST['haslo'] . $passwordSalt)
 
));

if($queryNewUser->rowCount() > 0) {

   $_SESSION['user_id'] = $pdo->lastInsertId();
 
   header('Location: ../home.php');

}

else {

	header('Location: ../rejestracja.html');

}