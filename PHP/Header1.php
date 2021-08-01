
<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,900' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link rel="stylesheet"type="text/css"href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script>
function getData(val)
 {
     $("#replace_div").load("Ajaxsales1.php?id="+val);
  }
  function getTotal()
 {
   alert("CALCULATE TOTAL AMOUNT AND DISCOUNT");
     $("#replace_total").load("ajaxsum.php");
     $("#replace_discount").load("ajaxdiscount.php");
  }
    </script>




<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>	
	<style>
	#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.buttons{
	background-color: #48d32f;
    color: white;
  
    border-radius: 3px;
  
    border: none;
	width:200px;
	height:100px;
	padding:20px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
 
}

#customers tr {background-color:white;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
	h1{
		color:#48d32f;
		
		font-size:large;
	}
	input{
		width:300px;
		margin-top:10px;
		height:30px;

	}
    input[type="submit"],input[type="reset"],input[type="button"]{
		background-color:#48d32f;
		color:white;
		width:150px;
		border-radius:3px;
		height:30px;
		border:none;
	}
    .outer{
       
		
		margin-right:auto;
		margin:left:200px;

    }
	.inner1,.inner2,.inner3
	{ display:inline-block;
		margin:10px 10px 10px 10px;
		

	}
    .external{
		display:block;
		
       
    }

	
    </style>
</head>

	 </html>