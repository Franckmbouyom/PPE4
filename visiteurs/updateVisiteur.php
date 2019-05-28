<?php
include 'cnx.php';
$sql = $cnx->prepare("update visiteur set vis_nom ='".$_GET['vis_nom']."' , vis_prenom='".$_GET['vis_prenom']."',vis_adresse='".$_GET['vis_adresse']."',vis_cp='".$_GET['vis_cp']."' where vis_matricule = '".$_GET['vis_matricule']."'");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>