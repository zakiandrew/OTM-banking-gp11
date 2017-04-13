<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}

$m=date("Y-m-d");
if(isset($_POST["button"]))
{
    $sql="SELECT * FROM customers WHERE loginid='".$_POST['loginid']."'";
    if(mysql_num_rows(mysql_query($sql)) > 0)
    {
        $logmsg="LOGIN ID ALREADY EXIST";
    }
    else
    {
    $sql="INSERT INTO customers (ifsccode,firstname, lastname,loginid,accpassword,transpassword,accstatus,country,state,city,accopendate) VALUES ('$_POST[brname]','$_POST[firstname]','$_POST[lastname]','$_POST[loginid]','$_POST[accountpassword]','$_POST[transactionpassword]','$_POST[accstatus]','$_POST[country]','$_POST[state]','$_POST[city]','$m')";
    mysql_query($sql);
    $ree=mysql_query("SELECT * FROM customers WHERE loginid='$_POST[loginid]'");
    $arra=  mysql_fetch_array($ree);
    $cusid=$arra['customerid'];
    $sql="INSERT INTO accounts(accno,customerid,accstatus,accopendate,accounttype,accountbalance) VALUES ('$_POST[acc]','$cusid','$_POST[accstatus]','$m','$_POST[acctype]','$_POST[balance]')";
    if (!mysql_query($sql))
    {
    die('Error: ' . mysql_error());
    }
    $logmsg ="1 CUSTOMER RECORD ADDED SUCCESSFULLY.....";
    }
}
$resq = mysql_query("select * from branch");
?>
<html>
<head>
    <?php include('header.php'); ?>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minuto Financials</title>
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
	if(document.form1.brname.value=="")
	{
		alert("INVALID BRANCH NAME");
		return false;
	}
	if(document.form1.firstname.value=="")
	{
		alert("INVALID FIRST NAME");
		return false;
	}
	if(document.form1.lastname.value=="")
	{
		alert("INVALID LAST NAME");
		return false;
	}
	if(document.form1.loginid.value=="")
	{
		alert("INVALID LOGIN ID");
		return false;
	}
	if(document.form1.accountpassword.value=="")
	{
		alert("INVALID ACCOUNT PASSWORD");
		return false;
	}
	if(document.form1.confirmpassword.value=="")
	{
		alert("INVALID CONFIRM PASSWORD");
		return false;
	}
        
        if(!(document.form1.confirmpassword.value == document.form1.accountpassword.value))
	{
		alert("ACCOUNT PASSWORD MISMATCH");
		return false;
	}
        
	if(document.form1.transactionpassword.value=="")
	{
		alert("INVALID TRANSACTION PASSWORD");
		return false;
	}
        if(!(document.form1.transactionpassword.value == document.form1.confirmtransactionpassword.value))
	{
		alert("TRANSACTION PASSWORD MISMATCH");
		return false;
	}
	if(document.form1.accstatus.value=="")
	{
		alert("INVALID ACCOUNT STATUS");
		return false;
	}
	if(document.form1.country.value=="")
	{
		alert("INVALID COUNTRY");
		return false;
	}
	if(document.form1.state.value=="")
	{
		alert("INVALID STATE");
		return false;
	}
	if(document.form1.city.value=="")
	{
		alert("INVALID CITY");
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
        <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
    <p>&nbsp;<?php echo $logmsg; ?></p>
    
    <table class="table table-responsive" >
        <tr>
            <td><label for="brname">BRANCH NAME</label></td>
            <td><select class="form-control" name="brname" id="brname">
                <?php
                    while($rta = mysql_fetch_array($resq) )
                        {
                            echo "<option value='$rta[ifsccode]'>$rta[branchname]</value>";
                        }
                ?> </select> </td>
        </tr>
        <tr>
            <td><label for="firstname">FIRST NAME</label></td>
            <td><input class="form-control" type="text" name="firstname"  id="firstname" /></td>
        </tr>
        <tr>
            <td><label for="lastname">LAST NAME</label></td>
            <td><input class="form-control" type="text" name="lastname" id="lastname" /></td>
        </tr>
        <tr>
            <td><label for="loginid">LOGIN ID</label></td>
            <td><input class="form-control" type="text" name="loginid" id="loginid" /></td>
        </tr>
        <tr>
            <td><label for="accountpassword">ACCOUNT PASSWORD</label></td>
            <td><input class="form-control" type="password" name="accountpassword" id="accountpassword" /></td>
        </tr>
        <tr>
            <td><label for="confirmpassword">CONFIRM PASSWORD</label></td>
            <td><input class="form-control" type="password" name="confirmpassword" id="confirmpassword" /></td>
        </tr>
        <tr>
            <td><label for="transactionpassword">TRANSACTION PASSWORD</label></td>
            <td><input class="form-control" type="password" name="transactionpassword" id="transactionpassword" /></td>
        </tr>
        <tr>
            <td><label for="confirmtransactionpassword">CONFIRM TRANSACTION PASSWORD</label></td>
            <td><input class="form-control" type="password" name="confirmtransactionpassword" id="confirmtransactionpassword" /></td>
        </tr>
        <tr>
            <td><label for="textfield">ACCOUNT STATUS</label></td>
            <td><select class="form-control" name="accstatus" id="accstatus">
                    <option value="">Select</option>
                    <option value="active">Active</option>
                    <option value="inactive">In-active</option>
                </select></td>
        </tr>
        <tr>
            <td><label for="textfield">COUNTRY</label></td>
            <td><select class="form-control" name="country" id="country">
                    <option value="">Select</option>
                    <option value="INDIA">INDIA</option>
                    <option value="USA">USA</option>
                    <option value="ENGLAND">ENGLAND</option>
                </select></td>
        </tr>
        <tr>
            <td><label for="textfield">STATE</label></td>
            <td><select class="form-control" name="state" id="state">
                    <option value="KARNATAKA">KARNATAKA</option>
                    <option value="KERALA">KERALA</option>
                    <option value="WEST BENGAL">WEST BENGAL</option>
                    <option value="MICHIGAN">MICHIGAN</option>
                    <option value="EDGBASTON">EDGBASTON</option>
                </select></td>
        </tr>
        <tr>
            <td><label for="city">CITY</label></td>
            <td><input class="form-control" type="text" name="city" id="city" /></td>
        </tr>
        <tr>
            <td><label for="city">Account Number</label></td>
            <td><input class="form-control" type="number" name="acc" /></td>
        </tr>
         <tr>
            <td><label for="textfield">ACCOUNT TYPE</label></td>
            <td><select class="form-control" name="acctype">
                    <?php $re = mysql_query("SELECT * FROM accountmaster");
                           while ($a=  mysql_fetch_array($re))
                           {
                                echo "<option value='$a[accounttype]'>$a[accounttype]</option>";
                           }?>
                    
                </select></td>
        </tr>
        <tr>
            <td><label for="textfield">Opening Balance</label></td>
            <td><input class="form-control" type="number" name="balance" id="balance" /></td>
        </tr>
        <tr>
            <td><input class="btn btn-info" type="submit" name="button" id="button" value="addcustomers"/></td>
            <td></td>
        </tr>
    </table>
  <br/><br/><br/><br/><br/><br/>
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
