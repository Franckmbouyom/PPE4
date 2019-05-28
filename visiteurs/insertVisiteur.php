<?php
include 'cnx.php';
//voici la requete pour l'insertion du visiteur pour l'instant j'ai mis le code en dur pour teste j'ai juste laise $get['vis_nom'] pour tester mais cela ne fonctionne pas
$sql = $cnx->prepare("insert INTO visiteur(VIS_MATRICULE,VIS_NOM,Vis_PRENOM,VIS_ADRESSE,VIS_CP,VIS_VILLE, VIS_DATEEMBAUCHE,SEC_CODE,LAB_CODE) VALUES ((SELECT SUBSTRING(MD5(RAND()) FROM 1 FOR 3)),'".$_GET['vis_nom']."','".$_GET['vis_prenom']."','".$_GET['vis_adresse']."','".$_GET['vis_cp']."','".$_GET['vis_ville']."',NOW(),'P','".$_GET['lab_code']."')");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>