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
if(!empty($_POST))
{
    if($_POST['Success'])
    {
        echo "
    <script type=\"text/javascript\">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
    </script>
";
}
if($_POST['Failure'])
{
    echo "
    <script type=\"text/javascript\">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
    </script>
";
}
}
?>
<?php include('header.php');?>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Create A New Post</h3></div>
                    <div class="panel-body">
                        <form class="form-horizontal" style="padding-left: 10px; padding-right: 10px" action="adminsubmit.php" method="post" >
                            <div class="form-group" >
                                <label for="Title">Title</label>
                                <input name="Title" type="text" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group" >
                                <label for="Category">Category</label>
                                <input name="Category" type="text" class="form-control" placeholder="Category">
                            </div>
                            <div class="form-group">
                                <label for="Author">Author</label>
                                <input name="Author" type="text" class="form-control" placeholder="Author First and Last">
                            </div>
                            <div class="form-group">
                                <label for="ImageURL">Image URL</label>
                                <input name="ImageURL" type="text" class="form-control" placeholder="Image URL">
                            </div>
                            <div class="form-group">
                                <label for="HTML">Post Body HTML</label>
                                <textarea name="HTML" style="width: 100%; max-width: 100%; min-height: 150px;" class="form-control" placeholder="Author First and Last"></textarea>
                            </div>
                            <input class="btn btn-primary" name="blogSubmit" type="submit"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Change User Permissions</h3></div>
                    <div class="panel-body">
                        <form class="form-horizontal" style="padding-left: 10px;">
                            <div class="form-group form-inline">
                                <label for="Search" style="margin-right: 10px;">Search For Username</label>
                                <input id="Search" type="text" class="form-control" placeholder="Username" type="search">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                            <table id="SearchResults" class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;">ID</th>
                                    <th style="width: 10%;">Username</th>
                                    <th style="width: 10%;">Email</th>
                                    <th style="width: 10%;">Admin</th>
                                </tr>
                                </thead>
                            </table>
                            <div class="form-group form-inline">
                                <label style="margin-right: 10px;">Submit Changes To Table</label>
                                <input type="submit" id="userChange" class="btn btn-danger"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Modal header</h3>
        </div>
        <div class="modal-body">
            <p>One fine body…</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>
<?php include('footer.php');?>