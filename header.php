<!DOCTYPE html>
<html>
<head>
    <title>Clive's Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<div class = "navbar navbar-inverse navbar-static-top">
    <div class = "container">
        <a href = "home.php" class="navbar-brand">Clive's Blog</a>

        <button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class = "collapse navbar-collapse navHeaderCollapse">
            <ul class = "nav navbar-nav navbar-right">
                <li class="<?php echo($page == "home" ? "active" : "")?>"><a href="home.php">Home</a> </li>
                <li class="<?php echo($page == "tech" ? "active" : "")?>"><a href="tech.php">Tech</a> </li>
                <li class="<?php echo($page == "sports" ? "active" : "")?>"><a href="sports.php">Sports</a> </li>
                <li class="<?php echo($page == "about" ? "active" : "")?>"><a href="about.php">About</a> </li>
            </ul>

        </div>
    </div>
</div>


