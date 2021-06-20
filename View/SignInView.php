<html>

<head>
    <title>
        <?=$this->title?>
    </title>
    <?php
    
    /*CALL FOR SIGN IN MODEL*/
    require_once("Model/signinmodel.php");

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
            <!-- SIGN IN FORM-->
            <div class="col-md-4">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Sign In to Chefrachy</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>

            <div class="col-md-4">
                <div class="login-form">
                    <div class="main-div">
                        <form id="SignIn" action="./?ctr=SignInController" method="post">

                            <div class="form-group">


                                <input type="username" class="form-control" id="inputUsername" placeholder="Username" name="UserName">

                            </div>

                            <div class="form-group">

                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="UserPassword">

                            </div>
                            <div class="forgot">
                                <a href="#!">Forgot password?</a>
                            </div>
                            <div class="form-button">
                                <button type="submit" class="btn btn-primary" name="command" value="SignInSubmit">Sign In</button>
                            </div>

                        </form>
                    </div>
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
