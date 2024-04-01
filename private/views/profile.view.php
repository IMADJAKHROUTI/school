<?php  
    $this->view("includes/head");
    $this->view("includes/nav")
?>

<div class="container-fluid p-4 bg-white h-auto shadow-sm max-w-5xl mt-28">
    <?php $this->view("includes/breadcrumb")?>
    <div class="row  ">
        <div class="col-sm-4 flex items-center">
            <img src="<?=ASSETS?>/img/woman.png" alt="" class="border border-primary block mx-auto rounded-circle w-32">
        </div>
        <div class="col-sm-8 bg-bg-light flex items-center ">
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
                    <th>Gender</th>
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




<?php $this->view("includes/footer")?>