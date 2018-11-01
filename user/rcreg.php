<?php
$mnumErr=$rcamtErr=$oprtrErr=$typErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$txnnum=rand(00000000,99999999);
	$nam=trim($_POST["nam"]);
	$typ=trim($_POST["typ"]);
	$mnum=trim($_POST["mnum"]);
	$rcamt=trim($_POST["rcamt"]);
	$oprtr=trim($_POST["oprtr"]);	
	if(empty($mnum))
	{
		$mnumErr="Enter Mobile Number";
	}
	
	else
	{
		if(!preg_match("/^[0-9]*$/",$mnum))
		{
			$mnumErr="Contact Number Is In Digits";
		}
	else
	{
		if((strlen($mnum)<10)||(strlen($mnum)>10))
		{
			$mnumErr="Enter 10 Digits Contact Number";
		}
	}
	}

	if(empty($oprtr))
	{
		$oprtrErr="Please Select Operator ";
	}
	
	if(empty($typ))
	{
		$typErr="Please Select Operator Type";
	}
	
	if(empty($rcamt))
	{
		$rcamtErr="Enter Recharge Amount";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$mnum))
		{
			$mnumErr="Recharge Amount In Digits";
		}
		else
	{
	include('../conn.php');
	
$query="insert into tbrc(txnnum,name,mnum,type,oprtr,amt) values('$txnnum','$nam','$mnum','$typ','$oprtr','$rcamt')";
if(mysqli_query($conn,$query))
{
									header('location:./mkpayment.php');
										
}
		} 
	}
}	
	
	
	
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
