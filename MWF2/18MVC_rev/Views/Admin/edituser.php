<div class="row pt-5">
    <div class="col-lg-9 offset-lg-1">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <h2>Edit</h2>
            </div>
            <div class="card-body">
                <?php
                
                // echo "<pre>";
                // print_r($usersDataById['Data'][0]);
                // echo "</pre>";
                $FullNameArray = explode(" ",$usersDataById['Data'][0]->fullname) ;
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="" value="<?php echo $usersDataById['Data'][0]->username;?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="password" placeholder="Enter Password" class="form-control" name="password" id=""  value="<?php echo $usersDataById['Data'][0]->username;?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="Enter First Name" class="form-control" name="fname" id=""  value="<?php echo $FullNameArray[0];?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="Enter Last Name" class="form-control" name="lname" id=""  value="<?php echo $FullNameArray[1];?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="Enter Date Of Birth" class="form-control" name="dob" id=""  value="<?php echo $usersDataById['Data'][0]->dateofbirth;?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Mobile" class="form-control" name="mobile" id=""  value="<?php echo $usersDataById['Data'][0]->mobile;?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="email" placeholder="Enter Email" class="form-control" name="email" id=""  value="<?php echo $usersDataById['Data'][0]->email;?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="radio" <?php if ($usersDataById['Data'][0]->gender == "Male") { echo "checked";
                            } ?> value="Male" name="gender" id="Male"> <label for="Male">Male</label>
                            <input type="radio" <?php if ($usersDataById['Data'][0]->gender == "Female") { echo "checked";
                            } ?> value="Female" name="gender" id="Female"> <label for="Female">Female</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <?php 
                            // print_r($usersDataById['Data'][0]->hobbies);  
                            $HobbiesArray = explode(",",$usersDataById['Data'][0]->hobbies);
                            // print_r($HobbiesArray);  
                            ?>
                            <input type="checkbox"  <?php if (in_array("Cricekt",$HobbiesArray)) {  echo "checked"; } ?> name="chk[]" id="Cricekt" value="Cricekt"> <label for="Cricekt">Cricekt</label>
                            <input type="checkbox" <?php if (in_array("Music",$HobbiesArray)) { echo "checked";
                            } ?> name="chk[]" id="Music" value="Music"> <label for="Music">Music</label>
                            <input type="checkbox" name="chk[]" <?php if (in_array("Reading",$HobbiesArray)) { echo "checked";  } ?>  id="Reading" value="Reading"> <label for="Reading">Reading</label>
                            <input type="checkbox" name="chk[]" <?php if (in_array("Travelling",$HobbiesArray)) {  echo "checked"; } ?> id="Travelling" value="Travelling"> <label for="Travelling">Travelling</label>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <select name="city" class="form-control" id="city">
                                <option value="">--Select City--</option>
                                <!-- <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Surat">Surat</option>
                                <option value="Baroda">Baroda</option> -->
                                <?php
                                foreach ($allCities['Data'] as $key => $value) { ?>
                                    <option <?php if ($value->city_id == $usersDataById['Data'][0]->city_id) {
                                       echo "selected";
                                    } ?> value="<?php echo $value->city_id; ?>"><?php echo $value->city_title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="3"><?php echo $usersDataById['Data'][0]->address;?></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="profile_pic">Profile Pic</label>
                            <input type="file" class="form-control" name="profile_pic" accept="image/*" id="profile_pic">
                            <input type="text" class="form-control" name="old_profile_pic" value="<?php echo $usersDataById['Data'][0]->profile_pic;?>"  id="old_profile_pic">

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