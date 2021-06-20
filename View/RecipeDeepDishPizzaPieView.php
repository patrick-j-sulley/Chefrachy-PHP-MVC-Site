<html>

<head>
    <title>
        <?=$this->title?>
    </title>

    <?php
    
        /*CALL FOR RECIPE MODEL UPON RECIPE VIEW LOAD*/
        require_once("Model/RecipeModel.php");
        
        /*INSTANSTIATION OF NEW RECIPE MODEL*/
        $RecipeDetailsRetrieval = new RecipeModel();
        
        /*INSTANSTIATION OF VARIABLE CONTAINING NAME OF SPECIFIED RECIPE*/
        $lcRecipeName = "Deep Dish Pizza Pie";
        
        /*CALL TO RETRIEVE RECIPES DETAILS PROCEDURE AND COLLECTION OF RESULTS IN AN INSTANSTIATED VARIABLE*/
        $lcRecipeDetails = $RecipeDetailsRetrieval->RetrieveRecipeDetails($lcRecipeName);
        
        /*VARIABLE INSTANSTIATIONS FOR THE ID, LEVEL, CATEGORY, STAR RATING, PREP TIME, SERVINGS AND KILOKOULES FOR THE SPECIFIED RECIPE*/
        $lcRecipeID  = $lcRecipeDetails["ID"];
        $lcRecipeLevel  = $lcRecipeDetails["Level"];
        $lcRecipeCategory  = $lcRecipeDetails["Category"];
        $lcRecipeStarRating  = $lcRecipeDetails["StarRating"];
        $lcRecipePrepTime   = $lcRecipeDetails["PrepTime"];
        $lcRecipeServings   = $lcRecipeDetails["Servings"];
        $lcRecipeKilojoules   = $lcRecipeDetails["Kilojoules"];
        
        /*INSTANSTIATION OF NEW RECIPE MODEL*/
        $RecipeComCheckModel = new RecipeModel();
        
        /*CALL TO RETRIEVE RECIPE COMPLETION CHECK PROCEDURE AND COLLECTION OF RESULTS IN AN INSTANSTIATED VARIABLE*/
        $RecipeCompletionCheckResult = $RecipeComCheckModel->RecipeCompletionCheck($_SESSION['UserName'],$lcRecipeID);
              
?>

        <!--  BOOSTRAP CSS REFERENCE  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <!-- RECIPE BIO HEADER -->
            <div class="col-md-10">
                <div class="page-header">
                    <h1>
                        Recipe Bio
                    </h1>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE BIO JUMBOTRON W/ RECIPE NAME, RATING AND DESC -->
            <div class="col-md-5">
                <div class="jumbotron">
                    <h2>
                        <?= $lcRecipeName ?>
                    </h2>
                    <h3>
                        Rating: <?= $lcRecipeStarRating ?> Stars
                    </h3>
                    <p>
                        An easy chow mein dish with plenty of begetables and a good amount of chicken to boot! Serves 2.
                    </p>
                </div>
            </div>
            <!-- RECIPE IMAGE SLIDESHOW CAROUSEL -->
            <div class="col-md-5">
                <div class="carousel slide" id="carousel-339112">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-339112">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-339112" class="active">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-339112">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src="images/recipe_example1.jpg" />
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="Carousel Bootstrap Second" src="images/recipe_example2.jpg" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="images/recipe_example3.jpg" />
                        </div>
                    </div> <a class="carousel-control-prev" href="#carousel-339112" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-339112" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE DETAILS OVERVIEW W/RECIPE SERVINGS, PREP TIME & KILOJOULES -->
            <div class="col-md-10">
                <h3>
                    |<?= $lcRecipeServings ?> Servings | <?= $lcRecipePrepTime ?> Minutes | <?= $lcRecipeKilojoules ?> Kilojoules Per Serving|
                </h3>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE INGREDIENTS JUMBOTRON -->
            <div class="col-md-5">
                <div class="jumbotron">
                    <h2>
                        Ingredients
                    </h2>
                    <p>
                        1/4 Cup Butter
                        <br>
                        <br>1/2 Cup Chopped Mushrooms
                        <br>
                        <br> 2 teaspoon salt
                        <br>
                        <br> 2 Cups chopped celery
                        <br>
                        <br> 2 1/2 cups chicken broth
                        <br>
                        <br> 1/4 teaspoon garlic powder
                        <br>
                        <br> ...
                    </p>

                </div>
            </div>
            <!-- RECIPE DIRECTIONS JUMBOTRON -->
            <div class="col-md-5">
                <div class="jumbotron">
                    <h2>
                        Directions
                    </h2>
                    <p>
                        1. In a wok or skillet, melt butter or margirine over medium heat
                        <br>
                        <br> ...
                    </p>

                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE COMPLETION CONFIRMATION BUTTON -->
            <div class="col-md-10">
                <!--CALL FOR RECIPECOMPLETECONTROLLER-->
                <?php
                require_once("controller/RecipeCompleteController.php");
                ?>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE REVIEWS SECTION HEADER -->
            <div class="col-md-10">
                <h3>
                    Recipe Comment Section
                </h3>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE COMMENTS SECTION TABLE W/COMMENTS FOR SPECIFIED RECIPE-->
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Comments
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        
                        /*INSTANSTIATION OF NEW RECIPE MODEL*/
                        $progress_RecipeComments = new recipemodel();  

                        /*CALL TO RETRIEVE RECIPE COMMENTS PROCEDURE AND RETRIEVE OF DATA IN AN INSTANSTIATED VARIABLE*/
                        $lcComments = $progress_RecipeComments->RetrieveRecipeComments($lcRecipeID);

                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE REVIEW TEXT INPUT FIELD -->
            <div class="col-md-10 ">
                <!--CALL TO RECIPE COMMENT LOGIN CHECK CONTROLLER-->
                <?php  
            require_once("controller/RecipeCommentLoginCheckController.php");
                ?>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-1">
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
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
    <!--  JAVASCRIPT REFERENCES  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
