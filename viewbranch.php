<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
$brancharray = mysql_query("select * from branch");
?>
<html>
<head>
<?php include('header.php'); ?>
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
   <h2 align="center" style="color:#3399CC;margin-left:40px;">Change Login password</h2>

        <table class="table table-striped" width="883" border="1" id="">
    <tr>
      <th class="default" width="113" scope="col"><a class="btn btn-info hvr-grow" href="viewbranch.php">BRANCH</a></th>
      <th class="default" width="133" scope="col"><a class="btn btn-info hvr-grow" href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th class="default" width="87" scope="col"><a class="btn btn-info hvr-grow" href="viewemp.php">EMPLOYEES</a></th>
      <th class="default" width="162" scope="col"><a class="btn btn-info hvr-grow" href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
  </table>
  <br /><br />
  <table class="table table-striped" width="883" border="1" id="">
    <tr>
      <th colspan="6" scope="col"><center><a class="btn btn-primary" href="addbranch.php"><span class="glyphicon glyphicon-plus" style="marigin-right:15px"></span>ADD BRANCH</a></center></th>
    </tr>
    <tr>
      <th class="warning" width="113" scope="col">IFSC CODE</th>
      <th class="warning" width="133" scope="col">BRANCH CODE</th>
      <th class="warning" width="87" scope="col">CITY</th>
      <th class="warning" width="162" scope="col">BRANCH ADDRESS</th>
      <th class="warning" width="114" scope="col">STATE</th>
      <th class="warning" width="160" scope="col">COUNTRY</th>
    </tr>
      <?php	
 while($branch = mysql_fetch_array($brancharray))
	  {
echo " <tr>
      <td>&nbsp;$branch[ifsccode]</td>
      <td>&nbsp;$branch[branchname]</td>
      <td>&nbsp;$branch[city]</td>
      <td>&nbsp;$branch[branchaddress]</td>
      <td>&nbsp;$branch[state]</td>
      <td>&nbsp;$branch[country]</td>
    </tr>";
	  }
	  ?>
  </table>
    </div>
    
</div>

 </div>
                  </div>
        </div>
    </div>
<?php include'footer.php' ?>
   
</body>
</html>
