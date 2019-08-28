<?php include("../includes/config.php");
	  include("way2sms.php");

if(isset($_GET['c']))
{
	session_destroy();
	header("location:index.php");
	
}
function sendsms($message,$recerverNO)
{
	// send sms
$userID="8169327959";
$userPWD="G8336G";

$res = sendWay2SMS($userID,$userPWD,$recerverNO,$message);
    if (is_array($res))
        echo $res[0]['result'] ? 'true' : 'false';
    else
        echo $res;
}


	
?>
<!DOCTYPE html>
<html>
<head>
<title>E-Blood Bank</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Homey Designs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="images/fav.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.jpg">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.jpg">
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/component.css"/>	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" >
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/iconeffects.css" rel='stylesheet' type='text/css' />
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ewert" rel="stylesheet">
<!--//fonts-->
<!--fonts-->
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {sms
    border: none;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
.pointer a:hover {
  cursor:pointer;
 }
</style>
</head>
<body>
<!--Header-->
	<div class="header" id="home">
		<!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				   <?php if (isset($_SESSION['name'])){ ?>      <div id="sidebar"> 
						     <h4 class="menu">Menu</h4>
						          <ul>
							      
							        <!--<li><a class="scroll" href="#service">Our Services</a></li>
									  <!-- <li><a href="#">More <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
										  <ul>
											 
											  <li><a href="icons.html"><span>Font Icons</span></a></li>

										 </ul>
									  </li>-->
									 <li><a class="scroll" href="#addDonor">Add Donor</a></li>
									<li><a class="scroll" href="#searchDonor">Search Donor</a></li>
									<li><a class="scroll" href="#addcamp">Add Camps</a></li>
									<li><a class="scroll" href="#addstock">Add Stock</a></li>
									<li><a class="scroll" href="#listcamp">Camp List</a></li>
									 <li><a class="scroll" href="#listDonor">Donor's List</a></li>
									 <li><a class="scroll" href="#liststock">Stock List</a></li>
									 <li><a class="scroll" href="#bdlist">Blood Donation List</a></li>
									 <li><a class="scroll" href="#mapDonor">Donor's On Map</a></li>
									
					
									
						   </ul>
						   <div id="sidebar-btn">
							   <span></span>
							   <span></span>
							   <span></span>
						   </div>
					   </div>  <?php } ?>

							 <script>
								  var sidebarbtn = document.getElementById('sidebar-btn');
									var sidebar = document.getElementById('sidebar');
								   sidebarbtn.addEventListener('click', function () {
								  if(sidebar.classList.contains('visible')){
										sidebar.classList.remove('visible'); 
								   }else {
										sidebar.className = 'visible';
									}
								  });
								</script>
					    <!-- //sidebar -->
					</div>
				  <!-- //header-left -->
				  <!-- /header-right -->
				    <div class="header-right">
					
				<?php  if (isset($_SESSION['name'])){?>  <div class="tag one"><font color="#00000"><span class="glyphicon glyphicon-user"></span><strong>Hi, <?=$_SESSION['name']?></strong></font></div>
				<div class="tag two"><a href="index.php?c=logout" data-toggle="modal" "><font color="#00000"><span class="glyphicon glyphicon-off"></span><strong>Logout</a></strong></font></div>
				<?php } else{ ?> <div class="tag "><a href="#" data-toggle="modal" data-target="#myModal11"><font color="#00000"><span class="glyphicon glyphicon-tag"></span><strong>Login</a></strong></font></div> 
					      <?php } ?>
					        <ul class="top-links">
									<li><a href="https://www.facebook.com/Ebloodbank-270090623444976/"><i class="fa fa-facebook"></i></a></li>
								<!-- 	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
									<li><a href="https://plus.google.com/u/0/communities/118121766637296106917"><i class="fa fa-google-plus"></i></a></li>
								</ul>
					</div>
				  <!-- //header-right -->
				  <div class="clearfix"></div>
				  	<!-- login -->
			<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login-bottom">
									<h3>Login</h3>
									<form action="index.php" method="post" autocomplete="off">
									         <input type="text" id="username" class="user" name="lusername" placeholder="Username" value="" required="" autocomplete="off">
											 <input type="password" id="password" name="lpassword" placeholder="Password" required="" autocomplete="off"> 
											 <input type="button" value="Login" name="login" id="login_btn">
                                             <label class='error' id="error_msg"></label>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
	
		
	</div>

	
<!-- differencials -->

	
          	
	<!-- //projects -->

  <style>
  login-bottom input[type="text"] {
     width: 50%;
   
}
  </style>
  <?php if (isset($_SESSION['name'])){ ?> 
      <div id="addDonor">
	  <center>
	  <div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login-bottom">
									
        <div class="container" style="padding-top:50px;padding-bottom:50px;">
            <h3 class="tittle">Add Donor!!!</h3>
		<form action="index.php" method="post">
 
		BD-<input type="text" name="rg_id" placeholder="Registration ID" required="" style="width:50%;"> 
		<input type="text" name="city" placeholder="City" required=""style="width:50%;"> <br/><br/>
		

		<select name="bg" placeholder="Blood Group"><br/><br/>
		  <option value="" disabled selected>  Blood Group</option>
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
		   <option value="BBG">Bombay Blood Group-</option>
		  </select> <br/><br/>
		  Blood Donation Date: <input type="date" name="d_date" placeholder="Blood Donation Date" required="" >
<div class="clearfix"></div>
<input type="submit" name="adddonar" value="Add Donar">
</form>
        </div>
         </div>  
        </div>   </div>   
		</center>
    </div>
	<!-- /add donar -->
	
<!-- add camp -->	
<div id="addcamp">
		<center>
		<div class="modal-body modal-spa">
		<div class="login-grids">
			<div class="login-bottom">
		<div class="container" style="padding-top:50px;padding-bottom:50px;">
		<h3 class="tittle">Add Camp info!!!</h3>
		<form action="" method="post">

		<input type="text" name="camp_info" placeholder="Camp Info" required="" style="width:50%;"> 
		<input type="text" name="venue" placeholder="Camp Venu" required="" style="width:50%;"> 
		<input type="text" name="camp_city" placeholder="City" required=""style="width:50%;"> <br/><br/>
		Camp Date: <input type="date" name="camp_date" placeholder="Camp Date" required="" >
		<div class="clearfix"></div>
		<input type="submit" name="addcamp" value="Add Camp">
		</form>
		</div>
		</div>  
		</div>   </div>   
		</center>
</div>

<!-- /add camp -->
	
	
<!-- add stock -->	
<div id="addstock">
			<center>
			<div class="modal-body modal-spa">
			<div class="login-grids">
			<div class="login-bottom">

			<div class="container" style="padding-top:50px;padding-bottom:50px;">
			<h3 class="tittle">Add Stock !!!</h3>
			<form action="index.php" method="post">

			<input type="text" name="stk_name" placeholder="Hospital Name" required="" style="width:50%;"> 
			<input type="text" name="stk_city" placeholder="City" required=""style="width:50%;"> <br/><br/>
			<input type="number" name="stk_unit" placeholder="Unit" required=""style="width:50%;"> <br/><br/>
			<select name="stk_bg" placeholder="Blood Group" required><br/><br/>
			<option value="" disabled selected>  Blood Group</option>
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
			<option value="BBG">Bombay Blood Group-</option>
			</select> 
		
			<div class="clearfix"></div>
			<input type="submit" name="addstock" value="Add Stock">
			</form>
			</div>
			</div>  
			</div>   </div>   
			</center>
   
</div>

<!-- /add stock -->
	
	<!-- camp list -->
<div id="listcamp">
<div class="container" style="padding-top:50px;padding-bottom:50px;">
	<h3 class="tittle">List Camp!!!</h3>
	<div class="row">			
	<div style="overflow-x:auto;">
		<table>
		<tr>
		<th>Camp Id</th>
		<th>Camp Info</th>
		<th>City</th>
		<th>Venue</th>
		<th>Camp Date</th>
		</tr>
   
			<?php
				$sql = "SELECT id,camp_info,venue,city,camp_date from camp order by camp_date DESC ";
				$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$id=$row["id"];
					$camp_info=$row["camp_info"];
					$venue=$row["venue"];
					$city=$row["city"];
					$camp_date=$row["camp_date"];
					
				?>
				
				<tr>
					
				<td> <?=$id?></td>
				<td> <?=$camp_info?></td>
				<td> <?=$city?></td>
				<td> <?=$venue?></td>
				<td> <?=$camp_date?></td>
				
				
					</tr>
				<?php
				}
			}
			
			
			?>
			</table>
			</div>
            </div>
       </div>
 
    </div>
	<!-- /List Camp -->
	
			

	
	
	
    <div id="searchDonor">
        <div class="container" style="padding-top:50px;padding-bottom:50px;">
            <h3 class="tittle">Search Donor!!!</h3>
            <div class="row">
                    <!-- <div class="col-xs-12 col-md-6" >
                        <div class="form-group">
                          <label for="sel1">Select criteria to search:</label>
                          <select class="form-control" id="searchCriteria">
                            <option value="BLOOD_GROUP">Blood group</option>
                            <option value="Name">Name</option>
                          </select>
                        </div>
                    </div> -->
                    
                    <div class="col-xs-12 col-md-6">
                        <div class="input-group">
                         <!--  <input type="text" class="form-control" id="searchVal" placeholder="Enter text..."> -->
						<select name="bg" id="bg" placeholder="Blood Group">
						  <option value="" selected> Select Blood Group</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						   <option value="BBG">Bombay Blood Group-</option>
						  </select> 
						  <select name="city" id="srch_city" placeholder="Blood Group">
						  <?php
						  $sql = "SELECT distinct city FROM bloodbank";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
							$city=$row["city"];
							?>
							<option value="<?=$city?>"><?=$city?>-</option>
							<?php
							}
							}
						  ?>
						  </select>
                          <span class="input-group-btn">
                            <button class="btn btn-default" id="startSearch" type="button">Go!</button>
                          </span>
                        </div>
                    </div>
            </div>
            <div class="row">
	
			<div id="search_details"></div>
                  
            </div>
        </div>
        
        
    </div>

			<!-- List Donar-->
<div id="listDonor">
<div class="container" style="padding-top:50px;padding-bottom:50px;">
	<h3 class="tittle">List Donor!!!</h3>
	<div class="row">			
<div style="overflow-x:auto;">
		<table>
		<tr>
		<th>Reg no.</th>
		<th>Name</th>

		<th>City</th>
		<th>Blood Group</th>
		<th>Mobile No.</th>
		<th>Registration Date</th>

		</tr>
   
			<?php
				$sql = "SELECT id,rg_id,city,blood_group,mobile,name,username,date FROM members where id!=2 order by date DESC ";
				$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$name=$row["name"];
					$id=$row["id"];
					$rg_id=$row["rg_id"];
					$username=$row["username"];
					$city=$row["city"];
					$blood_group=$row["blood_group"];
					$mobile=$row["mobile"];
					$date=$row["date"];
				?>
				
				<tr>
					
				<td> <?=$rg_id?></td>
				<td> <?=$name?></td>
				<td> <?=$city?></td>
				
				<td> <?=$blood_group?></td>
				<td> <?=$mobile?></td>
					<td><?=$date?></td>
					</tr>
				<?php
				}
			}
			
			
			?>
			</table>
			</div>
            </div>
       </div>
 
    </div>
	<!-- /List Donar -->
	
	
				<!-- List Stock -->
<div id="liststock">
<div class="container" style="padding-top:50px;padding-bottom:50px;">
	<h3 class="tittle">List of available Stock !!!</h3>
	<div class="row">			
<div style="overflow-x:auto;">
		<table>
		<tr>
		<th>Blood Group</th>
		<th>Spent</th>
		<th>Available</th>
		<th>Total</th>
		
		</tr>
   
			<?php
			
			$sql = "SELECT blood_group,count(*) as count FROM bloodbank group by blood_group";
			$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) 
			{
					$blood_group=$row["blood_group"];
					$total=$row["count"];
					
					$sql = "SELECT sum(unit) as bgsum FROM stock where bg='$blood_group'";
					$result1 = $conn->query($sql);
							if ($result1->num_rows > 0) {
								while($row1 = $result1->fetch_assoc()) 
								{
									$bgsum=$row1["bgsum"];
									$available=$total-$bgsum;
									?>
									<tr>
									<td> <?=$blood_group?></td>
									<td> <?=$bgsum?></td>
									<td> <?=$available?></td>
									<td> <?=$total?></td>
									</tr>
									
									<?php
								}
							}
			}
			
		}
				?>
				
			</table>
			</div>
            </div>
       </div>
 
    </div>
	<!-- /List Stock -->
			
  <!-- Blood Donation List -->
	    <div id="bdlist">
        <div class="container" style="padding-top:50px;padding-bottom:50px;">
            <h3 class="tittle">Blood Donation List </h3>
            <div class="row">
			<div style="overflow-x:auto;">
		<table>
		<tr>
		<th>Sr.no.</th>
		<th>Reg no.</th>
		<th>Name</th>
		<th>City</th>
		<th>Blood Group</th>
		<th>Mobile No.</th>
		<th>Registration Date</th>

		</tr>
			
			<?php
			
				$sql = "SELECT members.id,bloodbank.id as bd_id ,members.rg_id,bloodbank.blood_group,donate_date,bloodbank.city,mobile,name,username FROM members,bloodbank where bloodbank.rg_id=members.id and members.id!=2 order by bloodbank.donate_date DESC ";
				$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$name=$row["name"];
					$id=$row["id"];
					$bd_id=$row["bd_id"];
					$rg_id=$row["rg_id"];
					$username=$row["username"];
					$city=$row["city"];
					$blood_group=$row["blood_group"];
					$mobile=$row["mobile"];
					$donate_date=$row["donate_date"];
				?>
				 <tr>
					
				<td> <?=$bd_id?></td>
				<td> <?=$rg_id?></td>
				<td> <?=$name?></td>
				<td> <?=$city?></td>
				
				<td> <?=$blood_group?></td>
				<td> <?=$mobile?></td>
					<td><?=$donate_date?></td>
					</tr>
				<?php
				}
			}
			
			?>
                   
               </table>
			</div>
             
                 
            </div>
           
        </div>
        
        
    </div>
	<!-- /Blood Donation List  -->
	
<div id="mapDonor">
	<div class="container" style="padding-top:50px;padding-bottom:50px;">
	<h3 class="tittle">Donors on Map!!!</h3>
	<div class="row">
<iframe style="overflow: hidden; height: 100%;width: 100%; position: absolute;" height="100%" width="100%" frameborder="0" src="http://ebloodbank.site11.com/admin/map.html" ></iframe>

	</div>
	</div>
</div>
	
	
	
  <?php } ?>
  <!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							 <script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider").responsiveSlides({
									auto: true,
									pager:false,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider4").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
<!--banner Slider starts Here-->
<!-- PopUp-Box-JavaScript -->
			<script src="js/jquery.chocolat.js"></script>
			<script type="text/javascript">
				$(function() {
					$('.filtr-item a').Chocolat();
				});
			</script>
		<!-- //PopUp-Box-JavaScript -->
		<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- Tabs-JavaScript -->
			<script src="js/jquery.filterizr.js"></script>
			<script src="js/controls.js"></script>
			<script type="text/javascript">
				$(function() {
					$('.filtr-container').filterizr();
				});
			</script>
		<!-- //Tabs-JavaScript -->

<script src="js/owl.carousel.js"></script> 
<link href="css/owl.theme.css" rel="stylesheet">
 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
	
	
}); 
</script>
<?php
if(isset($_POST['adddonar']))
{
	$rg_id=$_POST['rg_id'];
	$city=$_POST['city'];
	$mobile=$_POST['mobile'];
	$donate_date=$_POST['d_date'];
	$blood_group=$_POST['bg'];
	date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d H:i');
	
$sql = "INSERT INTO bloodbank (rg_id,donate_date,city,blood_group,date)
VALUES ('$rg_id', '$donate_date','$city','$blood_group','$date')";
if ($conn->query($sql) === TRUE) {
	?>
	<script>
	alert("Added Successfully");
	</script>

	<?php
	 header('Location: index.php'); 
	  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if(isset($_POST['addstock']))
{
	$stk_name=$_POST['stk_name'];
	$city=$_POST['stk_city'];
	$blood_group=$_POST['stk_bg'];
	$stk_unit=$_POST['stk_unit'];
	date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d H:i');
	
$sql = "SELECT count(*) as count FROM bloodbank where  blood_group='$blood_group'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			$bloodcount=$row["count"];
		}
	
}

$sql = "SELECT SUM(unit) as count FROM stock where bg='$blood_group'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			$stockcount=$row["count"];
		}
	
}
$stock=$bloodcount-$stockcount;


//$available=$stock-$stk_unit;
if($stock >=$stk_unit)
{
$sql = "INSERT INTO stock (name,city,unit,bg,date)
VALUES ('$stk_name', '$city','$stk_unit','$blood_group','$date')";
if ($conn->query($sql) === TRUE) {
	?>
	<script>
	alert("Added Successfully");
	window.location.href="index.php";
	</script>

	<?php
	// header('Location: index.php'); 
	  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}
else if($stock==0)
{
	?>
	
	<script>
	alert("Blood Shortage");
	</script>
<?php	
}
else
{
	?>
	
	<script>
	alert("Only <?=$stock?> Unit of <?=$blood_group?> Blood Available");
	</script>
<?php	
}
	

}


if(isset($_POST['addcamp']))
{
	$camp_info=$_POST['camp_info'];
	$venue=$_POST['venue'];
	$city=$_POST['camp_city'];
	$camp_date=$_POST['camp_date'];
	date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d H:i');
	$sql = "INSERT INTO camp (camp_info,venue,city,camp_date,date)
	VALUES ('$camp_info', '$venue','$city','$camp_date','$date')";
	$camp_msg ="Blood Donation Camp has been organized By E-BloodBank on $camp_date at $venue";
	if ($conn->query($sql) === TRUE) {
		$sql = "SELECT id, name, username,mobile,email FROM members where id!=2";
		$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			$mobile=$row["mobile"];
			$email=$row["email"];
			$name=$row["name"];
			$subject="Blood Donation Camp On $camp_date at $venue ";
			$txt="Dear, ".$name."  ".$camp_msg;
			
			$to = $email;
			$txt = $txt." \n\n Thanks & Regards,";
			$txt = $txt." \n\n E-Bloodbank,";
			$txt = $txt." \n\n http://ebloodbank.site11.com";
			$headers = "From: help@ebloodbank.com" . "\r\n";

			mail($to,$subject,$txt,$headers);
			sendsms($camp_msg,$mobile);
				?>
	<script>
	alert("Camp Added Successfully");
	</script>

	<?php
	 header('Location: index.php'); 
			}
			}
		
	}
}

if(isset($_POST['login']))
{
	
	$username=$_POST['lusername'];
	$password=$_POST['lpassword'];
	$sql = "SELECT id, name, username FROM members where username='$username' and password='$password' and username='admin'";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$_SESSION['name']=$row["name"];
		$_SESSION['username']=$row["username"];
		$_SESSION['id']=$row["id"];
		?>
	<script>
	alert("Login Successfully");
	</script>
	<?php
      header('Location: index.php'); 
    }
} else {
	?>
	<script>
	alert("Inavlid Username Or Password");
	</script>
	<?php
   
}

}






?>
<script src="js/main.js"></script>
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script>
<!-- / Ajax call -->       
        $("#login_btn").click(function(){
			 var username=$("#username").val();
			 var password=$("#password").val();
			 var login="login";
			 var formData = {username : username,password:password,login:login}
			    $.ajax({
                type: "POST",
                data:  formData,
				url:"ajax.php",
                success: function(data){
					if(data=="1")
					{
						window.location.href = "index.php";
					}
					else{
						$('#error_msg').html(data);
					}
						  
                }
                }); 
    });
<!-- / Ajax call -->       
        $("#startSearch").click(function(){
			 var bg=$("#bg").val();
			 var city=$("#srch_city").val();
			 
			 var formData = {bg : bg,city:city}
			    $.ajax({
                type: "POST",
                data:  formData,
				url:"ajax.php",
                success: function(data)
				{
				  $('#search_details').html(data);
                }
                }); 
    });
	
// send Sms to donar
	function sendusersms(id){
			 
			 var sendsms="sendsms";
			 var formData = {sendsms:sendsms,id:id}
			    $.ajax({
                type: "POST",
                data:  formData,
				url:"ajax.php",
                success: function(data)
				{
					
				  alert("SMS sent");
				  $('#txt_sms_'+id).html("sent");
                }
                }); 
    };
	
//accept numbers only
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}


</script>

</body>
</html>