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
	</thead>
	<tbody>
        <!-- ici on boucle sur les lignes de notre facture -->
		<tr>
            <td>
				$nomDeLaPrestation
			</td>
			<td>
                $prixcoiffure €
			</td>
			
			<td>
                somme total a paye
			</td>
			
            <!-- fin de la boucle -->
            
        </table>
        
        
   
                    
                </body>