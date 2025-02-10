<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=/**@var $title*/$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <ul class="nav justify-content-center fs-5">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Aggiungi
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="create/create-squadra.php">Squadre</a></li>
                <li><a class="dropdown-item" href="create/create_pilota.php">Piloti</a></li>
                <li><a class="dropdown-item" href="create/create-gara.php">Gara</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Modifica
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="update/update-gare.php">Gara</a></li>
                <li><a class="dropdown-item" href="update/update-piloti.php">Pilota</a></li>
                <li><a class="dropdown-item" href="update/update-squadra.php">Squadra</a></li>
                <li><a class="dropdown-item" href="update/update-gareggia.php">Partecipanti</a></li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="delete.php">Elimina</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="gare.php">Classifica</a>
        </li>
    </ul>
</div>