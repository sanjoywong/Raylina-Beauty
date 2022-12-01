<?php

if (!isset($_GET['idClient'])) {
    $url = "index.php?page=admin";
    echo redirection($url);
}

$requete = 'SELECT * FROM client where id_client = ' . $_GET['idClient'];
$querySelect = new Sql();
$tblQuery = $querySelect->lister($requete);

?>

<table>
    <thead>
        <tr>
            <th id="nomTable" colspan="5">Edit Client</th>
        </tr>

        <tr id="titreTable">

            <th>nom</th>
            <th>prénom</th>
            <th>email</th>
            <th>telephone</th>
            <th>adresse</th>
        </tr>
    </thead>
    <tbody>

        <form action="index.php?page=updateClient" method="post">

            <td><input type="text" id="nom" name="nom" value="<?= $tblQuery[0]['nom'] ?>" /></td>
            <td><input type="text" id="prenom" name="prenom" value="<?= $tblQuery[0]['prenom'] ?>" /></td>
            <td><input type="text" id="email" name="email" value="<?= $tblQuery[0]['email'] ?>" /></td>
            <td><input type="text" id="telephone" name="telephone" value="<?= $tblQuery[0]['Telephone'] ?>" /></td>
            <td><input type="text" id="telephone" name="adresse" value="<?= $tblQuery[0]['Adresse'] ?>" /></td>

    </tbody>
    <tfoot>
        <tr>
            <td colspan="5">
                <div id="footTable">
                    <div>
                        <input type="reset" value="Effacer" style="padding: 10px 60px;border-radius: 20px;background:#eece2e;font-size: 15px;color:#0f66e0;border:none;font:fontFamily"/>
                        <input type="submit" value="Update" style="padding: 4px 60px;border-radius: 20px;"/>
                    </div>
                </div>
            </td>
        </tr>
    </tfoot>
    <input type="hidden" name="idclient" id="idclient" value=<?= $tblQuery[0]['id_client'] ?>>
    <input type="hidden" name="frmUpdateClient" />
    </form>
</table>