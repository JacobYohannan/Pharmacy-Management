<html>
    <head>
    <title>SALES</title>
            <link rel="stylesheet"type="text/css"href="style22.css">
</head>
<body>
<?php		     
include('AdminHeader.php'); 	
?>
                                 	
                 		  <h2> <span>SALES AS PER DAY</span></h2>
                 		   
                 		        <div class="features_grids">
                                 <!-- start editing -->
                                 <form method="get">
        <input type="date" id="textbox" name="DATE" style="width:200px;"><br>
            <input type="submit"class="btn" name="SEARCH" style="width:200px;color: white;"><br>
</form>
<br>

<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");

            if(isset($_REQUEST['SEARCH']))
{
    $DATE=$_REQUEST['DATE'];
    $qry = "select PCODE,DATE,TIME,TOTAL from sales where DATE='$DATE'";   
    ECHO"<table id='customers'  >
        <tr >
      <th>PID</th>
        <th>DATE</th>
        <th>TIME</th>
       <th>TOTAL</th>
        <TH>VIEW</TH>
         </tr>";
    $result = mysqli_query($con, $qry); 
        while ($row = mysqli_fetch_array($result)) 
        {
    ?> 
              <tr>
              <td><?php  echo $row['PCODE']?></td>
                <td><?php  echo $row['DATE']?></td>
                <td><?php  echo $row['TIME']?></td>
                <td><?php  echo $row['TOTAL']?></td>
              
              
                <td> <a href="Adminsalespdt.php?id=<?php echo $row[0] ?>"> <button><img src="https://previews.123rf.com/images/alexwhite/alexwhite1412/alexwhite141201700/34471694-eye-icon-green-button-view-sign.jpg" HEIGHT="50" WIDTH="50"/></button> </a> </td>
               </tr>
          <?php  
        } 
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

