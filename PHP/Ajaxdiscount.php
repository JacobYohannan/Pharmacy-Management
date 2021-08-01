<html>
    <head>
    <head><link rel="stylesheet"type="text/css"href="style.css">

    </head>
    <body>
    <form>
        <?php
        $con = mysqli_connect("localhost","root","","medicalshop") or die("error");

        $qry="select sum(DISCOUNT)from sales where STATUS='pending'";
        $result = mysqli_query($con, $qry);
        if($result->num_rows >0)
        {
          $row = mysqli_fetch_array($result);
          ?>
           
          <input type="text" name="discount"id="textbox" value="<?php echo $row[0]?>"> <br>

          <?php
        }
        ?>        
 </body>
</html>