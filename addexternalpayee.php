<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

if(isset($_POST["adda3"]))
{
	$sql="INSERT INTO registered_payee
	(slno, payeename,accountnumber,accounttype,bankname,ifsccode)
	VALUES
	('','$_POST[p_name3]','$_POST[ac_no3]','$_POST[ac_type3]','$_POST[bank_name3]','$_POST[code3]')";
	
	if (!mysql_query($sql))
	  {
	  die('Error: ' . mysql_error());
	  }
	$successresult = "1 Record added";
}

if(isset($_POST["update3"]))
{ 					
	mysql_query("UPDATE registered_payee SET payeename='$_POST[p_name3]',accountnumber='$_POST[ac_no3]',accounttype='$_POST[ac_type3]',bankname='$_POST[bank_name3]',ifsccode='$_POST[code3]' WHERE slno='$_POST[pid3]'");
	$updt= mysql_affected_rows();
	if($updt==1)
	{
	$successresult="Record updated successfully";
	}	

}

if(isset($_POST["delete3"]))
{
	mysql_query("DELETE FROM registered_payee WHERE sl_no='$_POST[pid3]'");
	$updt= mysql_affected_rows();
	if($updt==1)
	{
	$successresult="Record deleted successfully";
	}	
}

if(isset($_POST["btncancel"]))
{
	unset($_GET["payeeid"]);
}

$result = mysql_query("select * from registered_payee WHERE customerid='$_SESSION[customerid]'");

if(isset($_GET[payeeid]))        	
{
$result1 = mysql_query("select * from registered_payee WHERE sl_no='$_GET[payeeid]'");
$arrvar1 = mysql_fetch_array($result1);
}

?>
<html>
<head>
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/Dashboard-512.png" rel="shortcut icon">
<script type="text/javascript">
function validateForm()
{
        
	var x	=	document.forms["form1"]["p_name3"].value;
	var y	=	document.forms["form1"]["ac_no3"].value;
	var z	=	document.forms["form1"]["code3"].value;
  if (x==null || x=="")
  {
  alert("Payee name must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("Account number must be filled out");
  return false;
  }
  if (z==null || z=="")
  {
  alert("Ifsc code must be filled out");
  return false;
  }
}
</script>
</head>
<body>
   <?php include('nav2.php'); ?>
    <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary" style="margin-bottom:60px;">
    <div class="panel-body">

    <div>
        
        	<h2  style="color:#3399CC;margin-left:40px; text-decoration:underline;">External payee</h2>
       
        <b></b><form id="form1" name="form1" method="post" action="" onsubmit="return validateForm()">
<?php
if(isset($_POST['adda3']) || isset($_POST['update3']))
{
	?>
        	
       	  <table class="table table-striped" width="519" height="198" border="1">
        	 
        	    <tr>
        	      <td colspan="2"><div align="center"><strong><?php echo $successresult; ?></strong></div></td>
       	        </tr>
        	    <tr>
        	      <td class="info" width="206" height="26"><strong>Payee name</strong></td>
        	      <td class="info" width="222"><label>
                 
        	        <?php echo $_POST[p_name3]; ?>
      	          </label></td>
      	      </tr>
        	    <tr>
        	      <td class="info" height="27"><strong>Bank name</strong></td>
        	      <td><label>
                  <?php
				 echo  $_POST[bank_name3];
					?>        	         
      	      
      	          </label></td>
      	      </tr>
        	    <tr>
        	      <td class="info" height="29"><strong>Account number</strong></td>
        	      <td><label>
        	        <?php echo $_POST[ac_no3]; ?>
      	          </label></td>
      	      </tr>
        	  
        	    <tr>
        	      <td class="info" height="26"><strong>Account type</strong></td>
        	      <td> <?php echo $_POST[ac_type3]; ?></td>
      	      </tr>
        	    <tr>
        	      <td height="26"><strong>IFSC code</strong></td>
        	      <td>
        	    <?php echo $_POST[code3]; ?>
      </td>
      	      </tr>
       	      </table>
<?php
}
else if(isset($_POST['delete3']))
{
?>	  <table class="table table-striped" width="519" height="89" border="1">
        	    <tr>
        	      <td width="428" height="83"><div align="center"><strong><?php echo $successresult; ?></strong></div></td>
      	      </tr>
      	    </table>
<?php
}
else
{
?>      
            
        	  <table class="table table-striped" width="519" height="344" border="1">
        	    <tr>
        	      <td colspan="2"><div align="center"><strong>Add External Payee</strong></div></td>
      	      </tr>
        	    <tr>
        	      <td class="info" width="206"><strong>Payee name</strong></td>
        	      <td class="info" width="222">
        	        <input class="form-control"  name="pid3" type="hidden" id="pid3" value="<?php echo $arrvar1[sl_no]; ?>" />
        	        <input class="form-control" name="p_name3" type="text" id="p_name3" size="35" value="<?php echo $arrvar1['payee_name']; ?>" />
                      </td>
      	      </tr>
        	    <tr>
        	      <td><strong>Bank name</strong></td>
        	      <td><label>
        
				  
				
        	        <select class="form-control" name="bank_name3" id="bank_name3">
        	          <option value="">Select Bank name</option>
					  <?php
					  $arr = array("Canara Bank","HDFC Bank","Axis Bank","Federal Bank");
					foreach($arr as $value)
					{
						if($arrvar1[bank_name] == $value)
						{	
						echo "<option value='$value' selected>$value</option>";	
						}
						else
						{
						echo "<option value='$value'>$value</option>";	
						}
					}
					?>
      	          </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Account number</strong></td>
        	      <td><label>
        	        <input class="form-control" name="ac_no3" type="text" id="ac_no3" size="35"  value="<?php echo $arrvar1['account_no']; ?>" />
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Account type</strong></td>
        	      <td>
                    <?php            
					$arr = array("SAVINGS ACCOUNT","CURRENT ACCOUNT");
					echo "<select name='ac_type3' id='ac_type3'>";
						foreach($arr as $value) 
						{
							if($arrvar1[acc_type] == $value)
							{	
							echo "<option value='$value' selected>$value</option>";
							}
							else
							{
							echo "<option value='$value'>$value</option>";	
							}
						}
					?>
      	        </select>
                </td>
      	      </tr>
        	    <tr>
        	      <td><strong>IFSC code</strong></td>
        	      <td><input class="form-control" name="code3" type="text" id="code3" size="35"  value="<?php echo $arrvar1['ifsc_code']; ?>"  /></td>
      	      </tr>
        	    <tr>
        	      <td height="54" colspan="2"><div align="center">
        	        <?php
if(isset($_GET['payeeid']))        	
{
?>
        	        <input class="form-control" type="submit" name="update3" id="update3" value="update" />
        	        <input class="form-control" type="submit" name="btncancel3" id="btncancel3" value="Cancel" />
        	        <input class="form-control" type="submit" name="delete3" id="delete3" value="Delete" />
        	        <?php
}
else
{
	?>
        	        <input class="btn btn-info" type="submit" name="adda3" id="adda3" value="Add Bank Account" />
        	        <?php
}
?>
      	        </div></td>
      	      </tr>
      	    </table>
<?php
}
?>
       	  </form>
    </div>
    
    <div class="col-md-3" >
                    <?php
if($_GET['view']!="regpayee")
{
	?>
        <h2  style="color:#3399CC; text-decoration:underline;">Transfer Funds</h2>
                
                <ul>
                <li><a href="addexternalpayee.php">Add External Payee</a></li>
                <li><a href="viewexternalpayee.php">View registered Payee</a></li>
                <li><a href="Makepayment.php">Make a Payement</a></li>
                <li><a href="Transactionmade.php?pst=Complete">Payements Made</a></li>
                </ul>
                
<?php
}
?>
         
    </div>
</div>

</div>
    </div>
    
<?php include'footer.php' ?>
    
</body>
</html>
