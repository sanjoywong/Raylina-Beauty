<h1>Admim</h1>
<?php

$requete = 'SELECT * FROM admin-salon order by id_salon DESC';

$querySelect = new Sql();
$users = $querySelect->lister($requete);

// dump($users);
?>
<table class="list-users">
    <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>contact</th>
        <th>Email</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user['id_salon'] ?></td>
                <td><?= $user['nom'] ?></td>
                <td><?= $user['contact'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><a href="index.php?page=edit&id=<?= $user['id_salon'] ?>" class="btn">Editer</a></td>
                <td><a href="index.php?page=supprime&id=<?= $user['id_salon'] ?>" class="btn btn-supp">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>