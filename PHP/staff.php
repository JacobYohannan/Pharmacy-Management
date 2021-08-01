<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
if(isset($_POST['submit'])){
$Staffid = $_POST["Staffid"];
$Name = $_POST["Name"];
$Address = $_POST["Place"];
$Pincode = $_POST["Pincode"];
$Mobile_No = $_POST["Mobile_No"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$sql = "insert into staff(Staffid,Name,Place,Pincode,Mobile_No,Email,Password) values('$Staffid','$Name','$Address','$Pincode','$Mobile_No','$Email','$Password')";
$r="insert into login(CID,PASSWORD,TYPE,NAME)values('$Staffid','$Password','staff','$Name')";
if($con->query($sql) && $con->query($r)) 

{

  ?>
  <script> alert("Staff Registration Success");

   </script>
   <?php
   
 }
else
{
  ?>
  <script> alert("Invalid Input !!!!!"); </script>
   <?php
    
}
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style22.css">


<style>
input[type=password], select {
  width: 40%;
  padding: 12px 20px;
  margin: auto;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  text-align: center;

}
input[type=email], select {
  width: 40%;
  padding: 12px 20px;
  margin: auto;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  text-align: center;

}
</style>
<body>
<h2 align="center">New Staff Registration</h2>

<div>
 

 <form method="post">
    <input type="text" id="pro" name="Staffid" placeholder="Staffid"required><br/>
    
    <input type="text" id="pro" name="Name" placeholder="Name" required><br/>

    <input type="text" id="pro" name="Place" placeholder="Place" required><br/>
 <input type="text" id="pro" name="Pincode" placeholder="Pincode" required><br/>
 <input type="text" maxlengh="10" pattern="[0-9]{10}" id="pro" name="Mobile_No" placeholder="Mobile_No" required><br/>
 <input type="Email"  name="Email" placeholder="Email"  required><br/>
 <input type="password" id="password" name="Password" placeholder="Password" required><br/>

   
 <input type="submit"class="btn" value="Submit" name="submit"style="color: white">

    <input type="reset" value="RESET">
     <input type="button"onclick="window.location.href = 'adminhome.html';" value="Back">


</form>
    
 
</div>

</body>
</html>
