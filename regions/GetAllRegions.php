<?php
 include '../visiteurs/cnx.php';
$sql = $cnx->prepare("select REG_NOM,REG_CODE,SEC_CODE from region group by region.REG_NOM");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>