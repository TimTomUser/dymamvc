<?php 
require_once '../config/database.php';
//CONSTANTE DB, DB_USER, DB_PASSWORD
$database= new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB, DB_USER, DB_PASSWORD);

/*$stmt=$database->prepare("SELECT *
                    FROM article");
$stmt->execute();
//CONSTANTE UPPERCASE
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));*/

require_once '../app/controllers/ArticleController.php';
$controller = new ArticleController($database);
//$controller->afficherIndex();
$requets_uri = explode("?", $_SERVER['REQUEST_URI']);

//var_dump($_SERVER);

    switch($requets_uri[0]) {
        case "/delete" :
            $controller->deleteArticle($_GET['id_article']);
            break;
        case "/add" :
            $controller->addArticle($_POST['articleTitre'], $_POST['articleContenu'], $_FILES['photo_intro']);
            break;
        default:
            $controller->afficherIndex();
            break;
            //SORTIR DU SWITCH
    }

