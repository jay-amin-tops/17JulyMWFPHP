<?php include_once("header.php"); 

if (isset($_REQUEST['btn-login'])) {
  // echo "<pre>";
  // print_r($_COOKIE);
  if ($_POST['username'] ==  $_COOKIE['username'] && $_POST['password'] ==  $_COOKIE['password']) {
    echo "valid user";
    $_SESSION['SingleData'] = "login success";
    $_SESSION['UserData'] = array("username"=>$_POST['username'],"email"=>$_COOKIE['email']);
    header("location:dashboard.php");
  } else {
    echo "invalid user";
    # code...
  }
  
}


?>
<!-- <h2>Login page</h2> -->
<div class="container">
  <div class="row">
    <div class="col-4 offset-4 mt-5">
      <div class="card border-success  mb-3">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
          <form  method="post">

          
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
          <div class="col text-center">
            <input type="submit" class="btn btn-primary" value="Login" name="btn-login" id="btn-login">
            <input type="reset" class="btn btn-danger" value="Reset" >
          </div>
        </div>
        <div class="row mt-3">
          <div class="col text-center">
            <a href="registration.php">Create new account</a>
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