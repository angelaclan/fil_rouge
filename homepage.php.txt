<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Create Your Style</title>
</head>
<body>
    <div class="container">
        <?php
            include("include/header.php");
        ?>

        <div class="row text-center">
            <a href="http://" target="_blank" rel="noopener noreferrer" class="col-lg-12">
                <!-- <div> -->
                    <img src="images/logo.xl.png" alt="galerie">
                <!-- </div> -->
            </a>
        </div>

        <div class="suivez_nous">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Suivez-nous</h2>
                </div>
            </div>
            
            <div>
                <div class="row offset-lg-4 col-lg-4 icones">
                    <div class="col-lg-3 text-center"><a href="http://" target="_blank"><div class="icone">f</div></a></div>
                    <div class="col-lg-3 text-center"><a href="http://" target="_blank"><div class="icone">p</div></a></div>
                    <div class="col-lg-3 text-center"><a href="http://" target="_blank"><div class="icone">ig</div></a></div>
                    <div class="col-lg-3 text-center"><a href="http://" target="_blank"><div class="icone">G+</div></a></div>
                </div>                
            </div>
        </div>
        
        <div class="row"><strong>NOS PRODUITS</strong></div>

        <div class="row nos_produits">
            <div class="col-lg-3">
                <small class="titre_nos_produits">HOMMES</small>
                <div><img width="250px" src="images/logo.xl.png" alt=""></div>
            </div>

            <div class="col-lg-3">
                <small class="titre_nos_produits">FEMMES</small>
                <div><img width="250px" src="images/logo.xl.png" alt=""></div>
            </div>

            <div class="col-lg-3">
                <small class="titre_nos_produits">ENFANTS</small>
                <div><img width="250px" src="images/logo.xl.png" alt=""></div>
            </div>

            <div class="col-lg-3">
                <small class="titre_nos_produits">PACK FAMILLE</small>
                <div><img width="250px" src="images/logo.xl.png" alt=""></div>
            </div>
        </div>

        <div class="newsletter">
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
            // include("pages/footer.php");
        ?>
    </div>
</body>
</html>