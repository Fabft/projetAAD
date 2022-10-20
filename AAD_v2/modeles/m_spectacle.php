<?php

function get_spectacle()
{
    global $bddaad;

    $req = $bddaad->prepare("SELECT idSp,TitreSp,TarifSp,TempsSp,ImgSp FROM spectacle");
	$req->execute();
    $spectacles = $req->fetchAll();
        
    return $spectacles;






}






function get_detailSpectacle($idSpectacle)
{
    global $bddaad;

    $req = $bddaad->prepare("SELECT * FROM spectacle 
                                      WHERE idArtiste=?");
	$req->execute([$idArtiste]);
    $SpecArt = $req->fetchAll();
        
    return $SpecArt;






}
