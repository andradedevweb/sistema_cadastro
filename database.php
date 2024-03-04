<?php

   //configurações do servidor
   $dbname = 'sistema_cadastro';
   $user = 'root';
   $password = '';
   $host='localhost';


   //realiza a conecção com o banco de dados mySql
   $pdo = new PDO("mysql:dbname=$dbname;host=$host", $user, $password);

   //prepara as querys a serem chamadas 
   $insert = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
   $delete = $pdo->prepare("DELETE FROM `clientes` WHERE nome=? AND email=? AND telefone=?");
   $select = $pdo->prepare("SELECT * FROM `clientes`");

?>