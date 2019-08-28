<?php include("includes/config.php");
if(isset($_GET['c']))
{
	session_destroy();
	header("location:index.php");
	
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
				        <div id="sidebar"> 
						     <h4 class="menu">Menu</h4>
						          <ul>
							        <!--<li><a class="scroll" href="#about">Facts About Blood</a></li>
							        <!--<li><a class="scroll" href="#service">Our Services</a></li>
									  <!-- <li><a href="#">More <i class="glyphicon glyphicon-triangle-bottom"> </i> </a>
										  <ul>
											 
											  <li><a href="icons.html"><span>Font Icons</span></a></li>

										 </ul>
									  </li>-->
                                  <!--  <li><a class="scroll" href="#searchDonor">Search donor</a></li>-->
								<?php if (isset($_SESSION['name'])){?>  
								<li><a class="scroll" href="#listDonor">List My Donationss</a></li> 
								<li><a class="scroll" href="#listcamp">Camp List</a></li> 
								<li><a class="scroll" href="#sendresponse">Send Response</a></li> 
								
								<?php } ?>
									<li><a class="scroll" href="#projects">Our Team</a></li>
									<li><a class="scroll" href="#port">Facts Of Blood </a></li>
									<li><a class="scroll" href="#contact">Contact Us</a><li>
						   </ul>
						   <div id="sidebar-btn">
							   <span></span>
							   <span></span>
							   <span></span>
						   </div>
					   </div>

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
					     <div class="tag one"><a href="#" data-toggle="modal" data-target="#myModal12"><font color="#00000"><span class="glyphicon glyphicon-log-in"></span><strong> Sign Up</a></strong></font></div> <?php } ?>
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
									<form action="index.php" method="post">
									         <input type="text" id="username" class="user" name="lusername" placeholder="Username" value="" required="">
											 <input type="password" id="password" name="lpassword" placeholder="Password" required=""> 
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
	<!--/signup -->
			<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login-bottom">
									<h3>Sign Up</h3>
<form action="index.php" method="post">
<input type="text" name="name" placeholder="Full Name" required=""> 
<input type="text" name="username" placeholder="Username" required=""> 
<input type="password" name="password" placeholder="Password" required=""> 
<input type="password" name="cpwd" placeholder="Confirm Password" required=""> 
<input type="text" name="city" placeholder="City" required=""> 
 <input type="text" name="add" placeholder="Your Address" required="">
<input type="email" name="email" placeholder="Your Email" required=""> 
<input type="tel" name="mobile" id="mobile" placeholder="Mobile" required="" onkeypress="return isNumberKey(event)" maxlength="10"> 
Birth Date: <input type="date" name="dob" placeholder="Birthdate" required=""><br/><br/>
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
 <select name="gender">
    <option value="" disabled selected> Gender</option>
    <option value="M">Male</option>
    <option value="F">Female</option>
    <option value="O">Others</option>
  </select>
 
  
<div class="clearfix"></div>
<input type="submit" name="register" value="Sign Up">
</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signup -->
		<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img">
							<img src="images/1.jpg" class="img-responsive" alt="Homey Designs">
						</div>
						<div class="slider-info">
							 <h3 class="logo"><a href="index.html"><span> </span></a></h3>
							<h4></h4>
							<div class="search">
								<form action="#" method="post">
									<!--<input name="search" type="search" placeholder="Search..." required="">
									<input type="submit" value=" ">-->
								</form>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/2.jpg" class="img-responsive" alt="Homey Designs">
						</div>
						<div class="slider-info">
						  <h3 class="logo"><a href="index.html"><span></span></a></h3>
							<h4> </h4>
							<div class="search">
								<form action="#" method="post">
								<!--	<input name="search" type="search" placeholder="Search..." required="">
									<input type="submit" value=" ">-->
								</form>
							</div>
						   
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/3.jpg" class="img-responsive" alt="Homey Designs">
						</div>
						<div class="slider-info">
							 <h3 class="logo"><a href="index.html">  <span> </span></a></h3>
							<h4> </h4>
							<div class="search">
								<form action="#" method="post">
								<!--	<input name="search" type="search" placeholder="Search..." required="">
									<input type="submit" value=" ">-->
								</form>
							</div>
						   
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/4.jpg" class="img-responsive" alt="Homey Designs">
						</div>
						<div class="slider-info">
							 <h3 class="logo"><a href="index.html"> <span></span></a></h3>
							<h4>  </h4>
							
							<div class="search">
								<form action="#" method="post">
								<!--	<input name="Search" type="search" placeholder="Search..." required="">
									<input type="submit" value=" ">-->
								</form>
							</div>
						   
						</div>
					</li>
					
						<li>
						<div class="slider-img">
							<img src="images/5.jpg" class="img-responsive" alt="Homey Designs">
						</div>
						<div class="slider-info">
							 <h3 class="logo"><a href="index.html"> <span></span></a></h3>
							<h4>  </h4>
							
							<div class="search">
								<form action="#" method="post">
								<!--	<input name="Search" type="search" placeholder="Search..." required="">
									<input type="submit" value=" ">-->
								</form>
							</div>
						   
						</div>
					</li>

				</ul>
				
			</div>
			<div class="clearfix"></div>
		</div>
		<!--//Slider-->
	</div>

<?php if (isset($_SESSION['name'])){?>  		  
		  <!-- list donar -->
	    <div id="listDonor">
        <div class="container" style="padding-top:50px;padding-bottom:50px;">
            <h3 class="tittle">My Blood Donation List </h3>
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
			$user_id=$_SESSION['id'];
				$sql = "SELECT members.id,members.rg_id,bloodbank.blood_group,donate_date,bloodbank.city,mobile,name,username FROM members,bloodbank where bloodbank.rg_id=members.id and members.id=$user_id order by bloodbank.donate_date DESC ";
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
					$donate_date=$row["donate_date"];
				?>
				 <tr>
					
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
	<!-- /List Donar -->
	<!-- Response -->
	<div id="sendresponse">
<div class="container" style="padding-top:50px;padding-bottom:50px;">
	<h3 class="tittle">Send Response!!!</h3>
	<div class="row">			

			
				<div style="overflow-x:auto;">
				<table>
			 <tr>
				<th>Reg no.</th>
				<th>Name</th>
				<th>City</th>
				<th>Blood Group</th>
				<th>Mobile No.</th>
			  <th>Donation Date</th>
			  <th>Send Response</th>
			    
			</tr>
				

				<?php
				$user_id=$_SESSION['id'];
				date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d');
					
	$sql = "SELECT bloodbank.id,members.rg_id,bloodbank.blood_group,donate_date,reply,bloodbank.city,bloodbank.sms,mobile,name,username FROM members,bloodbank where 
	bloodbank.rg_id=members.id and members.id='$user_id' and sms='1' and DATEDIFF('$date',donate_date)>=90 order by bloodbank.donate_date DESC ";
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
					$donate_date=$row["donate_date"];
					$sms=$row["sms"];
					$reply=$row["reply"];
				?>
				
				 <tr>
					
				<td> <?=$rg_id?></td>
				<td> <?=$name?></td>
				<td> <?=$city?></td>
						
				<td> <?=$blood_group?></td> 
				<td> <?=$mobile?></td>
				<td><?=$donate_date?></td>
				<td><span id="txt_sms_<?=$id?>"><?php if($reply=="1"){ echo "sent";}else { ?><a  onclick='senduserreply(<?=$id?>)' class="pointer" style="cursor:pointer;">send</a> <?php } ?><span></td>
				
					
					</tr>
				
				<?php
				}
			}?>
			
			</table>
			</div>
            </div>
       </div>
 
    </div>
	
	<!-- /Response -->
	
	
	<!-- camp List -->
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
	<?php } ?>	
<!-- differencials -->

	<!-- facts -->
      <div class="portfolio" id="port">
		       <div class="port-head">
							<h3 class="tittle">Facts about blood</h3>
						</div>
            <ul class="simplefilter">
                <li class="active" data-filter="all">All</li>
		        <li data-filter="1">Blood Donation Process</li>
                <li data-filter="2">Blood Donor Facts </li>
                <li data-filter="3">Blood Donation Benefits</li>
             
            </ul>
     
            <div class="filtr-container">
                <div class="  filtr-item gallery-t" data-category="1" data-sort="Luminous night">
				
                <a href="croped1.png" rel="title" class="b-link-stripe b-animate-go  thickbox">
	
					<figure>
					 <img src="images/croped1.png" class="img-responsive" alt=" " />	<figcaption>
							<h3>Lifeshare</h3>
							
						</figcaption>
					</figure>
				</a>
				</div>
			   <div class=" filtr-item" data-category="1" data-sort="Luminous night">
                   <a href="croped2.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/croped2.png" class="img-responsive" alt=" " />	<figcaption>
							<h3>Lifeshare</h3>
							
						</figcaption>
					</figure>
				</a>

                </div>
				 <div class=" filtr-item" data-category="2" data-sort="Luminous night">
                   <a href="croped3.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/croped3.png" class="img-responsive" alt=" " />	<figcaption>
							<h3>Lifeshare</h3>
							
						</figcaption>
					</figure>
				</a>

                </div>
				 <div class=" filtr-item" data-category="3" data-sort="Luminous night">
                   <a href="croped5.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/croped5.png" class="img-responsive" alt=" " />	<figcaption>
							<h3>Lifeshare</h3>
							
				
						</figcaption>
					</figure>
				</a>

                </div>
				 <div class=" filtr-item" data-category="2" data-sort="Luminous night">
                   <a href="croped4.png" rel="title" class="b-link-stripe b-animate-go  thickbox">

					<figure>
					 <img src="images/croped4.png" class="img-responsive" alt=" " />	<figcaption>
							<h3>Lifeshare</h3>
							
						</figcaption>
					</figure>
				</a>

                </div>
				<div class="clearfix"> </div>
         </div>

</div>

	<!-- facts-->
<!--camps details-->
<!-- <div class="client-agile-info" id="client">
        <div class="container">
		 <div class="client-top">
		  <h3 class="tittle two">Camps Information</h3>
		    <div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider4">
							<li>
								 <div class="agileits-clients">
									
											<img src="images/poster 2.jpg" alt=""> 
									
									<img src="images/poster1.jpg" alt="">
										 
									
									<div class="clearfix"></div>
								</div>
							</li>
							
							<li>
							<div class="agileits-clients">
							
										<img src="images/poster3.jpg" alt="">
									
										<img src="images/poster4.jpg" alt="">
								
								
								</div>
								<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
						


				</div>
	</div> -->

<!-- camp details -->

<!-- our team -->
<div class="projects" id="projects">
		<div class="container">
			<div class="port-head">
				<h3 class="tittle">Our Team</h3>
				
			</div>
		</div>
		<div class="projects-grids">
				<div class="sreen-gallery-cursual">

			<div id="owl-demo" class="owl-carousel owl-theme">
			<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/reva.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
									<h4>Revati Dongare</h4>
								<p>BEIT</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/damu.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
									<h4>Prachiti Tamboli</h4>
								<p>BEIT</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/praju.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
									<h4>Prajakta Sawant</h4>
								<p>BEIT</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="images/poo.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
								<h4>Poonam Powar</h4>
								<p>BEIT</p>
							</div>
						</div>	
					</div>
					</div>
		</div>
	</div>
	</div>
	<!-- //projects -->

<!-- /contact -->
   <div class="contact-main-agile-info" id="contact">
        <div class="container">
		   <h3 class="tittle">Contact Us</h3>
		  <div class="contact-top-agileits">
               <div class="col-md-4 contact-grid ">
					<div class="contact-grid1 agileits-w3layouts">
						<i class="fa fa-location-arrow"></i>
						<div class="con-w3l-info">
						   <h4>Address </h4>
						  <p><span>Pad. Dr. D. Y. Patil Vidyapeeth, Nerul</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid2 w3">
						<i class="fa fa-volume-control-phone"></i>
						<div class="con-w3l-info">
						  <h4>Call Us</h4>
						   <p>9768552741<span><br>+9768552741</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid3 w3l">
						<i class="fa fa-envelope"></i>
						<div class="con-w3l-info">
						  <h4>Email</h4>
						  <p><a href="mailto:ebloodbank@gmail.com">ebloodbank1@gmail.com</a>
						  <span><a href="mailto:revatid15@gmail.com">revatid15@gmail.com</a></span></p>
						  </div>
						  <div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div>
			<div class="clearfix"></div>
			<div class="map-grids">
					    <h2>Send Us a Message Now</h2>
						<form action="#" method="post">
						<p>Your Name</p>
						<input type="text" name="Your Name" placeholder="" required=" ">
						<p>Your Email</p>
						<input type="email" name="Your Email" placeholder="" required=" ">
						<p>Your Message</p>
						<textarea name="Your Message" placeholder="" required=""></textarea>
						<input type="submit" value="SUBMIT">
						
					</form>
					
				</div>
		  </div>

   <!-- map -->
		<div class="map agileits">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.416579269225!2d73.0221829144674!3d19.04541338710548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3e74bd776a5%3A0x52553a65b88386d8!2sD+Y+Patil+University!5e0!3m2!1sen!2sin!4v1488992381585" 	width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
				</div>
		<!-- //map -->
  </div>

    <!-- <div id="searchDonor">
        <div class="container" style="padding-top:50px;padding-bottom:50px;">
            <h3 class="tittle">Search Donor!!!</h3>
            <div class="row">
                    <div class="col-xs-12 col-md-6" >
                        <div class="form-group">
                          <label for="sel1">Select criteria to search:</label>
                          <select class="form-control" id="searchCriteria">
                            <option value="BLOOD_GROUP">Blood group</option>
                            <option value="Name">Name</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <div class="input-group">
                          <input type="text" class="form-control" id="searchVal" placeholder="Enter text...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" id="startSearch" type="button">Go!</button>
                          </span>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <table class="table">
                        <thead>
                            <th>First name</th>
                            <th>Middle name</th>
                            <th>Last name</th>
                            
                        </thead>
                        <tbody id="searchResult">
                            <tr>
                                <td colspan="3">No data found</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
        
        
    </div> -->
  <!-- Footer -->
	<div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
			
				<div class="col-md-4 footer-info-grid address">
					<h4>ADDRESS</h4>
					<address>
						<ul>
							<li>Sector 7, Phase I</li>
							<li>Pad. Dr. D. Y. Patil Vidyapeeth,</li>
							<li>Nerul, Navi Mumbai, Maharashtra 400706</li>
							<li>Telephone : +91 9768552741</li>
							<li>Email : <a class="mail" href="mailto:ebloodbank1@gmail.com">ebloodbank1@gmail.com</a></li>
						</ul>
					</address>
				</div>
					<div class="col-md-4 footer-info-grid links">
					<h4>QUICK LINKS</h4>
					<ul>
						       <li><a class="scroll" href="#">Home</a></li> 
								<li><a class="scroll" href="#port">Facts About Blood</a></li> 
								<li><a class="scroll" href="#projects">Our Team</a></li> 
								
								<li><a class="scroll" href="#contact">Contact</a></li> 
					</ul>
				</div>
				<div class="col-md-4 footer-grid newsletter connect-social">
				   <h4>Get in Touch</h4>
					   <section class="social">
							<ul>
								<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>

								<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>

								
							</ul>
						</section>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required=" ">
						<input type="submit" class="submit" value="">
					</form>
					<div class="clearfix"> </div>
				</div>
			
				<div class="clearfix"></div>
			</div>

			<div class="copyright-wthree">
				<p>&copy; 2016 Sharelife. All Rights Reserved </a></p>
			</div>

		</div>
	</div>
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
if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$city=$_POST['city'];
	$add=$_POST['add'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$dob=$_POST['dob'];
	$bg=$_POST['bg'];
	$gender=$_POST['gender'];
	date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d H:i');
	
	//calc age
	$date1=date('Y-m-d');
			$date1 =date_create($date1);
			$date2 =date_create($dob);
			$diff=date_diff($date1,$date2);
			$age=$diff->y;
	
	$sql = "SELECT username from members where username='$username' ";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) 
			{
				?>
				<script>
				alert("Username already exist");
				</script>
				<?php
			}
			elseif($age<18)
			{
			
			?>
				<script>
				alert("You can not register with us ,Your are less than 18 years old");
				</script>
				<?php
				
			}
			else
			{
				$sql = "INSERT INTO members (username, name, password,address,city,dob,gender,blood_group,date,email,mobile)
				VALUES ('$username', '$name', '$password','$add','$city','$dob','$gender','$bg','$date','$email','$mobile')";
				if ($conn->query($sql) === TRUE) {
					$last_id = $conn->insert_id;
					$rg_id="BD-".$last_id;
					$sql = "UPDATE members SET rg_id='$rg_id' WHERE id='$last_id'";
				if ($conn->query($sql) === TRUE) {
					
					$to = $email;
					$txt = "Thank You for Registering with us \n\n";
					$txt = $txt."Your Registration Id is $rg_id  \n\n";
					$txt = $txt."Your Username:$username \n\n";
					$txt = $txt." \t Password:$password \n\n";
					$txt = $txt." \n\n Thanks & Regards,";
					$txt = $txt." \n\n E-Bloodbank,";
					$txt = $txt." \n\n http://ebloodbank.site11.com";
					$subject = "Registation with E-Bloodbank";
					$headers = "From: help@ebloodbank.com" . "\r\n";

					mail($to,$subject,$txt,$headers);
					?>
				<script>
				alert("You are Registered Successfully. Your  Registration Id is :<?=$rg_id?>");
				</script>

				<?php
					}
		
				   } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
					}

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

	
// send Sms to donar
	function senduserreply(id){
			 
			 var sendreply="sendreply";
			 var formData = {sendreply:sendreply,id:id}
			    $.ajax({
                type: "POST",
                data:  formData,
				url:"ajax.php",
                success: function(data)
				{
					
				  alert("Response sent");
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