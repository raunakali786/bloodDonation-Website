<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
								<option value="">-- Select --</option>
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
	<optgroup title="Ghaziabad" label="&raquo; Ghaziabad"></optgroup><option value="Indrapuram" >Indrapuram</option>
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
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							We are a group of GU Student; our aim is to promote education.
							We are a student in Galgotias University Greater Noida. Contact us to secure your future.

							We are a group of GU Student; our aim is to promote education.
							We are a student in Galgotias University Greater Noida. Contact us to secure your future.

						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								We are a group of GU Student; our aim is to promote education.
							We are a student in Galgotias University Greater Noida. Contact us to secure your future.

								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								We are a group of GU Student; our aim is to promote education.
							We are a student in Galgotias University Greater Noida. Contact us to secure your future.

								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								We are a group of GU Student; our aim is to promote education.
							We are a student in Galgotias University Greater Noida. Contact us to secure your future.

								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>