<?php 

$querySelect = new Sql();
$requete = "SELECT * FROM `facture` ;";
$users = $querySelect->lister($requete);
?>


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
                    <img src="https://monsite.com/images/logo.png" />
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