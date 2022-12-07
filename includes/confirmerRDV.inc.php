
<?php

var_dump(isset($_POST['frmConfirmerRDV']));
var_dump($_GET['idP']);

if (isset($_POST['frmConfirmerRDV']) | isset($_GET['idP'])) {


    $id = htmlentities(trim($_GET['idP']));




     $requete = "UPDATE planning set `confirmé`='1' where id_planning = '$id';";
   // dump($requete);
    $queryInsert = new Sql();
    $queryInsert->inserer($requete);
    $url = "index.php?page=admin";
    echo redirection($url); 
} else {
    //    $nom = $id_promotion = $nom_promotion = $id_etablissemnt= $annee_promotion="";
    include './includes/frmConfirmerRDV.php';
}
 