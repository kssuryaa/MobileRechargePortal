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
        background-image: url("../images/Mobilehand.jpg");
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
<body style="background-color:black">
  <!--Navbar begins-->
    <div class="row" style="width:100vw;margin:0px">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a class="navbar-brand" href="index.php"><img src="../images/Rechargelogo.png" alt="logo"  style="width:128px;height:60px; "></a></li>
            <li><a style="padding-right:30px;padding-left:30px;" href="index.php">Home</a></li>
            <li><a style="padding-right:30px;padding-left:30px;" href="#proj">About</a></li>
            <li><a style="padding-right:30px;padding-left:30px;" href="recharge.php">Recharge</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../Logout.php" style="paddtravel-insurance-baging-right:30px;padding-left:30px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>
  <div class="bg">
    <div class="overlay"><h1 class="wow fadeInDown" style="z-index:3;text-align:center;font-size:4vw;padding-top:23%;color:gray;"><b>Welcome <?php if (isset($_SESSION['name']))
      echo $_SESSION['name'];?></b></h1></div>
  </div>
  <div class="container-fluid"  style="background-color:#191919;">
    <div class="row wow slideInLeft" style="margin-top:200px;text-align:center">
      <div class=" col-md-offset-1 col-md-3">
        <h2 style="color:white">RECHARGE IN 3 SIMPLE STEPS</h2>
      </div>
      <div class="col-md-2">
        <img src="images/login.png" style="margin-top:30px">
        <p style="color:gray; margin-top:10px">LOGIN TO YOUR ACCOUNT</p>
      </div>
      <div class="col-md-2">
        <img src="images/rchrgdet.png" style="margin-top:30px">
        <p style="color:gray; margin-top:10px">ENTER RECHARGE DETAILS</p>
      </div>
      <div class="col-md-2">
        <img src="images/payment.png" style="margin-top:30px">
        <p style="color:gray; margin-top:10px">MAKE PAYMENT</p>
      </div>
  </div>
  <div class="row wow slideInLeft" style="background-color:#323232;margin-top:200px;text-align:center">
    <div class=" col-md-4 wow fadeInLeft hvr-grow-shadow" style="background-color:#424242">
      <img src="images/offers.png"  data-wow-delay="0.1s"  style="margin-top:130px;margin-bottom:100px;width:25%;height:25%;">
    </div>
    <div class="col-md-4 wow fadeInLeft"  data-wow-delay="0.1s"  style="margin-top:130px;margin-bottom:100px;">
      <h2 style="color:white;padding-bottom:30px;">SPECIAL RECHARGE OFFERS</h2>
      <p style="color:gray">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse magni dolores eos qui ratione. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conse magni dolores eos qui ratione.</p>
    </div>
    <div class="col-md-4 wow fadeInLeft hvr-grow-shadow" style="background-color:#212121;">
      <img src="images/coupons.png" data-wow-delay="0.3s" style="margin-top:130px;margin-bottom:100px;width:25%;height:25%;">
    </div>
</div>
  <div class=" container-fluid"  style="padding-bottom:100px" id="proj">
      <div class="row" style="margin-top:70px;text-align:center;">
        <h2 class="wow fadeInDown" style="text-align:center;margin-bottom:40px;color:white" ><b>Project members</b></h2>
        <hr>
        <div class="col-md-offset-1 col-md-3  wow fadeInLeft hvr-grow-shadow" style="background-color:#F1F1F1;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);animation-delay:0.1s;margin:50px">
          <img src="" data-wow-delay="0.1s" class="img-circle" style="width:50%;height:50%;padding-top:10px">
          <h3></h3>
        </div>
        <div class=" col-md-3  wow fadeInLeft hvr-grow-shadow" style="background-color:#F1F1F1;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);animation-delay:0.2s;margin:50px;margin:50px;">
          <img src="" data-wow-delay="0.2s" class="img-circle" style="width:50%;height:50%;padding-top:10px">
          <h3></h3>
        </div>
        <div class=" col-md-3  wow fadeInLeft hvr-grow-shadow" style="background-color:#F1F1F1;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);animation-delay:0.3s;margin:50px;">
          <img src="images/Radha.jpg" data-wow-delay="0.3s" class="img-circle" style="width:50%;height:50%;padding-top:10px">
          <h3>Radha Krishnan</h3>
        </div>
      </div>
  </div>
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
</html>
