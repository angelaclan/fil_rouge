<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="../include/footer.css" type="text/css">
    <title>Create Your Style</title>
</head>
<body>
    <div class="container">
        <?php
            include("../include/header.php");
        ?>

        <div class="row text-center">
            <a href="http://" target="_blank" rel="noopener noreferrer" class="col-lg-12">
                    <img class="galerie" src="../images/logo.xl.jpg" alt="galerie">
            </a>
        </div>

        <div class="card suivez_nous">
            <div class="row">
                <div class="card-title col-lg-12 text-center">
                    <h2>SUIVEZ-NOUS</h2>
                </div>
            </div>
            
            <div>
                <div class="row  icones">
                    <div class="col-lg-2 text-center"><a href="http://" target="_blank"><div class="icone">Facebook</div></a></div>
                    <div class="col-lg-2 text-center"><a href="http://" target="_blank"><div class="icone">Pinterest</div></a></div>
                    <div class="col-lg-2 text-center"><a href="http://" target="_blank"><div class="icone">Instagram</div></a></div>
                    <div class="col-lg-2 text-center"><a href="http://" target="_blank"><div class="icone">Google+</div></a></div>
                </div>                
            </div>
        </div>
        
        <div class="row"><strong>NOS PRODUITS</strong></div>

        <div class="row nos_produits">
            <div class="col-lg-3">
                <small class="titre_nos_produits">HOMMES</small>
                <div><a href="http://" target="_blank" rel="noopener noreferrer"><img class="card-img" width="250px" src="../images/habitHomme.jpg" alt=""></a></div>
            </div>

            <div class="col-lg-3">
                <small class="titre_nos_produits">FEMMES</small>
                <div><a href="http://" target="_blank" rel="noopener noreferrer"><img class="card-img" width="250px" src="../images/habitFemme.jpg" alt=""></a></div>
            </div>

            <div class="col-lg-3">
                <small class="titre_nos_produits">ENFANTS</small>
                <div><a href="http://" target="_blank" rel="noopener noreferrer"><img class="card-img" width="250px" src="../images/habitEnfant.jpg" alt=""></a></div>
            </div>

            <div class="col-lg-3">
                <small class="titre_nos_produits">PACK</small>
                <div><a href="http://" target="_blank" rel="noopener noreferrer"><img class="card-img" width="250px" src="../images/habitFamille.jpg" alt=""></a></div>
            </div>
        </div>

        <div class="card newsletter">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Inscrivez-vous à notre newsletter</h2>
                </div>
            </div>
            
            <div class="col-lg-12 text-center">
                <input class="je_m_inscris" type="button" value="Je m'inscris">                
            </div>
        </div>

        <?php
            include(__DIR__.'\..\include\footer.html');
        ?>
    </div>
</body>
</html>