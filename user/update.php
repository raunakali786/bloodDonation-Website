<?php 
	
	include 'include/header.php';

	include 'include/sidebar.php';

?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	


						<form action="" method="post" class="form-group form-container" >
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" required name="name" class="form-control" value="">
							</div>
							<div class="form-group">
					              <label for="name">Blood Group</label><br>
					              <select class="form-control demo-default" required id="blood_group" name="blood_group" required>
					                <option value=""> </option>
					                <option value="A+">A+</option>
					                <option value="A-">A-</option>
					                <option value="B+">B+</option>
					                <option value="B-">B-</option>
					                <option value="O+">O+</option>
					                <option value="O-">O+</option>
					                <option value="AB+">AB+</option>
					                <option value="AB-">AB-</option>
					              </select>
					        </div><!--End form-group-->
							<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		<select name="gender" id="gender" class="form-control" required>
				              			<option value=""></option>
				              			<option value="Male">Male</option>
				              			<option value="Fe-male">Fe-male</option>
				              		</select>
				    		</div><!--gender-->
				    		<div class="form-group">
				    		<label for="dob">Email</label>
				    			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control" required value="">
				    		</div>
				    		<div class="form-group">
				              <label for="contact_no">Contact No</label>
				              <input type="text" name="contact_no" value="" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
				            </div><!--End form-group-->
							<div class="form-group">
								<label for="city">City</label>
								              <select name="city" id="city" class="form-control demo-default" required>
									<option value=""> </option><option value="">-- Select --</option>
	<optgroup title="Agra" label="&raquo; Agra"></optgroup>
	<optgroup title="Aligarh" label="&raquo; Aligarh"></optgroup>
	<optgroup title="Allahabad" label="&raquo; Allahabad"></optgroup>
	<optgroup title="Ambedkar Nagar " label="&raquo; Ambedkar Nagar "></optgroup>
	<optgroup title="Amroha" label="&raquo; Amroha"></optgroup>
	<optgroup title="Auraiya" label="&raquo; Auraiya"></optgroup>
	<optgroup title="Azamgarh" label="&raquo; Azamgarh"></optgroup>

	<optgroup title="Baghpat" label="&raquo; Baghpat"></optgroup>
	<optgroup title="Bahraich" label="&raquo; Bahraich"></optgroup>
	<optgroup title="Ballia" label="&raquo; Ballia"></optgroup>
	<optgroup title="Balrampur" label="&raquo; Balrampur"></optgroup>
	<optgroup title="Banda" label="&raquo; Banda"></optgroup>
	<optgroup title="Bara Banki " label="&raquo; Bara Banki "></optgroup>
	<optgroup title="Bareilly" label="&raquo; Bareilly"></optgroup>
	<optgroup title="Basti" label="&raquo; Basti"></optgroup>
	<optgroup title="Bijnor" label="&raquo; Bijnor"></optgroup>
	<optgroup title="Budaun" label="&raquo; Budaun"></optgroup>
	<optgroup title="Bulandshahr" label="&raquo; Bulandshahr"></optgroup>
	<optgroup title="Chandauli" label="&raquo; Chandauli"></optgroup>
	<optgroup title="Chitrakoot" label="&raquo; Chitrakoot"></optgroup>
	<optgroup title="Deoria" label="&raquo; Deoria"></optgroup>
	<optgroup title="Etah" label="&raquo; Etah"></optgroup>
	<optgroup title="Etawah" label="&raquo; Etawah"></optgroup>
	<optgroup title="Faizabad" label="&raquo; Faizabad"></optgroup>
	<optgroup title="Farrukhabad" label="&raquo; Farrukhabad"></optgroup>
	<optgroup title="Fatehpur" label="&raquo; Fatehpur"></optgroup>
	<optgroup title="Firozabad" label="&raquo; Firozabad"></optgroup>
	<optgroup title="Gautam Buddha Nagar " label="&raquo; Gautam Buddha Nagar "></optgroup><option value="Greater Noida" >Greater Noida</option>
	<optgroup title="Ghaziabad" label="&raquo; Ghaziabad"></optgroup>
	<optgroup title="Ghazipur" label="&raquo; Ghazipur"></optgroup>
	<optgroup title="Gonda" label="&raquo; Gonda"></optgroup>
	<optgroup title="Gorakhpur" label="&raquo; Gorakhpur"></optgroup>
	<optgroup title="Hamirpur" label="&raquo; Hamirpur"></optgroup>
	<optgroup title="Hardoi" label="&raquo; Hardoi"></optgroup>
	<optgroup title="Hathras" label="&raquo; Hathras"></optgroup>
	<optgroup title="Jalaun" label="&raquo; Jalaun"></optgroup>
	<optgroup title="Jaunpur" label="&raquo; Jaunpur"></optgroup>
	<optgroup title="Jhansi" label="&raquo; Jhansi"></optgroup>
	<optgroup title="Kannauj" label="&raquo; Kannauj"></optgroup>
	<optgroup title="Kanpur Dehat " label="&raquo; Kanpur Dehat "></optgroup>
	<optgroup title="Kanpur Nagar " label="&raquo; Kanpur Nagar "></optgroup>
	<optgroup title="Kasganj" label="&raquo; Kasganj"></optgroup>
	<optgroup title="Kaushambi" label="&raquo; Kaushambi"></optgroup>
	<optgroup title="Kheri" label="&raquo; Kheri"></optgroup>
	<optgroup title="Kushinagar" label="&raquo; Kushinagar"></optgroup>
	<optgroup title="Lalitpur" label="&raquo; Lalitpur"></optgroup>
	<optgroup title="Lucknow" label="&raquo; Lucknow"></optgroup>
	<optgroup title="Mahoba" label="&raquo; Mahoba"></optgroup>
	<optgroup title="Mahrajganj" label="&raquo; Mahrajganj"></optgroup>
	<optgroup title="Mainpuri" label="&raquo; Mainpuri"></optgroup>
	<optgroup title="Mathura" label="&raquo; Mathura"></optgroup>
	<optgroup title="Mau" label="&raquo; Mau"></optgroup>
	<optgroup title="Meerut" label="&raquo; Meerut"></optgroup>
	<optgroup title="Mirzapur" label="&raquo; Mirzapur"></optgroup>
	<optgroup title="Moradabad" label="&raquo; Moradabad"></optgroup>
	<optgroup title="Muzaffarnagar" label="&raquo; Muzaffarnagar"></optgroup>
	<optgroup title="Pilibhit" label="&raquo; Pilibhit"></optgroup>
	<optgroup title="Pratapgarh" label="&raquo; Pratapgarh"></optgroup>
	<optgroup title="Rae Bareli " label="&raquo; Rae Bareli "></optgroup>
	<optgroup title="Rampur" label="&raquo; Rampur"></optgroup>
	<optgroup title="Saharanpur" label="&raquo; Saharanpur"></optgroup>
	<optgroup title="Sant Kabir Nagar " label="&raquo; Sant Kabir Nagar "></optgroup>
	<optgroup title="Sant Ravidas Nagar " label="&raquo; Sant Ravidas Nagar "></optgroup>
	<optgroup title="(Bhadohi)" label="&raquo; (Bhadohi)"></optgroup>
	<optgroup title="Shahjahanpur" label="&raquo; Shahjahanpur"></optgroup>
	<optgroup title="Shrawasti" label="&raquo; Shrawasti"></optgroup>
	<optgroup title="Siddharthnagar" label="&raquo; Siddharthnagar"></optgroup>
	<optgroup title="Sitapur" label="&raquo; Sitapur"></optgroup>
	<optgroup title="Sonbhadra" label="&raquo; Sonbhadra"></optgroup>
	<optgroup title="Sultanpur" label="&raquo; Sultanpur"></optgroup>
	<optgroup title="Unnao" label="&raquo; Unnao"></optgroup>
	<optgroup title="Varanasi" label="&raquo; Varanasi"></optgroup></select>
							</div><!--city end-->
							
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update">Update</button>
							</div>
						</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
include 'include/footer.php'; 
 ?>