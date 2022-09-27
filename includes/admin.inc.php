<h1>Admim</h1>
<?php

$requete = 'SELECT * FROM utilisateur order by id_utilisateur DESC';

$querySelect = new Sql();
$users = $querySelect->lister($requete);

// dump($users);
?>
<table class="list-users">
    <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user['id_utilisateur'] ?></td>
                <td><?= $user['nom'] ?></td>
                <td><?= $user['prenom'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><a href="index.php?page=edit&id=<?= $user['id_utilisateur'] ?>" class="btn">Editer</a></td>
                <td><a href="index.php?page=supprime&id=<?= $user['id_utilisateur'] ?>" class="btn btn-supp">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>