<div class="card mb-3">
                <div class="row">
                    <div class="col-md-4">
                        
                        <img src="img/<?php echo $course['image'] ?>" class="img-fluid rounded-start">
                    </div>

                    <div class="com-md-8">
                        <div class="row">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="courseDetails.php?id=<?php echo $course["id"];?>">
                                    <?php echo $course["title"];?>
                                </a>
                                    
                                </h5>

                                <p>
                                <?php echo $course["description"] ?>
                                </p>

                            </div>
                        </div>
                    </div>        
                </div> 
            </div> 