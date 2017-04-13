<?php
session_start();
error_reporting(0);

include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$dts = date("Y-m-d h:i:s");
mysql_query("UPDATE customers SET lastlogin='$dts' WHERE customerid='$_SESSION[customerid]'");
$sqlq = mysql_query("select * from transaction where paymentstat='Pending'");
$mailreq = mysql_query("select * from mail where reciverid='".$_SESSION['customerid']."'");
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
    
<div class="panel panel-primary" style="margin-bottom:50px;">
    <div class="panel-body">

    <div>
        
        	<h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">Alerts and messages</h2>
     
     		 <table class="table table-striped" width="548" border="0" id="maintable">
     		   <tr>
     		     <td width="293">Customer Name</td>
     		     <td width="245"><?php echo $_SESSION[customername]; ?></td>
   		     </tr>
     		   <tr>
     		     <td>Branch code</td>
     		     <td><?php echo $_SESSION[ifsccode];?></td>
   		     </tr>
     		   <tr>
     		     <td>User logged on</td>
     		     <td><?php echo $_SESSION[lastlogin]; ?> </td>
   		     </tr>
     		   <tr>
     		     <td>Pending payments</td>
     		     <td><?php echo mysql_num_rows($sqlq); ?></td>
   		     </tr>
     		   <tr>
     		     <td>Unread mails</td>
     		     <td><?php echo mysql_num_rows($mailreq); ?></td>
   		     </tr>
   		   </table>
    </div>
    
    <div >
         	<h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">My Accounts</h2>
               
                <ul align="right" >
                <li><a  style=" text-size:20px;" href="accountsummary.php">Accounts summary</a></li>
                <li><a  style=" text-size:20px;" href="ministatements.php">Mini statement</a></li>
                <li><a  style=" text-size:20px;" href="accdetails.php">Account details</a></li>
                <li><a  style=" text-size:20px;" href="stateacc.php">Statements of accounts</a><p>&nbsp;</p></li>
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
