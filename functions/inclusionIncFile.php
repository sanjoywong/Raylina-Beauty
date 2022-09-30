
<?php
// Exemple de $defaultPage :salon/, login
function inclusionIncFile($defaultPage){
    $files = array_merge(glob('./includes/*/*.inc.php'),glob('./includes/*.inc.php'));;
    $page = $_GET['page'] ?? $defaultPage;
    $pageTest = './includes/' . $page .'.inc.php';

   var_dump($page);

    /* if (in_array($pageTest,$files))
    {
        require "./includes/$page.inc.php";
    }
    else 
    {
        require "./includes/$defaultPage.inc.php";
    }   */
}

    ?>