<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$result = mysql_query("select * from registered_payee WHERE customer_id='$_SESSION[customer_id]'");
?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include('nav2.php'); ?>
     <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary" style="margin-bottom:60px;">
    <div class="panel-body">

    <div>
       
        	<h2  style="color:#3399CC;margin-left:40px; text-decoration:underline;">Loan Payment</h2>

        	<form id="form1" name="form1" method="post" action="">
        	  <p style="font-size:18px;">Using this option, you can make loan payment or query your loan payments, balance details and get the current status about them.</p>
       	  </form>
    </div>
    
    <div class="col-md-3" >
        <h2  style="color:#3399CC;margin-left:40px; text-decoration:underline;">Pay Loans</h2>
        
                
                <ul>
                <li><a href="viewloanac.php">View Loan Account</a></li>
                <li><a href="makeloanpayment.php">Pay loan</a></li>
                <li><a href="loanpayment.php">View Loan Payments</a></li>
                </ul>
    </div>
</div>
 </div>
                  </div>
         </div>
    </div>

<?php include'footer.php' ?>
   
</body>
</html>
