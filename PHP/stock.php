<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
if(isset($_POST['submit'])){
  
$Pid =$_POST["pid"];

$Quantity = $_POST["stock"];
$query = "select * from product where Productid='".$Pid."'";
$row = mysqli_query($con,$query);
if(mysqli_num_rows($row) > 0)
{
  $sql="UPDATE product SET stock = stock +  '".$Quantity."'  WHERE Productid  ='".$Pid."'";
  mysqli_query($con,$sql);
?>
<script>alert("Record added successfully")</script>
<?php
}

else  
{
  ?>
  <script> alert("Error") </script>
  <?php
  }
 
}
mysqli_close($con);

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style22.css">


<body bgcolor="#00C07F">

<h2 align="center">Stock Updation</h2>

<div>
<form method="post">



    
<input type="text" id="pro" name="pid" placeholder="Product Id" ><br/>


         
    <input type="text" id="pro" name="stock" placeholder="Stock"><br/>
    

 
<input type="submit" value="submit" name="submit">

    <input type="reset" value="RESET">
     <input type="button"onclick="window.location.href = 'adminhome.html';" value="BACK">
   
   
    
 
</form>
   

  
    

</div>

</body>
</html>
