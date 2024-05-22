<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
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
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->
		<?php
		if((isset($_GET['city']) && !empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))) {

			$city = $_GET['city'];
			$blood_group = $_GET['blood_group'];
			$sql = "SELECT * FROM donor WHERE city='$city' OR blood_group = '$blood_group'" ;

	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result)>0){

		while ($row = mysqli_fetch_assoc($result)){
			if($row['save_life_date']=='0'){
				echo '
				 <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
				 <span class="name">'.$row['name'].'</span>
				 <span>'.$row['city'].'</span>
				 <span>'.$row['blood_group'].'</span>
				 <span>'.$row['gender'].'</span>
				 <span>'.$row['email'].'</span>
				 <span>'.$row['contact'].'</span>
				 </div>
				 
				 ';

			}else{
				 echo '
				 <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
				 <span class="name">'.$row['name'].'</span>
				 <span>'.$row['city'].'</span>
				 <span>'.$row['blood_group'].'</span>
				 <span>'.$row['gender'].'</span>
				 <h4 class="name text-center">Donated</h4>
				 </div>
				 
				 ';
			}
		}

	}else{
		
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data not found.</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  	</div>';

	}
		}


		?>

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>

<script type="text/javascript">
	$(function(){
		$("search").on('click',function(){

			var city = $("#city").val();
			var blood_group = $("#blood_group").val();

			$.ajax({
				type : 'GET',
				url : 'ajaxsearch.php',
				data : {city:ciy,blood_group:blood_group},
				success:function(data){
					if(!data.error){
						$("data").html(data);

					}
				}
			})

		});


	});
</script>
