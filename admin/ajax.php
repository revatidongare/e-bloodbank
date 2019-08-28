<?php
require_once('../includes/config.php');
 include("way2sms.php");
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
  if(isset($_POST['bg'])) 
  {
    $bg=$_POST['bg'];
    $city=$_POST['city'];date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d');
	$sql = "SELECT bloodbank.id,members.rg_id,bloodbank.blood_group,donate_date,reply,bloodbank.city,bloodbank.sms,mobile,name,username FROM members,bloodbank where 
	bloodbank.rg_id=members.id and members.id!=2 and bloodbank.blood_group='$bg' and bloodbank.city='$city' and DATEDIFF('$date',donate_date)>=90 order by bloodbank.donate_date DESC ";
if($bg=="" &&  $city!="")
{
	$sql = "SELECT bloodbank.id,members.rg_id,bloodbank.blood_group,donate_date,reply,bloodbank.city,bloodbank.sms,mobile,name,username 
	FROM members,bloodbank where bloodbank.rg_id=members.id and members.id!=2 and bloodbank.city='$city' and DATEDIFF('$date',donate_date)>=90 order by bloodbank.donate_date DESC ";
}
if($bg!="" &&  $city=="")
{
	$sql = "SELECT bloodbank.id,members.rg_id,bloodbank.blood_group,donate_date,reply,bloodbank.city,bloodbank.sms,mobile,name,username 
	FROM members,bloodbank where bloodbank.rg_id=members.id and members.id!=2 and bloodbank.blood_group='$bg' and DATEDIFF('$date',donate_date)>=90 order by bloodbank.donate_date DESC ";
}
if($bg=="" &&  $city==""){
	$sql = "SELECT bloodbank.id,members.rg_id,bloodbank.blood_group,donate_date,reply,bloodbank.city,bloodbank.sms,mobile,name,username	
	FROM members,bloodbank where bloodbank.rg_id=members.id and members.id!=2 and DATEDIFF('$date',donate_date)>=90 order by bloodbank.donate_date DESC ";
}
	
	$result = $conn->query($sql);
				?>
				<div style="overflow-x:auto;">
				<table>
			 <tr>
				<th>Reg no.</th>
				<th>Name</th>
				<th>City</th>
				<th>Blood Group</th>
				<th>Mobile No.</th>
			  <th>Donation Date</th>
			  <th>Send SMS</th>
			  <th>Response</th>
    
			</tr>
				

				<?php

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
				<td><span id="txt_sms_<?=$id?>"><?php if($sms=="1"){ echo "sent";}else { ?><a  onclick='sendusersms(<?=$id?>)' class="pointer" style="cursor:pointer;">send</a> <?php } ?><span></td>
				<td><?php if($reply=="1"){ echo "Yes";}else { echo "NO"; ?><a  onclick='sendusersms(<?=$id?>)' class="pointer" style="cursor:pointer;">send SMS</a> <?php } ?><span></td>
					
					</tr>
				
				<?php
				}
			}
			else
			{
				echo "<tr><td>No Record Found</td></tr>";
			}
			
			echo "</table>";
			
	
  }
   if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql = "SELECT id, name, username FROM members where username='$username' and password='$password' and id=2 ";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$_SESSION['name']=$row["name"];
		$_SESSION['username']=$row["username"];
		$_SESSION['id']=$row["id"];
	    }
	echo "1";
} else {


	echo "Inavlid Username Or Password";
	
   
}

}

if(isset($_POST['sendsms'])) 
  {
	  
	  $id=$_POST['id'];
	  $sql = "SELECT  name, username,email,mobile FROM members ,bloodbank  where bloodbank.id= $id  and members.id=bloodbank.rg_id";
	  $result = $conn->query($sql);
	  $msg="E-BloodBank has urgent requirement of blood , Please send your response as soon as possible. Thanks";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$email=$row["email"];
			$mobile=$row["mobile"];
			sendsms($msg,$mobile);
			
			$sql = "UPDATE bloodbank SET sms='1' WHERE id=$id";

				if ($conn->query($sql) === TRUE) {
					echo "1";
				} else {
					echo "0" ;
				}
			
		}
	}
  }
  ?>