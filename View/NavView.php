<!--SETTINGS FOR DYNAMICALLY GENERATED NAVIGATION BAR-->
<link href="css/nav.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top nav-tabs nav-fill mynav" style="color: whitesmoke;">
    <img class="navbar-brand" src="images/ChefrachyLogoBanner.png">
        <a class="nav-item nav-link" href="?cmd=home">Home</a>
        <a class="nav-item nav-link" href="?cmd=levels">Levels</a>
        <a class="nav-item nav-link" href="?cmd=form">Competition</a>
            <!--CALL FOR NAV SIGNED IN CONTROLLER-->
            <?php
            require_once("controller/NavSignedInController.php");
            ?>
        <a class="form-inline">
        <input class="form-control mr-sm-4" type="search" placeholder="Recipe Search" aria-label="Search">
    <a class="btn btn-light my-0 my-sm-0" role="button" href="?ctr=CategoriesController&cmd=search">Search</a>
    </a>
</nav>
