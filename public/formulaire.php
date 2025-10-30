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
$controller->afficherFormulaire();