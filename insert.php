<?php
	
$nid = $_POST['nid'];
$name= $_POST['name'];
$user= $_POST['username'];
$pass= $_POST['password'];


$conn = mysqli_connect("localhost", "root", "","EVM");
	if(!$conn)
	{
	echo"not connected";
	}
	else
	{
		//echo "Connected";
	}


$chk=mysqli_query($conn,"INSERT INTO voter VALUES ('$nid','$name','$user','$pass')");

if($chk){
    echo "Successfully added ".$name." to the EVM Registration Database!";
    
}else{
	echo "Error. Data Was Not Added!!\n";
}


?> 