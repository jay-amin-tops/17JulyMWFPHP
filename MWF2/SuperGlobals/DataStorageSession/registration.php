<?php include_once("header.php"); 

if (isset($_REQUEST['btn-register'])) {
    setcookie("username",$_POST['username'],time()+3600);
    setcookie("password",$_POST['password'],time()+3600);
    setcookie("email",$_POST['email'],time()+3600);
    setcookie("mobile",$_POST['mobile'],time()+3600);
    header("location:Login.php");
}


?>
<!-- <h2>Login page</h2> -->
<div class="container">
    <div class="row">
        <div class="col-4 offset-4 mt-5">
            <div class="card border-success  mb-3">
                <div class="card-header text-center">Registration</div>
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="password" placeholder="Enter Password" class="form-control" name="password" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Enter Email" class="form-control" name="email" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Enter Mobile" class="form-control" name="mobile" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Registration" name="btn-register" id="btn-login">
                                <input type="reset" class="btn btn-danger" value="Reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>