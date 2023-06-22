

    <?php
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: X-Requested-With");
    
    header('Content-Type: application/json');

    $programmingLanguages  = [
        ['name' => 'HTML'],
        ['name' => 'CSS'],
        ['name' => 'Responsive Design'],
        ['name' => 'Javascript'],
        ['name' => 'PHP'],
        ['name' => 'Lavarel'],
    ];
        echo json_encode($programmingLanguages );
    ?>
