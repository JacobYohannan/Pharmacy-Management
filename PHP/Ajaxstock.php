<html>
    <head>
    </head>
    <style>
       input[type=text], select {
    width: 40%;
    padding: 12px 20px;
    margin: auto;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=date]{
    width: 40%;
    padding: 12px 20px;
    margin: auto;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  SELECT[NAME=branch] {
    width: 40%;
    padding: 12px 20px;
    margin: auto;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
   input[type=text]::placeholder {
          text-align: center;
  }
  input[type=submit] {
    width: 33%;
    background-color:rgb(93, 169, 219) ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color:"white";
  }
  
  
  input[type=reset] {
    width: 33%;
    background-color: rgb(93, 169, 219) ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=reset]:hover {
    background-color:"white";
  }
  
  input[type=button] {
    width: 33%;
    background-color:rgb(93, 169, 219) ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=button]:hover {
    background-color:"white";
  }
  div {
    border-radius: 4px;
   
    background: transparent url(transparent.png) fixed;
    padding: 30px;
    margin-left: 150px;
         margin-right: 150px;
  
  
  }
  body{
    background: linear-gradient(57deg, #00C6A7 , #1E4D92 );
    background: transparent url(a.jpeg) fixed;
  
  }
  h2{
          margin-top: 20px;
          text-align: center;

          text-transform: uppercase;
          font: normal 200% Times, Times New Roman, serif ;
          text-decoration: none;
          color:rgb(37, 37, 37);
      }
      h3{
       
        text-align: center;

        text-transform: uppercase;
        font: normal 200% Times, Times New Roman, serif ;
        text-decoration: none;
        color:rgb(37, 37, 37);
    }
      .edit{
  text-align: center;
  color: aliceblue;

  font: normal 120% Times, Times New Roman, serif ;
      
    
          }
      </style>
    <body>
    <form>
        <?php
        $PCODE = $_REQUEST['id'];
        $con = mysqli_connect("localhost","root","","medicalshop") or die("error");

        $qry = "SELECT * FROM PRODUCT p,stock s WHERE p.PID=s.PID AND p.PCODE='$PCODE'";
        $result = mysqli_query($con, $qry);
        if($result->num_rows >0)
        {
          $row = mysqli_fetch_array($result);
        ?>
          <input type="hidden" name="pid"id="textbox" value="<?php echo $row[0] ?>">
        <input type="text" name="prod" id="textbox" disabled value="<?php echo $row['PROD'] ?>" > <br>
        <input type="text" name="quantity" id="textbox"value="<?php echo $row['QUANTITY'] ?>"disabled> <br>
        
        <input type="text"  name="update_quantity"id="textbox" placeholder="QUANTITY"><br>
        <input type="submit"class="btn" name="submit"style="color: white"><br>
        </form>
   <?php
        }
        else
        {
 ?>
<h2>INVALID ID</h2>
<?php
        }
        ?>
 </body>
</html>