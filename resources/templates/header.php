<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 16:51
 */
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tree Catalog</title>

    <link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./lib/fontawesome/css/font-awesome.css">
    <script src="./lib/jquery/jquery-3.2.1.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <link href="./lib/summernote/summernote.css" rel="stylesheet">
    <script src="./lib/summernote/summernote.js"></script>

    <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php"><i class="fa fa-tree" aria-hidden="true"></i> TreeCatalog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="./index.php">Home <span class="sr-only">(current)</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./logout.php" class="disable">Hello <?php echo $_SESSION['username'] ?>!</a></li>
                    <li><a href="./logout.php">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
