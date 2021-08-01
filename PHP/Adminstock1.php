<html>
    <head>
 


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function getData(val) {
            $("#replace_div").load("Ajaxstock.php?id="+val)
        }
    </script>
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
<?php		     
include('AdminHeader.php'); 	
?>
                           	
                 		  <h2> <span>STOCK UPDATION</span></h2>
                 		   
                 		       
                                 <!-- start editing -->
                                 <form>
                                 <div>

                                

    <input type="text"id="textbox" placeholder="PID"name="pcode" onfocusout="getData(this.value)" > <br>

    <a id="replace_div">
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
            </style>

        <input type="text"id="textbox" placeholder="PRODUCT" name="prod"style="color: white" > <br>
        <input type="text" id="textbox"placeholder="QUANTITY" name="quantity" style="color: white"> <br>
       

    </form>
   </a>
   </div>

        
       
          <?php
       $con = mysqli_connect("localhost","root","","medicalshop") or die("error");

        if(isset($_REQUEST['submit']))
{
    $quantity=$_REQUEST['update_quantity'];
    $pid=$_REQUEST['pid'];
   
    
        $qry="UPDATE stock set quantity=quantity+$quantity WHERE PID=$pid";
    
        $qry="UPDATE stock set quantity=quantity-$quantity WHERE PID=$pid";


    
    if($con->query($qry))
    {
 ?>
        <script>
           alert("STOCK REMOVED!!!");
         window.location="Adminstock1.php";
    </script>
    <?php
    }
    else
    {
         ?>
         <script>
            alert("PLEASE FILL THE DEATILS CORRECTLY");
            window.location="Adminstock1.php";
    </script>
    <?php
    }
}
        ?>
        
</body>
</html>
<html>
  <body>
    <p>
  <input type="submit"class="btn" name="submit"style="color: white">
        <input type="button"onclick="window.location.href = 'adminhome.html';"  value="BACK">
</p>
</body>
</html>