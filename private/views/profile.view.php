<?php  
    $this->view("includes/head");
    $this->view("includes/sidebar")
?>
<section class="profile">
    <div class="container-fluid d-flex gap-4 p-4 bg-white h-auto shadow-sm mx-auto" style="max-width: 1000px;">
        <div class="profile-card col  ">
            <div class="profile-picture">
                <img src="<?=ASSETS?>/img/man.png" alt="" class="border border-primary block mx-auto rounded-circle w-32" style="width:150px">
            </div>
            <div class="profile-info d-flex flex-column gap-2 mt-4">
            <div class="profile-name text-center fw-bold fs-4">Imad Jakhrouti</div>
            <div class="profile-email d-flex flex-row align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20"> <path fill="#adadad" d="M3.87 4h13.25C18.37 4 19 4.59 19 5.79v8.42c0 1.19-.63 1.79-1.88 1.79H3.87c-1.25 0-1.88-.6-1.88-1.79V5.79c0-1.2.63-1.79 1.88-1.79m6.62 8.6l6.74-5.53c.24-.2.43-.66.13-1.07c-.29-.41-.82-.42-1.17-.17l-5.7 3.86L4.8 5.83c-.35-.25-.88-.24-1.17.17c-.3.41-.11.87.13 1.07z" /> </svg>
                imad@jakhrouti.com</div>
            <div class="profile-genre d-flex flex-row align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"> <path fill="#adadad" d="M147.91 113.72a28 28 0 1 1-25.63-25.63a28 28 0 0 1 25.63 25.63M216 40v176a16 16 0 0 1-16 16H56a16 16 0 0 1-16-16V40a16 16 0 0 1 16-16h144a16 16 0 0 1 16 16m-28 16a8 8 0 0 0-8-8h-27.73a8.17 8.17 0 0 0-8.27 7.47a8 8 0 0 0 8 8.53h8.69l-15.77 15.77A44 44 0 1 0 112 159.26V176H92.27a8.17 8.17 0 0 0-8.27 7.47a8 8 0 0 0 8 8.53h20v15.73a8.18 8.18 0 0 0 7.47 8.25a8 8 0 0 0 8.53-8V192h19.73a8.17 8.17 0 0 0 8.25-7.47a8 8 0 0 0-8-8.53H128v-16.74a44 44 0 0 0 28.24-68.18L172 75.31v8.42a8.18 8.18 0 0 0 7.47 8.27a8 8 0 0 0 8.53-8Z" /> </svg>
                Homme</div>
            <div class="profile-role d-flex flex-row align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"> <path fill="#adadad" d="M15 21h-2a2 2 0 0 1 0-4h2v-2h-2a4 4 0 0 0 0 8h2Zm8-2a4 4 0 0 1-4 4h-2v-2h2a2 2 0 0 0 0-4h-2v-2h2a4 4 0 0 1 4 4" /> <path fill="#adadad" d="M14 18h4v2h-4zm-7 1a5.989 5.989 0 0 1 .09-1H3v-1.4c0-2 4-3.1 6-3.1a8.548 8.548 0 0 1 1.35.125A5.954 5.954 0 0 1 13 13h5V4a2.006 2.006 0 0 0-2-2h-4.18a2.988 2.988 0 0 0-5.64 0H2a2.006 2.006 0 0 0-2 2v14a2.006 2.006 0 0 0 2 2h5.09A5.989 5.989 0 0 1 7 19M9 2a1 1 0 1 1-1 1a1.003 1.003 0 0 1 1-1m0 4a3 3 0 1 1-3 3a2.996 2.996 0 0 1 3-3" /> </svg>
                Etudiant</div>
            <div class="profile-creation d-flex flex-row align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36"> <path fill="#adadad" d="M32.25 6h-4v3a2.2 2.2 0 1 1-4.4 0V6H12.2v3a2.2 2.2 0 0 1-4.4 0V6h-4A1.78 1.78 0 0 0 2 7.81v22.38A1.78 1.78 0 0 0 3.75 32h28.5A1.78 1.78 0 0 0 34 30.19V7.81A1.78 1.78 0 0 0 32.25 6M10 26H8v-2h2Zm0-5H8v-2h2Zm0-5H8v-2h2Zm6 10h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm6 10h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm6 10h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Z" class="clr-i-solid clr-i-solid-path-1" /> <path fill="#adadad" d="M10 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1" class="clr-i-solid clr-i-solid-path-2" /> <path fill="#adadad" d="M26 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1" class="clr-i-solid clr-i-solid-path-3" /> <path fill="none" d="M0 0h36v36H0z" /> </svg>
                2024/04/10</div>
            </div>
        </div>
        <br>
        <div class="container-fluid d-flex flex-column p-0 border-radius-6px bg-transparent">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active border-bottom border-1" aria-current="page" href="#">Basics Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-bottom border-1" href="#">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-bottom border-1" href="#">Tests</a>
                </li>
            </ul>
            <nav class="navbar container-fluid bg-transparent border-0">
                <form class="container-fluid container-fluid bg-transparent p-0">
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