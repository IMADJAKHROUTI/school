<?php

$this->view("includes/head");
$this->view("includes/sidebar");
?>
<section class="schools">
    <div class="container-fluid p-2 bg-transparent">
        <div class=" gap-3 justify-start">
            <?php if ($rows) : ?>
            <?php foreach ($rows as $row) : ?>

            <?php endforeach; ?>
            <?php else : ?>
            <h4>Pas de schools pour le moment</h4>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php $this->view("includes/footer") ?>