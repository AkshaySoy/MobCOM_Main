<?php

require('modules/login-query.php');

?>

<div class="sticky-top p-0">

    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <a class="navbar-brand" href="index.php">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <span id="brand-name">MobCOM®</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Best Sellers</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Top Deals</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">New Releases</a>
                </li>
            </ul>

            <form action='product-list.php' class="form-inline my-2 my-lg-0" id='search_bar' method='GET'>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name='search_text' id='search_text'>
                    <div class="input-group-append">
                        <button class="btn btn-light" type="submit" name='search_submit'>
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>


            <div class="navbar-nav">

                <?php

                if (isset($_SESSION['login_status'])) {

                    echo "

                            <div class='dropdown ml-2'>

                                <button class='btn btn-dark btn-block dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <i class='fa fa-user-circle' aria-hidden='true'></i>
                                    My Account
                                </button>

                                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>

                                    <a class='dropdown-item' href='my-account.php'>
                                        <i class='fa fa-user mr-2' aria-hidden='true'></i>
                                        My Profile
                                    </a>

                                    <a class='dropdown-item' href='my-account.php'>
                                        <i class='fa fa-shopping-cart mr-1' aria-hidden='true'></i>
                                        My Orders
                                    </a>

                                    <div class='dropdown-divider'></div>

                                    <a href='logout.php'>

                                        <div class='ml-2 mr-2'>
                                            <button class='btn btn-danger btn-block' type='button'>
                                                Logout
                                            </button>
                                        </div>

                                    </a>

                                </div>

                            </div>

                            <a href='shopping-cart.php'>

                                <button class='btn btn-success ml-2' type='button'>
                                    <i class='fa fa-shopping-cart' aria-hidden='true'></i>
                                    Cart <span class='badge badge-light'>0</span>
                                </button>

                            </a>
                            
                        ";
                } else {

                    echo "

                            <button class='btn btn-primary btn-block ml-2' type='button' data-toggle='modal' data-target='#exampleModalCenter'>
                                Login
                            </button>
                        
                        ";
                }

                ?>

            </div>

        </div>

    </nav>

</div>

<?php

if ($error != "") {
    echo "
        <div class='container-fluid'>

            <div class='alert alert-danger alert-dismissible fade show my-3' role='alert'>
                $error
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>

        </div>

    ";
} else {
    echo "
            <div class='container-fluid'>

                <div class='alert alert-success alert-dismissible fade show my-3' role='alert'>
                Hello ! <b>{$_SESSION['first_name']} {$_SESSION['last_name']}</b>. Welcome to MobCOM. <a href='index.php' class='alert-link'>Click here</a> to continue. 
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>

            </div>

        ";
}

?>

<!-- Login Modal Start -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form action="" method="POST">

                    <!-- Input Start -->

                    <div class="form-group">
                        <label for="email">
                            <p class="font-weight-bold mb-0">Email</p>
                        </label>
                        <div class="input-group mt-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa fa-at" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="text" id="userEmail" name="userEmail" class="form-control" placeholder="Enter Email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <p class="font-weight-bold mb-0">Password</p>
                        </label>
                        <div class="input-group mt-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="password" id="userPwd" name="userPwd" class="form-control" placeholder="Enter Password" required>
                        </div>
                    </div>

                    <div class="form-check mt-0">
                        <input class="form-check-input showPwd" type="checkbox" onclick="showpassword()">
                        <label class="form-check-label" for="userPwdInput">
                            Show Password
                        </label>
                    </div>

                    <button type="submit" id="login" name="loginBtn" class="btn btn-primary btn-block mt-3">Login</button>

                    <p class="text-muted text-center p-2">New User ?
                        <a href="signup.php" class="card-link text-primary">Register Here</a>
                    </p>

                </form>

                <!-- Input End -->

            </div>

        </div>

    </div>

</div>

<!-- Login Modal End -->

<?php
//to retieve the keyword
if (isset($_GET['search_text'])) {
    echo "<script>
    document.getElementById('search_text').value = '$_GET[search_text]';
    document.getElementById('searching').value = '$_GET[search_text]';
    </script>";

    $query = "SELECT * FROM 'mobcom' WHERE 'name' = '$_GET[search_text]';";
}
?>