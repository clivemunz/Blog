<?php
require("config.php");
if(!empty($_POST))
{
    // Ensure that the user fills out fields
    if(empty($_POST['username']))
    { die("Please enter a username."); }
    if(empty($_POST['password']))
    { die("Please enter a password."); }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    { die("Invalid E-Mail Address"); }

    // Check if the username is already taken
    $query = "
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        ";
    $query_params = array( ':username' => $_POST['username'] );
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
    $row = $stmt->fetch();
    if($row){ die("This username is already in use"); }
    $query = "
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        ";
    $query_params = array(
        ':email' => $_POST['email']
    );
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());}
    $row = $stmt->fetch();
    if($row){ die("This email address is already registered"); }

    // Add row to database
    $query = "
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        ";

    // Security measures
    $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
    $password = hash('sha256', $_POST['password'] . $salt);
    for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); }
    $query_params = array(
        ':username' => $_POST['username'],
        ':password' => $password,
        ':salt' => $salt,
        ':email' => $_POST['email']
    );
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
    header("Location: home.php");
    die("Redirecting to home.php");
}
?>

<?php $page = 'register'; ?>
<?php include('header.php');?>
    <div class="container hero-unit">
        <h1>Register</h1> <br /><br />
        <form class="form-horizontal" action="register.php" method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label">Username:</label>
                <div class="col-sm-10">
                    <input type="text" name="username" value="" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Email: <strong style="color:darkred;">*</strong></label>
                <div class="col-sm-10">
                    <input type="text" name="email" value="" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" name="password" value="" /> <br /><br />
                </div>
            </div>
            <p style="color:darkred;">* Not necessary.</p><br />
            <input type="submit" class="btn btn-info" value="Register" />
        </form>
    </div>
<?php include('footer.php');?>