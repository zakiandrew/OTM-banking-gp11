<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
$m=date("Y-m-d");
if(isset($_POST["addbranch"]))
{
$sql="INSERT INTO branch (ifsccode, branchname,city,branchaddress,state,country) VALUES ('$_POST[ifsccode]','$_POST[branchname]','$_POST[city]','$_POST[branchaddress]','$_POST[country]','$_POST[state]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
else $mess = "1 record added";
}
?>
<html>
<head>
    <?php include('header.php'); ?>
<link href="images/Dashboard-512.png" rel="shortcut icon">

<title>Minuto Financials</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function valid()
{
	if(document.form1.ifsccode.value=="")
	{
		alert("Invalid ifsccode");
		return false;
	}
	if(document.form1.branchname.value=="")
	{
		alert("Invalid branchname");
		return false;
	}
	
     if(document.form1.city.value=="")
	  {
		alert("Invalid city");
		return false;
	  }
	 
}

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

</head>
<body>
   <?php include('navAdmin.php'); ?>
    <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-2">
    
<div class="panel panel-primary">
    <div class="panel-body">
    <div >
   <h2 align="center" style="color:#3399CC;margin-left:40px;">ADD BRANCH</h2>
        
          <table class="table table-responsive table-bordered" width="883" border="1" id="brtable">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
</table>
        
        <label for="ifsccode"></label>
         <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
      <table width="739" border="0">
          <?php if(isset($mess)) echo "<h1>$mess</h1>"; ?>
        <tr>
          <th height="36" scope="row">IFSC CODE </th>
          <td><input class='form-control' type="text" name="ifsccode" id="ifsccode" /></td>
        </tr>
        <tr>
          <th height="38" scope="row">BRANCH NAME</th>
          <td><input class='form-control' type="text" name="branchname" id="branchname"   onKeyPress="return isNumberKey(event)"/></td>
        </tr>
        <tr>
          <th height="32" scope="row"><label for="city">CITY</label>          </th>
          <td><input class='form-control' type="text" name="city" id="city"   onKeyPress="return isNumberKey(event)"/></td>
        </tr>
        <tr>
          <th height="97" scope="row"><label for="branchaddress2">BRANCH ADDRESS</label>          </th>
          <td><textarea class='form-control' name="branchaddress" id="branchaddress" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <th height="39" scope="row"><label for="country2">COUNTRY</label>          </th>
          <td><select class='form-control' name="country" id="country">
            <option value="USA">USA</option>
            <option value="ENGLAND">ENGLAND</option>
            <option value="INDIA">INDIA</option>
          </select></td>
        </tr>
        <tr>
          <th height="37" scope="row"><label for="state2">STATE</label>          </th>
          <td><select class='form-control' name="state" id="state">
            <option value="MAHARASTRA">MAHARASTRA</option>
            <option value="WEST BENGAL">WEST BENGAL</option>
            <option value="KARNATAKA">KARNATAKA</option>
            <option value="MICHIGAN">MICHIGAN</option>
            <option value="EDGBASTON">EDGBASTON</option>
          </select></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input class="btn btn-info" type="submit" name="addbranch" id="addbranch" value="ADD BRANCH" /></td>
        </tr>
      </table>
             <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

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
