<?php

$sqlQuery = new Sql();
$tblQuery = array();

$tblQuery = $sqlQuery->lister("select * from planning where Service_id_Service is not null and `Admin-salon_nom` is null;");

?>

<body class="home page-template-default page page-id-2172 wp-embed-responsive stk--is-blocksy-theme ct-loading" style="width:80%;margin-left:10%;background:white;" data-link="type-4" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1:reveal" itemscope="itemscope" itemtype="https://schema.org/WebPage">
    <div class="d-flex justify-content-center" style="margin-top: 10%">

        <form action="index.php?page=confirmerRDV" style=' margin-bottom:20%;padding-bottom: 10%;' method="post">
            <table>
                <thead>
                    <tr>
                        <th id="nomTable" colspan="5">Confirmer les RDV </th>
                    </tr>

                    <tr id="titreTable">
                        <th>jour </th>
                        <th>temps</th>
                        <th>Service_id_Service</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php

                        for ($i = 0; $i < count($tblQuery); $i++) { ?>

                            <td><?= $tblQuery[$i]['date'] ?></td>
                            <td><?= $tblQuery[$i]['heure_debut'] ?></td>
                            <td>
                            <?= $tblQuery[$i]['Service_id_Service'] ?>
                            </td>
                            <td><a href="index.php?page=confirmerRDV&idP=<?= $tblQuery[$i]['id_planning'] ?>">Confirmer</a></td>
                    </tr>
                <?php } ?>

                </tr>
                </tbody>

                <!-- <tfoot>
                    <tr>
                        <td colspan="5">
                            <div id="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div>
                                    <input type="reset" value="Effacer" />
                                    <input type="submit" value="Ajouter Planning" />
                                </div>
                    </tr>

                    <input type="hidden" name="frmConfirmerRDV" />

                </tfoot> -->
            </table>
        </form>
    </div>
</body>