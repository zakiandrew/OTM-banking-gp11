<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />

<script>
function validateForm()
{
var x=document.forms["form1"]["trpass"].value;
var y=document.forms["form1"]["password"].value;

if (x==null || x=="")
  {
  alert("User id must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("Password must be filled out");
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
        

       <form id="form1" name="form1" method="post" action="makeloanpayment2.php" onsubmit="return validateForm()">
          
           	<h2  style="color:#3399CC;margin-left:40px; text-decoration:underline;">Pay loan</h2>   
           
           	  <table class="table table-striped" width="513" height="177" border="1">
        	    <tr>
        	      <td><strong>Loan Account Number</strong></td>
        	      <td><label>
                  
        	        <select class="form-control" name="payto" id="payto">
        	        	<?php
                                          $result=mysql_query("SELECT * FROM loan WHERE customerid='$_SESSION[customerid]'");
					  while($arrvar = mysql_fetch_array($result))
			  			{
						echo "<option value='$arrvar[loanid]'>$arrvar[loanid]</option>";
			  			}
                                ?>
      	            </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Enter the amount : </strong> </td>
        	      <td><label>
        	        <input class="form-control" type="text" name="pay_amt" id="pay_amt" />
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td colspan="2"><div align="right">
        	        <input class="btn btn-info" type="submit" name="pay" id="pay" value="Pay" />
        	      </div></td>
       	        </tr>
      	    </table>
       	  </form>
    </div>
    
    <div class="col-md-3">
        	<h2  style="color:#3399CC; text-decoration:underline;">Pay loans</h2>
                
                <ul>
                <li><a href="viewloanac.php">View Loan Account</a></li>
                <li><a href="makeloanpayment.php">Pay loan</a></li>
                <li><a href="loanpayment.php">View Loan Payments</a></li>
                </ul>
    </div>
</div>

  </div>
                  </div>
        </div>
    </div>
<?php include'footer.php' ?>
  
</body>
</html>
