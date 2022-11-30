<link rel="stylesheet" href="css/rgpd.css">
	<link rel="stylesheet" href="css/rgpd.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
        <script type="text/javascript" src="js/rgpd.js"></script><?php 

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
       //var_dump($requetea);
        if(count($usersa)){
           if (password_verify($password,$usersa['password'])) {
               
               echo "Bienvenue à Raylina Beauty!";
               header('Location: index.php?page=Salon');
           }}
           else{
                     $requetec = "SELECT * FROM `client` where nom='$username' ;";
                     $usersc = $querySelect->lister($requetec);
                    // var_dump($requetec);
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




?> <div id="bandeau_cookie" class="cookie_deactivate">
<div class="row">
    <div class="col-md-12 col-xs-12 cookie_spacer">
        <span class="cookie_text">Ce site utilise des cookies afin que vous puissiez avoir la meilleure expérience
            de navigation possible. En poursuivant votre navigation ou en cliquant sur l'option "ACCEPTER", vous
            consentez à son utilisation.</span>

    </div>
    <div class="col-md-12 col-xs-12 container_cookie-btn">
        <button id="acceptCookies" class="btn btn-advanced"> Accepter </button>
        <button id="personnalize_my_cookie" type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#rgpd_modal">
            Personnaliser
        </button>
        <a href="index.php?page=frmrgpd" class="btn btn-advanced">En savoir plus</a>
    </div>

</div>
</div>

<div class="modal fade" id="rgpd_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Gestionnaire des cookies</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row ">
                <div class="col-md-12 gestion_cookie-div-text">
                    <h2>Je personnalise mes préférences</h2>
                    <p>Les fonctionnalités de ce site listées ci-dessous s’appuient sur des services proposés par
                        des tiers.
                        Si vous donnez votre accord (consentement) ces cookies, ces tiers collecteront et
                        utiliseront vos données de navigation pour des finalités qui leur sont propres, conformément
                        à notre <a href="/rgpd">politique de confidentialité</a>.
                        Cette page vous permet de donner ou de retirer votre consentement, soit globalement soit
                        finalité par finalité.</p>
                </div>
            </div>
            <div class="separator_section"></div>

            <div class="row gestion_cookie-div">

                <div class="col-md-6 text-left">
                    <h2>
                        Google Analystics
                    </h2>
                    <small>
                        Permet de récolter des statistiques de fréquentation du site. Ces données sont anonymes et
                        nous permettent d'améliorer votre expérience utilisateur.
                    </small>
                </div>
                <div class="col-md-6">
                    <button id="GTMAllow" class="deny accept btn_cookie" data-authorize="true"
                        data-name="Analytics">
                        J'autorise
                    </button>
                    <button id="GTMDenied" class="deny refuse btn_cookie" data-authorize="false"
                        data-name="Analytics">
                        Je refuse
                    </button>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button id="close_modal" type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button id="acceptcookies_modal" type="button" class="btn btn-primary">Confirmer mes choix</button>
        </div>
    </div>
</div>
</div>