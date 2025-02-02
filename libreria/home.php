<?php
require 'header.php';
?>
<div>
    <div class="d-flex justify-content-center align-items-center bg-black">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner fixed-size">
                <div class="carousel-item active">
                    <img src="imglibri/I%20malavoglia.jpg" class="object-fit-contain border rounded d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imglibri/La%20luna%20e%20il%20falo.jpg" class="object-fit-contain d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imglibri/novecento.jpg" class="object-fit-contain d-block w-100 img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div>
        <div class="card">
            <p class="card-text">Nella <strong>Libreria</strong> puoi:</p>

            <div class="card-body">
                <p>inserire libria che non sono ancora presenti nel catalogo</p>
                <a href="create.php" class="btn btn-success ">Create</a>
            </div>
            <div class="card-body">
                <p class="card-text">eliminare i libri presenti nel catagolo</p>
                <a href="delete.php" class="btn btn-success">Delete</a>
            </div>
            <div class="card-body">
                <p class="card-text">modificare i prezzi dei libri</p>
                <a href="update.php" class="btn btn-success">Update</a>
            </div>
            <div class="card-body">
                <p class="card-text">leggere i libri presenti nella libreria</p>
                <a href="read.php" class="btn btn-success">Read</a>
            </div>
        </div>

    </div>
</div>

<?php
require 'footer.php';
?>