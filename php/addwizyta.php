<?php

session_start();

//ALTER TABLE `wizyty` ADD `godzina` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL AFTER `data`;


if(!isset($_SESSION['user_id'])) header('Location: index.php');

require_once '../database/connection.php';


$idPupila = @explode(';', $_POST['wybrany_pupil'])[0];

$limitWizytNaDzien = 16; // na test 3


if(isSet($_POST['wybrany_lekarz'], $_POST['wybrany_pupil'], $_POST['wybrana_godzina'], $_POST['data_wizyty'])) {

   $queryCheck = $pdo->prepare('SELECT COUNT(id_wiz) FROM wizyty WHERE data = ? AND id_lek = ?');

   $queryCheck->execute([$_POST['data_wizyty'], $_POST['wybrany_lekarz']]);


   if($queryCheck->fetchColumn() >= $limitWizytNaDzien) {

      header('Location: ../Wizyty.php?show_msg=1&error=1'); exit;

   }


   $queryDodajWizyte = $pdo->prepare('INSERT INTO wizyty (data, godzina, uwagi, id_lek, id_pupil) VALUES(?, ?, ?, ?, ?)');


   $queryDodajWizyte->execute([
     
      $_POST['data_wizyty'], $_POST['wybrana_godzina'], $_POST['uwagi'], $_POST['wybrany_lekarz'], $idPupila 
 
   ]);

   $queryDodajWizyte2 = $pdo->prepare('INSERT INTO wizyty_rodzaj_wizyty (id_wiz, id_rodzaj_wiz) VALUES(?, ?)');


   $queryDodajWizyte2->execute([
     
      $pdo->lastInsertId(),  $_POST['wybrany_rodzaj']

   ]);


   if($queryDodajWizyte->rowCount() > 0) {

      header('Location: ../Wizyty.php?show_msg=1&success=1');

   }

   else {

      header('Location: ../Wizyty.php?show_msg=1&error=0');

   }

}

else {

   header('Location: ../Wizyty.php');

}
