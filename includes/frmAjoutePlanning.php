
 <?php 
 
 $sqlQuery = new Sql();
$tblQuery = array();

$tblQueryS = $sqlQuery->lister("select * from service");
$tblQueryC = $sqlQuery->lister("select * from clinet");


 ?>
 <form action="index.php?page=ajouterPlanning" method="post">
     <table>
         <thead>
             <tr>
                 <th id="nomTable" colspan="5">Ajouter une planning </th>
             </tr>
             
             <tr id="titreTable">
                 <th>Nom de la promotion</th>
                 <th>Annee de la promotion</th>
                 <th>Nom de l'etablissement</th>
             </tr>
         </thead>
         <tbody>
             <td>
                 <input type="text" id="nom" name="nom_promotion" />
             </td>
             <td>
                 <input type="text" id="annee_promotion" name="annee_promotion" />
             </td>
             <td>
                 <div>
                     <select name="id_Service" id="id_Service">
                         <?php for ($i = 0; $i < count($tblQueryS); $i++) {
                            ?>
                             <option value="<?= $tblQueryS[$i]['id_Service'] ?>"><?= $tblQueryS[$i]['nom'] ?></option>
                         <?php  } ?>
                     </select>
                 </div>
             </td>

         </tbody>
         <tfoot>
             <tr>
                 <td colspan="5">
                     <div id="footTable">
                         <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                         <div>
                             <input type="reset" value="Effacer" />
                             <input type="submit" value="Ajouter promotion" />
                         </div>
             </tr>

             <input type="hidden" name="frmAjoutePlanning" />

         </tfoot>
     </table>
 </form>