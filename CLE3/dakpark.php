<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <link href="ekko-lightbox", type="text/css rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/opmaak.css">
    <meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no' />
</head>
<body class="index">

<!--navbar-->
<nav class="fixed-top navbar navbar-expand-lg navbar-dark ">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"></span>
        <a class="navbar-logo" href="#">FLOWERPOWER</a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1" id="myNavbar7">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bloem.php">Flower Power</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active1" href="dakpark.php">Dakpark</a>
            </li>
        </ul>
    </div>
</nav>

<!--header-->
<div class="headerfoto">
    <img class="dakpark" src="images/Dakpark.jpg" alt="dakpark">
    <h1 class="centered">Over Dakpark</h1>
</div>

<!--API weather bar-->
<div class="container">
    <div class="weerinfo">
        <p>Wind: <span id="wind"></span>km/h <img src="" alt="wolken" id="clouds">Temperatuur:  <span id="temp"></span>°C</p>
    </div>
</div>

<!--Inleiding-->
<div class="container">
    <div class="row overons inleiding">
        <div class="col-sm-12">
            <p><strong>GROOTSTE OPENBAAR PARK OP EEN DAK</strong></p>
            <p>Het Dakpark bevindt zich op de Vierhavenstraat 79 en is in deze tijd van het jaar geopend van 7:00 tot 21:00.
                Het Dakpark is het grootste openbare park op een dak. Het park is 1 kilometer lang, 80 meter breed en 9 meter hoog .
                In het park bevinden zich watertrappen die 7 meter breed zijn en 70 meter lang.
                Om het hele park staat een hek met een beide uiteindes van het park een poort.
            </p>
            <p>
                Het park is een resultaat van een bewonersinitiatief dat is opgericht in 2013. Samen met de stad en projectontwikkelaars is het park ontworpen. Tijdens de verschillende fases van het Dakpark (wens, ontwerp en realisatie) zijn de bewoners een constante en kritische factor geweest tijdens het proces.
                <br>Toen het park af was, wilden de bewoners blijvend invloed hebben op hun park. Om dit te kunnen doen ontstonden er diverse vrijwilligersteams ondersteund door een bestuur en coördinatoren, in samenwerking met verschillende partners. De stichting zorgt voor een deel van het beheer met haar groepgroep, organiseert excursies, het toezicht i.s.m. de stichting Buurtouders.

            </p>
            <p>
                Het groene karakter van het Dakpark staat centraal. Een park met grasweiden, bomen en bosschages.
                De bomen variëren van diverse soorten esdoorn gecombineerd met kers en magnolia.  Bijna alle bomen zijn meerstammig met daarbij een aantal monumentale exemplaren. Er is gekozen voor gevarieerde beplanting zodat het park er in alle seizoenen kleurrijk uitziet. De randen van het park hebben eveneens kleurrijke beplanting. Vuurdoorn, pruikenboom en pluimhortensia zijn enkele voorbeelden van kleurrijke planten die aan de dakrand komen.
                Verspreid over het park zijn voorzieningen als bankjes, speelplekken en terrassen.
            </p>
            <p>
                Adres: Stichting Dakpark Rotterdam, Schiedamseweg 41a , 3026 AC Rotterdam
            </p>
        </div>
    </div>
</div>

<!--lightbox-->
<div class="container">
    <div class="container-blok">
        <div class="row header-img">
            <div class="col-md-3">
                <a href="images/IMG_8710.JPG" data-toggle="lightbox" data-gallery="gallery">
                    <img src="images/IMG_8710.JPG" class="img-fluid rounded">
                </a><br>
                <a href="images/IMG_8826(20200303-214902).JPG" data-toggle="lightbox" data-gallery="gallery">
                    <img src="images/IMG_8826(20200303-214902).JPG" class="img-fluid rounded">
                </a>
            </div>
            <a href="images/IMG_8716(1).JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
                <img src="images/IMG_8716(1).JPG" class="img-fluid rounded">
            </a>
            <a href="images/IMG_8817(20200219-150738).JPG" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
                <img src="images/IMG_8817(20200219-150738).JPG" class="img-fluid rounded">
            </a>
            <div class="col-md-3">
            <a href="images/IMG_8822(20200303-214901).JPG" data-toggle="lightbox" data-gallery="gallery">
                <img src="images/IMG_8822(20200303-214901).JPG" class="img-fluid rounded">
            </a><br>
            <a href="images/IMG_8710.JPG" data-toggle="lightbox" data-gallery="gallery">
                <img src="images/IMG_8710.JPG" class="img-fluid rounded">
            </a>
            </div>
        </div>
    </div>
</div>

<!--footer>-->
<div class="footer-main  py-5 small">
    <div class="footer container">
        <p>© CLE project team 14 2020</p>
    </div>
</div>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
