<?php include_once("header.php"); 


if (isset($_POST['login'])) {
    if ($_POST['username'] == $_COOKIE['uname'] && $_POST['password'] == $_COOKIE['pass'] ) {
        echo "valid user";
        // $_SESSION['UserData'] = $_COOKIE['uname'];
        $_SESSION['UserData'] = array( "username" => $_COOKIE['uname']);

        header("location:dashboard.php");
    }else{
        echo "invalid user";

    }

    
    // header("location:login.php");

}

?>


<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div class="card border-primary mb-3">
                <div class="card-header text-center">Login</div>
                <div class="card-body">
                    <form method="post">
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter your name" name="username" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Enter your Password" name="password" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Login" name="login" id="">
                            <input type="reset" class="btn btn-danger" value="Cancel" name="" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <a href="registration.php">Click here for create new account</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>