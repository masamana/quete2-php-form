<?php

$errors = [];
$email = $_POST['email'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['email']) || trim($_POST['email']) === '' || filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = "L'email est obligatoire";
    if (!isset($_POST['phone']) || trim($_POST['phone']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if (!isset($_POST['subjects']) || trim($_POST['subjects']) === '')
        $errors[] = "La selection est obligatoire";
    if (!isset($_POST['message']) || trim($_POST['message']) === '')
        $errors[] = "Le commentaire est obligatoire";

    if (empty($errors)) {

        header('Location: thanks.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Super formulaire</title>
</head>


<body>
    <main class="container">

        <?php
        if (count($errors) > 0) : ?>
            <div class="border border-danger rounded p-3 m-5 bg-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <h1 class="text-center">Formulaire</h1>


        <form action="thanks.php" method="post" class="container bg-light border rounded div-5">

            <p class="row">
                <label for="lastname" class="form-label">Nom : </label>
                <input type="text" name="lastname" id="user_lastname" class="form-control" required>
            </p>

            <p class="row">
                <label for="firstname" class="form-label">Prénom : </label>
                <input type="text" name="firstname" id="user_firstname" class="form-control" required>
            </p>

            <p class="row">
                <label for="email" class="form-label">Votre email : </label>
                <input type="email" name="email" id="user_email" class="form-control" required>
            </p>

            <p class="row">
                <label for="phone" class="form-label">Téléphone : </label>
                <input type="phone" name="phone" id="user_phone" class="form-control" required>
            </p>

            <p>
                <label for="subject-select">Sujet : </label>

                <select name="subjects" id="subject-select" required>
                    <option value="">Veuillez choisir une option</option>
                    <option value="Php">PHP</option>
                    <option value="Javascript">Javascript</option>
                    <option value="Html">HTML</option>
                    <option value="Css">CSS</option>
                    <option value="Sql">SQL</option>
                    <option value="Nocode">Nocode</option>
                </select>
            </p>


            <p class="row">
                <label for="message">Message :</label>
                <textarea id="user_message" name="message" required></textarea>
            </p>

            <p class="text-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </p>

        </form>

    </main>
</body>

</html>