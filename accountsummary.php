<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$results = mysql_query("SELECT * FROM accounts WHERE  customerid='$_SESSION[customerid]'");
?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include('nav2.php');?> 
    
  <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary">
    <div class="panel-body">

    <div>
        
        	<h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">ACCOUNTS SUMMARY</h2>
        
     		 <table class="table table-striped" width="616" border="1">
     		   <tr>
     		     <th class='info' scope="col">ACCOUNT TYPE</th>
     		     <th class='info' scope="col">NAME</th>
     		     <th class='info' scope="col">ACCOUNT NUMBER</th>
     		     <th class='info' scope="col">BRANCH</th>
     		     <th class='info' scope="col">CURRENCY</th>
     		     <th class='info' scope="col">A/C BALANCE</th>
   		     </tr> 
             <?php
			 while($arrow = mysql_fetch_array($results))
			{
				echo "<tr><td>$arrow[accounttype]</td>
     		     <td>$_SESSION[customername]</td>
     		     <td>$arrow[accno]</td>
     		     <td>$_SESSION[ifsccode]</td>
     		     <td>INR</td>
     		     <td>$arrow[accountbalance]</td></tr>";
			}
		   ?>
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
