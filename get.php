<?php 

$con=mysqli_connect("sql207.epizy.com","epiz_28874480","nit0V2BNtj","epiz_28874480_product");

//get dat from data base

$result = mysqli_query($con, "SELECT * FROM product");

// adding in array
$data = array();

while ($row = mysqli_fetch_object($result)){


    array_push ($data, $row);
}

// send as response

echo json_encode($data) ; 


?> 