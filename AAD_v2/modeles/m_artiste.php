<?php

function get_artiste()
{
    global $bddaad;
           
    $req = $bddaad->prepare("SELECT idArt,nomArt,prenomArt, imgArt FROM artiste");
	$req->execute();
    $artistes = $req->fetchAll();
        
    return $artistes;
}

function get_detailArtiste($idArtiste)
{
    
    global $bddaad;
    $req = $bddaad->prepare("SELECT idArt,nomArt,prenomArt,imgArt,descArt
                                    FROM artiste
                                    WHERE idArt=$idArtiste");
    $req->execute([$idArtiste]);
    $artiste = $req->fetch();

    return $artiste;
    


}
