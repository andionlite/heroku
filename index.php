<?php include("dbcon.php");?>
<!DOCTYPE html>
<html>
<head>
<style>
html, body, .wrapper {
  margin:0;
  padding:0;
  width:100%;
  height:100%;
  
}

.wrapper {
  display:flex;
}

@media (orientation:portrait) {
  html {
  }
  .wrapper {
    flex-direction:column;
  }
}

@media (orientation:landscape) {
  html {
  }

}

html {
  font-size:24px;
}

body {
  font-family: 'Source Sans Pro', sans-serif;
  text-align:center;
  line-height:1.2em;
}

h1, h2, h3, h4, h5, h6 {
  margin:0;
}

.brand {
  width:200px;
  position:relative;
  text-align:left;
  background:#000;
  color:#fff;
}
 

.list {
  display:flex;
  flex:1;
}

.list img {
  max-width:100%;
  max-height:100%;
}

.highlight {
  display:flex;
  flex-direction:column;
  text-align:left;
  color:rgba(255,255,255,0.9);
  text-shadow:2px 2px 0 rgba(0,0,0,0.8);
  padding:2rem;
  width:300px;
  text-align:right;
  background-image:url('https://therecipecritic.com/wp-content/uploads/2018/08/zucchini_crust_pizza-1-of-1.jpg');
  background-repeat: repeat-y;
  background-size:auto 150%;
  background-position:top center;
 
}

.title {
  font-size:3rem;
  line-height:1em;
  margin-bottom:0.5em;
}

.subtitle {
  font-size:1.5rem;
  opacity:0.8;
  line-height:1.2em;
}

.items {
   flex: 1;
 
  transition:transform 1s;
  padding:1rem;
  
}

.item {
  display:flex;
  align-items:center;
  padding:1rem;
}

.items.columns-2 .item-container {
  width:50%;
  float:left;
 
}
 
 

.item .details {
  flex:1;
  text-align:left;
  padding:0 1rem;
}

.item .name {
  font-weight:bold;
  margin-bottom:0.5em;
  font-size:125%;
}


.item .cartb {
  margin-left:10px;
  text-align:right;
  font-size:125%;
  font-weight:bold;
}



.item .labels {

}

.item .label {
  width:2em;
  height:2em;
 
  position:relative;
}

.item .description {
  
}







.item .price {
  text-align:right;
  font-size:125%;
  font-weight:bold;
  
  
  
  
}


</style>

<script>


</script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>

</head>
<body> 

<!-- Nav -->
<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button></div>
    </div>
</nav>
 

  
<div class="wrapper">
 
  
  <div class="highlight">   MY PIZZA  </div>
   
  

  
  <div class="list">
    <div class="items columns-2">
    <div class="item-container">
    
	<H2> PIZZAS</H2>
	
<?php
	
	
$sql="select * from pizzas where CATEGORY=1"; 
	   
$stmt = $conn->prepare($sql);
 
 
$stmt->execute();
$stmt->bind_result($idp,$name_pizza,$description, $price,$cat);
$stmt->store_result();
   
  if ($stmt->num_rows>0)     
	  
 
{       

 

while ($stmt->fetch()) 

{
  echo "
	<div class='item'>
      <div class='image'>  </div> 
   
        <div class='labels'> </div>
      <div class='details'>
        <div class='name'>$name_pizza</div>
        <div class='description'>$description</div>		
      </div>
        
      <div class='price'>&euro;$price </div>
	  
	 <div class='cartb'> <a href=\"#\"  data-kodprod=\"$idp\"  data-name=\"$name_pizza\" data-price=\"$price\" class=\"add-to-cart btn btn-primary btn-sm\">Add to cart</a>  </div>
      </div>  ";
  } 
  
}
	
	?>
	
	
   
	  
	  
	  
      </div>
	  
	  
	  
	      <div class="item-container" style="display:block" >
    
	<H2> DRINKS</H2>
	
<?php
	
	
$sql="select * from pizzas where CATEGORY=2"; 
	   
$stmt = $conn->prepare($sql);
 
 
$stmt->execute();
$stmt->bind_result($idp,$name_pizza,$description, $price,$cat);
$stmt->store_result();
   
  if ($stmt->num_rows>0)     
	  
 
{       

 

while ($stmt->fetch()) 

{
  echo "
	<div class='item'>
      <div class='image'>  </div> 
   
        <div class='labels'> </div>
      <div class='details'>
        <div class='name'>$name_pizza</div>
        <div class='description'>$description</div>
      </div>
        
      <div class='price'>&euro;$price </div>
	   <div class='cartb'> <a href=\"#\"  data-kodprod=\"$idp\"  data-name=\"$name_pizza\" data-price=\"$price\" class=\"add-to-cart btn btn-primary btn-sm\">Add to cart</a>  </div>
      </div>  ";
  } 
  
}
	
	?>
	
	
   
	  
	  
	  
      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </div>
  </div>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="javascript">


	
 

</script>


<div>
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Cart </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"   >
        <table class="show-cart table">
          
        </table>
		    <BR> <div>  <span class="sh-cost"></span>   Shipping cost &euro; 3<span ></span></div>
        <div>Total price  to pay in   &euro;  <span class="total-cart"></span>  or    in   &#36;  <span class="total-cart-in-us"></span></div>
		
		     <div> </div>
			   
			 
			 <p id="api_output"></p>
			 
      </div> 
	   <div style="display:flex; padding:10px;">
	 
	  <div style="width:100px"> </div>
	  <div> <span class="user_des"></span>    <input type="text"  id="orderadr"  placeholder="Delivery address"   /> <font color='red'>* </font>     </div>
	  <div>   <input type="text"  id="telephone"  placeholder="Mob number" onkeydown= "enablePlaceButton();"   />  <font color='red'>* </font>  </div>
	 
	  </div>  
	  
	 
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button"    disabled  id="place-order"    class="btn btn-secondary"    > Place order now</button> 
      </div>
    </div>
  </div>
</div> 
</div> 
<script src="cart.js"></script>
</body>
</html>
