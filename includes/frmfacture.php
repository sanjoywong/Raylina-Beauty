<form id="formulaire" name="formulaire" method="post" action="rep_facture.php">
   
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
				produits
			</th>
			<th>
				prix produits
			</th>
			<th>
				nombre produit
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
				$quantite
			</td>
			<td>
				$prixUnitaireFacture * $quantite €
			</td>
		</tr>
		<!-- fin de la boucle -->
		<tr>
			<td colspan="3"></td>
			<td>
				Total HT
			</td>
			<td>
				$totalHorsTaxes €
			</td>
		</tr>
		<tr>
			<td colspan="3"></td>
			<td>
				TVA (20%)
			</td>
			<td>
				$totalHorsTaxes*0.2 €
			</td>
		</tr>
		<tr>
			<td colspan="3"></td>
			<td>
				Total TTC
			</td>
			<td>
				$totalHorsTaxes*1.2 €
			</td>
		</tr>
	</tbody>
</table>
	</table>
	
  
    

