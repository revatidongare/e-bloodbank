<?php
require_once('includes/config.php');
 if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql = "SELECT id, name, username FROM members where username='$username' and password='$password'";
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
if(isset($_POST['sendreply'])) 
  {
	  
	  $id=$_POST['id'];
	 			$sql = "UPDATE bloodbank SET reply='1' WHERE id=$id";

				if ($conn->query($sql) === TRUE) {
					echo "1";
				} else {
					echo "0" ;
				}
			
	
  }
  ?>