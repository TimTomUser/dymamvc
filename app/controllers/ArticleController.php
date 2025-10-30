<?php
require_once '../app/models/Article.php';

class ArticleController {
    private $articleModel;

    public function __construct($database) {
       //1
        $this->articleModel = new Article();
        $this->articleModel->setDb($database);
    }

    public function afficherIndex() {
        //PREPARE LE VAR $ARTCILE
        //2
        $articles = $this->articleModel->getAllArticles();
        //inclure la vue
        $meta_title= '- Acceuil ';
        require '../app/views/articleList.php';
        //3
    }

    public function addArticle($articleTitre, $articleContenu, $articlePhotoIntro) {
        //1/verifier si c'est une image
        //2/Sauvegarder l'image sur le serveur
        //3/Obtenir le chemin définitif
        //4/
        //On regarde sont type MIME commenece par image
        if(substr($articlePhotoIntro['type'], 0, 6) == "image/") {
            //K ou on as bien uploadé une image
            // on cp le fichier dempuis la memoire du serveur
            //vers un emplacement physique
            move_uploaded_file($articlePhotoIntro['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/images/" . $articlePhotoIntro['name']);
            //2 param only
            var_dump($_SERVER['DOCUMENT_ROOT']);
            $cheminDefinitif = "/images/" . $articlePhotoIntro['name'];
            var_dump($cheminDefinitif);
        } else {
            //K ou on as autre chose qu'une image, ou alors rien du tout
            $cheminDefinitif = NULL;
            //k ou lon a uploade autre chose qu'un image
            // ou alors rien du tout on laisse le chemin NULL
        }
        $this->articleModel->requeteInserteArticle($articleTitre, $articleContenu, $cheminDefinitif);
        header('Location: /');
    }

    public function deleteArticle($articleId) {
        $this->articleModel->requeteSupprimerArticle($articleId);
        header('Location: /');
    }

    public function afficherFormulaire() {
        $meta_title= '- Nouveau post  ';
        require '../app/views/articleForm.php';
    }

}