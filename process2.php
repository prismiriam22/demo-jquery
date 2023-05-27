<?php
$inputText = $_POST['text'];
$inputNumber = $_POST['number'];

$dataArray = array();
for ($i = 0; $i < $inputNumber; $i++) {
    $dataArray[] = $inputText . " " . ($i + 1);
}

header('Content-Type: application/json');
echo json_encode($dataArray);
?>
