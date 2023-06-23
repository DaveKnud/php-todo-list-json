
<?php
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: X-Requested-With");
    
    header('Content-Type: application/json');

    $file = "data.json";
    $newPushedLanguage = $_POST;
    $dataStringa = file_get_contents($file);
    $data = json_decode($dataStringa);
    $data[] = $newPushedLanguage;
    $encData = json_encode($data);

    file_put_contents($file, $encData);
    echo $encData;

    ?>
