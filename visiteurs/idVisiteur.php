<?php
include 'cnx.php';
$sql = $cnx->prepare("select vis_matricule,vis_nom,vis_prenom,vis_adresse,vis_cp,vis_ville,vis_labo from visiteur where vis_matricule=".$_GET['idVisiteur']);

$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);

?>

