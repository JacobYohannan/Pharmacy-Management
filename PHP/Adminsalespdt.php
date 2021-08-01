<html>
    <head>
    <title>SALES</title>
            <link rel="stylesheet"type="text/css"href="style22.css">
</head>
<body>
<?php		     
include('AdminHeader.php'); 	
?>
                                 	
                 		  <h2> <span>SALES AS PER PRODUCT</span></h2>
                 		   
                 		        <div class="features_grids">
                                 <!-- start editing -->
                                
<?php
    $con = mysqli_connect("localhost","root","","medicalshop") or die("error");

$PCODE=$_REQUEST['id'];
$qry ="select PCODE,QUANTITY,TOTAL,DISCOUNT  from sales where PCODE='$PCODE'";
ECHO"<table id='customers' >
<tr >
 
 <th>PCODE</th>
 <th>QUANTITY</th>
<th>TOTAL</TH>
 <th>DISCOUNT</TH>


</tr>";


 $result = mysqli_query($con, $qry); 
  while ($row = mysqli_fetch_array($result)) 
 {
   ?>
                <tr>
             
                    <td><?php  echo $row['PCODE']?></td>
                   
                    
                    <td><?php  echo $row['QUANTITY']?></td>
                    <td><?php  echo $row['TOTAL']?></td>
                    <td><?php  echo $row['DISCOUNT']?></td>
                 </tr>
            <?php
            }
            ?>
     </table>
                                 <!-- end editing -->

					        </div>
						</div>
           			</div>
  		 </div>	 		 
	</body>
</html>

