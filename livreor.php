<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Livre d'or</title>
  <link rel="stylesheet" href="scss/style.scss">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d93dff7d82.js"></script> 
</head>
<body class="bodySecond">
    <?php include "_header.php"; ?>
    <main class="bodyLivre">
        <div class="backgroundPopk">
            <img class="imgPopk1" src="images/gaming2.jpg" alt="console et manette Nitendo">
            <h1 class="titlePopk">Livre d'or</h1>
        </div>
        <div class="elementsLivre">
            <div class="presentation">
                <h2 class="h2Popk">Ton avis compte</h2>
                <p class="pPopk1">Tu as passé un bon moment et tu as envie de partager avec nous et les autres ton expérience au PopK ?</p>
                <p class="pPopk1">Laisse donc un message sur le <b>livre d'or</b> du plus pop des cyber-café !</p>
                <button><a href="livreor.php#ancrePop3"><i class="fas fa-arrow-circle-down"></i></a></button>
            </div>
            <div class="cut" id="ancrePop3"></div>
            <div class="formulary">
                <h3 class="titleForm">Dis-nous tout</h3>
                <form action="form.php" method="POST" class="form-example form2">
                    <label for="name">Ton nom : </label>
                    <input type="text" name="name" id="name" placeholder="Eric Cartman">
                    <label for="email">Votre mail : </label>
                    <input type="email" name="email" id="email" placeholder="eric.cartman@gmail.com">
                    <label for="message">Ton message : </label>
                    <textarea placeholder="Je vous emmerde et je rentre à ma maison" name="message"></textarea>
                    <label for="rating">Ta note : </label>
                    <div class="rating">
                        <a class="aRating" href="#1" title="5 étoiles">☆</a>
                        <a class="aRating" href="#2" title="4 étoiles">☆</a>
                        <a class="aRating" href="#3" title="3 étoiles">☆</a>
                        <a class="aRating" href="#4" title="2 étoiles">☆</a>
                        <a class="aRating" href="#5" title="1 étoile">☆</a>
                    </div>
                    <input class="send" type="submit" value="Envoyer">
                </form>
                <button class="button2"><a href="livreor.php#ancrePop4"><i class="fas fa-arrow-circle-down"></i></a></button>
            </div>
            <div class="cut"></div>
            <div class="comment">
                <h3 class="titleForm" id="ancrePop4">Ils ont donné leur avis</h3>
                <div class="listComment">
                    <div class="cardComment">
                        <div class="cardName">
                            <div class="cardImage">
                                <img src="images/guy1.jpg" alt="images d'un homme masqué">
                            </div>
                        </div>
                        <div class="cardContent">
                            <p class="pPopk1">Name</p>
                            <p class="pPopk1">"Dope dope dope dope dope dope dope dope dope"</p>
                        </div>
                    </div>
                    <div class="cardComment">
                        <div class="cardName">
                            <div class="cardImage">
                                <img src="images/guy1.jpg" alt="images d'un homme masqué">
                            </div>
                        </div>
                        <div class="cardContent">
                            <p class="pPopk1">Name</p>
                            <p class="pPopk1">"Dope dope dope dope dope dope dope dope dope"</p>
                        </div>
                    </div>
                    <div class="cardComment">
                        <div class="cardName">
                            <div class="cardImage">
                                <img src="images/guy1.jpg" alt="images d'un homme masqué">
                            </div>
                        </div>
                        <div class="cardContent">
                            <p class="pPopk1">Name</p>
                            <p class="pPopk1">"Dope dope dope dope dope dope dope dope dope"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "_footer.php"; ?>
    <script src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
