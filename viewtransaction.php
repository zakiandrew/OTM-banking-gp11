<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}

$transactionarray = mysql_query("select * from transactions");
?>
<html>
<head>
    <?php include('header.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minuto Financilas</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/Dashboard-512.png" rel="shortcut icon">
</head>
<body>
   <?php include('navAdmin.php'); ?>
    <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-2">
    
<div class="panel panel-primary">
    <div class="panel-body">
    <div >
    <table class="table table-responsive" width="880" border="1">
      <tr>	
        <th width="120" scope="col">TRANSACTION ID</th>
        <th width="95" scope="col">DATE</th>
        <th width="60" scope="col">PAYEE ID</th>
        <th width="95" scope="col">RECEIVER ID</th>
        <th width="104" scope="col">AMOUNT</th>
        <th width="128" scope="col">PAYMENT STATUS</th>
      </tr>
      
      <?php	
 while($transaction = mysql_fetch_array($transactionarray))
	  {
echo "
      <tr>
        <td>&nbsp;$transaction[transactionid]</td>
        <td>&nbsp;$transaction[paymentdate]</td>
        <td>&nbsp;$transaction[payeeid]</td>
        <td>&nbsp;$transaction[receiveid]</td>
        <td>&nbsp;$transaction[amount]</td>
		<td>&nbsp;$transaction[paymentstat]</td>
      </tr>";
	  }
	  ?>
    </table>
    </div>
   
</div>


<?php include'footer.php' ?>
    </div>
                  </div>
        </div>
    </div>
</body>
</html>
