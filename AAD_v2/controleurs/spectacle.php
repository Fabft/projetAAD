<?php
	
//r�cup�ration de l'ensemble des artistes dans la base
	include_once('modeles/m_spectacle.php');
	
	$spectacles = get_spectacle();
	
	
// affichage de la vue associ�e
	include_once('vues/v_spectacle.php');
