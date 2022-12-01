<h1>admim-salon</h1>
<?php
if (!isset($_SESSION['type'])) {
    include './includes/frmlogin.php';
}elseif ($_SESSION['type']=="admin") {
    
    $requete = 'SELECT * FROM `client`';
    var_dump($requete);
    $querySelect = new Sql();
    $users = $querySelect->lister($requete);
    
    //dump($users);
    ?>
<div style="margin:20px auto;">
    
    <h1 align="center">Admim</h1>
    
    
    <table class="list-users" style="margin:0 auto;font-size:21px">
        <thead>
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
                        <td><a href="index.php?page=updateClient&idClient=<?= $user['id_client'] ?>" >Editer</a></td>
                        
                        <td><a href="index.php?page=supprimer&table=client&id=<?= $user['id_client'] ?> onclick="return confirm('Voulez vous vraiment supprimer ce client?')"  >Supprimer</a></td>
                        
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
</div>
<?php
 }else {
    include './includes/frmInscription.php';
 }
?>