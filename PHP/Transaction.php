<html>
  
<link rel="stylesheet" href="style33.css">
<h2 align="center" color="white">SALES</h2>

<body>
<div class="container">

<?php		     
 	    $con = mysqli_connect("localhost","root","","medicalshop") or die("error");


                      	
                 		 
                 		   
                 		      
                             
                            echo"     <table border='1' >";
       echo" <tr >";
       echo" <th>BILLID</th>";
       echo" <th>DATE</th>";
       echo" <th>CASHIER</th>";
       echo" <th>TOTAL</th>";

      
        
      echo" <th>CUSTOMER</th>";
        
      echo" </tr>";

    $con = mysqli_connect("localhost","root","","medicalshop") or die("error");

    $qry = "select* from transaction ";   
    $result = mysqli_query($con, $qry); 
        while ($row = mysqli_fetch_array($result)) 
        {
  
              echo"<tr>";
                echo"<td>", $row['BILLID'],"</td>";
                echo"<td>", $row['DATE'],"</td>";
                echo"<td>", $row['NAME'],"</td>";
                echo"<td>", $row['TOT'],"</td>";
                echo"<td>", $row['CUSTOMER'],"</td>";

               
              echo" </tr>";
           
        }
      
        echo"</table>";
        ?>
                                 <!-- end editing -->
                                 <input type="button"onclick="window.location.href = 'adminhome.html';"  value="BACK">

  
 </div>
	</body>
</html>

