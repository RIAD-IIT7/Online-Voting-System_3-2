<?php
	
$nid = $_POST['nid'];
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


$chk=mysqli_query($conn,"select * from voter where nid='$nid' and user='$user' and pass='$pass' ");


if(mysqli_num_rows($chk)==1)
{
	header( "refresh:2; url= vote.html" );
	echo "You have successfully logged in!";
	//header('Location: vote.html');
}
else
{

	header( "refresh:2; url= login.html" );
	//header('Location: login.html');
	echo "Wrond Data! Please try again!";
}


?> 