<?php include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.error {color: #FF0000;}
.hdr{
  padding: 60px;
  text-align: left;
  background: url(hero.jpg);
  color: white;
  font-size: 25px;
}
</style>

</head>

<body>
<body TEXT="BLACK" >
  <div class="hdr" >
<h2><center>REGISTRATION</center></h2>
</div>
<marquee><p>************Please fill all the entries below************</p></marquee>
<?php

$fnameErr =$lnameErr= $emailErr = $genderErr = $addressErr =$bdayErr=$roomErr= $serviceErr="";
$fname=$lname=$email=$comment=$gender=$address=$phoneno=$bdy=$rooms=$services=$pwErr=$password=$passwordErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (($_POST["password"])!=($_POST["password2"])) {
    $passwordErr = "passwords unmatched";
  } else {
    $password= test_input($_POST["password"]);
  }

  if (empty($_POST["firstname"])) {
    $fnameErr = "First_Name is required";
  } else {
    $fname = test_input($_POST["firstname"]);
  }

if (empty($_POST["lastname"])) {
    $lnameErr = "Last_Name is required";
  } else {
    $lname = test_input($_POST["lastname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["password"])) {
    $pwErr = "password is required";
  } else {
    $password= test_input($_POST["password"]);
  }

if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

 if (empty($_POST["phoneno"])) {
    $phonenoErr = "phone required";
  } else {
    $phoneno = test_input($_POST["phoneno"]);
  }
    

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

if (empty($_POST["bday"])) {
    $bdayErr = "DOB is required";
  } else {
    $bdy = test_input($_POST["bday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
 if (empty($_POST["room"])) {
    $roomErr = "Room is required";
  } else {
    $rooms = test_input($_POST["room"]);
  }

if (empty($_POST["service"])) {
    $serviceErr = "Service is required";
  } else {
    $services = test_input($_POST["service"]);
  }
}


function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>


<p><span class="error">* required field</span></p>
<center >
<div >
<form method="post" action="server.php"  >

First Name:<input type="text" name="firstname">
<span class="error">*<?php echo $fnameErr;?></span>
<br><br>
Last Name:<input type="text" name="lastname">
<span class="error"> *<?php echo $lnameErr;?></span>
<br><br>
DOB:      <input type="date" name="bday">
<span class="error">*<?php echo $bdayErr;?></span>
<br><br>
Phone No.
<input type="text" name="phoneno" required>
<br><br>
E-mail ID:<input type="text" name="email">
<span class="error"> *<?php echo $emailErr;?></span>
<br><br>
Password:<input type="password" name="password">
<span class="error"> *<?php echo $pwErr;?></span>
<br><br>
Confirm Password:<input type="password" name="password2">
<span class="error"> *<?php echo $passwordErr;?></span>
<br><br>
Address:<input type="text" name="address">
<span class="error">* <?php echo $addressErr;?></span>
<br><br>
Gender:<br><input type="radio" name="gender" value="male">MALE<br>
<input type="radio" name="gender" value="female">FEMALE<br>
<input type="radio" name="gender" value="others">OTHERS
<span class="error">* <?php echo $genderErr;?></span>
<br><br>

Location:
<select name="loc">
<option value="gurugram">Gurugram</option>
<option value="noida">Noida</option>
</select>
<br><br>

Room Type:<br><input type="radio" name="room" value="Single">Single Sitter<br>
<input type="radio" name="room" value="double">Double Sitter<br>
<input type="radio" name="room" value="tripple">Tripple Sitter<br>
<span class="error"> *<?php echo $roomErr;?></span>
<br><br>


<p TEXT="GREY">This organization also provides some PAYABLE facilities</p><br>
Payable Services:<br>
<input type="checkbox" name="service" value="yoga">Yoga<br>
<input type="checkbox" name="service" value="ac">AC Room<br>
<input type="checkbox" name="service" value="newspaper">Newspaper


<br><br>
Comment:
<textarea name="comment" rows="6" col="30"></textarea><br><br>

<input type="submit" name="submitt" value="Submit"><hr>
<p>
  Already a member?<a href="login.php">Sign in</a>
</p>
</form>
</div>
</center>
</body>
</html>