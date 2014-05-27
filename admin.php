<?php
require("config.php");
if(empty($_SESSION['user']))
{
    header("Location: home.php");
    die("Redirecting to home.php");
} else {
    $row = $_SESSION['user'];
    if($row['admin'] == false)
    {
        header("Location: home.php");
        die("Redirecting to home.php");
    }
}
?>
<?php include('header.php');?>
    <div class="container">
        <p>Admin Content</p>
    </div>
<?php include('footer.php');?>