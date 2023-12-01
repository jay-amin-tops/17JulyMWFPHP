<?php include_once("header.php");

if (isset($_REQUEST['btn-register'])) {
    setcookie("username", $_POST['username'], time() + 3600);
    setcookie("password", $_POST['password'], time() + 3600);
    setcookie("email", $_POST['email'], time() + 3600);
    setcookie("mobile", $_POST['mobile'], time() + 3600);
    header("location:Login.php");
}


?>
<!-- <h2>Login page</h2> -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4 mt-5">
            <div class="card border-primary mb-3">
                <div class="card-header text-center">Registration</div>
                <div class="card-body">
                    <form method="post" id="form" enctype="multipart/form-data">
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
                                <input type="text" placeholder="Enter First Name" class="form-control" name="fname" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Enter Last Name" class="form-control" name="lname" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" placeholder="Enter Date Of Birth" class="form-control" name="dob" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="tel" placeholder="Enter Mobile" class="form-control" name="mobile" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="email" placeholder="Enter Email" class="form-control" name="email" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="radio" value="Male" name="gender" id="Male"> <label for="Male">Male</label>
                                <input type="radio" value="Female" name="gender" id="Female"> <label for="Female">Female</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="checkbox" name="chk[]" id="Cricekt" value="Cricekt"> <label for="Cricekt">Cricekt</label>
                                <input type="checkbox" name="chk[]" id="Music" value="Music"> <label for="Music">Music</label>
                                <input type="checkbox" name="chk[]" id="Reading" value="Reading"> <label for="Reading">Reading</label>
                                <input type="checkbox" name="chk[]" id="Travelling" value="Travelling"> <label for="Travelling">Travelling</label>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <select name="city" class="form-control" id="city">
                                    <option value="">--Select City--</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Baroda">Baroda</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="profile_pic">Profile Pic</label>
                                <input type="file" class="form-control" name="profile_pic" accept="image/*" id="profile_pic">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Registration" name="btn-regist" id="">
                                <input type="reset" class="btn btn-danger" name="" id="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#form').submit(function(evt) {
        evt.preventDefault();
        // console.log("called ");
        let FormData = $(this).serializeArray()
        // console.log(FormData);
        FormDataObject = {}
        FormData.forEach(element => {
            // console.log(element);
            // console.log(element.name);
            FormDataObject[element.name] = element.value;
        });
        let hobbyData = ''
        $("input[name='chk[]']:checked").each(function() {
            // alert($(this).val());
            hobbyData += $(this).val() + ","

        });
        delete FormDataObject["chk[]"];
        FormDataObject["chk"] = hobbyData.slice(0, -1);
        // console.log(FormDataObject);
        fetch("http://localhost/laravel/17JulyPHPMWF9/MWF2/19API/registration", {
            headers: {
                "Content-Type": "application/json", // sent request
                "Accept": "application/json" // expected data sent back
            },
            method: 'POST',
            body: JSON.stringify(FormDataObject)
        }).then((response)=>response.json()).then((result)=>{
            console.log(result);
            if (result.Code == 1) {
                window.location.href = "login.php"
            } else {
                alert("error while inserting data")
            }
        })
    });
</script>
</body>

</html>