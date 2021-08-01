<?php include"Header1.php"; ?>
   <div>&nbsp;</div>
   <div>&nbsp;</div>
   <div>&nbsp;</div>
   <div>&nbsp;</div>
   <div>&nbsp;</div>
  <H1> <font size="10" color="green">SALES BILLING </FONT> </H1>
   <div class="outer">
      <div class="inner1">               
       
            <div >
             ID: <input type="text" name="pcode"placeholder="PID"id="textbox" onfocusout="getData(this.value)" ><br>
              <!-- <input type="text" name="prod"id="textbox" placeholder="PRODUCT"> <br>
               <input type="text" name="mrp"id="textbox"placeholder="MRP"><br>
               <input type="text" name="rate"id="textbox"placeholder="RATE"><br> -->
              
                <!-- <input type="submit"value="add" name="add">&nbsp
                <input type="reset"value="reset" name="reset"> -->
             </div>
     
                     
                     
    </div>
    <?php
    $con = mysqli_connect("localhost","root","","medicalshop") or die("error");

            if(isset($_POST['add']))
            {
               $DATE=date('Y-m-d');
               date_default_timezone_set("Asia/Calcutta");
               $TIME=date("H:i:s"); 
               $PRODCODE=$_POST['pro_code'];
               $DISCOUNT=$_POST['discount'];
               $QUANTITY=$_POST['quantity'];
               // $NAME=$_REQUEST['name'];
               // $PAID=$_REQUEST['paid'];
               // $BAL=$_REQUEST['bal'];
               // $CUSTOMER=$_REQUEST['customer'];
               $SP=$_POST['rat'];
               // $TOTAL=($SP*$QUANTITY)-$DISCOUNT;
               $discount=($SP*$QUANTITY*$DISCOUNT)/100;
               $TOTAL=($SP*$QUANTITY)-$discount;
               $pid=$_POST['productid'];
               $qry="UPDATE stock set quantity=quantity-$QUANTITY WHERE PID=$pid";
               //echo $qry;
               $A="insert into sales(BILLID,PCODE,`DATE`,`TIME`,DISCOUNT,SP,QUANTITY,TOTAL,STATUS)values('pending','$PRODCODE','$DATE','$TIME','$DISCOUNT','$SP','$QUANTITY','$TOTAL','pending')";
               if($con->query($A)==TRUE && $con->query($qry)==TRUE )
               {
                  $qry = "SELECT PCODE,`DATE`,`TIME`,DISCOUNT,QUANTITY,SP,TOTAL FROM sales WHERE `STATUS`='pending'";   
               }
              // $i="insert into transaction(DATE,NAME,TOT,DISCOUNT,BAL,PAID,CUSTOMER)values('$DATE','$NAME','$TOTAL','$DISCOUNT','$BAL','$PAID','$CUSTOMER')";
               // echo $i;
               // $T="update sales SET STATUS='sold',BILLID=(SELECT MAX(BILLID) from transactION) WHERE STATUS='pending'";
               // echo $T;
   //             if($con->query($i)==TRUE) //&& $con->query($T))
   //             {
}
   //          ?>
   
    
    <div class="inner1">
      <div id="replace_div">
              QUANTITY:  <input type="text" name="quantity"id="textbox" placeholder="QUANTITY" ><br>
              
      </div>
    </div>
    </form>
    <table id="customers">
     <tr >
       <th>  PID </th>
      
       <th>  NAME </th>
       <th>  DISCOUNT </th>
       <th>  SP </th>
       <th>  QUANTITY </th>
       <th>  TOTAL </th>
       <TH> DELETE</TH>
      </tr>
      <?php
         $qry = "SELECT sales.PCODE,sales.`DATE`,sales.`TIME`,sales.DISCOUNT,sales.QUANTITY,sales.SP,sales.TOTAL,p.prod FROM sales join product p on p.pcode=sales.pcode WHERE `STATUS`='pending'";  
      $result = mysqli_query($con, $qry); 
      while ($row = mysqli_fetch_array($result)) 
      {
      ?>
       <tr>
          <td><?php  echo $row['PCODE']?></td>
        
          <td><?php  echo $row['prod']?></td>
        
          <td><?php  echo $row['DISCOUNT']?></td>
          <td><?php  echo $row['SP']?></td>
          <td><?php  echo $row['QUANTITY']?></td>
          <td><?php  echo $row['TOTAL']?></td>
          <td><a href="DeleteSalesItem.php?id=<?php  echo $row['PCODE']?>"> delete</a></td>

        </tr>
        <?php
       }
        ?>
             </table>  
             <br/>
             <br/>
             <br/>
             <br/>
             <br/>
             <br/>
      <a href="billset1.php" class="buttons" >PRINT</a>
      <input type="button"onclick="window.location.href = 'staffhome.html';"  value="Back">

       
      <br>
    

   
  