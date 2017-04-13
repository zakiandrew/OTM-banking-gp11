<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$result = mysql_query("select * from customers WHERE customerid='$_SESSION[customerid]'");
$loan=mysql_query("select * from loan where customerid='$_SESSION[customerid]'");
?>
<html>
<head>
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/Dashboard-512.png" rel="shortcut icon">
</head>
<body>
   <?php include('nav2.php'); ?>
    <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary" style="margin-bottom:60px;">
    <div class="panel-body">

    <div>
        	<h2  style="color:#3399CC;margin-left:40px; text-decoration:underline;">Loan Accounts</h2>

        	<form id="form1" name="form1" method="post" action="">

        	  <table class="table table-striped" width="575" border="1">
                <tr>
                  <td class="info" width="35" height="42"><strong>Loan No.</strong></td>
                  <td class="info" width="57"><strong>Loan Type</strong></td>
                  <td class="info" width="58"><strong>Account Holder</strong></td>
                  <td class="info" width="58"><strong>Loan amount</strong></td>
                  <td class="info" width="61"><strong>Interest</strong></td>
                  <td class="info" width="41"><strong>Created at</strong></td>
                </tr>					
                 <?php
				  $i=1;
			  while($arrvar = mysql_fetch_array($loan))
                          {
        	           echo " <tr>
                                <td height='30'>$arrvar[loanid] </td>
                                <td>$arrvar[loantype]</td>
				<td>$_SESSION[customername]</td>
				<td>$arrvar[loanamt]</td>
                                <td>$arrvar[interest] %</td>
				<td>$arrvar[startdate]</td>

      	      </tr>";
				$i++;
			  }
			  ?>
              </table>
          
       	  </form>
    </div>
    
    <div class="col-md-3">
        <h2  style="color:#3399CC; text-decoration:underline;">Pay Loans</h2>
    
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
