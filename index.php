<?php

include __DIR__ . 'database.php';
include __DIR__ . '/src/models/Movie.php';
include __DIR__ . '/src/models/Genre.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
    <!-- Bootstrap CND -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- my css -->
    <link rel="stylesheet" href="./src/css/style.css">
</head>

<body>
    <?php include __DIR__ . '/src/partials/header.php'; ?>
    <?php include __DIR__ . '/src/partials/main.php'; ?>
    <?php include __DIR__ . '/src/partials/footer.php'; ?>

</body>

</html>