<?php
include 'cnx.php';
$sql = $cnx->prepare("insert into travailler (vis_matricule,JJMMAA, REG_CODE,TRA_ROLE)
VALUES ('".$_GET['vis_matricule']."',NOW(),'".$_GET['reg_code']."','visiteur')");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>