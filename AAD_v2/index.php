<?php

include_once('modeles/connexion.php');


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleurs/accueil.php');
}

else
{
    if ($_GET['section'] == 'presentation')
	{  
		include_once('controleurs/presentation.php');
	}
	if ($_GET['section'] == 'artiste')
	{  
		include_once('controleurs/artiste.php');
	}
	if ($_GET['section'] == 'detailartiste')
	{  
		include_once('controleurs/detailartiste.php');
	}
	if ($_GET['section'] == 'spectacle')
	{  
		include_once('controleurs/spectacle.php');
	}
	
}

?>

