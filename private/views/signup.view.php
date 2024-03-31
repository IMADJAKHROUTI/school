<?php $this->view("includes/head") ?>
<div class="container-fluid  h-full w-full">
    <div class="m-auto max-w-sm shadow-md p-4">
        <form action="" class="flex flex-col gap-3">
            <h1 class="">Ajouter utilsateur</h1>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom">
            <input type=" email" class="form-control" name="email" id="email" placeholder="Email">
            <input type="text" class="form-control" name="pass1" id="pass1" placeholder="Mot de pass">
            <input type="text" class="form-control" name="pass2" id="pass2" placeholder="Confirmer mot de pass">

            <select name="" id="" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <select name="" id="" class="form-control">
                <option value="student">Student</option>
                <option value="reception">Reception</option>
                <option value="prof">Professeur</option>
                <option value="dep_admin">departement admin</option>
                <option value="super_Admin">Super admin</option>
            </select>



            <input type="reset" class="form-control btn bg-red-600 text-white" value="Annuler">
            <input type="submit" class="form-control btn btn-primary" value="Inscreption">


        </form>

    </div>
</div>
<?php $this->view("includes/footer") ?>