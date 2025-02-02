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
<nav class="navbar navbar-expand-lg bg-success ">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><img src="imglibri/libro.png" alt="image logo" class="img_libro">LIBRERIA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="create.php">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="delete.php">Delete</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="update.php">Update</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="read.php">Read</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
