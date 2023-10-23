<nav class="navigation-principale conteneur-1280">
    <ul>
        <li <?php if ($page_active == "index") {
                echo "class='active'";
            } ?>><a class="index" href="./">ACCUEIL</a>
        </li>
        <li <?php if ($page_active == "apropos") {
                echo "class='active'";
            } ?>><a class="apropos" href="./a-propos.php">A PROPOS</a></li>
        <li <?php if ($page_active == "contact") {
                echo "class='active'";
            } ?>><a class="contact" href="./contact.php">CONTACT</a></li>
        <li <?php if ($page_active == "medias") {
                echo "class='active'";
            } ?>><a class="medias" href="./sur-les-medias.php">SUR LES MÉDIAS</a></li>
        <li <?php if ($page_active == "langages-informatique") {
                echo "class='active'";
            } ?>><a class="langages-informatique" href="./langages-informatique.php">LANGAGES INFORMATIQUE</a></li>        
    </ul>
</nav>