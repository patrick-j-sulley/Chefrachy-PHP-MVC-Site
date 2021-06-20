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
            <!--  LEVEL 4 RECIPE CATEGORY JUMBOTRON -->
            <div class="col-md-10">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Level 4 Categories</h1>
                        <p class="lead">Select the category of recipe you would like to learn</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!--  BREAKFAST RECIPE CATEGORY CARD -->
            <div class="col-md-2">
                <div id="card-111382">
                    <div class="card">
                        <div class="card-header">
                            <a href="?ctr=CategoriesController&cmd=breakfast">Breakfast Recipes</a>
                        </div>
                        <div id="card-element-778063 " class="collapse show">
                            <div class="card-body">
                                Most Important Meal of The Day!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  LUNCH RECIPE CATEGORY CARD -->
            <div class="col-md-2">
                <div id="card-696187">
                    <div class="card">
                        <div class="card-header">
                            <a href="?ctr=CategoriesController&cmd=lunch">Lunch Recipes</a>
                        </div>
                        <div id="card-element-985723" class="collapse show">
                            <div class="card-body">
                                The Best Part of Your Work Shift!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  DINNER RECIPE CATEGORY CARD -->
            <div class="col-md-2">
                <div id="card-111382">
                    <div class="card">
                        <div class="card-header">
                            <a href="?ctr=CategoriesController&cmd=dinner">Dinner Recipes</a>
                        </div>
                        <div id="card-element-778063" class="collapse show">
                            <div class="card-body">
                                Winner Winner! Recipes for Dinner!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  DESSERT RECIPE CATEGORY CARD -->
            <div class="col-md-2">
                <div id="card-111382">
                    <div class="card">
                        <div class="card-header">
                            <a href="?ctr=CategoriesController&cmd=dessert">Dessert Recipes</a>
                        </div>
                        <div id="card-element-778063" class="collapse show">
                            <div class="card-body">
                                Treat Yourself! You Deserve It!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  SNACK RECIPE CATEGORY CARD -->
            <div class="col-md-2">
                <div id="card-111382">
                    <div class="card">
                        <div class="card-header">
                            <a href="?ctr=CategoriesController&cmd=snack">Snack Recipes</a>
                        </div>
                        <div id="card-element-778063" class="collapse show">
                            <div class="card-body">
                                Looking Like a Whole Snack!
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="col-md-1">
                    </div>
            </div>
        </div>

    </div>
    <!--  JAVASCRIPT REFERENCES  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
