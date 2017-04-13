<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}

$m=date("Y-m-d");
if(isset($_POST["add"]))
{
$sql="INSERT INTO loantype (loantype,prefix,maximumamt,minimumamt,interest,status)
VALUES
('$_POST[loantype]','$_POST[prefix]','$_POST[maxamt]','$_POST[minamt]','$_POST[interest]','$_POST[accstatus]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$msg= "1 record added";
}
$sql2 = mysql_query("select * from loantype");
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
	if(document.form1.loantype.value=="")
	{
		alert("INVALID LOAN TYPE");
		return false;
	}
	if(document.form1.prefix.value=="")
	{
		alert("INVALID PREFIX");
		return false;
	}
	if(document.form1.maxamt.value=="")
	{
		alert("INVALID MAXIMUM AMOUNT");
		return false;
	}
	if(document.form1.minamt.value=="")
	{
		alert("INVALID MINIMUM AMOUNT");
		return false;
	}
	if(document.form1.interest.value=="")
	{
		alert("INVALID INTEREST");
		return false;
	}
	if(document.form1.status.value=="")
	{
		alert("INVALID STATUS");
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
          <table class="table table-responsive" width="883" border="1" id="brtable">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
            </table>    
        <br/><br/><br/>
    <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
        <?php if(isset($msg)) echo $msg; ?>
        <table border="1">
            <tr>
                <td><label for="loantype">LOAN TYPE</label></td>
                <td><input class="form-control" type="text" name="loantype" id="loantype" /></td>
            </tr>
            <tr>
                <td><label for="prefix">PREFIX</label></td>
                <td><input class="form-control" type="text" name="prefix" id="prefix" /></td>
            </tr>
            <tr>
                <td><label for="maxamt">MAXIMUM AMOUNT</label></td>
                <td><input class="form-control" type="text" name="maxamt" id="maxamt" /></td>
            </tr>
            <tr>
                <td><label for="minamt">MINIMUM AMOUNT</label></td>
                <td><input class="form-control" type="text" name="minamt" id="minamt" /></td>
            </tr>
            <tr>
                <td><label for="interest">INTEREST</label></td>
                <td><input class="form-control" type="text" name="interest" id="interest" /></td>
            </tr>
            <tr>
                <td><label for="textfield">ACCOUNT STATUS</label></td>
                <td><select class="form-control" name="accstatus" id="accstatus">
                    <option value="">Select</option>
                    <option value="active">active</option>
                    <option value="inactive">inactive</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn btn-info" type="submit" name="add" id="add" value="ADD" /></td>
            </tr>
            
        </table>
        <br/><br/><br/><br/>
    </form>
    <table class="table table-responsive" width="758" border="1">
      <tr>
        <th width="120" scope="col">LOAN  TYPE</th>
        <th width="101" scope="col">PREFIX</th>
        <th width="188" scope="col">MAXIMUM AMOUNT</th>
        <th width="162" scope="col">MINIMUM AMOUNT</th>
        <th width="79" scope="col">INTEREST</th>
        <th width="68" scope="col">STATUS</th>
      </tr>
      <?php
       while($arrayvar = mysql_fetch_array($sql2))
	  {
     echo " <tr>
        <td>&nbsp;$arrayvar[loantype]</td>
        <td>&nbsp;$arrayvar[prefix]</td>
        <td>&nbsp;$arrayvar[maximumamt]</td>
        <td>&nbsp;$arrayvar[minimumamt]</td>
        <td>&nbsp;$arrayvar[interest]</td>
        <td>&nbsp;$arrayvar[status]</td>
      </tr>
	  ";
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
