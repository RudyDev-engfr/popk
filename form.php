<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d93dff7d82.js"></script> 
    <title>Formulary</title>
</head>
<body>
    <?php include "_header.php"; ?> 
    <main class="mainForm">
        <div class="divForm">
            <p class="pPopk1 formReturn">
            <?php
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $errors = [];
                $data = array_map('trim', $_POST);

                if ($_POST)
                {
                    if (empty($data['name']))
                    {
                        $errors['name1'] = "You need to write your name <br/>";
                        echo $errors['name1'];
                    }
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $data['name']))
                    {
                        $errors['name2'] = "Your name is not in the right format <br/>";
                        echo $errors['name2'];
                    }
                    if (empty($data['message']))
                    {
                        $errors['message1'] = "You need to write a message <br/>";
                        echo $errors['message1'];
                    }
                    if (empty($data['email']))
                    {
                        $errors['email1'] = "You need to write your email <br/>";
                        echo $errors['email1'];
                    }
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $errors['email2'] = "Your email address is not in the right format <br/>";
                        echo $errors['email2'];
                    } 
                    else
                    {
                        echo nl2br ("Merci $name pour votre message. Nous vous répondrons au plus vite à l'adresse suivante : $email .
                        Votre message : $message");
                    } 
                }
                ?>
            </p>
            <button class="buttonForm"><a class="aForm" href="index.php">Retourner à l'accueil</a></button>
        </div>
    </main>
    <?php include "_footer.php" ?>
    <?php include "script.php" ?>
</body>
</html>