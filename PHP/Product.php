<?php		     
include('AdminHeader.php'); 	
?>
 
<html>
    <head>
   
            <link rel="stylesheet" href="style22.css">

</head>
<style>
    </style>
<body>

                           	
                 		  <h2>NEW PRODUCT</h2>
                 		  
                                 <div>
                             
                                 <form method="post">
       <input type="text" id="textbox" name="pcode" placeholder="PID" required><br>
            <input type="text" id="textbox"  name="prod"placeholder="PRODUCT" required><br>
        
            <br>
            <SELECT NAME="branch" required>
                <OPTION style="text-align: center" VALUE="" disabled SELECTED HIDDEN>BRANCH</OPTION>
                <OPTION>TABLETS</OPTION>
                <OPTION>ANTIBIOTICS</OPTION>
                <OPTION>CAPSULES</OPTION>
                <OPTION>SYRUPS</OPTION>
            </select><br><br>
            <input type="text" id="textbox" name="pharma" placeholder="PHARMACEUTICALS" required><br>

            <input type="date" format="sdf" id="textbox" name="expdate" placeholder="EXPDATE" required>
           
                 

            <br>
            <SELECT NAME="basicunit" required>
                <OPTION VALUE="" disabled SELECTED HIDDEN>BASIC UNIT</OPTION>
                <OPTION>NO</OPTION>
                <OPTION>DOS</OPTION>
                 </select><br>
          <input type="text" id="textbox" name="rackno" placeholder="RACK NO" required><br>

            <input type="text" id="textbox" name="mrp"placeholder="MRP" required><br>
            <input type="text"id="textbox"  name="rate"placeholder="RATE" required><br>
            <input type="submit"class="btn" name="submit"style="color: white" required>
        
    <input type="reset" value="RESET">
     <input type="button"onclick="window.location.href = 'adminhome.html';" value="Back">

</div>
</form>
<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");

if(isset($_POST['submit']))
{
    // echo "inside";
    $PRODUCT=$_POST['prod'];
    $PCODE=$_POST['pcode'];
    $BRANCH=$_POST['branch'];
    $PHARMA=$_POST['pharma'];
    $BASICUNIT=$_POST['basicunit'];
    $RACKNO=$_POST['rackno'];
    $EXPDATE=$_POST['expdate'];
    $MRP=$_POST['mrp'];
    $RATE=$_POST['rate'];
    $P="insert into product(PCODE,PROD,BRANCH,PHARMA,BASICUNIT,RACKNO,EXPDATE,MRP,RATE)values('$PCODE','$PRODUCT','$BRANCH','$PHARMA','$BASICUNIT','$RACKNO','$EXPDATE','$MRP','$RATE')";
    $q="insert into stock(PCODE,PID,PRODUCT,QUANTITY)values('$PCODE',(select MAX(PID)from PRODUCT),'$PRODUCT','0')";
    if($con->query($P)==TRUE && $con->query($q)==TRUE)


    {
   ?>
    <script>
           alert("PRODUCT ADDED SUCCESSFULLY");
             window.location="Stockup.php";
    </script>
    <?php
    }
    else
    {
        ?>
         <script>
         alert(" PLEASE FILL ALL THE DETAILS");
        window.location="Product.php";
    </script>
    <?php
    }
}
?>