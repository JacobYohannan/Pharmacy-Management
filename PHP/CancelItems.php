<?php
$con = mysqli_connect("localhost","root","","medicalshop") or die("error");

    $a = "delete from sales where BILLID='pending'"; 
  
    if($con->query($a))
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