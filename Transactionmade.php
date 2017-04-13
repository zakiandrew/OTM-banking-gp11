<?php
session_start();
include("connect.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');
?>
<html>
<head>
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/Dashboard-512.png" rel="shortcut icon">
</head>
<body>
  
     <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary" style="margin-bottom:60px;">
    <div class="panel-body">

    <div>
         <a href="transferfunds.php"><button class="btn btn-danger">Back</button> </a> 
        <br>
        	<h2  style="color:#3399CC;margin-left:40px; text-decoration:underline;">Transactions made</h2>
     
        	  <table class="table table-striped" border="1">
        	    <tr>
        	      <td  class='info' height="27"><strong>Transaction No.</strong></td>
                  <td class='info' ><strong>Transaction date</strong></td>
                  <td class='info' ><strong>Payee ID</strong></td>
                  <td class='info' ><strong>Receiver ID</strong></td>
        	      <td class='info' ><strong>Amount</strong></td>
            	  <td class='info' ><strong>Status</strong></td>
      	      </tr>
<?php
$query="SELECT * FROM transactions where (payeeid=".$_SESSION['customerid'].") or (receiveid=".$_SESSION['customerid'].") ORDER BY  paymentdate DESC";
$rectrans=mysql_query($query);
while($recs = mysql_fetch_array($rectrans))
{	
$transid=$recs['transactionid'];
$transdate=$recs['paymentdate'];
$payeeid=$recs['payeeid'];
$receiveid=$recs['receiveid'];
    $amount=$recs['amount'];
    $status=$recs['paymentstat'];	
		echo "<tr>
        	      <td>$transid</td>
        	      <td>$transdate</td>
        	      <td>$payeeid</td>
        	      <td>$receiveid</td>
                      <td>$amount</td>
        	      <td>$status</td></tr>";
}
?>
      	    </table>
        	  <p><input class="btn btn-primary" type="button" value="Print Transaction detail" onClick="window.print()"></p>
    </div>
    
    <div class="col-md-3">
    	<h2  style="color:#3399CC; text-decoration:underline;">Transfer Funds</h2>
       
                <ul>
                <li><a href="addexternalpayee.php">Add External Payee</a></li>
                <li><a href="viewexternalpayee.php">View registered Payee</a></li>
                <li><a href="Makepayment.php">Make a Payement</a></li>
                <li><a href="Transactionmade.php?pst=Complete">Payements Made</a></li>
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
