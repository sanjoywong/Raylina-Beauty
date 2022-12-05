<?php
//var_dump($_GET['table']);
if (!isset($_GET['id'])) {
   // var_dump($_GET['id']);
   header('Location:./includes/admin.inc.php');
} else {


   $idUser = $_GET['id'];
   $page = $_GET['table'];

   $queryDelete = new Sql();

   switch ($page) {

      case 'client':
         $requete = "DELETE FROM client WHERE id_client = '$idUser' ";
         $queryDelete->inserer($requete);
         $url = "index.php?page=admin";
         echo redirection($url);
         break;

      case 'planning':
         //$requete = "UPDATE eleves SET id_promotion = null WHERE id_promotion = '$idUser' ";
         $queryDelete->inserer($requete);
         $requete = "DELETE FROM planning WHERE id_planning = '$idUser' ";
         $queryDelete->inserer($requete);
         $url = "index.php?page=admin";
         echo redirection($url);
         break;

      case 'service':
         $requete = "DELETE FROM service WHERE id_service = '$idUser' ";
         $queryDelete->inserer($requete);
         $url = "index.php?page=admin";
         echo redirection($url);
         break;

      case 'produit':
         $requete = "DELETE FROM produit WHERE id_produit = '$idUser' ";
         $queryDelete->inserer($requete);
         $url = "index.php?page=admin";
         echo redirection($url);
         break;
   }

   header('Location:./includes/admin.inc.php');
}
