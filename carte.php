<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d93dff7d82.js"></script> 
    <title>La carte</title>
</head>
<body id="body_carte">
    <?php include("_header.php"); ?>  
    <main id="main-carte">  
        <section id="landing">
            <div id="hero-bar">
                <h1 class="h1Carte">La PopKarte </h1>
            </div>
            <section id="intro-cocktail">
                <p class="pCarte">Le popK vous propose un choix unique de coktail avec & sans alcool ! 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quas provident nihil deserunt voluptatibus quis quo aut eius beatae reprehenderit!
                    Suscipit ut possimus, quos consectetur nisi qui porro sed nemo! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Explicabo quas provident nihil deserunt voluptatibus quis quo aut eius beatae reprehenderit!
                </p>
            </section>
            <div id="responsive_cocktail">
            <a href="#cocktail_sa"><img class="imgCarte" src="images/cocktailbleu.png" alt="Cocktail sans alcool" /></a>
            <a href="#cocktail_sa"><h2 class="h2Carte">Sans alcool</h2></a>
            <a href="#cocktail_a"><img class="imgCarte" src="images/cocktailrose.png" alt="Cocktail avec alcool" /></a>
            <a href="#cocktail_a"><h2 class="h2Carte">Alcool</h2></a>
            </div>
        </section>
        <section id="cocktail_a">
            <article class="left-card" >
                <img src="images/first_blood-complete.png" alt="Cocktail first blood" class="first-color" />
                <div class="card-left">
                    <h3 class="first-blood">First blood</h3>
                    <p class="pCarte">Toute la joie d'effectuer le first kill, dans un verre !</p>
                    <ul class="list_cocktail">
                        <li>Vodka</li>
                        <li>Sirop d'orgeat</li>
                        <li>Jus de framboise</li>
                        <li>Menthe fraîche</li>
                        <li>Citron vert pressé</li>
                    </ul>
                </div>
            </article>
            <article class="right-card">
                <img src="images/garrosh-complete.png" alt="Cocktail Garrosh" class="second-color" />
                <div class="card-right">
                <h3 class="garrosh">Garrosh</h3>
                    <p class="pCarte">Soutiens ton clan en buvant le breuvage officiel du célèbre seigneur de guerre.
                    Pour la Horde !!!</p>
                    <ul class="list_cocktail">
                        <li>Vodka</li>
                        <li>Citron pressé</li>
                        <li>Sirop de mangue</li>
                        <li>Jus de cramberry</li>
                    </ul>
                </div>
            </article>
            <article class="left-card">
                <img src="images/nunu-complete.png" alt="Cocktail Nunu " class="first-color" />
                <div class="card-left">
                    <h3 class="nunu">Nunu</h3>
                    <p>La fusion entre un pâtissier et un pilier de comptoir irlandais.</p>
                    <ul class="list_cocktail">
                        <li>Scotch</li>
                        <li>crème</li>
                        <li>Sirop de vanille</li>
                    </ul>
                </div>
            </article>
        </section>
        <section id="cocktail_sa">
            <article class="right-card">
                <img src="images/smite-complete.png" alt="Cocktail Smite" class="secondary-color" />
                <div class="card-right">
                    <h3 class="smite">Smite</h3>
                    <p class="pCarte">Punis ta soif avec une boisson pleine d’énergie mystique.</p>
                    <ul class="list_cocktail">
                        <li>Jus d'ananas</li>
                        <li>Jus de pomme</li>
                        <li>Sirop de vanille</li>
                        <li>Canelle</li>
                    </ul>
                </div>
            </article>
            <article class="left-card">
                <img src="images/lili-complete.png" alt="Cocktail Lili" class="first-color" />
                <div class="card-left">
                    <h3 class="lili">Lili</h3>
                    <p class="pCarte">Dites oui à un moment de douceur dans ce monde de brutes.</p>
                    <ul class="list_cocktail">
                        <li>Crème</li>
                        <li>Jus de fraise</li>
                        <li>Sirop de vanille</li>
                    </ul>
                </div>
            </article>
            <article class="right-card">
                    <img src="images/prodigy-complete.png" alt="Cocktail Prodigy ice-tea" class="secondary-color" />
                    <div class="card-right">
                        <h3 class="prodigy">Prodigy ice-tea</h3>
                        <p class="pCarte">Un mélange où thé et fruits s'associent pour donner naissance au rafraîchissement ultime.</p>
                        <ul class="list_cocktail">
                            <li>Jus de pomme</li>
                            <li>Thé glacé</li>
                            <li>Sirop de cassis</li>
                            <li>Citron vert pressé</li>
                        </ul>
                    </div>
            </article>
        </section>
    </main>
    <?php include "_footer.php" ?>
    <?php include "script.php" ?>
</body>
</html>