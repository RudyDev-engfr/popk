<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Livre d'or</title>
  <link rel="stylesheet" href="scss/style.scss">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d93dff7d82.js"></script> 
</head>
<body>
    <?php include "_header.php"; ?>
    <main class="bodyLivre">
        <div class="backgroundPopk">
            <img src="images/gaming2.jpg" alt="console et manette Nitendo">
            <h1 class="titlePopk">Livre d'or</h1>
        </div>
        <div class="elementsLivre">
            <div class="presentation">
                <h2>Ton avis compte</h2>
                <p>Tu as passé un bon moment et tu as envie de partager avec nous et les autres ton expérience au PopK ?</p>
                <p>Laisse donc un message sur le <b>livre d'or</b> du plus pop des cyber-café !</p>
                <button><a href="livreor.php#ancrePop3"><i class="fas fa-arrow-circle-down"></i></a></button>
            </div>
            <div class="cut"></div>
            <div class="formulary" id="ancrePop3">
                <h3 class="titleForm">Dis-nous tout</h3>
                <form action="" method="get" class="form-example">
                    <label for="name">Ton nom : </label>
                    <input type="text" name="name" id="name" placeholder="Eric Cartman">
                    <label for="rating">Ta note : </label>
                    <div class="rating">
                        <a href="#1" title="5 étoiles">☆</a>
                        <a href="#2" title="4 étoiles">☆</a>
                        <a href="#3" title="3 étoiles">☆</a>
                        <a href="#4" title="2 étoiles">☆</a>
                        <a href="#5" title="1 étoile">☆</a>
                    </div>
                    <label for="message">Ton message : </label>
                    <textarea placeholder="Je vous emmerde et je rentre à ma maison"></textarea>
                    <input class="send" type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </main>
    <?php include "_footer.php"; ?>
    <script src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>