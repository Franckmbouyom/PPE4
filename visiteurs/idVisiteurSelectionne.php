<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from visiteur where vis_matricule=".$_GET['idVisiteur']);
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>