<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");

           $PCODE=$_REQUEST['id'];
             $a = "delete from sales where PCODE='$PCODE'"; 
             $b="SELECT*FROM sales WHERE STATUS='pending'";
             if($con->query($a) && $con->query($b))
             {
                 ?>
                 <script>
               alert("success");
               window.location='Cashiersales.php';
               </script>
                 <?php
               }
             
               else
{
    ?>
    <script>
    alert("error");
    </script>
<?php 
}
  ?>               
            
            