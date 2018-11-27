<!DOCTYPE html>
<?php include('server2.php');
?>
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
<h2><center>LOGIN</center></h2>
</div>
<marquee><p>************Please fill all the entries below************</p></marquee>
<?php

$emailErr =  $pwErr="";



  
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
<form method="post" action="server2.php"  >

E-mail ID:<input type="text" name="email">
<span class="error"> *<?php echo $emailErr;?></span>
<br><br>
Password:<input type="password" name="password">
<span class="error"> *<?php echo $pwErr;?></span>
<br><br>

<input type="submit" name="submitt" value="login"><hr>
<p>
  Not yet a member?<a href="oldhome.php">Register</a>
</p>
</form>
</div>
</center>
</body>
</html>