<?php

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subjects = $_POST['subjects'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container">

        <div class="container bg-light border rounded p-5">
            <h1>Merci pour votre message !</h1>
            <p>Merci <?= $firstname . " " .  $lastname ?> de nous avoir contacté à propos de <?= $subjects ?></p>

            <p>Un de nos conseillers vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande : </p>

            <p><?= $message ?></p>

            <h3 class="text-center mt-5">Nous allons vous recontacter très vite !</h3>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>