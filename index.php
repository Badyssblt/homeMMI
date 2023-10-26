<?php
$integration =
    [
        ["name" => "Séquence 1 - Batman", "img" => "batman.png", "description" => "Ce travail nous a appris à créer un site avec les bases de HTML/CSS", "path" => "sequence1"],
        ["name" => "Séquence 2 - Kingyo", "img" => "kingyo.png", "description" => "Cet exercice nous a introduit le CSS en modifiant le site déjà existant.", "path" => "sequence2"],
        ["name" => "Séquence 3 - Mr Patate", "img" => "mrpotato.png", "description" => "Cet exercice nous a appris les positions relatives/absolutes en créant des Mr Patates", "path" => "sequence3"],
        ["name" => "Séquence 4 - John Doe", "img" => "johndoe.png", "description" => "Ce travail est plus poussé que car nous devons gérer la dispostion des éléments du sites et faire le css.", "path" => "sequence4"]
    ]



    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header/headerWork.css">
    <link rel="stylesheet" href="./css/hero.css">
    <link rel="stylesheet" href="./css/works.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Accueil</title>
</head>

<body>
    <?php require('./components/header.php') ?>
    <main>
        <div class="hero">
            <h1 class="hero__title"></h1>
            <p class="hero__paragraph">Je m'appelle Badyss Blilita, je suis en S1 en MMI à l'IUT de Troyes et je
                souhaiterais suivre le
                parcours
                Développement et Dispositif Intéractif.
            </p>
            <a href="#works__section" class="hero__btn">Mes travaux</a>
        </div>
    </main>
    <section id="works__section">
        <div class="works__wrapper">
            <p class="wrapper__title">Intégration S1</p>
            <div class="integration">

                <?php
                foreach ($integration as $item) {
                    $path = DIRECTORY_SEPARATOR . "travaux" . DIRECTORY_SEPARATOR . "r112" . DIRECTORY_SEPARATOR;
                    ?>
                    <div class="integration__item">
                        <a href="<?= $path . $item["path"] ?>">
                            <img src="./public/images/<?= $item['img'] ?>" alt="">
                            <p class="integration__title">
                                <?= $item["name"] ?>
                            </p>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="dev">

            </div>
        </div>
    </section>
</body>
<script src="https://kit.fontawesome.com/c1cb64b22b.js" crossorigin="anonymous"></script>
<script src="./js/menu.js"></script>
<script src="./js/sliderLanguage.js"></script>
<script>
    const textToType = "Bonjour, je suis étudiant en MMI.";
    const titleElement = document.querySelector('.hero__title');
    let index = 0;

    function typeWriter() {
        if (index < textToType.length) {
            titleElement.innerHTML += textToType.charAt(index);
            index++;
            setTimeout(typeWriter, 50);
        }
    }

    // Lance la fonction dès que la page est chargée
    window.onload = typeWriter;
</script>
<script>
    function navigate(className) {
        let element = document.querySelector('.' + className);

        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>

</html>