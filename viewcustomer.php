<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location:login.php");
}
$custarray = mysql_query("select * from customers");
?>
<html>
<head>
    <?php include('header.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minuto Financials</title>
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
        <?php if(($_REQUEST['suc'])==1) echo "<h1>Deleted Successfully</h1>"?>
    <table class="table table-responsive" width="900" border="1" id="brtable">
        <tr>
            <th colspan="8"><a class="btn btn-default" href="customer.php"><strong>Add Customer</strong></a></th>
        </tr>
        <br/><br/>
    <tr>
      <th width="100" scope="col">CUSTOMER ID</th>
      <th width="89" scope="col">LOGIN ID</th>
      <th width="102" scope="col">NAME</th>
      <th width="108" scope="col">ACCOUNT <br /> STATUS</th>
      <th width="108" scope="col">LOCATION</th>
      <th width="159" scope="col">ACCOPEN DATE</th>
      <th width="125" scope="col">LAST LOGIN</th>
      <th width="70" scope="col">MORE</th>
    </tr>
    <?php	
 while($customer = mysql_fetch_array($custarray))
	  {
echo " <tr>
      <td>&nbsp;$customer[customerid]</td>
      <td>&nbsp;$customer[loginid]</td>
      <td>$customer[firstname]&nbsp;$customer[lastname]</td>
        <td>&nbsp;$customer[accstatus]</td>
      <td>&nbsp;$customer[city]<br> $customer[state]<br> $customer[country]</td>
     <td>&nbsp;$customer[accopendate]</td>
      <td>&nbsp;$customer[lastlogin]</td>
	  <th>&nbsp;<a class='btn btn-default' href='customerinf.php?custid=$customer[customerid]'>MORE</a>&nbsp;</th>
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
