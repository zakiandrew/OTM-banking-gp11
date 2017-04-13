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
mysql_query("UPDATE customers SET transpassword='$_POST[newpass]' WHERE customerid = '$_SESSION[customerid]' AND transpassword='$_POST[oldpass]'") or mysql_error();
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
<?php include('header.php');?>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script>
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
  alert("Old password must be filled out");
  return false;
  }
  if (z==null || z=="")
  {
  alert("New password must be filled out");
  return false;
  }
   if (a==null || a=="")
  {
  alert("Password must be confirmed");
  return false;
  }
  if (!(z == a))
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
             <div class="col-sm-10 col-md-offset-2">
    
<div class="panel panel-primary">
    <div class="panel-body">
    <div >
        <h2 style="color:#3399CC;margin-left:40px;">Change Transaction password</h2>

        	<form id="form1" name="form1" method="post" action=""onsubmit="return validateForm()">
     
        	  <table class="table table-striped table-bodered" width="459" height="239" >
        	    <tr>
        	      <th colspan="2" scope="row">&nbsp;
			<?php echo $ctrow;?>				  
                      </th>
                    </tr>
        	    <tr>
        	      <th scope="row">LOGIN ID                </th>
        	      <td><div class="col-md-8">
                      <input class="form-control" name="loginid" type="text" id="loginid" size="35" readonly="readonly" value="<?php echo $_SESSION["customerid"]; ?>"/></div>
                    </td>
      	      </tr>
        	    <tr>
        	      <th scope="row">OLD PASSWORD</th>
        	      <td><div class="col-md-8"><input class="form-control" name="oldpass" type="password" id="oldpass" size="35" required /></div></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">NEW PASSWORD           </th>
        	      <td><div class="col-md-8"><input class="form-control" name="newpass" type="password" id="newpass" size="35" required  /></div></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">CONFIRM PASSWORD</th>
        	      <td><div class="col-md-8"><input class="form-control" name="confpass" type="password" id="confpass" size="35" required /></div></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
        	      <td><div class="col-md-8"><input class="btn btn-info hvr-grow" type="submit" name="button" id="button" value="UPDATE PASSWORD" /></div></td>
      	      </tr>
      	    </table>
                    </form>
    </div>
    
    <div class="col-md-3">
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
