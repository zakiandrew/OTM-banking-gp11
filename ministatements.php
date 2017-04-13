<?php
session_start();
error_reporting(0);

include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$acc= mysql_query("select * from accounts where accno='$_POST[accno]'");
while($rows = mysql_fetch_array($acc))
{
	$Accountnumber = $rows["accno"];
	$Accountbalance= $rows["accountbalance"];
}
$result = mysql_query("select * from accounts WHERE customerid='$_SESSION[customerid]'");
?>
<html>
<head>
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/Dashboard-512.png" rel="shortcut icon">
</head>
<body>
    <?php include('nav2.php'); ?>
 <?php require_once('nav2.php') ?>


 <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary">
    <div class="panel-body">

    <div>
        
        <?php
if(isset($_POST[submit]))
{
?>
        <h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">Mini statements</h2>
     

        	<form id="form1" name="form1" method="post" action="">
        	  <table class="table table-striped" width="561" border="1">
        	    <tr>
        	      <th colspan="2" scope="col">Balance Details <?php echo $_SESSION[customername]; ?>
                  [Details on <?php echo date("d-m-Y");?>]</th>
       	        </tr>
        	    <tr>
        	      <td width="275"><strong>Account number</strong></td>
        	      <td width="270"><?php echo $Accountnumber;?>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td><strong>Account Balance</strong></td>
        	      <td><?php echo $Accountbalance; ?>&nbsp;</td>
      	      </tr>
              
      	    </table>
        	  <br />
        	  <table class="table table-striped" width="558" border="1">
  <tr>
    <th colspan="4" scope="col">Transaction made</th>
    </tr>
  <tr>
    <td class="info"><strong>SI NO</strong></td>
    <td class="info"><strong>Date</strong></td>
    <td class="info"><strong>withdrawals</strong></td>
    <td class="info"><strong>Deposits</strong></td>
  </tr>
   <?php
                    $customid=$_SESSION['customerid'];
                    $count=1;
                   $query="SELECT * FROM transactions WHERE (payeeid='$customid') OR (receiveid='$customid')";
                   $result=mysql_query($query);
			  while(($arrvar = mysql_fetch_array($result))&&($count <= 3 ))
			  {
                                echo " <tr>
                                             <td>$count</td>
                                             <td>$arrvar[paymentdate]</td>";
                                if ($arrvar['payeeid']==$customid)
                                       echo "<td>$arrvar[amount]</td><td> </td>";
                              else if ($arrvar['receiveid']==$customid)
                                       echo "<td> </td> <td>$arrvar[amount]</td>";
                              echo "</tr>";
                              $count=$count+1;
			  }
			  ?>
</table>


       	  </form>
   <?php
}
else
{
	?>
        <h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">Select an Account Number</h2>  
    
           	<form id="form1" name="form1" method="POST" action="">
        	  <table width="520" height="127" border="0">
        	    
        	    <tr>
                    
        	      <td valign="top">  <div class="col-md-6">Account number  <label for="ac_no"></label>
                    
        	        <select class="form-control" name="accno" id="accno">
        	            <?php
        	           while($arrvar = mysql_fetch_array($result))
					  	{
        		        echo "<option value='$arrvar[accno]'>$arrvar[accno]</option>";
               			}
					   ?>
                  </select>
                         
       	          <input class="btn btn-info" type="submit" name="submit" id="submit" value="Select account number" /> </div></td>
      	      </tr>
      	    </table>
       	  </form>
           <?php
}
?>
    </div>
    
    <div>
         <h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">My Accounts</h2> 
                <ul>
                <li><a href="accountsummary.php">Accounts summary</a></li>
                <li><a href="ministatements.php">Mini statement</a></li>
                <li><a href="accdetails.php">Account details</a></li>
                <li><a href="stateacc.php">Statements of accounts</a><p>&nbsp;</p></li>
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
