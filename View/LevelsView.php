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
            <div class="col-md-10">
                <!--  LEVELS PAGE JUMBOTRON -->
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Levels</h1>
                        <p class="lead">Select the level that matches your skill level</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <!--  LEVEL 1 CARD -->
            <div class="col-md-2">
                <div id="card-111382">
                    <div class="card">
                        <div class="card-header">
                            Level 1 (N/A)
                        </div>
                        <div id="card-element-778063 " class="collapse show">
                            <div class="card-body">
                                3 Ingredients or Less
                                <br> 15 Min or Less
                                <br> Min Utensil Usage
                                <br>
                                <br> For those with little to no experience in the kitchen
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  LEVEL 2 CARD -->
            <div class="col-md-2">
                <div id="card-696187">
                    <div class="card">
                        <div class="card-header">
                            Level 2 (N/A)
                        </div>
                        <div id="card-element-985723" class="collapse show">
                            <div class="card-body">
                                5 Ingredients or Less
                                <br> 30 Min or Less
                                <br> Min Utensil Usage
                                <br>
                                <br> For those with little to moderate experience in the kitchen
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  LEVEL 3 CARD -->
            <div class="col-md-2">
                <div id="card-111382">
                    <div class="card">
                        <div class="card-header">
                            <a href="?ctr=LevelsController&cmd=level3"><b>Level 3</b></a>
                        </div>
                        <div id="card-element-778063" class="collapse show">
                            <div class="card-body">
                                7 Ingredients or Less
                                <br> 45 Min or Less
                                <br> Mod Utensil Usage
                                <br>
                                <br> For those with moderate experience in the kitchen
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  LEVEL 4 CARD -->
            <div class="col-md-2">
                <div id="card-111382">
                    <div class="card">
                        <div class="card-header">
                            Level 4 (N/A)
                        </div>
                        <div id="card-element-778063" class="collapse show">
                            <div class="card-body">
                                9 Ingredients or Less
                                <br> 60 Min or Less
                                <br> Mod - High Utensil Usage
                                <br>
                                <br> For those with moderate to high experience in the kitchen
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  LEVEL 5 CARD -->
            <div class="col-md-2">
                <div id="card-111382">
                    <div class="card">
                        <div class="card-header">
                            Level 5 (N/A)
                        </div>
                        <div id="card-element-778063" class="collapse show">
                            <div class="card-body">
                                No Ingrediant Limit
                                <br> No Time Limit
                                <br> High Utensil Usage
                                <br>
                                <br> For those with high experience in the kitchen
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
