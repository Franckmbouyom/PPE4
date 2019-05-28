<?php
include '../visiteurs/cnx.php';

$sql = $cnx->prepare("update region SET REG_CODE=(SELECT DISTINCT(LEFT(REG_NOM, 2)))where reg_nom ='".$_GET['reg_nom']."'");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);