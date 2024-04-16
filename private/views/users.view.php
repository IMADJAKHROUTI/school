<?php  

    $this->view("includes/head");
    $this->view("includes/sidebar");
?>
<section class="users">
    <div class="container-fluid p-2 bg-transparent">
        <div class="d-flex flex-wrap gap-3 justify-start">
            <?php if($rows): ?>
                <?php foreach($rows as $row): ?>
                <a class="card shadow p-3 flex-column d-flex align-items-center flex-grow-1">
                    <?php if($row->genre =='male'):?>
                        <img src="<?=ASSETS?>/img/male.png" class="card-img-top" alt="user" style="width: 3rem;">
                    <?php else:?>
                        <img src="<?=ASSETS?>/img/female.png" class="card-img-top" alt="user" style="width: 3rem;">
                    <?php endif ;?>
                    <div class="card-body">
                        <p class="card-text"><?= str_replace("_"," ",$row->role) ?></p>
                        <p class="card-title"><?= $row->nom ?> <?= $row->prenom ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            <?php else:?>
                <h4>Pas de users pour le moment</h4>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php  $this->view("includes/footer")?>