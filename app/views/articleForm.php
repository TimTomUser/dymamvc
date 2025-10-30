<?php
include('includes/header.inc.php');
?>
<!-- offset-md-3  -->
    <!--    /add routing-->
    <!--    /add routing   =   REQUEST_URI-->
    <!--    $_SERVER! root server  DOCUMENT_ROOT-->
<div class="container">
    <h1 class="text-center">Nouvelle Publication</h1>
    <div class="row">
        <div class="d-flex col-12 col-md-12 col-lg-12">
            <form action="/add" method="POST" enctype="multipart/form-data" style="background-color:yellowgreen; border:5px solid grey;" id="formulary">
                <input type="text" name="articleTitre" placeholder="Titre du nouvel article" /><br>
                <textarea name="articleContenu" cols="15" rows="1" placholder="Contenu du nouvel article"></textarea><br>
                
                <input type="file" id="photo_intro" class="d-none" name="photo_intro" />
                <label for="photo_intro" class="btn btn-primary">Photo d'intro</label>
                <div class="thumbnail">
                    <img src="" class="img-fluid"/>
                    <div id="img-name"></div>
                </div>
                <button type="submit" style="background-color: yellowgreen;color: black;">Envoyer [*__<] </button>
            </form>
        </div>
    </div>
</div>
<?php
include('includes/footer.inc.php');
?>
<script>
    $(function() {
        $('#photo_intro').on('change', function()  {
            console.log(this.files);
            if(this.files && this.files[0]) {
                //ici on sais qu'on as un fichier
                //Donc on créer un lecteur
                var lecteur = new FileReader();
                //on prépare un EVNET sur notre Lectru
                //changer l'attribu SRC$//Den otre IMG
                //AU CHARGEMENT DU LECTEUR 
                lecteur.onload = function(event) {
                    $('.thumbnail img').attr('src', event.target.result);
                };
                //puis, enfin, oni déclenche notre event
                lecteur.readAsDataURL(this.files[0]);
                var filename = this.files[0].name;
                var extension = filename.split('.').pop();
                //RECUPERER LE DERNIER SEGMENT POP() et SPLIT() = explode(php)
                var nomSeul = filename.split('.').slice(0, -1).join('.');
                if (nomSeul.length > 10) {
                    var nomAAficher =  nomSeul.substring(0, 10) + "..." + extension;
                } else {
                    var nomAAficher = filename;
                }

                $('#img-name').html(nomAAficher);
                //this.files[0].name
            }
        });
    });
</script>