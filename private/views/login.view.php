<?php $this->view("includes/head"); ?>
<div class="container-fluid d-flex h-100 v-100">
    <div class="login m-auto card max-w-sm shadow-sm p-4">
        <form action="" class="flex flex-col gap-3" method="post">
            <h1 class="">Bienvenue</h1>
            <div class="login-message small mb-3">Connectez-vous maintenant et obtenez un accès complet à notre
                application.</div>
            <div class="login-input mb-3">
                <input type="email" class="form-control" name="email" id="email" value="<?= get_var('email') ?>" placeholder="Email">
                <?php if (isset($errors['email'])) : ?>
                    <span class="text-danger"><?= $errors['email'] ?></span>
                <?php endif; ?>
            </div>
            <div class="login-input mb-3">
                <div class="password-eye">
                    <input type="password" class="form-control" name="password" id="password" value="<?= get_var('password') ?>" placeholder="Mot de passe">
                    <svg xmlns="http://www.w3.org/2000/svg" class="show-password" height="1.5em" viewBox="0 0 24 24">
                        <path fill="var(--bs-gray-800)" d="M12 9.75a2.25 2.25 0 1 0 0 4.5a2.25 2.25 0 0 0 0-4.5" />
                        <path fill="var(--bs-gray-800)" fill-rule="evenodd" d="M12 5.5c-2.618 0-4.972 1.051-6.668 2.353c-.85.652-1.547 1.376-2.036 2.08c-.48.692-.796 1.418-.796 2.067c0 .649.317 1.375.796 2.066c.49.705 1.186 1.429 2.036 2.08C7.028 17.45 9.382 18.5 12 18.5c2.618 0 4.972-1.051 6.668-2.353c.85-.652 1.547-1.376 2.035-2.08c.48-.692.797-1.418.797-2.067c0-.649-.317-1.375-.797-2.066c-.488-.705-1.185-1.429-2.035-2.08C16.972 6.55 14.618 5.5 12 5.5M8.25 12a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0" clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="hide-password" height="1.5em" viewBox="0 0 24 24">
                        <path fill="var(--bs-gray-800)" fill-rule="evenodd" d="M20.53 4.53a.75.75 0 0 0-1.06-1.06l-16 16a.75.75 0 1 0 1.06 1.06l3.035-3.035C8.883 18.103 10.392 18.5 12 18.5c2.618 0 4.972-1.051 6.668-2.353c.85-.652 1.547-1.376 2.035-2.08c.48-.692.797-1.418.797-2.067c0-.649-.317-1.375-.797-2.066c-.488-.705-1.185-1.429-2.035-2.08c-.27-.208-.558-.41-.86-.601zm-5.4 5.402l-1.1 1.098a2.25 2.25 0 0 1-3 3l-1.1 1.1a3.75 3.75 0 0 0 5.197-5.197" clip-rule="evenodd" />
                        <path fill="var(--bs-gray-800)" d="M12.67 8.31a.26.26 0 0 0 .23-.07l1.95-1.95a.243.243 0 0 0-.104-.407A10.214 10.214 0 0 0 12 5.5c-2.618 0-4.972 1.051-6.668 2.353c-.85.652-1.547 1.376-2.036 2.08c-.48.692-.796 1.418-.796 2.067c0 .649.317 1.375.796 2.066a9.287 9.287 0 0 0 1.672 1.79a.246.246 0 0 0 .332-.017l2.94-2.94a.26.26 0 0 0 .07-.23a3.75 3.75 0 0 1 4.36-4.36" />
                    </svg>
                </div>
                <?php if (isset($errors['password'])) : ?>
                    <span class="text-danger"><?= $errors['password'] ?></span>
                <?php endif; ?>
            </div>
            <div class="remember-forgot small mb-3">
                <div class="remember-me d-flex gap-2">
                    <input id="remember-box" type="checkbox" class="hidden">
                    <label for="remember-box" class="remember-box"></label>
                    Me souvenir
                </div>
                <a href="#"> Mot de passe oublié</a>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Connexion">
            </div>
            <div class="signin small mb-3">Vous avez pas un compte ? <a href="#">&nbsp; Inscription</a></div>
        </form>
    </div>
</div>
<?php $this->view("includes/footer"); ?>