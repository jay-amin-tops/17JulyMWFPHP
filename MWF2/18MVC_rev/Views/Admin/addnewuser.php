<div class="row pt-5">
    <div class="col-lg-9 offset-lg-1">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <h2>Edit</h2>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
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
                            <select name="country" onchange="getState(this)" class="form-control" id="country">
                                <option value="">--Select Country--</option>
                                <!-- <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Surat">Surat</option>
                                <option value="Baroda">Baroda</option> -->
                                <?php
                                foreach ($allCountries['Data'] as $key => $value) { ?>
                                    <option value="<?php echo $value->country_id; ?>"><?php echo $value->country_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <script>
                        function getState(e) {
                            console.log(e.value);
                            $.ajax({
                                url: "http://localhost/laravel/17JulyPHPMWF9/MWF2/18MVC_rev/getstatebycountryid?countryid=" + e.value,
                                success: function(response) {
                                    console.log(response);
                                    let JsonResponse = JSON.parse(response)
                                    console.log(JsonResponse);
                                    htmlOption = `<option value="">--Select State--</option>`
                                    JsonResponse['Data'].forEach(element => {
                                        // console.log(element);
                                        htmlOption += `<option value="${element.state_id}">${element.state_title}</option>`
                                    });
                                    console.log(htmlOption);
                                    $("#state").html(htmlOption)
                                }
                            })
                        }
                    </script>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <select name="state" class="form-control" id="state">
                                <option value="">--Select State--</option>
                                <?php
                                foreach ($allStates['Data'] as $key => $value) { ?>
                                    <option value="<?php echo $value->state_id; ?>"><?php echo $value->state_title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <script>
                        document.getElementById("state").addEventListener("change", function() {
                            console.log("called", this.value);
                            fetch(`http://localhost/laravel/17JulyPHPMWF9/MWF2/18MVC_rev/getcitybystateid?stateid=${this.value}`).then((res) => res.json()).then((result) => {
                                // console.log(result);
                                htmlOption = `<option value="">--Select City--</option>`
                                result['Data'].forEach(element => {
                                    // console.log(element);
                                    htmlOption += `<option value="${element.city_id}">${element.city_title}</option>`
                                });
                                console.log(htmlOption);
                                document.getElementById("city").innerHTML = htmlOption
                            })
                        })
                    </script>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <select name="city" class="form-control" id="city">
                                <option value="">--Select City--</option>
                                <?php
                                foreach ($allCities['Data'] as $key => $value) { ?>
                                    <option value="<?php echo $value->city_id; ?>"><?php echo $value->city_title; ?></option>
                                <?php } ?>
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
                            <input type="submit" class="btn btn-primary" value="Add" name="btn-add" id="">
                            <input type="reset" class="btn btn-danger" name="" id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>