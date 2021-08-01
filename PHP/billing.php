
<html>

<link rel="stylesheet" href="css/stylee.css">

<link rel="stylesheet" href="css/style11.css">

<body bgcolor="#00c07f" >
<h1 align="center">Billing</h1>

<div><form method="post">

<input type="text" id="pro" name="DATE" placeholder="DATE"><br/>

<input type="text" id="pro" name="BillNo" placeholder="BillNo"><br/>

    <input type="text" id="pro" name="Productid" placeholder="Productid"><br/>
    
    <input type="text" id="pro" name="Quantity" placeholder="Quantity"><br/>

<input type="submit"class="btn" value="Submit" name="submit"style="color: white"><br>
    <input type="reset" value="RESET">
    <input type="button"onclick="window.location.href = 'adminhome.html';"  value="Back">

   <form method="get">
   

   
         
</form>
    
 
</div>

</body>
</html>



<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");


    if(isset($_POST['submit']))
{
  
  $D=$_POST["DATE"];
    $C = $_POST["BillNo"];
    $P = $_POST["Productid"];
    $Q = $_POST["Quantity"];
    $sql="select * from product WHERE Productid= '".$P."'";
    $results=mysqli_query($con,$sql) or die("couldn't connect to server");
    while ($row=mysqli_fetch_array($results)){
    $N =$row['Pname'];
   
    $T=$row['MRP'] * $Q;
    
$r="insert into sales (BillNo,MEDICINE,QUANTITY,TOTAL,DATE)values('$C','$N','$Q','$T','$D')";
$result=mysqli_query($con,$r) or die("couldn't connect to server");
    }}
else
{
echo "..";
}
?>





<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
if(isset($_POST['submit'])){


$Pid = $_POST["Productid"];
$Quantity = $_POST["Quantity"];
$sql="select * from product WHERE Productid= '".$Pid."'";
$result=mysqli_query($con,$sql) or die("couldn't connect to server");

echo "<table border='1'>";
echo "<tr>";
echo "<th> PID </th>";
echo "<th> PRODUCT </th>"; 
echo "<th> TOTAL </th>";
echo "</tr>";


while ($row=mysqli_fetch_array($result))
{
    echo "<tr>";

    echo "<td>",$row['Productid'],"</td>";
    echo "<td>",$row['Pname'],"</td>";
    if($Quantity <= $row['stock'])
    {
    echo "<td>", $row['MRP'] * $Quantity,"</td>";
    $sql="UPDATE product SET stock=stock-  '".$Quantity."' where Productid='".$Pid."' ";
    $results=mysqli_query($con,$sql) or die("couldn't connect to server");
    $row=mysqli_fetch_array($result);
    

    } 
   else
   {
       echo"<td>oops</td>";
   }

    echo "</tr>";

}
echo "</table>";

}

?>
<?php

$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
if(isset($_POST['submit']))
{
    $P = $_POST["BillNo"];
    $D = $_POST["DATE"];

    $sql="select * from sales WHERE BillNo= '".$P."' AND DATE='".$D."'";

$results=mysqli_query($con,$sql) or die("couldn't connect to server");
$sum=0;

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th> BillNo </th>";

    echo "<th> DATE </th>";

    echo "<th> Medicine </th>";
    echo "<th> Quantity </th>"; 
    echo "<th> TOTAL </th>";
    echo "</tr>";
    while ($row=mysqli_fetch_array($results)){
        $sum += $row['TOTAL'];
        echo "<tr>";
        echo "<td>",$row['BillNo'],"</td>";

        echo "<td>",$row['DATE'],"</td>";

        echo "<td>",$row['MEDICINE'],"</td>";
        echo "<td>",$row['QUANTITY'],"</td>";
        echo "<td>",$row['TOTAL'],"</td>";
        echo "</tr>";
    } 
    
    echo "</table>";
       
    echo  " Total cost =$sum";
}


        ?>