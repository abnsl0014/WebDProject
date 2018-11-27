<?php

  $db=mysqli_connect("localhost","root","","aa");
  // Check connection
  if (mysqli_connect_errno($db))
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //$fname=$lname=$email=$comment=$gender=$address=$phoneno=$bdy=$rooms=$services=$password="";
  //$f=$_POST["firstname"];
  //echo $f;
  if (isset($_POST['firstname'])) {
   $fname=$_POST["firstname"];
}
if (isset($_POST['lastname'])) {
   $lname=$_POST["lastname"];
}
if (isset($_POST['email'])) {
   $email=$_POST["email"];
}
if (isset($_POST['comment'])) {
   $comment=$_POST["comment"];
}
if (isset($_POST['gender'])) {
   $gender=$_POST["gender"];
}
if (isset($_POST['address'])) {
   $address=$_POST["address"];
}
if (isset($_POST['phoneno'])) {
   $phoneno=$_POST["phoneno"];
}
if (isset($_POST['bday'])) {
   $bdy=$_POST["bday"];
}
if (isset($_POST['room'])) {
   $rooms=$_POST["room"];
}
if (isset($_POST['service'])) {
   $services=$_POST["service"];
}
if (isset($_POST['password'])) {
   $password=$_POST["password"];
}
  if(isset($_POST['submitt'])){
   //echo $f;
   
   //$sql="INSERT INTO users  VALUES ('$fname','$lname','$bdy','$phoneno','$email','$password','$address','$gender','$rooms','$services','$comment')";
  $q1=mysqli_query($db,"INSERT INTO blue VALUES ('$fname','$lname','$bdy','$phoneno','$email','$password','$address','$gender','$rooms','$services','$comment')");
   	if(!$q1){
   	echo "not ok";
   }
   echo "Hi ".$fname."!"."</br>";
   echo "You are successfully registered </br>";
   echo "You can login to see your filled details </br>";

   }
   

 ?>


  