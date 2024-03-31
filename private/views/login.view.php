<?php $this->view("includes/head") ?>
<div class="container-fluid h-full w-full">
    <div class="m-auto max-w-sm shadow-md p-4">
        <form action="" class="flex flex-column gap-3">
            <h1 class="">Bienvenue</h1>
            <input type=" email" class="form-control" name="email" id="email" placeholder="Email">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Mot de pass">
            <input type="submit" class="form-control btn btn-primary" value="Connexion">

        </form>

    </div>
</div>
<?php $this->view("includes/footer") ?>