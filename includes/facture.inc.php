<link rel="stylesheet" href="css/rgpd.css">
	<link rel="stylesheet" href="css/rgpd.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
        <script type="text/javascript" src="js/rgpd.js"></script>

<?php 

$querySelect = new Sql();
$requete = "SELECT * FROM `facture` ;";
$users = $querySelect->lister($requete);
?>
 <div data-device="mobile" data-transparent="" >
	<!-- <div class="ct-sticky-container"><div data-sticky="shrink"> -->
		<div data-row="middle" data-column-set="2" data-transparent-row="yes" >
			<div class="ct-container" >
				<div data-column="start" data-placements="1" >
					<div data-items="primary" >
<div	class="site-branding"
	data-id="logo" 		itemscope="itemscope" itemtype="index.php?page=salon" >

			<a href="index.php?page=salon" class="site-logo-container" rel="home"><img width="912" height="912" src="./assets/img/Logo 500x500  px (3).jpeg" class="default-logo" alt="raylina beauty et soins" /></a>	
	</div>

<body class="home page-template-default page page-id-2172 wp-embed-responsive stk--is-blocksy-theme ct-loading" data-link="type-4" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1:reveal" itemscope="itemscope" itemtype="https://schema.org/WebPage">
    
    
    
     
        <div id="adresse"
            title="Raylina Beauty"> 
			<p>55<br/> Rue de la République
            76000 Rouen <br />FRANCE</p>
        </div>
        <div id="document">
            <p><center><strong>FACTURE</strong></center></p>
        </div>
        <table>
            <tr>
                <td>
                    <img src="../assets/img/Logo 500x500  px (3).jpeg" />
                    <!-- utilisez un lien absolu, c'est beaucoup moins galère et cette ressource ne devrait pas bouger. Dans le cas présent ça se justifie -->
                </td>
			<td>
                <b>Facturé à :</b><br />
				$nomDuClient<br />
				$adresseDuClient
			</td>
			<td>
                <b>Détails :</b><br />
				Date de facturation : $date<br />
				Numéro de facture : $numeroDeFacture
			</td>
		</tr>
        <table>
            <thead>
                <tr>
                    <th>
                        coiffure/Prestation
                    </th>
                    <th>
                        Prix coiffure
			</th>
			<th>
                Prix facturé
			</th>
            
            
		</tr>
        <tr>
        <th>
				produits
			</th>
			<th>
				prix produits
			</th>
			<th>
				$nombre produit
			</th>
        </tr>
	</thead>
	<tbody>
        <!-- ici on boucle sur les lignes de notre facture -->
		<tr>
            <td>
				nomDeLaPrestation
			</td>
			<td>
                prix coiffure €
			</td>
            <td>
                somme  a paye €
			</td>
			
			 </tr>
			
            <!-- fin de la boucle -->
            <th> total</th>
        </table>
        <div id="bandeau_cookie" class="cookie_deactivate">
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
        
        
        
   
                    
                </body>