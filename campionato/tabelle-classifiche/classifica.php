<?php
$title = 'Classifica';
require 'header.php';
require 'DBcon.php';
$config = require 'database.php';
$db = Dbcon::getDb($config);

?>
<div>
    <div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Gare</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="classifica-pilota.php">Piloti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Squadre</a>
            </li>
        </ul>
    </div>
    <div class="">
        <div class="text-center">
            <h1 class="text-success"><strong>Classifica Piloti</strong></h1>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered text-center">

