<?php
include '../visiteurs/cnx.php';

$sql = $cnx->prepare("update region set REG_CODE='".$_GET['reg_code']."',sec_code='".$_GET['sec_code']."',REG_NOM='".$_GET['reg_nom']."' where REG_CODE='".$_GET['reg_code']."'");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>