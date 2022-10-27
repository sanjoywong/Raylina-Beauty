<?php 

$querySelect = new Sql();
$requete = "SELECT * FROM `admin-salon` order by id_salon DESC;";
$users = $querySelect->lister($requete);

//header('Location: index.php?page=accueil');
if(isset($_POST["frmLogin"]))
{
    $password = htmlentities($_POST['password']);
    $username = htmlentities($_POST['username']);
    $erreurs = array();

    if(mb_strlen($password) === 0)
    array_push($erreurs, "Il manque votre mot de passe");

    if(count($erreurs))
    {
        $messageErreur = "<ul>";
        for ($i=0; $i < count($erreurs); $i++) { 
            # code...
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmLogin.php';
    }
    else
    { $requete = "SELECT * FROM `admin-salon` where nom=`$username` ;";
        $users = $querySelect->lister($requete);
        if(count($users)){
        header('Location: index.php?page=Salon');
    }elseif{
        password_verify($password,$users['password']);
    }
    }

}
else{
    //echo "Je ne viens pas du formulaire";
/*     $mail = ""; */
    include './includes/frmLogin.php';
}

?>