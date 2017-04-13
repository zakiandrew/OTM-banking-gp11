<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: login.php");
}

$m=date("Y-m-d");
if(isset($_POST["add"]))
{
$sql="INSERT INTO accountmaster (accounttype,prefix,minbalance,interest)
VALUES
('$_POST[acctype]','$_POST[prefix]','$_POST[minbalance]','$_POST[interest]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$msg= "1 record added";
}
$sql1 = mysql_query("select * from accountmaster");
?>
<html>
<head>
    <?php include('header.php'); ?>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minuto Financials</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function valid()
{
	if(document.form1.acctype.value=="")
	{
		alert("INVALID ACCOUNT TYPE");
		return false;
	}
	if(document.form1.prefix.value=="")
	{
		alert("INVALID PREFIX");
		return false;
	}
	if(document.form1.minbalance.value=="")
	{
		alert("INVALID MINIMUMBALANCE");
		return false;
	}
	if(document.form1.interest.value=="")
	{
		alert("INVALID INTERST");
		return false;
	}
}
</script>
</head>
<body>
    <?php include('navAdmin.php'); ?>
    <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-2">
    
<div class="panel panel-primary">
    <div class="panel-body">
    <div >
        
        <?php if(isset($msg)) echo "<h1>$msg</h1>"; ?>
        <table class="table table-responsive table-bordered" width="883" border="1" id="brtable">
      <tr>
        <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
        <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
        <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
        <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
      </tr>
    </table>
        <br/><br/><br/>
    <p>
    <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
      <table class="table table-responsive" width="507" height="179" border="0">
        <tr>
          <th scope="row">ACCOUNT TYPE</th>
          <td><input class="form-control" type="text" name="acctype" id="acctype" /></td>
        </tr>
        <tr>
          <th scope="row">PREFIX</th>
          <td><input class="form-control" type="text" name="prefix" id="prefix" /></td>
        </tr>
        <tr>
          <th scope="row">MINIMUM BALANCE</th>
          <td><input type="text" name="minbalance" id="minbalance" /></td>
        </tr>
        <tr>
          <th scope="row">INTEREST</th>
          <td><input class="form-control" type="text" name="interest" id="interest" /></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><input type="submit" name="add" id="add" value="ADD" />
            <input class="btn btn-info" type="submit" name="update" id="update" value="UPDATE" /></th>
        </tr>
      </table>
    </form>
    <table class="table table-responsive" width="500" border="1">
        
      <tr>
        <th scope="col">ACCOUNT TYPE</th>
        <th scope="col">PREFIX</th>
        <th scope="col">MINIMUM BALANCE</th>
        <th scope="col">INTEREST</th>
      </tr>			
     <?php
      while($arrayvar = mysql_fetch_array($sql1))
	  {
echo "	  <tr>
        <td>&nbsp; $arrayvar[accounttype] </td>
        <td>&nbsp; $arrayvar[prefix]</td>
        <td>&nbsp; $arrayvar[minbalance] </td>
        <td>&nbsp; $arrayvar[interest]</td>
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
