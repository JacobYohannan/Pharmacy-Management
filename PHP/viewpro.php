<html>

<link rel="stylesheet" href="style33.css">
<h2 align="center" color="white">PRODUCT LIST</h2>

<body>
<div class="container">

<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
$sql ="select * from product" ;
$result=mysqli_query($con,$sql) or die("couldn't connect to server");
echo "<table border='1'>";
echo "<tr>";


echo "<th> PCODE </th>";
echo "<th> PRODUCT </th>";

echo "<th> BRANCH </th>";
echo "<th> PHARMACEUTICALS </th>";

echo "<th> BASIC UNIT </th>";

echo "<th> RackNo </th>";
echo "<th> EXPDATE </th>";
echo "<th> MRP </th>";

echo "<th> RATE </th>";

echo "<th></th>";
echo "<th></th>";

echo "</tr>";
while ($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>",$row['PCODE'],"</td>";
    echo "<td>",$row['PROD'],"</td>";

    echo "<td>",$row['BRANCH'],"</td>";
    echo "<td>",$row['PHARMA'],"</td>";

    echo "<td>",$row['BASICUNIT'],"</td>";
    echo "<td>",$row['RACKNO'],"</td>";

    echo "<td>",$row['EXPDATE'],"</td>";
    echo "<td>",$row['MRP'],"</td>";
    echo "<td>",$row['RATE'],"</td>";
    echo '<td><a href="editspro.php?edit='.$row['PCODE'].'">Edit</a></td>';
    echo '<td><a href="?delete='.$row['PCODE'].'">Delete</a></td>';

    echo "</tr>";

}
echo "</table>";

if(isset($_GET['delete']))
{
    $Productid=$_GET['delete'];
    
    $P="delete from product where PCODE= '$Productid'";
    $q="delete from stock where PCODE= '$Productid'";
    if($con->query($P)==TRUE && $con->query($q)==TRUE)

    {

        ?>
        <script> alert("Product Removed ");
                      window.location="viewpro.php";

         </script>
         <?php
         
    }
      else
      {
        ?>
        <script> alert("ERROR!!!!");
        window.location="viewpro.php";

         </script>
         <?php
          
      }
      }
 
    mysqli_close($con);

?>
<input type="button"onclick="window.location.href = 'adminhome.html';"  value="BACK">

</div>
</body>
    </html>

