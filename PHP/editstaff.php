<?php

$Staffid=$_GET['edit'];

$con = mysqli_connect("localhost","root","","medicalshop") or die("error");

$query="select * from staff where   Staffid='$Staffid'";
 $result=mysqli_query($con,$query);
 $row=mysqli_fetch_array($result);
 if(isset($_POST['submit']))
 {
    
    $Name = $_POST['Name'];
    $Address = $_POST['Place'];
    $Pincode = $_POST['Pincode'];
    $Mobile_No = $_POST['Mobile_No'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
 	$query1="update staff set Name='$Name',Place='$Address',Pincode='$Pincode',Mobile_No='$Mobile_No',Email='$Email',Password='$Password' where Staffid='$Staffid' ";
 	if(mysqli_query($con,$query1))
 	
{

	?>
	<script> alert("Updated Successfully");
	              window.location="viewstaff.php";

	 </script>
	 <?php
	 
   }
  else
  {
	?>
	<script> alert("Invalid Input !!!!!"); 

	</script>
	 <?php
	  
  }
  }
mysqli_close($con);
?>

<html>
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
    <body><link rel="stylesheet" href="style22.css">

	
		<h3> Edit Staff</h3>
		<br><br>
		<div>
		<form  method="POST" class= "edit">
			Name:<input type="text" name="Name" required value="<?php echo $row['Name']; ?>"><br>
			
            Place:<input type="text" name="Place" value="<?php echo $row['Place']; ?>"><br>
            Pincode:<input type="text" name="Pincode" value="<?php echo $row['Pincode']; ?>" ><br>

            Mobile_No:<input type="text" name="Mobile_No" value="<?php echo $row['Mobile_No']; ?>" ><br>

            Email:<input type="email" name="Email" value="<?php echo $row['Email']; ?>" ><br>

            Password:<input type="password" name="Password" value="<?php echo $row['Password']; ?>" ><br>

            
        
            
			<input type="submit" name="submit" value="SAVE">
			<input type="button"onclick="window.location.href = 'adminhome.html';" value="BACK">

		</form>
</div>
</div>
</body>
</html>