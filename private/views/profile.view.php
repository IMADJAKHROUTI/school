<?php  
    $this->view("includes/head");
    $this->view("includes/sidebar")
?>
<section class="profile">
    <div class="container-fluid p-4 bg-white h-auto shadow-sm mx-auto" style="max-width: 1000px;">
        <div class="row  ">
            <div class="col-sm-4 col-md-3">
                <img src="<?=ASSETS?>/img/woman.png" alt="" class="border border-primary block mx-auto rounded-circle w-32" style="width:150px">
            </div>
            <div class="col-sm-8 col-md-9 bg-bg-light p-2 ">
                <table class=" table table-hover table-table-striped table-border">
                    <tr>
                        <th>Nom</th>
                        <td>Imad</td>
                    </tr>
                    <tr>
                        <th>Prenom</th>
                        <td>Jakhrouti</td>
                    </tr>
                    <tr>
                        <th>Date creation</th>
                        <td>2024/04/10</td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <td>Male</td>
                    </tr>
                </table>

            </div>
        </div>
        <br>
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Basics Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tessts</a>
                </li>
            </ul>
            <nav class="navbar bg-body-tertiary">
                <form class="container-fluid">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </form>
            </nav>
        </div>
    </div>
</section>




<?php $this->view("includes/footer")?>