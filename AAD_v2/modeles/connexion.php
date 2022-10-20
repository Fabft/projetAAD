
<?php

// Connexion � la base de donn�es bddArtothequerequire 

require 'credentials.php';
try
{
 
	$bddaad = new PDO('mysql:host=localhost;dbname=bddaad;charset=utf8',$user,$password);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
