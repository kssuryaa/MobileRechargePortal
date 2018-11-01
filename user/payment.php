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
    <!--datepicker stylesheets-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
    <style media="screen">
    body, html {
        height: 100%;
    }

    .bg {
        background-image: url("images/hand_phone.jpg");
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
session_start()
?>
</head>
<body style="background-color:#191919">
  <!--Navbar begins-->
    <div class="row" style="width:100vw;margin:0px">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a class="navbar-brand" href="./index.php"><img src="images/rechargelogo.png" alt="BusT logo" style="width:128px;height:60px; "></a></li>
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
    <div class="container" style="margin-top:150px">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong> Payment </strong>
          </div>
          <div class="panel-body">
            <form role="form" action="./ty.php" method="post">
              <fieldset>
                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-credit-card"></i>
                        </span>
                        <div style="margin-left:15px">
                          <input type="radio" name="card" value="Credit Card" checked> Credit Card
                          <span style="margin-left:15px">
                            <input type="radio" name="card" value="Debit Card"> Debit Card
                          <span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input class="form-control" placeholder="Name on card" name="name" type="text" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-credit-card-alt "></i>
                        </span>
                        <input class="form-control" placeholder="Card no." name="Card no." type="text" required pattern="[0-9]{13,16}">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon" placeholder="Expiry date">
                          <i class="fa fa-calendar "></i>
                        </span>
                      <input style="background-color:transparent" type="date" class="form-control" required>
                    </div>
                  </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input class="form-control" placeholder="CVV" name="cvv" type="text" required pattern="[0-9]{3}">
                      </div>
                    </div>
                    <div class="form-group" >
                      <input type="submit" class="btn btn-lg btn-primary btn-block"  value="Recharge">
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
  </html>
