<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

if(isset($_POST["button"]))
{
    if (mysql_real_escape_string($_POST[newpass]) == $_POST[newpass])
    {
mysql_query("UPDATE customers SET accpassword='$_POST[newpass]' WHERE customerid='$_SESSION[customerid]' AND accpassword='$_POST[oldpass]'");
	if(mysql_affected_rows() == 1)
	{
	$ctrow = "Password updated successfully..";
	}
	else
	{
	$ctrow = "Failed to update Password";
	}
        }
    else
        $ctrow = "Invalid New Password";
}
?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<?php include('header.php');?> 
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /><script>
function validateForm()
{
var x=document.forms["form1"]["loginid"].value;
var y=document.forms["form1"]["oldpass"].value;
var z=document.forms["form1"]["newpass"].value;
var a=document.forms["form1"]["confpass"].value;
if (x==null || x=="")
  {
  alert("Login id must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("Old password must be entered");
  return false;
  }
  if (z==null || z=="")
  {
  alert("Enter the new password");
  return false;
  }
  if (a==null || a=="")
  {
  alert("Password must be confirmed");
  return false;
  }
  if(!(z==a))
      {
          alert("Password Mismatch");
          return false;
      }
}
</script>

</head>
<body>
    
    <?php include('nav2.php');?>
  



 <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary">
    <div class="panel-body">
    <div >
        <h2 style="color:#3399CC;margin-left:40px;">Change Login password</h2>

        	<form onsubmit="return validateForm()" id="form1" name="form1" method="post" action="">
                    <table class="table table-striped table-bodered" width="570" height="314" border="0">
                        <tr>
                            <th colspan="2" scope="row">&nbsp;   <?php echo $ctrow; ?>	</th>
                        </tr>
        	    
                        <tr>
                            <th width="289" height="46" scope="row">LOGIN ID</th>
                            <td width="210"><input class="form-control" name="loginid" type="text" id="loginid" size="35" readonly="readonly" value="<?php echo $_SESSION[customerid]; ?>"/></td>
                        </tr>
                        
                        <tr>
                            <th height="42" scope="row">OLD PASSWORD</th>
                            <td><input class="form-control" name="oldpass" type="password" id="oldpass" size="35" required /></td>
                        </tr>
                        
                        <tr>
                            <th height="47" scope="row">NEW PASSWORD</th>
                            <td><input class="form-control" name="newpass" type="password" id="newpass" size="35" required /></td>
                        </tr>
                            
                        <tr>
                            <th height="46" scope="row">CONFIRM PASSWORD</th>
                            <td><input class="form-control" name="confpass" type="password" id="confpass" size="35" required /></td>
                        </tr>
        	    
                        <tr>
                            <th scope="row">&nbsp;</th> <td>&nbsp;</td>
                        </tr>
        	    
                        <tr>
                            <th height="60" scope="row">&nbsp;</th>
                            <td><input class="btn btn-info hvr-grow" type="submit" name="button" id="button" value="UPDATE PASSWORD" /></td>
                        </tr>
                </table>
          </form>
    </div>
    
    <div class="col-md-3" >
        <h2 style="color:#3399CC;margin-left:40px;">Personalise</h2>
                
                <ul>
                <li><a href="changelogpass.php">Change Login Password</a></li>
                <li><a href="changetranspass.php">Change Transaction Password</a></li>
                <li><a href="custprofile.php">Customer Profile</a></li>
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
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
