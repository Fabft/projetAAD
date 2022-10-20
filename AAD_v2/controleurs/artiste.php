<?php
	
//r�cup�ration de l'ensemble des artistes dans la base
	include_once('modeles/m_artiste.php');
	
	$artistes = get_artiste();
	
	
// affichage de la vue associ�e
	include_once('vues/v_artiste.php');
