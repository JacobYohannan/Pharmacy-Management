<?php
    
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");
?>

<html>


<h2> <span>VIEW INVENTORY</span></h2>
                 		   
                 		        
                                 <!-- start editing -->
                                 <form method="get">
                                 <input type="text" id="textbox" name="Productid" placeholder="Productid"><br>
            
            <input type="SUBMIT" name="SEARCH" value="SEARCH" class="btn"style="color: white"><br><br><br>
</form>
<?php

$con = mysqli_connect("localhost","root","","medicalshop") or die("error");

            if(isset($_REQUEST['SEARCH']))
            {
             $PCODE=$_REQUEST['Productid'];
            $qry = "select Productid,PName,Quantity from product JOIN stock ON PName=Pname where Productid=$PCODE";
             echo " <table id='customers'>
             <tr >
              <th>PCODE</th>
              <th>PRODUCT</th> <th>QUANTITY</th></tr>";
        $result = mysqli_query($con, $qry); 
            while ($row = mysqli_fetch_array($result)) 
            {
                 $PCODE=$row['Productid'];  
                      $PRODUCT=$row['PName'];
                   
                    echo" <tr> <td>$PCODE</td> <td>$PRODUCT</td> </tr>";
            }
            echo" </table></CENTER>";
        }
        ?>
       