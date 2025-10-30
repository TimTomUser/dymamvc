<?php
include('includes/header.inc.php');
?>
<div class="container my-3">
<h1 style="text-align:center; font-size: 2.5rem;">Listes des Articles</h1>
<!--<a href="/formulaire.php" id="pub">Publier un nouvel article</a>-->
<div class="row">
    <?php
    //img-fluid >>> max_width: 100%
    foreach ($articles as $article) {
    ?>
        <div class="col-12 col-md-6 col-lg-4 my-3" style="border: 2px solid yellowgreen">
            <div class="article text-center p-4">
                <?php
                    if($article['photo_intro'] != NULL) {
                    ?>
                    <img src="<?= $article['photo_intro'] ?>" class="img-fluid"/>
                    <?php 
                    }
                ?>
                <h4><?= htmlspecialchars($article['titre']) ?><h4>
                <p><?= htmlspecialchars($article['contenu']) ?></p>
                <a  id="del" href="/delete?id_article=<?= $article['id'] ?>">
                    <img src="/img/trash-can-10418.png" width="16" height="16" id="flex"/>
                </a>
            </div>
        </div>
    <?php
    }
    ?>
</div>
</div>
<?php
include('includes/footer.inc.php');
?>