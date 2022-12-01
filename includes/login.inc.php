<link rel="stylesheet" href="css/rgpd.css">
	<link rel="stylesheet" href="css/rgpd.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
        <script type="text/javascript" src="js/rgpd.js"></script>
<?php

$querySelect = new Sql();
$requete = "SELECT * FROM `admin-salon` ;";
$users = $querySelect->lister($requete);

//header('Location: index.php?page=accueil');
if (isset($_POST["frmLogin"])) {
    $password = htmlentities($_POST['password']);
    $username = htmlentities($_POST['username']);
    $erreurs = array();

    if (mb_strlen($password) === 0)
        array_push($erreurs, "Il manque votre mot de passe");

    if (count($erreurs)) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            # code...
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmLogin.php';
    } else {
        $requetea = "SELECT * FROM `admin-salon` where nom='$username' ;";
        $usersa = $querySelect->lister($requetea);
        //var_dump($requetea);
        if (count($usersa)) {
            if ($password==$usersa[0]['password']) {
                $_SESSION['loginUser'] = $username;
                $_SESSION['type'] = "admin";
                echo "$username Bienvenue à Raylina Beauty!";
                header('Location: index.php?page=admin');
            }
        } else {
            $requetec = "SELECT * FROM `client` where nom='$username' ;";
            $usersc = $querySelect->lister($requetec);
            var_dump($requetec);
            if (!count($usersc)) {
                echo "Il n'y pas d'utilisateur !    Inscrivez-vous !                ";
                include './includes/frmInscription.php';
            } else {
                if ($password==$usersc[0]['mot_de_passe']) {
                    $_SESSION['loginUser'] = $username;
                    $_SESSION['User_id'] = $usersc[0]['id_client'];
                    $_SESSION['type'] = "client";
                    echo "$username Bienvenue à Raylina Beauty!";
                    header('Location: index.php?page=reservation');
                }
               // var_dump(password_verify($password, $usersc[0]['password']));
                /*  if (password_verify($password,$usersc[0]['password'])) {
               
                                                echo "Bienvenue à Raylina Beauty!";
                                                header('Location: index.php?page=Salon');
                                                    } */
            }
        }
    }
} else {
    //        echo "Ton identifiant et mot de passe ne sont pas accord !";
    //       header('Location: index.php?page=login');

    //echo "Je ne viens pas du formulaire";
    /*     $mail = ""; */
    include './includes/frmLogin.php';
}
