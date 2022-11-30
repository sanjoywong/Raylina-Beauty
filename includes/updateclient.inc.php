
<?php



if (isset($_POST['frmUpdateClient'])) {
    // $message = "Je viens du formulaire";

    $nom = htmlentities(trim($_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom']));
    $email = htmlentities(trim($_POST['email']));
    $telephone = htmlentities(trim($_POST['telephone']));
    $id = htmlentities(trim($_POST['idclient']));


    $erreurs = array();


    if (mb_strlen($nom) === 0) {
        array_push($erreurs, "Il manque vore nom");
    };
    if (mb_strlen($prenom) === 0)
        array_push($erreurs, "Il manque vore prenom");
    //ajoute verifier l'email

    if (count($erreurs)) {

        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";
        echo $messageErreur;
        include './includes/frmUpdateClient.php';
    } else {

        $requete = "UPDATE client set nom='$nom', prenom ='$prenom',email='$email',telephone='$telephone'
            where id_client = '$id';";


        $sqlUpdate = new Sql();
        $sqlUpdate->inserer($requete);
        $url = "index.php?page=admin";
        echo redirection($url);
    }
} else {
    include './includes/frmUpdateClient.php';
}

?>