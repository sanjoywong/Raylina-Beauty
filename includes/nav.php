
<header>
    <nav>
        <ul>
                <li><a href="index.php?page=salon">Salon___t</a></li>
                
                <li><a href="soins.inc.php">Soins</a></li>
                <li><a href="coiffure.inc.php">Coiffure</a></li>
                <li><a href="./barbier.inc.php">Barbier</a></li>
                <li><a href="./produit.inc.php">Produits</a></li>
                <li><a href="./tarifs.inc.php">Tarifs</a></li>
                <li><a href="./bons-plan.inc.php">Bons plan</a></li>
                <li><a href="index.php?page=reservationj">Reservation</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            <?php
            if (isset($_SESSION['loginUser'])) {
            ?>
                <li><strong><?= $_SESSION['loginUser'] ?></strong></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            <?php } else { ?>
                <li><a href="index.php?page=inscription">Inscription</a></li>
                <li><a href="index.php?page=login">Login</a></li>
            <?php } ?>
        </ul>

    </nav>
</header>