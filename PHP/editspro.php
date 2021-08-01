<?php

$Productid=$_GET['edit'];

$con = mysqli_connect("localhost","root","","medicalshop") or die("error");

$query="select * from product where  PCODE ='$Productid'";
 $result=mysqli_query($con,$query);
 $row=mysqli_fetch_array($result);
 if(isset($_POST['submit']))
 {
    $PRODUCT=$_POST['PROD'];
    $PHARMA=$_POST['PHARMA'];
    $RACKNO=$_POST['RACKNO'];
    $EXPDATE=$_POST['EXPDATE'];
    $MRP=$_POST['MRP'];
    $RATE=$_POST['RATE'];
  $p ="update product set PROD='$PRODUCT',PHARMA='$PHARMA',EXPDATE='$EXPDATE',RACKNO='$RACKNO',MRP='$MRP',RATE='$RATE' where PCODE='$Productid'";
  $q="update stock set PRODUCT='$PRODUCT' where PCODE='$Productid'";
    if($con->query($p)==TRUE && $con->query($q)==TRUE)
  
{

  ?>
  <script> alert("Updated Successfully");
                        window.location="viewpro.php";

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
<html>
<link rel="stylesheet" href="style22.css">

    <body>
	
		<h3> Edit Product</h3>
		<br><br>
        <div>
		<form  method="POST" class= "edit">
        
           Product: <input type="text" name="PROD" value="<?php echo $row['PROD']; ?>"></br>
        
            
            Pharmaceuticals :<input type="text" name="PHARMA" value="<?php echo $row['PHARMA']; ?>" ></br>

            Expdate:<input type="date"  name="EXPDATE"  value="<?php echo $row['EXPDATE']; ?>"></br>
           
          Rackno:<input type="text"  name="RACKNO" value="<?php echo $row['RACKNO']; ?>"></br>

            MRP:<input type="text" name="MRP" value="<?php echo $row['MRP']; ?>"></br>
            RATE:<input type="text" name="RATE" value="<?php echo $row['RATE']; ?>"></br>
           

           
            
			<input type="submit" name="submit" value="Edit">
		</form>
</div>
</div>
</body>
</html>