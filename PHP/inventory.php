<html>

<link rel="stylesheet" href="style33.css">
<h2 align="center" color="white">PRODUCT LIST</h2>

<body>
<div class="container">

<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
$sql ="select * from product, stock where product.pcode=stock.pcode" ;
$result=mysqli_query($con,$sql) or die("couldn't connect to server");


echo "<table border='1'>";
echo "<tr>";
echo "<th> PCODE </th>";
echo "<th> PRODUCT </th>";

echo "<th> BRANCH </th>";
echo "<th> BASIC UNIT </th>";

echo "<th> RackNo </th>";
echo "<th> EXPDATE </th>";
echo "<th> MRP </th>";

echo "<th> RATE </th>";
echo "<th> STOCK </th>";
echo "</tr>";
while ($row=mysqli_fetch_array($result))
{
  
    echo "<tr>";
    echo "<td>",$row['PCODE'],"</td>";
    echo "<td>",$row['PROD'],"</td>";

    echo "<td>",$row['BRANCH'],"</td>";
    echo "<td>",$row['BASICUNIT'],"</td>";
    echo "<td>",$row['RACKNO'],"</td>";

    echo "<td>",$row['EXPDATE'],"</td>";
    echo "<td>",$row['MRP'],"</td>";
    echo "<td>",$row['RATE'],"</td>";
    




   

    echo "<td>",$row['QUANTITY'],"</td>";
    

    echo "</tr>";
}


echo "</table>";
?>

<input type="button"onclick="window.location.href = 'adminhome.html';"  value="Back">
</div>

</body>
</html>