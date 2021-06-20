<html>

<head>
    <title>
        <?=$this->title?>
    </title>
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
            <!-- RECIPE SEARCH RESULTS JUMBOTRON-->
            <div class="col-md-10">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Recipe Search Results</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE SEARCH RESULTS CATEGORIZATION BAR -->
            <div class="col-md-10">
                <nav class="navbar navbar-expand-lg navbar-light bg-light static-top nav-tabs nav-fill">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Level</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">1</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                            <a class="dropdown-item" href="#">4</a>
                            <a class="dropdown-item" href="#">5</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Breakfast</a>
                            <a class="dropdown-item" href="#">Lunch</a>
                            <a class="dropdown-item" href="#">Dinner</a>
                            <a class="dropdown-item" href="#">Dessert</a>
                            <a class="dropdown-item" href="#">Snack</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sort By</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Rating: Highest to Lowest</a>
                            <a class="dropdown-item" href="#">Rating: Lowest to Highest</a>
                            <a class="dropdown-item" href="#">Ingredients: Highest to Lowest</a>
                            <a class="dropdown-item" href="#">Ingredients: Lowest to Highest</a>
                            <a class="dropdown-item" href="#">Prep Time: Highest to Lowest</a>
                            <a class="dropdown-item" href="#">Prep Time: Lowest to Highest</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!-- RECIPE SEARCH RESULTS TABLE-->
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Recipe Picture
                            </th>
                            <th>
                                Recipe Name + Details
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <a href="?ctr=SearchResultsController&cmd=recipe_chickenchowmein">Chicken Chow Mein</a>
                                <br> Level 3 Dinner ***** 45 Mins 8 Servings
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <a href="?ctr=SearchResultsController&cmd=recipe_mommaslasagna">Momma's Lasagna</a>
                                <br> Level 3 Dinner ***** 45 Mins 8 Servings
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <a href="?ctr=SearchResultsController&cmd=recipe_deepdishpizzapie">Deep Dish Pizza Pie</a>
                                <br> Level 3 Dinner ***** 45 Mins 8 Servings
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <a href="?ctr=SearchResultsController&cmd=recipe_turkishcharredmeatkebabs">Turkish Charred Meat Kebabs</a>
                                <br> Level 3 Dinner ***** 45 Mins 8 Servings
                            </td>
                        </tr>
                    </tbody>
                </table>
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
