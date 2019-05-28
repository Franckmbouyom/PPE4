<?php
 include '../visiteurs/cnx.php';
$sql = $cnx->prepare("select SEC_CODE,SEC_LIBELLE from secteur");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>