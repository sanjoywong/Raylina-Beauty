<?php 

$querySelect = new Sql();
$requete = "SELECT * FROM `admin-salon` ;";
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
    { $requetea = "SELECT * FROM `admin-salon` where nom='$username' ;";
        $usersa = $querySelect->lister($requetea);
       
        if(count($usersa)){
           if (password_verify($password,$usersa['password'])) {
               
               echo "Bienvenue à Raylina Beauty!";
               header('Location: index.php?page=Salon');
           }}
           else{
                     $requetec = "SELECT * FROM `client` where nom='$username' ;";
                     $usersc = $querySelect->lister($requetec);
                     //var_dump($requetec);
                     if(!count($usersc)){
                        
                        include './includes/frmInscription.php';
                                        }else{
                                            if (password_verify($password,$usersc['password'])) {
               
                                                echo "Bienvenue à Raylina Beauty!";
                                                header('Location: index.php?page=Salon');
                                                    }
                                            }
                }
    }
} else      
    {
//        echo "Ton identifiant et mot de passe ne sont pas accord !";
 //       header('Location: index.php?page=login');
 
    //echo "Je ne viens pas du formulaire";
/*     $mail = ""; */
include './includes/frmLogin.php';

    }




?>