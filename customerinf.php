<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location:login.php");
}
if(isset($_REQUEST['Del']))
{
    $query = "DELETE FROM customers WHERE customerid = '$_REQUEST[custid]'";
    mysql_query($query);
    $query = "DELETE FROM accounts WHERE customerid = '$_REQUEST[custid]'";
    mysql_query($query);
    header("Location:viewcustomer.php?suc=1");
    exit(0);
}
$results = mysql_query("SELECT * FROM customers where customerid='$_GET[custid]'");
$custid=$_GET['custid'];
while($arrow = mysql_fetch_array($results))
{
	$custname = $arrow[firstname]." ".$arrow['lastname'];
	$ifsccode=$arrow[ifsccode];
	$loginid=$arrow[loginid];
	$accstatus=$arrow[accstatus];
	$city=$arrow[city];
    $state=$arrow[state];
	$country=$arrow[country];
    $accopendate=$arrow[accopendate];
    $lastlogin=$arrow[lastlogin];
}
$resultsd = mysql_query("SELECT * FROM accounts where customerid='$_GET[custid]'");
mysql_num_rows($resultsd);
?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minuto Financials </title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include('navAdmin.php'); ?>
    <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-2">
    
<div class="panel panel-primary">
    <div class="panel-body">
    <div >
        <br/><br/>
  <form id="form2" name="form2" method="post" action="">
    <blockquote>
      <table class="table table-responsive class='form-control'" width="519" height="242" border="1" id="brtable">
        <tr>
          <th width="224" height="32" scope="col">
           
             &nbsp;CUSTOMER NAME

          </th>
          <td width="285"><?php echo $custname; ?></td>
        </tr>
        <tr>
          <td><strong>
            <label for="branch">&nbsp; BRANCH</label>
          </strong></td>
          <td>&nbsp;<?php echo $ifsccode; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="loginid">&nbsp; LOGIN ID</label>
          </strong></td>
          <td>&nbsp;<?php echo $loginid; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="accstatus">&nbsp; ACCOUNT STATUS</label>
          </strong></td>
          <td>&nbsp;<?php echo $accstatus; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="city">&nbsp; CITY</label>
          </strong></td>
          <td>&nbsp;<?php echo $city; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="state">&nbsp; STATE</label>
          </strong></td>
          <td>&nbsp;<?php echo $state; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="country">&nbsp; COUNTRY</label>
          </strong></td>
          <td>&nbsp;<?php echo $country; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="accopendate">&nbsp; ACCOUNT OPEN DATE</label>
          </strong></td>
          <td>&nbsp;<?php echo $accopendate; ?></td>
        </tr>
        <tr>
          <td><strong>
          <label for="lastlogin">&nbsp; LAST LOGIN</label>
          </strong></td>
          <td>&nbsp;<?php echo $lastlogin; ?></td>
        </tr>
      </table>
  
        
        <br/><br/><br/>

    </blockquote>
    <table width="777" border="1" id="brtable">
      <tr>
        <th colspan="5" scope="col"><strong>CUSTOMER ACCOUNTS</strong></th>
        </tr>
      <tr>
        <th width="100" scope="col"><strong>ACCOUNT NO</strong></th>
        <th width="75" scope="col"><strong>STATUS</strong></th>
        <th width="90" scope="col"><strong>OPEN DATE</strong></th>
        <th width="90" scope="col"><strong>ACCOUNT TYPE</strong></th>
        <th width="85" scope="col"><strong>BALANCE</strong></th>
      </tr>
      <?php
	 while($arrow=mysql_fetch_array($resultsd))
	 {
	 ?>
        <tr>
        <td>&nbsp;<?php echo $arrow[accno];?></td>
        <td>&nbsp;<?php echo $arrow[accstatus];?></td>
        <td>&nbsp;<?php echo $arrow[accopendate];?></td>
        <td>&nbsp;<?php echo $arrow[accounttype];?></td>
        <td>&nbsp;<?php echo $arrow[accountbalance];?></td>
      </tr>
     <?php
     }
	 ?>
</table>
      <input class='form-control' type="hidden" value="<?php echo $custid ?>" name="custid">
      <input  class='btn btn-danger'type="submit" value="Delete Customer" name="Del">
    <p>&nbsp;</p>
  </form>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
                  </div>
        </div>
    </div>
</body>
</html>
