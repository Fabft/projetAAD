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
<?php include("include/v_entete.php");?>
<div class="style-page">
        <div class="titrewiki">ARTISTE</div>
        
            <?php
                $IdArt = $artisteChoisi["idArt"];
                $NomArt = $artisteChoisi["nomArt"];
                $PrenomArt = $artisteChoisi["prenomArt"];
                $ImageArt = "vues/images/".$artisteChoisi['imgArt']."";
                $Description = $artisteChoisi["descArt"];
            ?>

        <section class="wiki">
        
			<?php
                echo "<H1 class='grid-wiki-titre'> $PrenomArt  $NomArt</H1><BR/>";
				echo "<img src =",$ImageArt," class='grid-wiki-img'>";
                echo "<a href ='index.php?section=spectaclesArtiste&ChoixId=$IdArt' class='grid-wiki-item'>
                <div class='button -regular center'>SPECTACLES</div></a><br></br>";
				echo "<p class='grid-wiki-desc'>$Description<BR/></p>"; 	
			?>
        <section>    
</div>
<?php include("include/v_footer.php");?>
</body>
</html>