<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Double:wght@100..900&family=Caveat:wght@400..700&family=Indie+Flower&family=SUSE+Mono:ital,wght@0,100..800;1,100..800&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <link href="/style.css" rel="stylesheet" />
    <title>Blog Dyma MVC <?= $meta_title ?></title>
</head>
<body style="background-color: #EBFA8F; opacity: 0.8;">
<header>
        <nav class="navbar navbar-expand-lg shadow-lg">
            <div class="container">
                <!-- Élément N°1 -->
                <a href="/">
                    <img src="/img/pngegg.png" class="img-fluid" width="898" height="898" id="logo"/>
                </a>
                <!-- Élément N°2 -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavBar" aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="myNavBar">
                    <ul class="navbar-nav">
                        <li clas="nav-item">
                            <!--<a class="nav-link" href="/">Homepage</a>-->
                        </li>
                        <li class="nav-item">
                            <a clas="nav-link" href="formulaire.php" id="pub">Nouvelle publication</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>