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
    $( function() {
      $( "#datepicker1" ).datepicker();
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
        background-image: url("images/hand_phone.jpeg");
        height: 100%;/
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .overlay{
      position:absolute;
      width:100%;
      height:100%;
      background:rgba(0,0,0,0.6);
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
include('rcreg.php');
include('../conn.php');
?>
</head>

<body style="color:white">
  <!--Navbar begins-->
    <div class="row" style="width:100vw;margin:0px">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a class="navbar-brand" href="index.php"><img src="../images/rechargelogo.png" alt="rechargelogo" style="width:128px;height:60px; "></a></li>
            <li><a style="padding-right:30px;padding-left:30px;" href="./index.php">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['name']))
              echo "<li><a style='padding-right:30px;padding-left:30px;' href='index.php'>".$_SESSION['name']."</a></li>";
              echo "<li><a href='../logout.php' style='paddtravel-insurance-baging-right:30px;padding-left:30px;''><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
              ?>
          </ul>
        </div>
      </nav>
    </div>
  <div class="bg">
    <div class="overlay">
      <h1 class="wow fadeInDown" style="z-index:3;text-align:center;padding-top:20%;color:#b2b2b2;font-size:4vw;margin-bottom:50px"><b>Quick online recharge</b></h1>
        <div class="container">
          <div style="background-color:black;background-color: rgba(0,0,0,0.4);padding-top:70px">
            <form role="form" action="./payment.php" method="GET">
              <div class="form-inline row" style="padding-bottom:50px">
                <div class="form-group has-feedback "  style="padding-left:60px">
                  <input style="background-color:transparent" type="text" name="mnum" class="form-control" placeholder="Mobile no." reqired pattern="[789][0-9]{9}">
                  <i class="fa fa-phone form-control-feedback" style="padding-top:10px  "aria-hidden="true"></i>
                </div>
                <div class="form-group has-feedback" name="typ" value="<?php if ((isset($typ))&&($typErr==false)){echo $typ;}?>"  style="padding-left:10px">
                  <label class="radio-inline">
                  <input type="radio"style="background-color:transparent" value="PREPAID">Prepaid
                  </label>
                  <label class="radio-inline">
                  <input type="radio"style="background-color:transparent" value="POSTPAID">Postpaid
                  </label>
                </div>
                <div class="form-group "  style="padding-left:10px">
                  <input style="background-color:transparent;color:#b2b2b2" type="text" list="destination" class="form-control" placeholder="Operator" name="oprtr" required="true">
                  <datalist id="destination">
                  <?php
                  $query="select * from tboprtr";
                  $result=mysqli_query($conn,$query);
                  while($array = mysqli_fetch_array($result))
                  {
                  echo "<option value='$array[1]'>";
                  }
                  ?>  
                  </datalist>
                </div>
                <div class="form-group" style="padding-left:10px">
                  <select class="form-control" style="background-color:transparent;color:#b2b2b2" id="sel1" placeholder="state">
                  <option class="active">State</option>
                  <option>Andhra Pradesh</option>
                  <option>Tamilnadu</option>
                  <option>Rajasthan</option>
                  <option>Madhya Pradesh</option>
                  </select>
                </div>
                <div class="form-group has-feedback "  style="padding-left:10px">
                  <input style="background-color:transparent" type="text" class="form-control" placeholder="Amount">
                  <i class="fa fa-inr form-control-feedback" style="padding-top:10px  "aria-hidden="true"></i>
                </div>
                <div class="form-group" >
                <input type="submit" style="background-color:transparent;color:#b2b2b2;margin-top:40px;margin-left:35vw" class="btn btn-default" value="Recharge Now">
                </div>
                </div>
              </form>
      </div>
      </div>
      </div>
    </div>

   <div class="container-fluid"  style="background-color:#191919;padding-bottom:60px">
    <h2 style="text-align:center;padding-top:30px;padding-bottom:10px;font-size:40px" class="wow fadeInDown">Top service providers</h2>
    <hr>
    <div class="row wow slideInLeft" style="margin-top:70px;text-align:center">
      <div class=" col-md-4  hvr-grow-shadow" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
         <img src="../images/airtel-logo.png" class="img-rounded" style="width:20vw;height:250px;margin-top:15px">
      </div>
      <div class="col-md-7">
        <h2 style="text-align:left;font-size:50px">Airtel</h2>
        <p style="text-align:justify;font-size:20px">Bharti Airtel is India’s top telecom service provider, headquartered in Gurgaon. The company, driven by Sunil Bharti Mittal, has operations in 20 countries across Asia and Africa. In 2012, it has become fourth-largest telecom service provider worldwide in terms of subscriber base. In India, the telco operates in all 22 telecom circles with offerings that include 2G, 3G and 4G wireless services, mobile commerce, fixed line, high speed DSL broadband, IPTV, DTH and enterprise services including national and international long distance services.</p>
      </div>
    </div>
    <div class="row wow slideInRight" style="margin-top:70px;text-align:center">
      <div class="col-md-8">
        <h2 style="text-align:right;font-size:50px">Jio</h2>
        <p style="text-align:justify;font-size:20px">Jio offers next generation digital services over an end-to-end all-IP network, which can be seamlessly upgraded to 5G. In addition to the existing pan India 2300 MHz spectrum and 1800 MHz in 14 circles, Jio invested more than Rs 10,000 crore during to acquire 800 MHz spectrum in 10 circles and 1800 MHz spectrum in 6 circles.The Mumbai-based company had purchased Broadband Wireless Access (BWA) spectrum in the 2300 MHz band from Infotel Broadband Services Private Limited (IBSPL) which had won it in a bidding process in 2010. In 2013, the company came into being after getting a unified licence from the telecom department to offer telephony services including voice calls.
 </p>
      </div>
      <div class=" col-md-4 hvr-grow-shadow" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
         <img src="../images/jio-logo.png" class="img-rounded" style="width:20vw;height:250px;margin-top:15px">
      </div>
    </div>
    <div class="row wow slideInLeft" style="margin-top:70px;text-align:center">
      <div class=" col-md-4  hvr-grow-shadow" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
         <img src="../images/vodafone-logo.png" class="img-rounded" style="width:20vw;height:250px;margin-top:15px">
      </div>
      <div class="col-md-7">
        <h2 style="text-align:left;font-size:50px">Vodafone</h2>
        <p style="text-align:justify;font-size:20px">Vodafone India, which is the country’s second-largest service provider, operates as a fully-owned subsidiary of UK-based Vodafone group..Mumbai-based Vodafone operates in all the 22 telecom service areas with more than 200 million subscribers across 2G, 3G and 4G technologies. The telco, in order to strengthen its play in home broadband segment, had acquired Internet service provider YOU Broadband in April 2016.</p>
      </div>
    </div>
  </div>

  <div class=" container-fluid"  style="background-color:#323232;padding-bottom:100px">
      <div class="row" style="margin-top:70px;text-align:center;">
          <h2 class="wow fadeInDown" style="text-align:center;margin-bottom:40px;font-size:40px" >Why recharge with us?</h2>
          <hr>
          <div class="col-md-offset-4 col-md-2 wow fadeInLeft hvr-grow-shadow" style="margin:50px;margin-left:250px">
            <img src="images/ind.png" style="width:150px;height:150px;padding-top:10px">
            <h4>Trusted by over 8L+ happy customers</h4>
            <p>Recharge with one of most trusted recharge portals in India</p>
          </div>
          <div class=" col-md-2  wow fadeInLeft hvr-grow-shadow" style="animation-delay:0.2s;margin:50px;margin:50px;">
            <img src="images/pricetag.png" data-wow-delay="0.2s" style="width:150px;height:150px;padding-top:10px">
            <h4>Lowest Price Guaranteed</h4>
            <p>We guarantee you always get the lowest price when you recharge for your mobile</p>
          </div>
          <div class=" col-md-2  wow fadeInLeft hvr-grow-shadow" style="animation-delay:0.3s;margin:50px;">
            <img src="images/customer.png" data-wow-delay="0.3s" style="width:150px;height:150px;padding-top:10px;">
            <h4>24x7 Customer Support</h4>
            <p>Round the clock support for all your recharge related queries</p>
        </div>
      </div>
  </div>
<!--footer-->
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
