<?php require_once('partials/config.php')?>
<?php include('partials/_header.php')?>
<?php include('partials/_navbar.php')?>
    
<?php

if(!isset($_GET["id"]))
{
    header("Location: index.php");
}

$id = $_GET["id"];
$result_categories = mysqli_query($connection, "SELECT * from categories");
$result_course = mysqli_query($connection, "SELECT * from courses WHERE id=".$id);

$categories = mysqli_fetch_all($result_categories, MYSQLI_ASSOC);
$course = mysqli_fetch_assoc($result_course);

mysqli_close($connection);

?>

<div class="container my-3">
    <div class="row">        
        <div class="col-3">
            <?php include('partials/_menu.php')?>
        </div> 

        <div class="col-9">
            <?php include('partials/_course.php')?>            
        </div>
    </div>
</div>

<?php include('partials/_footer.php')?>