<?php

$categories = ["Software Deeveloping", "Web Developing", "Mobile Developing"];
$courses = [
[
    "id"=> 1,
    "title" => "Software Development",
    "description" => "bla bla bla",
    "image" => "project-img4.jpg",
    "approved" => true
],
[
    "id"=> 2,
    "title" => "Web Development",
    "description" => "bla bla bla",
    "image" => "project-img1.jpg",
    "approved" => ""
],
[
    "id"=> 3,
    "title" => "Mobile Development",
    "description" => "bla bla bla",
    "image" => "projecdt-img2.jpg",
    "approved" => ""
]
];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    

<nav class="nav.navbar.navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
        <a href="/" class="navbar-brand">PHP Course 2024</a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">FAQ</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container my-3">
    <div class="row">        
        <div class="col-3">

            <div class="list-group">
                <?php  for($i = 0; $i < count($categories); $i++): ?>
                <a href="#" class="list-group-item list-group-item-action"><?php echo $categories[$i]; ?></a>
                <?php endfor; ?>
            </div>
        </div>
       
        <div class="col-9">
            <?php foreach($courses as $course): ?>
                <?php if($course["approved"]): ?>

            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-4">
                        
                        <img src="img/<?php echo $course['image'] ?>" class="img-fluid rounded-start">
                    </div>

                    <div class="com-md-8">
                        <div class="row">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $course["title"] ?>
                                </h5>

                                <p>
                                <?php echo $course["description"] ?>
                                </p>

                            </div>
                        </div>
                    </div>        
                </div> 
            </div> 
            <?php endif; ?>
            <?php endforeach; ?>  
             
        </div>


    </div>
</div>





</body>
</html>