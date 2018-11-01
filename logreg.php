<?php
$usrErr=$pwdErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$usrname=trim($_POST["usr"]);
	$passwrd=trim($_POST["pwd"]);
	if(empty($usrname))
	{
		$usrErr="Username is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$usrname))
		{
			$usrErr="Invalid username";
		}
	}
	if((empty($passwrd)))
	{
		$pwdErr="Password is required";
	}
	else
	{
		if((!preg_match("/^[a-zA-Z0-9]*$/",$passwrd)))
		{
			$pwdErr="Password should be Alpha numeric";
		}
		else
		{
			if((strlen($passwrd)<6)||(strlen($passwrd)>12))
			{
				$pwdErr="Password should be 6-12 digits ";
			}
			else
			{
			include('conn.php');
			$query="SELECT * FROM tbusr WHERE usernam='$usrname' and password='$passwrd'";
			$result=mysqli_query($conn,$query);
			 if (mysqli_num_rows($result) == 1)
			 {
			$row=mysqli_fetch_array($result);
			$_SESSION['dbrecharge']='true';
			$_SESSION['id']=$row[0];
			$name=$row[1];
			$uname=$row[2];
			$_SESSION['usrrol']=$row[4];
			$active=$row[6];
			$urol=$row[4];
			$email=$row[7];
			session_start();
      
      		$_SESSION['userlogin'] = $uname;
	   		$_SESSION['name'] = $name;
	   		$_SESSION['email']=$email;
			if($active=='0')
			{
			echo "<script type='text/javascript'>alert('Your account is not activated Yet');</script>";
			header('Refresh:2,URL=./login.php');
			}
			else if($urol=='A')
			{
			header('Location:./admin/adminhome.php');
			}
			else if($urol=='S')
			{
			header('Location:./user/index.php');
			}
			else
			{
			print "<script type='text/javascript'>alert('Invalid Username/Password');</script>";
			}
			
			}
			else{
				echo "<script type='text/javascript'>alert('Invalid username and password');</script>";
			}
			
		
		}
	}
}
}
if(isset($_POST['signup']))
{
header('Location:signup.php');
}
?>
