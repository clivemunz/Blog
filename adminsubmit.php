<?php
require("config.php");
if(!empty($_POST))
{

    if($_POST['blogSubmit'])
    {
    $query = "
            INSERT INTO blogpost (
                title,
                imageURL,
                bodyHTML,
                postDate,
                category,
                author
            ) VALUES (
                :title,
                :imageURL,
                :bodyHTML,
                :postDate,
                :category,
                :author
            )
        ";

        $query_params = array(
            ':title' => $_POST['Title'],
            ':imageURL' => $_POST['ImageURL'],
            ':bodyHTML' => $_POST['HTML'],
            ':postDate' => date("Y-m-d"),
            ':category' => $_POST['Category'],
            ':author' => $_POST['Author']
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
            $_POST['Success'] = 'Post Submitted';
        }
        catch(PDOException $ex){ $_POST['Failure'] = 'Post Not Submitted'; die("Failed to run query: " . $ex->getMessage()); }
        header("Location: admin.php");
        die("Redirecting to admin.php");
    }
}
?>