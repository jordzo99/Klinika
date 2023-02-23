<?php

try {
     
     $pdo = new PDO('mysql:host=localhost;dbname=weterynarz;charset=utf8mb4', 'root', '');
     //$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

} 

catch (PDOException $e) {
     
     throw new PDOException($e->getMessage(), (int)$e->getCode());

}