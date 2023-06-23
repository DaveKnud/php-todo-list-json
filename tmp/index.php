

    <?php
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: X-Requested-With");
    
    header('Content-Type: application/json');

    $programmingLanguagesString  = file_get_contents('data.json');
    $programmingLanguages = json_decode($programmingLanguagesString);
    echo json_encode($programmingLanguages);
    ?>
