
<?php
<<<<<<< HEAD
// Exemple de $defaultPage : liste/listeEleve, login, planning/planningEleve
=======
// Exemple de $defaultPage :salon/, login
>>>>>>> upstream/developpe
function inclusionIncFile($defaultPage){
    $files = array_merge(glob('./includes/*/*.inc.php'),glob('./includes/*.inc.php'));;
    $page = $_GET['page'] ?? $defaultPage;
    $pageTest = './includes/' . $page .'.inc.php';

<<<<<<< HEAD
=======
   

>>>>>>> upstream/developpe
    if (in_array($pageTest,$files))
    {
        require "./includes/$page.inc.php";
    }
    else 
    {
        require "./includes/$defaultPage.inc.php";
<<<<<<< HEAD
    } 
=======
    }  
>>>>>>> upstream/developpe
}

    ?>