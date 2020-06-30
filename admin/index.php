<?php include("../dbcon.php");?>
<!DOCTYPE html>
<html>
<head>
 
 



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body> 

 
<!-- Nav -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li>  
 	<a class="nav-item nav-link" href="index.php?menuitem=show_orders">List orders</a>  </li>
      <li><a href="#">List clients</a></li>
      <li><a href="../index.php">Go to store</a></li>
    </ul>
  </div>
</nav>

 
 
   

  
<div class="wrapper">
 
  
 
   
  

  
 <BR> 
   
 <BR>
 
       <?php if (!isset($_REQUEST['menuitem']))  {  	 } else 
	   {  $page=$_REQUEST['menuitem'].".php";  include($page);		}	?>
   
	  
	  
	  
      </div>
	  
	  
	  
 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </div>
  </div>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
 
 $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
 
</body>
</html>
