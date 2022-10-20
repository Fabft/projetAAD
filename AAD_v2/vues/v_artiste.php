<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Art'A Dom</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vues/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet">
    

</head>

<body>
<?php include("./vues/include/v_entete.php");?>
	<div class="style-page">
        <div class="titrePort">PORTRAITS</div>
			<section class="portraits">               
			<?php
					//affichage des artistes 
					foreach($artistes as $unArtiste)
					{	
						$idArt=$unArtiste['idArt'];
						$nomArt=$unArtiste['nomArt'];
						$prenomArt=$unArtiste['prenomArt'];
						$imgArt="vues/images/".$unArtiste['imgArt']."";
						
						echo "<A href='index.php?section=detailartiste&choixId=$idArt'><img src='$imgArt'><br><h1>$prenomArt $nomArt</h1></img></a>";
					}	
			?>
			</section>
	</div>
			 

<?php include("./vues/include/v_footer.php");?>
</body>
</html>