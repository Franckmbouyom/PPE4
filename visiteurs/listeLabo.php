
<?php
include 'cnx.php';
$sql = $cnx->prepare("select lab_code,lab_nom from labo");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>