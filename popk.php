<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d93dff7d82.js"></script> 
</head>
<body class="bodyFirst">
    <?php include "_header.php"; ?>
    <main class="bodyPopk">
        <div class="backgroundPopk">
            <img class="imgPopk1" src="images/gaming1.jpg" alt="deux garçons assis avec des écrans et des consoles">
            <h1 class="titlePopk">Le PopK</h1>
        </div>
        <div class="elementsPopk">
            <div class="presentation">
                <h2 class="h2Popk">Cyber-culture / pop-café</h2>
                <p class="pPopk1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quas provident nihil deserunt voluptatibus quis quo aut eius beatae reprehenderit! Suscipit ut possimus, quos consectetur nisi qui porro sed nemo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quas provident nihil deserunt voluptatibus quis quo aut eius beatae reprehenderit! Suscipit ut possimus, quos consectetur nisi qui porro sed nemo! </p>
            </div>
            <div class="cut" id="ancrePop1"></div>
            <div class="infos">
                <div class="infos1">
                    <h3 class="h3Popk">Horaires</h3>
                    <i class="fas fa-clock iPopk "></i>
                    <p class="hours pPok1">Ouvert du mardi au samedi </br>De 15h à minuit</p>
                </div>
                <div class="infos1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11136.676076947211!2d-0.6269047!3d45.7477574!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb4798fc0261f3260!2sP%C3%B4le%20Innovation%20de%20Saintes!5e0!3m2!1sfr!2sfr!4v1616149559508!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="infos1 infos2">
                    <h3 class="h3Popk h3Popk1">Infos</h3>
                    <address class="hours"><i class="fas fa-home iPopk1"></i>Adresse :</br>15 rue de la Soif, 17100 Saintes</address>
                    <p class="hours pPok1 phone1"><i class="fas fa-phone-alt iPopk1"></i>Telephone :</br>06 XX XX XX XX</p>
                    <p class="hours pPok1 mail1"><i class="fas fa-envelope iPopk1"></i>Mail :</br>popk.cyber@gmail.com</p>
                </div>
            </div>
            <div class="cut" id="ancrePop2"></div>
            <div class="formulary">
                <h3 class="titleForm">Contactez-nous</h3>
                <form action="form.php" method="POST" class="form-example">
                    <label for="name">Votre nom : </label>
                    <input type="text" name="name" id="name" placeholder="Eric Cartman">
                    <label for="email">Votre mail : </label>
                    <input type="email" name="email" id="email" placeholder="eric.cartman@gmail.com">
                    <label for="message">Votre message : </label>
                    <textarea placeholder="Butters, je te hais de toutes les fibres de mon corps"></textarea>
                    <input class="send" type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </main>
    <?php include "_footer.php" ?>
    <?php include "script.php" ?>
</body>
</html>