<?php
include '../visiteurs/cnx.php';
$sql = $cnx->prepare("INSERT INTO region (REG_CODE, SEC_CODE, REG_NOM)
VALUES ('".$_GET['REG_CODE']."', '".$_GET['SEC_CODE']."','".$_GET['REG_NOM']."')");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>