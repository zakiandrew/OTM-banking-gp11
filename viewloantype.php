<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
$loantypearray = mysql_query("select * from loantype");
?>
<html>
<head>
    <?php include('header.php'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minuto Financials </title>
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
        <br/><br/><br/>
        <table class="table table-responsive" width="883" border="1" id="brtable">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
    <tr>
        <th colspan="4"><a style="text-color:balck;" class="btn btn-info" href="addloan.php">Add new loan type</a></th>
    </tr>
        </table>
        <br/><br/><br/>
    <table height="37" border="1">
      <tr>
        <th width="112" scope="col">LOAN TYPE</th>
        <th width="82" scope="col">PREFIX</th>
        <th width="186" scope="col">MAXIMUM AMT</th>
        <th width="161" scope="col">MINIMUM AMT</th>
        <th width="98" scope="col">INTEREST</th>
        <th width="119" scope="col">STATUS</th>
      </tr>
      <?php	
 while($loantypes = mysql_fetch_array($loantypearray))
	  {
echo "
      <tr>
        <td>&nbsp;$loantypes[loantype]</td>
        <td>&nbsp;$loantypes[prefix]</td>
        <td>&nbsp;$loantypes[maximumamt]</td>
        <td>&nbsp;$loantypes[minimumamt]</td>
        <td>&nbsp;$loantypes[interest]</td>
        <td>&nbsp;$loantypes[status]</td>
        
      </tr>";
	  }
	  ?>
    </table>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
