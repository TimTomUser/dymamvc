<!-- Récupérer le fichier $_FILES['maPhoto'] et le sauvegarder dans le dossier /images -->
<?php
if(!empty($_FILES)) {
    $nomTemporaireDuFichier = $_FILES['maPhoto']['tmp_name'];
    $destination = $_SERVER['DOCUMENT_ROOT'] . '/images/' . $_FILES['maPhoto']['name'];
    move_uploaded_file($nomTemporaireDuFichier, $destination);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec fichier</title>
</head>
<body>
    <form method="POST" action="/formulaire/exerciceFormulaire3.php" enctype="multipart/form-data">
        <input type="file" name="maPhoto">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>