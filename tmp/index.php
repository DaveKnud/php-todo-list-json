<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php
    header('Content-Type: application/json');

    $toDoList = [
        'language' => 'HTML',
        'language' => 'CSS',
        'language' => 'Responsive Design',
        'language' => 'Javascript',
        'language' => 'PHP',
        'language' => 'Lavarel',
    ]
        echo json_encode($toDoList)
    ?>
    <h1>ok</h1>
</body>
</html>