<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CYS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" type="text/css">
    
</head>


<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php
            include("include/header.php");
        ?>



    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="image-carousel" src="coquelicot.jpg" class="d-block w-100" alt="coquelicot">
            </div>
            <div class="carousel-item">
                <img class="image-carousel" src="logo3BISBIS.png" class="d-block w-100" alt="logo">
            </div>
            <div class="carousel-item">
                <img class="image-carousel" src="logo3BISBIS.png" class="d-block w-100" alt="logo">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    

<div class="row">
    <div class="card" style="width: 50rem;">
        <div class="card-body">
            <h3 class="card-title">SUIVEZ-NOUS !</h3>
            <a href="#" class="card-link">Facebook</a>
            <a href="#" class="card-link">Pinterest</a>
            <a href="#" class="card-link">Instagram</a>
            <a href="#" class="card-link">Google+</a>
        </div>
    </div>
</div>



    <div class="row">
        <div class="col-lg-3">
            <h2> NOS PRODUITS</h2>
        </div>
    </div>




    <div class="card-deck">
        <div class="card">
            <img src="images/habitHomme.jpg" class="card-img-top" alt="logo">
            <div class="card-body">
                <h5 class="card-title">Hommes</h5>
            </div>
        </div>
        <div class="card">
            <img src="images/habitFemme.jpg" class="card-img-top" alt="logo">
            <div class="card-body">
                <h5 class="card-title">Femmes</h5>
            </div>
        </div>
        <div class="card">
            <img src="images/habitEnfant.jpg" class="card-img-top" alt="logo">
            <div class="card-body">
                <h5 class="card-title">Enfants</h5>
            </div>
        </div>
        <div class="card">
            <img src="images/habitFamille.jpg" class="card-img-top" alt="logo">
            <div class="card-body">
                <h5 class="card-title">Pack Famille</h5>
            </div>
        </div>

    </div>




<div class="row">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h3 class="card-title">Inscrivez-vous à notre newsletter</h3>
                <a href="#" class="card-link"> Je m'inscris </a>
            </div>
        </div>
    </div>

    <?php include("include/footer.php");
    ?>
</body>

</html>