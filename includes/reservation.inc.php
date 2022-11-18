<?php
$querySelect = new Sql();
$requete = "SELECT * FROM `planning` ;";
$RDV = $querySelect->lister($requete);
var_dump($RDV[0]['date']);
?>
<html lang="fr-FR">

<body class="home page-template-default page page-id-2172 wp-embed-responsive stk--is-blocksy-theme ct-loading" data-link="type-4" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1:reveal" itemscope="itemscope" itemtype="https://schema.org/WebPage">

	<main id="main" class="site-main hfeed">


		<div class="ct-container-full" data-content="normal">
			<div class="entry-content">
				<h2 class="has-text-align-center has-text-color" style="color:#ffffff">Bienvenue Raylina Beauty</h2>
				<div class="wp-container-3 wp-block-columns alignwide">
					<div class="wp-container-1 wp-block-column">
						<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
							<img loading="lazy" width="1536" height="2049" class="wp-block-cover__image-background wp-image-2525" alt="" src="./assets/img/pmtkoufa.jpg" style="object-position:49% 70%" data-object-fit="cover" data-object-position="49% 70%" srcset="./assets/img/pmtkoufa.jpg, ./assets/img/pmtkoufa.jpg-225x300.jpg 225w, ./assets/img/pmtkoufa.jpg2-768x1025.jpg 768w,
  sizes=" (max-width: 1536px) 100vw, 1536px />
							<div class="wp-block-cover__inner-container">
								<h2 class="has-text-align-left has-text-color" style="color:#ffffff"><a href="https://sbarber.fr/prestations-femme" data-type="page" data-id="2039">Les Prestations Femme</a></h2>
							</div>
						</div>
					</div>


					<div class="wp-container-2 wp-block-column">
						<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
							<img loading="lazy" width="1536" height="2049" class="wp-block-cover__image-background wp-image-1574" alt="" src="./assets/img/coupehome.jpg" data-object-fit="cover" srcset="./assets/img/coupehome.jpg  1536w" , />
							<div class="wp-block-cover__inner-container">
								<h2 class="has-text-align-left"><a href="https://sbarber.fr/prestations-homme" data-type="page" data-id="2044">Les Prestations homme</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="container" style="width:50%;position:relative;top: 15%;left: 25%;margin-top: 2%;margin-bottom: 18%;">


				<form action="index.php?page=inscription" method="post">
					<h1>Les Choix de Jour pour RDV</h1>
					<label for="jour">Jour:</label><br>

					<select name="jour" id="jour">
						<?php for ($i = 0; $i < count($RDV); $i++) {
						?>
							<option value="<?= $RDV[$i]['date'] ?>"><?= $RDV[$i]['date'] ?></option>
						<?php  } ?>
					</select>

					<label for="temps">Temps:</label><br>

					<select name="jour" id="jour">
						<?php for ($i = 0; $i < count($RDV); $i++) {
						?>
							<option value="<?= $RDV[$i]['heure_debut'] ?>"><?= $RDV[$i]['heure_debut'] ?></option>
						<?php  } ?>
					</select>
					<p>choisir ton service:</p>
					<div>
						<select name="service" id="styliste">
							<?php
							$tblQuery = new Sql();
							$requeteEmp = "SELECT * from service ser
                                 join planning pl 
                                 where ser.id_service = pl.id_service";
							$tblService = $tblQuery->lister($requeteEmp);

							for ($i = 0; $i < count($tblService); $i++) {
							?>
								<option value="<?= $tblService[$i]['nom_service'] ?>" data-option="<?= $tblService[$i]['nom_service'] ?>"><?= $tblService[$i]['nom_service'] ?><?= $tblService[$i]['description_service'] ?></option>
							<?php  } ?>
						</select>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</main>

</body>