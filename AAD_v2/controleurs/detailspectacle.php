<?php
	
    $idSpectacle = $_GET["choixId"];



//r�cup�ration de l'ensemble des artistes dans la base
	include_once('modeles/m_spectacle.php');
	
	$spectacle = get_detailSpectacle($idSpectacle);
	
	
// affichage de la vue associ�e
	include_once('vues/v_detailspectacle.php');
