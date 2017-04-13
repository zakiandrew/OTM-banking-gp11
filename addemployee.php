<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}

$i=date("Y-m-d");
if(isset($_POST["button2"]))
{
$sql="INSERT INTO employees (employee_name, loginid, password, emailid,contactno,createdat)
VALUES
('$_POST[empname]','$_POST[lgid]','$_POST[password]','$_POST[emid]','$_POST[contno]','$i')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  if(mysql_affected_rows() == 1)
	{
$succ = "EMPLOYEE RECORD ADDED SUCCESSFULLY...";
}
}
?>
<html>
<head>
    <?php include('header.php'); ?>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />

<script language="javascript">
 function isNumberKey(evt)
      {

         var charCode = (evt.which) ? evt.which : event.keyCode
		//alert(charCode);
         if (charCode > 65 && charCode < 91 )
      	 {              
		 return true;
	 }
	 else if (charCode > 96 && charCode < 122 )
      	 {
		 return true;
	 }
	 else
	 {
        alert("should be alphabet");
	  	return false;
	 }
   }

</script>

<script type="text/javascript">
function valid()
{
if(isNaN(document.form1.contno2.value))
	{
		alert("ENTER THE NUMERIC VALUE FOR CONTACT NUMBER");
				return false;
	}
	
	if(document.form1.contno2.value=="")
	{
		alert("INVALID CONTACT NUMBER");
		return false;
	}
	if(document.form1.empname.value=="")
	{
		alert("INVALID EMPLOYEE NAME");
		return false;
	}
	if(document.form1.emid.value=="")
	{
		alert("INVALID E-MAIL ID");
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
        
        
        <h2>ADD EMPLOYEE</h2>
   	<p>
   <?php 
	echo $succ;
	 ?>  
   	</p>
   	  <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
   	    <table class="table table-responsive" width="407" border="0">
   	      <tr>
   	        <th scope="col"><div align="left">EMPLOYEE NAME </div></th>
   	        <th scope="col"> <label for="empname"></label>
              <div align="left">
                <input class="form-control" type="text" name="empname" onKeyPress="return isNumberKey(event)"id="empname" >
            </div></th>
          </tr>
   	      
   	     
   	      <tr>
   	        <th scope="row"><div align="left"> CONTACT NUMBER</div></th>
   	        <td><label for="contno2"></label>
            <input class="form-control" type="text" name="contno2" id="contno2"></td>
          </tr>
   	      <tr>
   	        <th scope="row"><div align="left">E-MAIL ID </div></th>
   	        <td><label for="emid"></label>
              <div align="left">
                <input class="form-control" type="text" name="emid" id="emid" >
            </div></td>
          </tr>
   	      <tr>
   	        <th colspan="2" scope="row"> <div align="center">
   	          <input class="btn btn-info" type="submit" name="button2" id="button2" value="ADD" />
            </div></th>
          </tr>
        </table>
      </form>
    </div>
    
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
