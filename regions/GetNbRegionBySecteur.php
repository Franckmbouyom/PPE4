<?php
include '../visiteurs/cnx.php';
$sql = $cnx->prepare("
SELECT secteur.SEC_CODE, secteur.SEC_LIBELLE, COUNT(region.REG_CODE) as nbRegBySect
FROM secteur
INNER JOIN region on secteur.SEC_CODE = region.SEC_CODE
GROUP BY secteur.SEC_CODE");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>