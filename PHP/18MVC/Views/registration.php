<div class="container">
	<div class="row">
		<br>
		<div class="col-md-4"></div>
		<div class="col-md-4">

			<div class="card">
				<div class="card-header text-center"> Login </div>
				<div class="card-body">
					<form method="post" id="registrationform" enctype="multipart/form-data">
						<div class="row">
							<div class="col">
								<input type="text" placeholder="Enter User Name" class="form-control" name="username" id="" required>
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
								<input type="text" placeholder="Enter Mobile" class="form-control" name="mobile" id="">
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
			<br>
						<div class="row ">
							<div class="col">
								<input type="checkbox" name="chk[]" id="Cricekt" value="Cricekt"> <label for="Cricekt">Cricekt</label>
								<input type="checkbox" name="chk[]" id="Music" value="Music"> <label for="Music">Music</label>
								<input type="checkbox" name="chk[]" id="Reading" value="Reading"> <label for="Reading">Reading</label>
								<input type="checkbox" name="chk[]" id="Travelling" value="Travelling"> <label for="Travelling">Travelling</label>

							</div>
						</div>
						<br>
						<div class="row mt-3">
							<div class="col text-center">
								<select name="country" class="form-control" onchange="getStatesByCountry(this.value)" id="country">
									<option value="">--Select Country--</option>
								</select>
							</div>
						</div>
						<br>
						<div class="row mt-3">
							<div class="col text-center">
								<select name="state" class="form-control" id="state">
									<option value="">--Select State--</option>
								</select>
							</div>
						</div>
						<br>
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
			<script>
				$().ready(function() {
					// validate the comment form when it is submitted
					$("#registrationform").validate();

					fetchCountries()
				})
				$.validator.setDefaults({
					submitHandler: function() {
						// alert("submitted!");
						
					}
				});

				function fetchCountries() {
					fetch("http://localhost/laravel/17JulyPHPMWF9/PHP/21API/getallcountries").then((res)=>res.json()).then((result)=>{
						console.log(result);
						let CountryOption = '<option value="">--Select Country--</option>'
						result.forEach(element => {
							console.log(element.country_name);
							// CountryOption +='<option value="">--Select Country--</option>'
							CountryOption +=`<option value="${element.country_id}">${element.country_name}</option>`
						});
						console.log(CountryOption);
						$("#country").html(CountryOption);
					})
				}
				function getStatesByCountry(id) {
					fetch(`http://localhost/laravel/17JulyPHPMWF9/PHP/21API/getstatesbycountryid?countryid=${id}`).then((res)=>res.json()).then((result)=>{
						console.log(result);
						let StateOption = '<option value="">--Select Country--</option>'
						result.forEach(element => {
							StateOption +=`<option value="${element.id}">${element.state_title}</option>`
						});
						$("#state").html(StateOption);
					})
				}


			</script>
		</div>
	</div>
</div>