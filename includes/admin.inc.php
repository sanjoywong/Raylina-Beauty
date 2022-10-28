<h1>admim-salon</h1>
<?php

$requete = 'SELECT * FROM `admin-salon`';
var_dump($requete);
$querySelect = new Sql();
$users = $querySelect->lister($requete);

//dump($users);
?>
<div style="margin:0 auto;">

<h1 align="center">Admim</h1>

<table class="list-users" style="margin:0 auto;font-size:21px">
    <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>contact</th>
        <th>Email</th>
        <th>site</th>
        
        <th>profile</th>
        <th>telephone</th>
    </thead>
    <tbody>
        
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
    
                <td><?= $user['nom'] ?></td>
                <td><?= $user['contact'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['site'] ?></td>
                <td><?= $user['profile'] ?></td>
                <td><?= $user['telephone'] ?></td>
                <td><a href="index.php?page=edit&id=<?= $user['nom'] ?>" class="btn">Editer</a></td>
                <td><a href="index.php?page=supprime&id=<?= $user['nom'] ?>" class="btn btn-supp">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>
</div>