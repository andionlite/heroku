 
  
<div class="wrapper">
 
  
  <div> A list of all orders</div>
   
  

  
 <BR> 
   
 <BR>
 
    
	 
	
<?php
	
	
$sql="select OID, OUID, TEL, DTREG  from orders  "; 
	   
$stmt = $conn->prepare($sql);
 
 
$stmt->execute();
$stmt->bind_result($oid,$oidu,  $tel,$dtreg );
$stmt->store_result();
   
  if ($stmt->num_rows>0)     
	  
 
{       

 
  echo "<table id='example' class='table table-striped table-bordered' style='width:100%'>
        <thead>
            <tr>         
			<TD>  ORDER_NO</TD>
			<TD> MOB</TD>
			<TD> ORDER_DATE</TD>
		    <TD> DELIVERED</TD>
			<TD> DETAILS</TD>
			</TR>
			</Thead>
			
			";
while ($stmt->fetch()) 

{
  echo " 
            <tr> 
			<td>  $oid  </td>
			<td>  $tel   </td>
			<td>  $dtreg   </td>
			<td>  No   </td>
			<td> <a href='index.php?menuitem=show_bill&idf=$oidu'> more </a> </td>
			</tr>
			
	

	";
  } 
  echo "</table>";
}


	
	?>
	
	
   
	  
	  
	  
      </div>
	  
	  
	  
 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
 
 