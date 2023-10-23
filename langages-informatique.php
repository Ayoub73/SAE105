<?php
$couleur_bulle_classe = "violet";
$page_active = "langages-informatique";

?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langages informatique - SAÉ 105</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">

    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/langages-informatique.css">
    <link rel="shortcut icon" type="image/png" href="ressources/logo/favicon.png" alt="logo">
</head>

<body>
    <?php require_once('./ressources/includes/header.php'); ?>
    <?php require_once('./ressources/includes/bulle.php'); ?>

    <br><br>
    <main class="conteneur-principal conteneur-1280">
        <h1 class="titre-page">Langages informatique enseignés</h1>
        <?php require_once('./ressources/includes/tableau.php'); ?>                        
    </main>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>