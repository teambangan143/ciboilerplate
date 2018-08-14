<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <?php if ($this->User->loggedIn()): ?>
        <a class="navbar-brand mr-1" href="<?php echo site_url('/dashboard') ?>">Start Bootstrap</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
    <?php else:?>
        <a class="navbar-brand mr-1" href="<?php echo site_url('/') ?>">Start Bootstrap</a>
    <?php endif; ?>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <!--        <div class="input-group">-->
        <!--            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">-->
        <!--            <div class="input-group-append">-->
        <!--                <button class="btn btn-primary" type="button">-->
        <!--                    <i class="fas fa-search"></i>-->
        <!--                </button>-->
        <!--            </div>-->
        <!--        </div>-->
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <?php //IF THE USER IS LOGIN
        if ($this->User->loggedIn()):
            ?>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <div class="dropdown-divider"></div>
                    <?php
                    echo form_open('auth/logout');
                    $data = array(
                        'class' => 'dropdown-item',
                        'name' => 'submit',
                        'value' => 'Logout'
                    );
                    echo form_submit($data);
                    echo form_close();
                    ?>
                </div>
            </li>
        <?php
        else: //IF THE USER IS LOGOUT
            ?>
            <li class="nav-item"><a href="<?php echo site_url('login'); ?>" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="<?php echo site_url('register'); ?>" class="nav-link">Register</a></li>
        <?php endif; ?>

    </ul>

</nav>