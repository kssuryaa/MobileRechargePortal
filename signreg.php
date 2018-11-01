<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '/vendor/autoload.php';

$nameErr=$usrErr=$emailErr=$pwdErr=$cpwdErr=$apntidErr=$spcltyErr=$cntErr=$vtErr=$otErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=trim($_POST["fnm"]);
	$usrname=trim($_POST["usr"]);
	$passwrd=trim($_POST["password"]);
	$confirmpassword=trim($_POST["cpassword"]);
	$email=trim($_POST["email"]);
	
	$cnt=trim($_POST["cnt"]);
	
	if(empty($name))
	{
		$nameErr="name is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
			$nameErr="Only alphabets and white space allowed";
		}
	}
	
	 if(empty($usrname))
	{
		$usrErr="Username is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$usrname))
		{
			$usrErr="Only alpha-numeric allowed";
		}
	}
	if(empty($cnt))
	{
		$cntErr="Contact Number Is Required";
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$cnt))
		{
			$cntErr="Contact Number Is In Digits";
		}
	else
	{
		if((strlen($cnt)<10)||(strlen($cnt)>10))
		{
			$cntErr="Enter 10 Digits Contact Number";
		}
	}
	}
	
		if(empty($passwrd))
	{
		$pwdErr="Password is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$passwrd))
		{
			$pwdErr="Password should be alpha numeric digits";
		}
	else
	{
		if((strlen($passwrd)<6)||(strlen($passwrd)>12))
		{
			$pwdErr="Password should be 6-12 digits";
		}
	}
	}
	
	if(empty($confirmpassword))
	{
		$cpwdErr="Confirm Password is required";
	}
	else
	{
		if(!preg_match("/^[a-zA-Z0-9]*$/",$confirmpassword))
		{
			$cpwdErr="Password should be alpha numeric digits";
		}
	else
	{
		if((strlen($confirmpassword)<6)||(strlen($confirmpassword)>12))
		{
			$cpwdErr="Password should be 6-12 digits";
		}
	else
	{
		if($passwrd!=$confirmpassword)
		{
			echo "<script type='text/javascript'>alert('Password did not match');</script>";
		}
	}

	include('conn.php');
	$db_usrquery="SELECT * FROM tbusr WHERE usernam='$usrname' ";
	$result=mysqli_query($conn,$db_usrquery);
	$checkusr=mysqli_fetch_array($result,MYSQLI_NUM);
	if($checkusr[0]>1)
	{
	echo "<script type='text/javascript'>alert('Username already exist');</script>";
	}
	else
	{
		$usrrol='S';
		$act=1;
		$idquery="SELECT MAX(id) FROM tbusr";
		$id=mysqli_query($conn,$idquery)+1;
		$query="insert into tbusr(name,usernam,password,usrrol,cntnum,email,act) values('$name','$usrname','$passwrd','$usrrol','$cnt','$email','$act')";
		if(mysqli_query($conn,$query))
		{
			echo "<script type='text/javascript'>alert('Registration Successfull');</script>";
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'akashmrk@gmail.com';                 // SMTP username
    $mail->Password = 'Rocky@#mrk';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('akashmrk@gmail.com', 'Recharge Portal');
   	$mail->addAddress($email, $name);     // Add a recipient
    /*
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
    */
    //Attachments
    /* $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    */
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to recharge portal';
    $mail->Body    = '<img src="https://images.unsplash.com/photo-1519894877873-978b7d957c3d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=12e52c6fc387f8a9ca9bfbf97f236333&auto=format&fit=crop&w=1954&q=80" alt="logo"  style="width:350px;height:350px; "><br>Thank You for <b> registering </b>with us';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
			header('location:./login.php');
		}
	}
	}
	}
}
if(isset($_POST['cancel']))
{
header('location:./index.php');
}
?>
	
		

	
