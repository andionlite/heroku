<?php
//some authentication ...


$jsondata = file_get_contents('php://input');
  
$data = json_decode($jsondata, true);
require_once('dbcon.php');
 
$ora= date("H:i:s");
$datad=  date("Y-n-j");
$dataora=$datad." ".$ora; 
  
$oid= md5($dataora) ;

foreach ($data as $user) {

                       
    $prod = $user['name'];
    $prc = $user['price'];
    $qty = $user['count']; 	 
	
	$tel = $user['tel']; 
	$adr = $user['orderadr'];
	
if ($tel=="") 
{
    // statement for  inserting into order details table
  $st = mysqli_prepare($conn, 'INSERT INTO  order_details( OUID,  PROD	,QTY ,PRICE  ) VALUES (?,?,?,?)');

 
  mysqli_stmt_bind_param($st, 'ssdd',  $oid, $prod, $qty ,$prc );

    
   mysqli_stmt_execute($st);
   
}
   
   
 
   
   
   
}

    //preparing statement for  orders head table
    $st = mysqli_prepare($conn, 'insert into  orders (OUID , TEL, ADDRESS  ) values (  ?,?,?)')   ;

   
  mysqli_stmt_bind_param($st, 'sss', $oid ,    $tel , $adr  );

 
   mysqli_stmt_execute($st);

 $newJsonString = json_encode($data);
 header('Content-Type: application/json');
 
  
 echo $prod;
 

?>