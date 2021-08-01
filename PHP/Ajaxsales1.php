<html>
    <head>
    <head><link rel="stylesheet"type="text/css"href="style.css">

    <style>
    input[type="text"]{
        padding: 10px; 
    margin-top: 20px;
    height:40px;
    width: 500px;;
    }
    </style>

    
    </head>
    <body ALIGN="center">
    
    <form method="POST">
        <?php
        $PCODE = $_REQUEST['id'];
        $con = mysqli_connect("localhost","root","","medicalshop") or die("error");

        $qry = "SELECT * FROM PRODUCT p,stock s WHERE p.PID=s.PID AND p.PCODE='$PCODE'AND QUANTITY>0";
        $result = mysqli_query($con, $qry);
        if($result->num_rows>0)
        {
         $row = mysqli_fetch_array($result);
        ?>
        <div id="replace_div">
        
        
        <table>
        <tr><td><input type="hidden" name="pro_code" value="<?php echo $PCODE ?>"><td></tr>
       <tr><td> <input type="text" name="quantity" id="quantity" placeholder="QUANTITY" ></td></tr>
             
        <tr><td><input type="text"  name="discount" id="discount"placeholder="DISCOUNT"></td></tr>
        
        <tr><td><input type="hidden" name="productid" value="<?php echo $row['PID'] ?>"></td></tr>
        <tr><td><input type="text" name="prod" id="textbox" disabled value="<?php echo $row['PROD'] ?>"></td><br></tr>
        <tr><td><input type="text" name="mrp" id="mrp" value="<?php echo $row['MRP'] ?>" disabled ><br></td></tr>
        <tr><td><input type="text" name="rat" id="rate" value="<?php echo $row['RATE'] ?>"disabled></td> </tr>
        <tr><td><input type="hidden" name="rat" id="rate" value="<?php echo $row['RATE'] ?>"  ></td> </tr>
        <tr><td><label id="l" visible="false"></label><label name="total" id="labelid"></label></td></tr>
        <!-- <tr><td><input type="text" name="paid" id="paid" onclick="gettotal()" placeholder="PAID"></td> </tr>
        <tr><td><input type="text" name="bal" id="bal" placeholder="BALANCE" onclick="getbal()"></td> </tr>
        <tr><td><input type="text" name="name" id="" placeholder="NAME"> </td></tr>
        <tr><td><input type="text" name="customer" id="" placeholder="CUSTOMER"></td></tr> -->
    </table>
        
        <br>
         <input type="submit" value="add" name="add">&nbsp
            <input type="reset" value="reset" name="reset"><br>
        </div>
        </form>
  <?php
         }
        else
        {
?>
<script>
alert("invalid product code/stock unavailable");
window.location="Cashiersales.php";
</script>
<?php
        }
        ?>
</body>
<script>
function getbal()
{
    debugger;
    var paid=parseInt(document.getElementById("paid").value);
    var total=parseInt(document.getElementById("labelid").textContent);
    document.getElementById("bal").value=parseInt(paid)-parseInt(total);
}
    function gettotal()
    {
        debugger;
       var rate=parseInt(document.getElementById("rate").value);
       var discount=parseInt(document.getElementById("discount").value);
       var mrp=parseInt(document.getElementById("mrp").value);
       var qty=parseInt(document.getElementById("quantity").value);
       
       document.getElementById("labelid").innerHTML=((rate*qty)-((rate*qty*10)/100)).toString()+"<br>";
       document.getElementById("l").style.visibility="visible";
       document.getElementById("l").innerHTML="Total :"

    //    document.getElementById("labelid").innerhtml="";
    }
    </script>
</html>