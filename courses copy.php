<?php require_once('partials/config.php')?>
<?php include('partials/_header.php')?>
<?php include('partials/_navbar.php')?>
    
<?php


$result_categories = mysqli_query($connection, "SELECT * from categories");
$result_courses = mysqli_query($connection, "SELECT * from courses");

$categories = mysqli_fetch_all($result_categories, MYSQLI_ASSOC);
$courses = mysqli_fetch_all($result_courses, MYSQLI_ASSOC);

mysqli_close($connection);

?>

<div class="container my-3">
    <div class="row">        
        <div class="col-3">
        <?php include('partials/_menu.php')?>

        </div>      
        <div class="col-9">
            <?php foreach($courses as $course): ?>
                <?php if($course): ?>

                    <?php include('partials/_course.php')?>
                <?php endif; ?>
            <?php endforeach; ?>  
             
        </div>


    </div>
</div>




<?php include('partials/_footer.php')?>