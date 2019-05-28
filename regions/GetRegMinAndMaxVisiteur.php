<?php
include '../visiteurs/cnx.php';
$sql = $cnx->prepare("
SELECT min(nb), max(nb) 
FROM (SELECT COUNT(t.VIS_MATRICULE) as nb, r.REG_CODE as codeReg 
FROM visiteur AS v 
INNER JOIN travailler AS t on v.VIS_MATRICULE = t.VIS_MATRICULE 
INNER JOIN region AS r on t.REG_CODE = r.REG_CODE
INNER JOIN secteur AS s on r.SEC_CODE = s.SEC_CODE
GROUP BY codeReg) AS resultat");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>