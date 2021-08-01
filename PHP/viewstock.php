<html>
<link rel="stylesheet" href="css/style1.css">


<body>
    <div class="container">
<?php

$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
$sql ="select * from stock " ;
$result=mysqli_query($con,$sql) or die("couldn't connect to server");
echo "<table border='1'>";
echo "<tr>";
echo "<th> Productid </th>";

echo "<th> Supplier </th>";

echo "<th> Quantity </th>";
echo "<th> Mrp </th>";
echo "<th> EXPDATE </th>";
echo "<th>";
echo "</th>";

echo "</tr>";
while ($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>",$row['Productid'],"</td>";
  

    echo "<td>",$row['Supplier'],"</td>";

    echo "<td>",$row['Quantity'],"</td>";
    echo "<td>",$row['MRP'],"</td>";
    echo "<td>",$row['EXPDATE'],"</td>";
    echo '<td><a href="editstock.php?edit='.$row['Productid'].'">Edit</a></td>';
    echo '<td><a href="? delete='.$row['Productid'].'">Delete</a></td>';


    echo "</tr>";

}echo "</table>";

if(isset($_GET['delete']))
{
    $Productid=$_GET['delete'];
    $query="delete from stock where Productid= '$Productid'";

    if($result=mysqli_query($con,$query))
    {
        header("location:viewstock.php");
    }
        else 
        {
            echo "couldn't connect";
        }
    

    }
    mysqli_close($con);

?>
<input type="button"onclick="window.location.href = 'stockmgmnt.html';"  value="Back">
<input type="button"onclick="window.location.href = 'adminhome.html';"  value="Main Menu">
</body>
</html>