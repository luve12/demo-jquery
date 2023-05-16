<?php
if(isset($_POST['text']) && isset($_POST['number'])) {
    $text = $_POST['text'];
    $number = intval($_POST['number']);
    $result = array();
    for ($i = 0; $i < $number; $i++) {
        $result[$i] = $text.' '.($i+1);
    }
    header('Content-Type: application/json');
    echo json_encode($result);
}
?>
