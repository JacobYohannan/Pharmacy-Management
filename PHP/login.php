<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َAnimated Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
  h1{
 
 text-align: center;  
 color: white ;  
 padding: 20px; 
}  
body{
background-image:url(3589217.jpg);
background-position:center;
background-repeat:no-repeat;
background-size:2100px;
}

</style>
  <h1>MEDICALSHOP MANAGEMENT SYSTEM</h1><br>   

  <body>

<form class="box"  method="post">
  <h1>Login</h1>
  <input type="text" name="Userid" id="Userid" placeholder="Userid">    

  <input type="Password" name="Password" id="Password" placeholder="Password">    

  <input type="submit" class="btn" name="signin" style="color: white"value="Login">           

</form>


  </body>
</html>

 <?php
 $con = mysqli_connect("localhost","root","","medicalshop") or die("error");
 if (isset($_REQUEST['signin'])) {
    $NAME = $_REQUEST['Userid'];
    $PASSWORD = $_REQUEST['Password'];
 
    $qry = "select * from login where NAME='$NAME' and PASSWORD='$PASSWORD' ";
    $result = mysqli_query($con, $qry);
    if ($result->num_rows>0) {
    
        $row = mysqli_fetch_array($result);

        
        $_SESSION['CID'] = $row['LID'];
        $_SESSION['type'] = $row[3];
         if ($row[3] == "staff")
         {
           

            ?>
          <script> alert("Login Success"); window.location="staffhome.html"; </script>
           <?php
           
         }
        else
        {
          ?>
          <script> alert("Login Success"); window.location="adminhome.html"; </script>
           <?php
            
            

        }
      }
    
     else 
     {
       
           ?>
          <script> alert("Invalid Username Or Password");  </script>
           <?php
          

        
}}
?>
</html>
