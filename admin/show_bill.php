 
	
<?php
	
	
	if(!isset($_REQUEST['idf']))  { EXIT("Error on page "); }  else 
	
	{
	$idf=$_REQUEST['idf'];
$sql="

SELECT   order_details.OUID, order_details.PROD,order_details.QTY, order_details.PRICE ,orders.TEL, orders.ADDRESS


from order_details  , orders


where
order_details.OUID=orders.OUID 
and orders.OUID=? "; 
	   
$stmt = $conn->prepare($sql);

$stmt->bind_param("s",$idf);
 
$stmt->execute();
$stmt->bind_result($oidu,$prod , $qty,$price,$tel,$adr );
$stmt->store_result();
   
  if ($stmt->num_rows>0)     
	  
 
{       
echo   "This is the content of the bill  ".$idf;  echo "</BR> </BR> ";

echo "<table id='example' class='table table-striped table-bordered' style='width:100%'>

<tr> 
	 
			<td>   ITEM </td> 
		    <td>   QTY </td> 
		    <td>   PRICE </td>  
			</tr>
";
 
while ($stmt->fetch()) 

{
  echo " 
            <tr> 
			      
			 <td> $prod </td>
		     <td> $qty </td>
		     <td> $price </td>
			</tr>


	";
  } 
  echo "			
	</table> ";
	
	echo  "Contact ".$tel."  and address ".$adr;

}
 
	}
	
	?>
	
	
   
	  
	  
	  
 
	  
	  
 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	 