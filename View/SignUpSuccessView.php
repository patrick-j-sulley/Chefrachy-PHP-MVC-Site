<html>

<head>
    <title>
        <?=$this->title?>
    </title>
    <?php
    
    /*CALL FOR FORM MODEL UPON FORM VIEW LOAD*/
    require_once("Model/signupmodel.php");

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
            <div class="col-md-4">
            </div>
            <!-- SIGN UP SUCCESSFUL NOTIFICATION JUMBOTRON-->
            <div class="col-md-4">
                <div class="jumbotron">
                    <h1 class="display-4">Sign Up Successful!</h1>
                    <p class="lead">You have been automatically signed in, press OK to go to the home page.</p>
                    <hr class="my-4">
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="?cmd=home" role="button">OK</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <!--  JAVASCRIPT REFERENCES  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
