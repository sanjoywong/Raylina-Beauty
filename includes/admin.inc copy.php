<?php
if (!isset($_SESSION['type'])) {
    include './includes/frmlogin.php';
} elseif ($_SESSION['type'] == "admin") {

    $requete = 'SELECT * FROM `client`;';
    // var_dump($requete);
    $querySelect = new Sql();
    $users = $querySelect->lister($requete);
    $requete = 'SELECT * FROM `planning`;';
    $plannings = $querySelect->lister($requete);
    $tblQuery = $querySelect->lister("select * from planning where Client_id_client is not null and `confirmé` is null;");
    $produits = $querySelect->lister('SELECT * FROM `produit`;');
    $employes = $querySelect->lister('SELECT * FROM `eployee`;');
    $services = $querySelect->lister('SELECT * FROM `service`;');
?>

    <body class="home page-template-default page page-id-2172 wp-embed-responsive stk--is-blocksy-theme ct-loading" style="width:80%;margin-left:10%;background:white;" data-link="type-4" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1:reveal" itemscope="itemscope" itemtype="https://schema.org/WebPage">
        <div class="d-flex justify-content-center">

            <table class=" d-flex justify-content-center" style="margin:0 auto;font-size:21px">

                <thead>
                    <tr>
                        <th id="nomTable" colspan="5">Confirmer les RDV </th>
                    </tr>

                    <tr id="titreTable">
                        <th>jour </th>
                        <th>temps</th>
                        <th>Service_id</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php

                        for ($i = 0; $i < count($tblQuery); $i++) { ?>

                            <td><?= $tblQuery[$i]['date'] ?></td>
                            <td><?= $tblQuery[$i]['heure_debut'] ?></td>
                            <?php
                            $id = $tblQuery[$i]['Client_id_client'];
                            $requete = "SELECT * FROM `client` where id_client='$id'";
                            $sers = $querySelect->lister($requete);
                            ?>

                            <td>
                                <?= $sers[0]['nom'] ?>
                            </td>
                            <td><a href="index.php?page=confirmerRDV&idP=<?= $tblQuery[$i]['id_planning'] ?>">Confirmer</a></td>
                    </tr>
                <?php } ?>

                </tr>


                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div class="float-right"><button class="btn btn-lg btn-outline-success p-2 " type="button" disabled> Fin de liste du RDV </button></div>
                            </div>
                        </td>
                    </tr>
                </tfoot>

            </table>
        </div>
        <div class="d-flex justify-content-center">

            <table class=" d-flex justify-content-center" style="margin:0 auto;font-size:21px">
                <thead>
                    <tr>
                        <th class="nomTable" colspan="7">Liste des clients</th>
                    </tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>email</th>
                    <th>telephone</th>
                </thead>
                <tbody>

                    <?php
                    foreach ($users as $user) {
                    ?>
                        <tr>

                            <td><?= $user['nom'] ?></td>
                            <td><?= $user['prenom'] ?></td>
                            <td><?= $user['Adresse'] ?></td>
                            <td><?= $user['Telephone'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><a href="index.php?page=updateClient&idClient=<?= $user['id_client'] ?>">Editer</a></td>

                            <td><a href="index.php?page=supprimer&table=client&id=<?= $user['id_client'] ?>" onclick="return confirm('Voulez vous vraiment supprimer ce client?')">Supprimer</a></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div class="float-right"><button class="btn btn-primary btn-lg active p-2 bd-highlight" onclick="location.href='index.php?page=ajouterClient'" type="button"> Ajouter un client </button></div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="d-flex justify-content-center">

            <table class=" d-flex justify-content-center" style="margin:0 auto;font-size:21px">
                <thead>
                    <tr>
                        <th class="nomTable" colspan="7">Liste des planning</th>
                    </tr>
                    <th>date</th>
                    <th>heure_debut</th>
                    <th>styliste</th>
                    <th>client</th>
                </thead>
                <tbody>

                    <?php
                    foreach ($plannings as $planning) {
                    ?>
                        <tr>

                            <td><?= $planning['date'] ?></td>
                            <td><?= $planning['heure_debut'] ?></td>
                            <?php
                            $id = $planning['Service_id_Service'];
                            $requete = "SELECT * FROM `service` where id_service='$id'";
                            $sers = $querySelect->lister($requete);
                            ?>
                            <td><?= $sers[0]['nom_service'] ?></td>
                            <?php
                            if ($planning['Client_id_client']) {
                                $id = $planning['Client_id_client'];
                                $requete = "SELECT * FROM `client` where id_client='$id' ";
                                $clis = $querySelect->lister($requete); ?>
                                <td><?= $clis[0]['nom'] ?> hqhq <?= $planning['Client_id_client'] ?></td>
                                <?php if ($planning['confirmé'] == '1') {   ?>

                                    <td><?= $planning['confirmé'] ?> Confirmé par Salon</td>
                                <?php } else { ?>
                                    <td></td>
                                <?php }
                            } else { ?>
                                <td></td>

                                <td></td>
                            <?php }

                            ?>
                            <td><a href="index.php?page=updateClient&idClient=<?= $user['id_client'] ?>">Editer</a></td>

                            <td><a href="index.php?page=supprimer&table=client&id=<?= $user['id_client'] ?>" onclick="return confirm('Voulez vous vraiment supprimer ce client?')">Supprimer</a></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div class="float-right"><button class="btn btn-primary btn-lg active p-2 bd-highlight" onclick="location.href='index.php?page=ajouterPlanning'" type="button"> Ajouter un planning </button></div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="d-flex justify-content-center">

            <table class=" d-flex justify-content-center" style="margin:0 auto;font-size:21px">
                <thead>
                    <tr>
                        <th class="nomTable" colspan="7">Liste des produits</th>
                    </tr>
                    <th>Nom</th>
                    <th>prix</th>
                    <th>quantités</th>
                    <th>description</th>
                </thead>
                <tbody>

                    <?php
                    foreach ($produits as $produit) {
                    ?>
                        <tr>

                            <td><?= $produit['nom'] ?></td>
                            <td><?= $produit['prix'] ?></td>
                            <td><?= $produit['quantitée'] ?></td>
                            <td><?= $produit['type'] ?></td>
                            <td><a href="index.php?page=updateClient&idClient=<?= $user['id_produit'] ?>">Editer</a></td>
                            <td><a href="index.php?page=supprimer&table=client&id=<?= $user['id_produit'] ?>" onclick="return confirm('Voulez vous vraiment supprimer ce produit?')">Supprimer</a></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div class="float-right"><button class="btn btn-primary btn-lg active p-2 bd-highlight" onclick="location.href='index.php?page=ajouterProduit'" type="button"> Ajouter un produit </button></div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="d-flex justify-content-center">

            <table class=" d-flex justify-content-center" style="margin:0 auto;font-size:21px">
                <thead>
                    <tr>
                        <th class="nomTable" colspan="7">Liste des employées</th>
                    </tr>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>adresse</th>
                    <th>description de travail</th>
                    <th>telephone</th>
                </thead>
                <tbody>

                    <?php
                    foreach ($employes as $employe) {  ?>
                        <tr>

                            <td><?= $employe['nom'] ?></td>
                            <td><?= $employe['prenom'] ?></td>
                            <td><?= $employe['adresse'] ?></td>
                            <td><?= $employe['description-travail'] ?></td>
                            <td><?= $employe['telephone'] ?></td>
                            <td><a href="index.php?page=updateClient&idClient=<?= $employe['id_employee'] ?>">Editer</a></td>
                            <td><a href="index.php?page=supprimer&table=client&id=<?= $employe['id_employee'] ?>" onclick="return confirm('Voulez vous vraiment supprimer ce client?')">Supprimer</a></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div class="float-right"><button class="btn btn-primary btn-lg active p-2 bd-highlight" onclick="location.href='index.php?page=ajouterClient'" type="button"> Ajouter un client </button></div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="d-flex justify-content-center">

            <table class="d-flex justify-content-center" style="margin:0 auto;font-size:21px">
                <thead>
                    <tr>
                        <th class="nomTable" colspan="7">Liste des services</th>
                    </tr>
                    <th>Nom</th>
                    <th>description</th>
                    <th>prix</th>
                    <th>type de service</th>
                </thead>
                <tbody>

                    <?php
                    foreach ($services as $service) {  ?>
                        <tr>

                            <td><?= $service['nom'] ?></td>
                            <td><?= $service['prenom'] ?></td>
                            <td><?= $service['adresse'] ?></td>
                            <td><?= $service['description-travail'] ?></td>
                            <td><?= $service['telephone'] ?></td>
                            <td><a href="index.php?page=updateClient&idClient=<?= $service['id_service'] ?>">Editer</a></td>
                            <td><a href="index.php?page=supprimer&table=client&id=<?= $service['id_service'] ?>" onclick="return confirm('Voulez vous vraiment supprimer ce client?')">Supprimer</a></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div class="float-right"><button class="btn btn-primary btn-lg active p-2 bd-highlight" onclick="location.href='index.php?page=ajouterClient'" type="button"> Ajouter un client </button></div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
<?php
} else {
    include './includes/frmInscription.php';
}
?>