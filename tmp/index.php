

    <?php
    header('Content-Type: application/json');

    $toDoList = [
        ['language' => 'HTML'],
        ['language' => 'CSS'],
        ['language' => 'Responsive Design'],
        ['language' => 'Javascript'],
        ['language' => 'PHP'],
        ['language' => 'Lavarel'],
    ];
        echo json_encode($toDoList);
    ?>
