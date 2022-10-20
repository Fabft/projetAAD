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
    <div>
        <?php include("./vues/include/v_entete.php")?>
    </div>
    <div class="style-page">
        <div class="titrePort">Spectacles</div><br><br><br><br><br>
            <section class="portraits">       
			<?php
					//affichage des artistes 
					foreach($spectacles as $unSpectacle)
					{	
						$idSp=$unSpectacle['idSp'];
						$TitreSp=$unSpectacle['TitreSp'];
						$TarifSp=$unSpectacle['TarifSp'];
						$TempsSp=$unSpectacle['TempsSp'];
                        $ImgSp="vues/images/".$unSpectacle['ImgSp']."";
						
						echo "<A href='index.php?section=detailspectacle&choixId=$idSp'><img src='$ImgSp'><br><h1>$TitreSp $TempsSp</h1></a>";
					}	
			?>
            </section>

    </div>

<?php include("./vues/include/v_footer.php")?>
</body>
</html>