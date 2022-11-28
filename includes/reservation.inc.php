<?php
if ($_SESSION['username']) {
    include './includes/frmlogin.php';
} elseif (isset($_POST['frmReservation'])) {
    $jour = htmlentities(trim($_POST['jour']));
    $heure = htmlentities(trim($_POST['heure']));
    $service = htmlentities(trim($_POST['service']));
    $username = $_SESSION['username'];
    $erreurs = array();



    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmReservation.php';
    } else {
        $requeteRDV = "insert into `planning`(`Client_id_client`) values (`$username`) WHERE date='$jour' and heure_debut='$heure and Service_id_Service='$service";
        $sqlRDV = new Sql();
        $sqlRDV->inserer($requeteRDV);

        echo "Votre RDV va bientôt etrê confirmé !";
        //        $url = $_SERVER['HTTP_ORIGIN'] . dirname($_SERVER['REQUEST_URI']) . "/";

        //      echo redirection($url, 2000);
        //    echo "<p><a href=\"$url\">Revenir à la page d'accueil</a></p>";
    }
} else {

    include './includes/frmReservation.php';
}
