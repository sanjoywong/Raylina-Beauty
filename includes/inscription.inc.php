
<?php
    if (isset($_POST['frmInscription'])) {
        $nom = htmlentities(trim($_POST['nom']));
        $prenom = htmlentities(trim($_POST['prenom']));
        $mail = htmlentities(trim($_POST['mail']));
        $password1 = htmlentities(trim($_POST['password1']));
        $password2 = htmlentities(trim($_POST['password2']));

        $erreurs = array();

        if (mb_strlen($nom) === 0)
            array_push($erreurs, "Il manque votre nom");

        if (mb_strlen($prenom) === 0)
            array_push($erreurs, "Il manque votre prénom");

        if (mb_strlen($mail) === 0)
            array_push($erreurs, "Il manque votre e-mail");

        elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL))
            array_push($erreurs, "Votre adresse mail n'est pas conforme");

        if (mb_strlen($password1) === 0 || mb_strlen($password2) === 0)
            array_push($erreurs, "Veuillez saisir votre mot de passe et sa confirmation");
        
        elseif ($password1 !== $password2)
            array_push($erreurs, "Vos mots de passe ne sont pas identiques");

        if (count($erreurs)) {
            $messageErreur = "<ul>";

            for($i = 0 ; $i < count($erreurs) ; $i++) {
                $messageErreur .= "<li>";
                $messageErreur .= $erreurs[$i];
                $messageErreur .= "</li>";
            }
    
            $messageErreur .= "</ul>";
    
            echo $messageErreur;

            include './includes/frmInscription.php';
        }

        else {
            //$password = password_hash($password1, PASSWORD_DEFAULT);
            $password = $password1;
            $client = "INSERT INTO client (id_client, nom, prenom, email, mot_de_passe)
            VALUES (NULL, '$nom', '$prenom', '$mail', '$password');";
            $requete = "select * from client where nom='$nom'";
            //var_dump($requete);
            //var_dump("Im here");
            $clientInsert = new Sql();
            $user = $clientInsert->lister($requete);

            if (count($user)){
                echo "Il y a déja l'utilisateur, vous pouvez login !";
                header('Location:./index.php?page=login');
            } else {
                $clientInsert->inserer($client);
                header('Location:./index.php?page=login');
            }

/* 
            $querySelect = new Sql();
            $requetec = "SELECT * FROM `client` where nom='$nom' ;";
            $usersc = $querySelect->lister($requetec);
            echo "le resultat est ";
            var_dump(password_verify($password,$usersc[0]['password'])); */
            
            // displayMessage("Requête OK");
        }
        //header('Location:./index.php?page=login');
        }
    
    
    else {
        $nom = $prenom = $mail = "";
        include './includes/frmInscription.php';
    }