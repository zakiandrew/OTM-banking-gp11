<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location:login.php");
}

if(isset($_POST["button"]))
{
    if (mysql_real_escape_string($_POST[newpass]) == $_POST[newpass])
    {
mysql_query("UPDATE employees SET password='$_POST[newpass]' WHERE loginid = '$_POST[loginid]' AND password='$_POST[oldpass]'");
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
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />


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
  if(!(z==a))
      {
          alert("Password Mismatch");
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
   <h2 align="center" style="color:#3399CC;margin-left:40px;">Change Login password</h2>

        	<form id="form1" name="form1" method="post" action=""onsubmit="return validateForm()">
     
        	  <table class="table table-striped" class="form-control" width="561" height="292" border="0">
        	    <tr>
        	      <th colspan="2" scope="row">&nbsp;
			
				    <?php 
				echo $ctrow;	
				  ?>				  
		</th>
       	        </tr>
        	    <tr>
        	      <th width="341" height="45">LOGIN ID</th>
        	      <td width="210"><input class="form-control" name="loginid" type="text" id="loginid" size="35" readonly="readonly" value="<?php echo $_SESSION["adminid"]; ?>"/>
                  </td>
      	      </tr>
        	    <tr>
        	      <th height="49">OLD PASSWORD</th>
        	      <td><input class="form-control" name="oldpass" type="password" id="oldpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th height="44" >NEW PASSWORD</th>
        	      <td><input class="form-control" name="newpass" type="password" id="newpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th height="43">CONFIRM PASSWORD</th>
        	      <td><input class="form-control" name="confpass" type="password" id="confpass" size="35" /></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <th scope="row">&nbsp;</th>
        	      <td><input class="btn btn-info" type="submit" name="button" id="button" value="UPDATE PASSWORD" /></td>
      	      </tr>
      	    </table>
          </form>
    </div>
    
    <div class="col-md-3">
          <h2 style="color:#3399CC;margin-left:40px;">Dashboard</h2>
                
                <ul>
                <li><a href="admindashboard.php">Home</a></li>
                <li><a href="changepass.php">Change Password</a></li>
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
