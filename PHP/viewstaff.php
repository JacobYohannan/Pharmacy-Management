<html>
<link rel="stylesheet" href="style33.css">

<body>
<h2 align="center" color="white">STAFF LIST</h2>
<div class="container">

<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
$sql ="select * from staff" ;
$result=mysqli_query($con,$sql) or die("couldn't connect to server");
echo "<table border='1'>";
echo "<tr>";
echo "<th> StaffId </th>";
echo "<th> Name </th>";
echo "<th> Place </th>";
echo "<th> Pincode </th>";
echo "<th> Mobile_No </th>";
echo "<th> Email </th>";
echo "<th> Password </th>";
echo "<th></th>";
echo "<th></th>";

echo "</tr>";
while ($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>",$row['Staffid'],"</td>";
    echo "<td>",$row['Name'],"</td>";
    echo "<td>",$row['Place'],"</td><td>",$row['Pincode'],"</td><td>",$row['Mobile_No'],"</td><td>",$row['Email'],"</td><td>",$row['Password'],"</td>";
    echo '<td><a href="editstaff.php?edit='.$row['Staffid'].'">Edit</a></td>';
    echo '<td><a href="? delete='.$row['Staffid'].'">Delete</a></td>';

    echo "</tr>";
}
    echo "</table>";




if(isset($_GET['delete']))
{
    $Staffid=$_GET['delete'];
    $query="delete from staff where Staffid= '$Staffid'";
    $r="delete from login where CID= '$Staffid'";
if($con->query($query) && $con->query($r))
    
   
{
    ?>
     <script>
            alert("Staff Removed Successfully");
              window.location="viewstaff.php";
     </script>
     <?php
     }
     else
     {
         ?>
          <script>
          alert("ERROR!!!!");
         window.location="viewstaff.php";
     </script>
     <?php
     }
 }

?>


     <input type="button"onclick="window.location.href = 'adminhome.html';" value="Back">
</div>

</body>
    </html>