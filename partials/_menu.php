
<div class="list-group">
    <?php  for($i = 0; $i < count($categories); $i++): ?>
        <a href="#" class="list-group-item list-group-item-action">
            <?php echo $categories[$i]["categoryName"]; ?></a>
    <?php endfor; ?>
</div>