<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$results = mysql_query("SELECT * FROM accounts where customerid='98683'");
while($arrow = mysql_fetch_array($results))
{
	$acno = $arrow[accno];
	$status = $arrow[accstatus];	
	$accopen = $arrow[accopendate];	
	$acctype = $arrow[accounttype];	
	$accbal = $arrow[accountbalance];
}
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
    
<div class="panel panel-primary">
    <div class="panel-body">

    <div>
        
        	<h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">Account Details</h2>
  
     		 <table class="table table-striped" width="560" border="1">
     		   <tr>
     		     <th colspan="2" scope="col"><?php echo $_SESSION[customername] ?></th>
   		     </tr>
     		   <tr>
     		     <td width="282" height="38">ACCOUNT NUMBER</td>
     		     <td width="262">&nbsp;<?php echo $acno ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="36">ACCOUNT TYPE</td>
     		     <td>&nbsp;<?php echo $acctype ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="37">ACCOUNT STATUS</td>
     		     <td>&nbsp;<?php echo $status ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="34">ACCOUNT HOLDER</td>
     		     <td>&nbsp;<?php echo $_SESSION[customername] ?></td>
   		     </tr>
     		   <tr>
     		     <td height="34">ACCOUNT OPEN DATE</td>
     		     <td>&nbsp;<?php echo $accopen ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="39">ACCOUNT BALANCE</td>
     		     <td>&nbsp;<?php echo $accbal ; ?></td>
   		     </tr>
   		   </table>
    </div>
    
    <div>
        <h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">My Accounts</h2>
               
                <ul>
                <li><a href="accountsummary.php">Accounts summary</a></li>
                <li><a href="ministatements.php">Mini statement</a></li>
                <li><a href="accdetails.php">Account details</a></li>
                <li><a href="stateacc.php">Statements of accounts</a><p>&nbsp;</p></li>
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
