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
        <div class="titrePort">SPECTACLES</div>
        
        <?php

                $widSpec = $spectacle['idSp'];
                $wTitreSpec = $spectacle['TitreSp'];
                $wTarifSpec = $spectacle['TarifSp'];
                $wImgSpec = "vues/images/".$spectacle['ImgSp']."";
                $wTempsSpec = $spectacle['TempsSp'];
            ?>

        <section class="wiki">
			<?php
                echo "<H1 class='grid-item'> $wTitreSpec  </H1><BR/>";

				echo "<img src =",$wImgSpec," class='grid-item'>";

				//echo "<p class='grid-item'>$Description<BR/></p>"; 	
			?>
        </section>    
</div>

<?php include("./vues/include/v_footer.php");?>
</body>
</html>