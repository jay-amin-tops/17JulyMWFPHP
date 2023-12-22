<!-- main content start -->
<div class="main-content">

    <!-- content -->
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="admindahboard">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>
        <div class="welcome-msg pt-3 pb-4">
            <h1>Hi <span class="text-primary text-capitalize"><?php echo $_SESSION['UserData']->username;  ?></span>, Welcome back</h1>
            <p>Very detailed & featured admin.</p>
        </div>


        <!-- chatting -->
        <div class="data-tables">
            <div class="row">
                <div class="col-lg-12 chart-grid mb-4">
                    <div class="col-md-8">
                    <?php
                    // echo "<pre>";
                    // print_r($Response);
                    // print_r($Response['Data']);
                    // print_r($Response['Data'][0]);
                    // print_r($Response['Data'][0]->hobby);
                    // echo "</pre>";
                    ?>
                        <div class="card">
                            <div class="card-header text-center"> Update User </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" placeholder="Enter User Name" class="form-control" name="username" value="<?php echo $Response['Data'][0]->username; ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <input type="password" placeholder="Enter Password" class="form-control" name="password" value="<?php echo $Response['Data'][0]->username; ?>"  id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                    <?php
                                    $FullNameArr = explode(" ",$Response['Data'][0]->fullname); ?>
                                        <div class="col">
                                            <input type="text" placeholder="Enter First Name" class="form-control" name="fname" value="<?php echo $FullNameArr[0]; ?>"  id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <input type="text" placeholder="Enter Last Name" class="form-control" name="lname" value="<?php echo $FullNameArr[1]; ?>"  id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <input type="text" placeholder="Enter Mobile" class="form-control" name="mobile" value="<?php echo $Response['Data'][0]->mobile; ?>"  id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <input type="email" placeholder="Enter Email" class="form-control" name="email" value="<?php echo $Response['Data'][0]->email; ?>"  id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                        
                                        
                                            <input type="radio" value="Male" <?php if ( $Response['Data'][0]->gender == "Male" ) { echo "checked"; }  ?> name="gender" id="Male"> <label for="Male">Male</label>
                                            <input type="radio" <?php if ( $Response['Data'][0]->gender == "Female" ) {echo "checked";}  ?> value="Female" name="gender" id="Female"> <label for="Female">Female</label>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <?php $HobbyArray = explode(",",$Response['Data'][0]->hobby); ?>
                                            <input type="checkbox" name="chk[]" <?php if ( in_array("Cricekt",$HobbyArray)) {echo "checked";}  ?> id="Cricekt" value="Cricekt"> <label for="Cricekt">Cricekt</label>
                                            <input type="checkbox" name="chk[]" <?php if ( in_array("Music",$HobbyArray)) {echo "checked";}  ?> id="Music" value="Music"> <label for="Music">Music</label>
                                            <input type="checkbox" name="chk[]" <?php if ( in_array("Reading",$HobbyArray)) {echo "checked";}  ?> id="Reading" value="Reading"> <label for="Reading">Reading</label>
                                            <input type="checkbox" name="chk[]" <?php if ( in_array("Travelling",$HobbyArray)) {echo "checked";}  ?> id="Travelling" value="Travelling"> <label for="Travelling">Travelling</label>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mt-3">
                                                <?php 
                                                // echo "<pre>";
                                                // print_r($AllCities);
                                                // echo "</pre>";
                                                ?>
                                        <div class="col text-center">
                                            <select name="city" class="form-control" id="city">
                                                <option value="">--Select City--</option>
                                                <?php foreach ($AllCities['Data'] as $key => $value) { ?>
                                                    <option  <?php if ($value->id ==$Response['Data'][0]->city ) { echo "selected"; }?>  value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                                <?php } ?>
                                                <!-- <option value="Ahmedabad">Ahmedabad</option>
                                                <option value="Surat">Surat</option>
                                                <option value="Baroda">Baroda</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="address">Address</label>
                                            <textarea name="address" id="address" class="form-control" cols="30" rows="3"><?php echo $Response['Data'][0]->address; ?></textarea>
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
                                            <input type="submit" class="btn btn-primary" value="Update" name="btn-update" id="">
                                            <input type="reset" class="btn btn-danger" name="" id="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- //chatting -->
    </div>
    <!-- //content -->
</div>
<!-- main content end-->