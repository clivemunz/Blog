<div class = "navbar navbar-inverse navbar-fixed-bottom">
    <div class = "container">

        <p class="navbar-text pull-left">&copy; Clive Munz</p>

        <button class="navbar-toggle" data-toggle = "collapse" data-target = ".navFooterCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse navFooterCollapse">
            <ul class = "nav navbar-nav navbar-right">
                <li class="<?php echo($page == "register" ? "active" : "")?>"><a href="register.php">Register</a> </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Log In <strong class="caret"></strong></a>
                    <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                        <form action="loginscript.php" method="post">
                            Username:<br />
                            <input type="text" name="username" value="<?php echo $submitted_username; ?>" />
                            <br /><br />
                            Password:<br />
                            <input type="password" name="password" value="" />
                            <br /><br />
                            <input type="submit" class="btn btn-info" value="Login" />
                            <br /><br />
                        </form>
                    </div>
                </li>
            </ul>
        </div>


    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>