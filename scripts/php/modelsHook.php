<?php
require '../../application/model/modelsModel.php';
$homeModel = new ModelsModel();
$data = $homeModel->dbGetModels();
echo json_encode($data);
?>