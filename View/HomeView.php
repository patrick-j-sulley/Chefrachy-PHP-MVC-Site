<html>

<head>
    <title>
        <?=$this->title?>
    </title>
    <!--  BOOSTRAP CSS REFERENCE  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/nav.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--COMPETITION GRAPHIC JAVASCRIPT REFERENCE-->
    <script src="js/CompGraphic.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- DYNAMICALLY GENERATED NAVIGATION BAR-->
            <div class="col-md-10">
                <?php
                require_once("NavView.php");
                ?>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- HOME PAGE FEATURED RECIPES CAROUSEL -->
            <div class="col-md-10">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/featured_lasagna.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block text-white bg-dark">
                                <h5><a href="?ctr=SearchResultsController&cmd=recipe_mommaslasagna">Momma's Lasagna</a></h5>
                                <p>Level 3 Dinner Recipe</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="images/featured_pizzapie.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block text-white bg-dark">
                                <h5><a href="?ctr=SearchResultsController&cmd=recipe_deepdishpizzapie">Deep Dish Pizza Pie</a></h5>
                                <p>Level 3 Dinner Recipe</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="images/featured_kebab.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block text-white bg-dark">
                                <h5><a href="?ctr=SearchResultsController&cmd=recipe_turkishcharredmeatkebabs">Turkish Charred Meat Kebabs</a></h5>
                                <p>Level 3 Dinner Recipe</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">

            <div class="col-md-1 ">
            </div>
            <!-- HOME PAGE SITE BIO JUMBOTRON-->
            <div class="col-md-10 ">
                <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0px;">
                    <div class="container">
                        <h1 class="display-4">Welcome to Chefrachy!</h1>
                        <p class="lead">Chefrachy is an interactive learning environment that allows you to learn cooking recipes and techiniques with a difficulty levelling system that sorts recipes to match their appropriate level of skill, as well as with a progression tracking system
                            <br> Learn more on how to use the site in the about us section!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1 ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- DYNAMICALLY GENERATED FOOTER-->
            <div class="col-md-10">
                    <?php
                    require_once "FooterView.php";
                    ?>
            <div class="col-md-1">
            </div>
            </div>
        </div>

        </div>
        <!--COMPETITION AD GRAPHIC-->
        <div class="CompetitionGraphic mypaddingfix" id="CompetitionGraphic">
            <a href="?cmd=form">
                <img alt="" width=100% src="images/competitiongraphic.PNG">
            </a>
        </div>
</body>

</html>
