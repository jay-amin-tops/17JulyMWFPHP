<?php include_once("header.php");

// if (isset($_REQUEST['btn-login'])) {
//   // echo "<pre>";
//   // print_r($_COOKIE);
//   if ($_POST['username'] ==  $_COOKIE['username'] && $_POST['password'] ==  $_COOKIE['password']) {
//     echo "valid user";
//     $_SESSION['SingleData'] = "login success";
//     $_SESSION['UserData'] = array("username"=>$_POST['username'],"email"=>$_COOKIE['email']);
//     header("location:dashboard.php");
//   } else {
//     echo "invalid user";
//     # code...
//   }

// }


?>
<!-- <h2>Login page</h2> -->
<div class="container">
  <div class="row">
    <div class="col-4 offset-4 mt-5">
      <div class="card border-success  mb-3">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
          <form id="login" method="post">


            <div class="row">
              <div class="col">
                <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="username">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <input type="password" placeholder="Enter Password" class="form-control" name="password" id="password">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col text-center">
                <input type="submit" class="btn btn-primary" value="Login" name="btn-login" id="btn-login">
                <input type="reset" class="btn btn-danger" value="Reset">
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
<script>
  $('#login').submit(function(evt) {
    evt.preventDefault();
    let uname = document.getElementById("username").value
    let passw = document.getElementById("password").value
    // console.log("called");
    // console.log(uname);
    fetch("http://localhost/laravel/17JulyPHPMWF9/MWF2/19API/login", {
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      method: "POST",
      body: JSON.stringify({
        username:uname,
        password: passw
      })
    }).then((response)=>response.json()).then((kuchbhi)=>{
      console.log(kuchbhi);
    })
  })
</script>
</body>

</html>