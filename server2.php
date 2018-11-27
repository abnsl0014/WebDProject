<?php

  $db=mysqli_connect("localhost","root","","aa");
  // Check connection
  if (mysqli_connect_errno($db))
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if (isset($_POST['email'])) {
  $eemail=$_POST["email"];
}
if (isset($_POST['password'])) {
  $ppassword=$_POST["password"];
}

  if(isset($_POST['submitt'])){

  $q1=mysqli_query($db,"SELECT * FROM blue WHERE email='$eemail' and password='$ppassword'");
   if(!$q1){
   	echo "not ok";
   }
   echo "<b>Your details are here<b></br></br>";
while ($row= mysqli_fetch_array($q1))
{
	echo "First Name".":-".$row["fname"]."</br>"."Last Name".":-".$row["lname"]."</br>"."Address".":- ".$row["address"]."</br>"."Gender".":- ".$row["gender"]."</br>"."phone no".":- ".$row["pn"]."</br>"."Rooms".":- ".$row["rooms"]."</br>"." "."Services".":- ".$row["services"];
 echo "<br>";
}
}
 ?>