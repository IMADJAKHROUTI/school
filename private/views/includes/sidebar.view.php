<div id="body-pd" class="bodyy">
        <header class="header" id="header">
            <div class="header_toggle"> 
                <i class='bx bx-menu' id="header-toggle"></i>
             </div>
            <div class="header_img"> 
                <img src="" alt=""> 
            </div>
            <div>
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown ">
                        <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo Auth::getNom()?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="#">action</a></li>
                            <li><a class="dropdown-item" href="<?=ROOT?>/Logout">Deconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <a href="<?=ROOT?>" class="nav_logo"> 
                        <i class='bx bx-layer nav_logo-icon'></i> 
                        <span class="nav_logo-name">MY SCHOOL</span> 
                    </a>
                    <div class="nav_list"> 
                        <a href="<?=ROOT?>" class="nav_link active"> 
                            <i class='bx bx-grid-alt nav_icon'></i> 
                            <span class="nav_name">Dashboard</span> 
                        </a> 
                        <a href="<?=ROOT?>/schools" class="nav_link"> 
                            <i class='bx bx-user nav_icon'></i> 
                            <span class="nav_name">Schools</span> 
                        </a> 
                        <a href="<?=ROOT?>/users" class="nav_link"> 
                            <i class='bx bx-message-square-detail nav_icon'></i> 
                            <span class="nav_name">Staff</span> 
                        </a> 
                        <a href="<?=ROOT?>/students" class="nav_link"> 
                            <i class='bx bx-bookmark nav_icon'></i> 
                            <span class="nav_name">Students</span> 
                        </a>
                        <a href="<?=ROOT?>/classes" class="nav_link"> 
                            <i class='bx bx-folder nav_icon'></i> 
                            <span class="nav_name">Classes</span> 
                        </a> 
                        <a href="<?=ROOT?>/test" class="nav_link"> 
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                            <span class="nav_name">Tests</span> 
                        </a> 
                    </div>
                </div> 
                <a href="<?=ROOT?>/Logout" class="nav_link"> 
                    <i class='bx bx-log-out nav_icon'></i> 
                    <span class="nav_name">SignOut</span> 
                </a>
            </nav>
        </div>