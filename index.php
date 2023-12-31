<?php
$couleur_bulle_classe = "rose";
$page_active = "index";

?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - SAÉ 105</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">

    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="shortcut icon" type="image/png" href="ressources/logo/favicon.png" alt="logo">
</head>

<body>
    <?php require_once('./ressources/includes/header.php'); ?>
    <?php require_once('./ressources/includes/bulle.php'); ?>

    <main class="conteneur-principal conteneur-1280">
        <h1 class="titre-page">Articles sur le BUT MMI</h1>

        <section class="colonne">
            <section class="liste-articles">
                
                     <?php 
                     for($i=0; $i<3; $i++)
                     {
                        ?>
                        <a class='article'>
                        <figure>
                            <img src='ressources/images/image-article.png' alt='image article indisponible'>
                        </figure>
                        <section class='textes'>
                            <h1 class='titre'>Développement web</h1>
                            <p class='description'>
                            Initier les étudiants et les étudiantes aux bases de la programmation de pages HTML. 
                            On y apprend les langages HTML et CSS, simples mais énormément pratiques. Le web ayant 
                            été pensé pour être accessible, le cours enseigne également les normes d'accessibilités 
                            comme le contraste des couleurs ou encore la taille des polices d'écriture.
                            </p>
                        </section>

                    </a>
                        <?php
                     }
                     ?>
            </section>
            <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" target="_blank" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="image bannière indisponible">

                <section class="textes">
                    <p class="txt-petit">Journée portes <br /> ouvertes</p>
                    <p class="txt-grand">
                        12/02/<?php echo date('Y') ?>, <br />
                        de 10h à 17h
                    </p>
                    <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                </section>
            </a>
        </section>
    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>