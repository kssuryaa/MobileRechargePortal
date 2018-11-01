<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!--animation stylesheets-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!--datepicker js-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>
    <!--datepicker stylesheets-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">

    <style media="screen">
    body, html {
        height: 100%;
    }

    .bg {
        background-image: url("images/Mobilehand.jpg");
        height: 100%;/
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .overlay{
      position:absolute;
      width:100%;
      height:100%;
      background:rgba(0,0,0,0.65);
    }
    .navbar {
   background-color: transparent;
   background: transparent;
   border-color: transparent;
}
  .navbar li { color: #000 }
    </style>
<?php
session_start();
?>
</head>
<body style="background-color:#191919">
  <!--Navbar begins-->
    <div class="row" style="width:100vw;margin:0px">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a class="navbar-brand" href="../adminhome.php"><img src="images/Rechargelogo.png" alt="Logo"  style="width:128px;height:60px; "></a></li>
            <li><a style="padding-right:30px;padding-left:30px;" href="adminhome.php">Home</a></li>
            <li><a style="padding-right:30px;padding-left:30px;" href="addoperator.php">Add operators</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../Logout.php" style="paddtravel-insurance-baging-right:30px;padding-left:30px;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="bg">
      <div class="overlay"><h1 class="wow fadeInDown" style="z-index:3;text-align:center;font-size:4vw;padding-top:23%;color:gray;"><b>Welcome Admin</b></h1></div>
    </div>
    <footer style="background-color:black;margin-bottom:0px;color:white">
      <div class="row wow fadeInUp">
        <div class="col-md-3 col-md-offset-1">
          <h3><b>Sample text</b></h3>
          <p>Lorem ipsum dolor sit amet, ut expetenda evertitur nam, et sit ridens mandamus. Vide porro indoctum cu qui, an brute evertitur interesset eos.</p>
        </div>
        <div class="col-md-3 col-md-offset-1" id="proj">
          <h3><b>Follow us on</b></h3>
          <ul style="list-style-type:none;text-align:left">
             <li><a href="#"><i class="fa fa-facebook-square"  style="font-size:20px"></i></a> Facebook</li>
             <li><a href="#"><i class="fa fa-twitter-square" style="font-size:20px" ></i></a> Twitter</li>
             <li><a href="#"><i class="fa fa-linkedin-square" style="font-size:20px" ></i></a> Linkedin</li>
             <li><span><a href="mailto:#" style="text-decoration:none"><i class="fa fa-envelope"  style="font-size:20px;"></i></a></span> Email</li>
          </ul>
        </div>
          <div class="col-md-3">
            <h3><b>Contact info</b></h3>
            <p><i class="fa fa-home" style="font-size:20px" aria-hidden="true"></i> Online recharge<br> VIT Vellore,<br> Katpadi, 600048<br>
              <i class="fa fa-mobile" style="font-size:20px"  aria-hidden="true"></i> 9876543210
            </p>
          </div>
      </div>
    </footer>
</body>
