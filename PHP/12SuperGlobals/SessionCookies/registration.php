<?php include_once("header.php");

if (isset($_POST['regist'])) {
    setcookie("uname",$_POST['username'],time()+3600);
    setcookie("pass",$_POST['password'],time()+3600);
    setcookie("email",$_POST['email'],time()+3600);

    header("location:login.php");

}

?>


<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div class="card border-primary mb-3">
                <div class="card-header text-center">Registration</div>
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
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Registration" name="regist" id="">
                                <input type="reset" class="btn btn-danger" value="Cancel" name="" id="">
                            </div>
                        </div>
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>