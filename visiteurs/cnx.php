<?php
//connexion a la base de donn�es
// dsn = Data Source Name = driver MYSQL
//$dsn='mysql:dbname=benjamin;host=172.16.20.5';
$dsn='mysql:dbname=gsbok;host=localhost';
//login
$login='root';
 //$login='benjamin';
// Mot de passe
 //$motDePasse='benjamin';
$motDePasse='';
// Connexion au serveur MySQL
try{
    $cnx = new PDO($dsn, $login, $motDePasse,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch (PDOException $e){
	die('Erreur : ' . $e->getMessage());
}