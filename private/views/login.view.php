<?php $this->view("includes/head"); ?>
<div class="container-fluid h-full w-full">
    <div class="login m-auto card max-w-sm shadow-sm p-4">
        <form action="" class="flex flex-col gap-3" method="post">
            <h1 class="">Bienvenue</h1>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" id="email" value="<?= get_var('email') ?>" placeholder="Email">
                <?php if (isset($errors['email'])): ?>
                    <span class="text-danger"><?= $errors['email'] ?></span>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" id="password" value="<?= get_var('password')?>" placeholder="Mot de passe">
                <?php if (isset($errors['password'])): ?>
                    <span class="text-danger"><?= $errors['password'] ?></span>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Connexion">
            </div>
        </form>
    </div>
</div>
<?php $this->view("includes/footer"); ?>