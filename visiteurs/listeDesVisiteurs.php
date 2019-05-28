<?php
include 'cnx.php';
$sql = $cnx->prepare("select vis_matricule,vis_nom,vis_prenom,vis_ville,vis_cp,vis_adresse from visiteur
 group by vis_nom asc ");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>