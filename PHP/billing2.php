



<html>
<link rel="stylesheet" href="css/style1.css">
    
    <body>

<form method="post">
<input type="text" id="pro" name="DATE" placeholder="DATE"><br/>

<input type="text" id="pro" name="BillNo" placeholder="BillNo"><br/>


<input type="submit" id="pro" name="submit" placeholder="submit"><br/>
<input type="button"onclick="window.location.href = 'adminhome.html';"  value="Back">

</form>
</body>
</html>







<?php

$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
if(isset($_POST['submit']))
{$P = $_POST["BillNo"];
    $D = $_POST["DATE"];


    $sql="select * from sales WHERE BillNo= '".$P."' AND DATE='".$D."'";
    

$results= mysqli_query($con,$sql) or die("couldn't connect to server");
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