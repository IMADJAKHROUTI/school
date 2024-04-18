<?php $this->view("includes/head"); ?>
<div class="container-fluid h-full w-full">
    <div class="signup m-auto card max-w-sm shadow-sm p-4">
        <form action="" method="post">
            <h1 class="h3">Ajouter utilisateur</h1>
            <div class="login-message small mb-3">Élargissez votre communauté avec facilité : Ajoutez un membre dès
                maintenant.</div>
            <div class="full-name">
                <div class="signup-input mb-3">
                    <input type="text" class="form-control" value="<?= get_var('nom') ?>" name="nom" id="nom"
                        placeholder="Nom">
                    <?php if (isset($errors['nom'])) : ?>
                    <span class="text-danger"><?= $errors['nom'] ?></span>
                    <?php endif; ?>
                </div>
                <div class="signup-input mb-3">
                    <input type="text" class="form-control" value="<?= get_var('prenom') ?>" name="prenom" id="prenom"
                        placeholder="Prenom">
                    <?php if (isset($errors['prenom'])) : ?>
                    <span class="text-danger"><?= $errors['prenom'] ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="signup-input mb-3">
                <input type="email" class="form-control" value="<?= get_var('email') ?>" name="email" id="email"
                    placeholder="Email">
                <?php if (isset($errors['email'])) : ?>
                <span class="text-danger"><?= $errors['email'] ?></span>
                <?php endif; ?>
            </div>
            <div class="signup-input mb-3">
                <select name="genre" id="genre" class="form-control">
                    <option hidden <?= get_select("genre", "") ?> value="">-- Genre --</option>
                    <option <?= get_select("genre", "male") ?> value="male">Male</option>
                    <option <?= get_select("genre", "female") ?> value="female">Female</option>
                </select>
                <?php if (isset($errors['genre'])) : ?>
                <span class="text-danger"><?= $errors['genre'] ?></span>
                <?php endif; ?>
            </div>
            <div class="signup-input mb-3">
                <select name="role" id="role" class="form-control">
                    <option hidden <?= get_select("role", "") ?> value="">-- Role--</option>
                    <option <?= get_select("role", "etudiant") ?> value="etudiant">Etudiant</option>
                    <option <?= get_select("role", "reception") ?> value="reception">Reception</option>
                    <option <?= get_select("role", "professeur") ?> value="professeur">Professeur</option>
                    <option <?= get_select("role", "admin") ?> value="admin">Admin</option>
                    <option <?= get_select("role", "super_admin") ?> value="super_admin">Super_admin</option>
                </select>
                <?php if (isset($errors['role'])) : ?>
                <span class="text-danger"><?= $errors['role'] ?></span>
                <?php endif; ?>
            </div>
            <div class="signup-input mb-3">
                <input type="password" class="form-control" value="<?= get_var('password') ?>" name="password"
                    id="password" placeholder="Mot de passe">
            </div>
            <div class="signup-input mb-3">
                <input type="password" class="form-control" value="<?= get_var('password2') ?>" name="password2"
                    id="password2" placeholder="Confirmer mot de passe">
                <?php if (isset($errors['password'])) : ?>
                <span class="text-danger"><?= $errors['password'] ?></span>
                <?php endif; ?>
            </div>
            <div class="signup-input flex-row">
                <input type="reset" class="form-control btn btn-danger text-white" value="Annuler">
                <input type="submit" class="form-control btn btn-primary text-white" value="Inscription">
            </div>
        </form>
    </div>
</div>
<?php $this->view("includes/footer"); ?>