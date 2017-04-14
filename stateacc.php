<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');
$results = mysql_query("SELECT * FROM accounts where customerid='".$_SESSION['customerid']."'");
while($arrow = mysql_fetch_array($results))
{
	$acno = $arrow[accno];	
	$arrow[customerid];
	$status = $arrow[accstatus];	
	$primaryacc = $arrow[primaryacc];	
	$accopen = $arrow[accopendate];	
	$acctype = $arrow[accounttype];	
	$accbal = $arrow[accountbalance];	
	$unclearbalance = $arrow[unclearbalance];	
	$accruedinterest = $arrow[accuredinterest];
}
?>
<html>
<head>
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<link href="images/Dashboard-512.png" rel="shortcut icon">
</head>
<body>
    
    <?php include('nav2.php'); ?> 
   
   <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary">
    <div class="panel-body">

    <div>
        
        	<h2 align="center" style="color:#3399CC;margin-left:40px; text-decoration:underline;">STATEMENTS OF ACCOUNT</h2>
        
        <p>&nbsp;</p>
        <form name="numtrans" action="">
            <table class="table table-striped" width="496" border="1">
        <tr>
            
            <td width="260"><div class="col-md-6"> Last<input class='form-control' type="number" name="numtran">
            Transaction <input class='btn btn-info' type="submit" name="numtranbut" id="button2" value="DISPLAY" />    </div> </td>
            
        </tr>
            </table>
        </form>
    
    <p>&nbsp;</p>
    <br/><br/><br/>
    <table class="table table-bordered" width="667" border="1">
      <tr>
        <td class='info'><strong>Date & Time</strong></td>
        <td class='info'><strong>Transaction ID</strong></td>
        <td class='info'><strong>Withdrawals</strong></td>
        <td class='info'><strong>Deposits</strong></td>
        <td class='info'><strong>Withdrawn By</strong></td>
        <td class='info'><strong>Deposited by</strong></td>
        <td class='info'><strong>Amount</strong></td>
      </tr>
    
    <?php 
        if (isset($_REQUEST['numtran']))
        {
            $customid=$_SESSION['customerid'];
            $count=1;
            $query="SELECT * FROM transactions WHERE (payeeid='$customid') OR (receiveid='$customid')";
            $result=mysql_query($query);
            while(($arrvar = mysql_fetch_array($result))&&($count <= $_REQUEST['numtran'] ))
            {
                                    echo " <tr> <td>".$arrvar[paymentdate]."</td> ";
                                
                                     echo"<td>".$arrvar['transactionid']."</td>";
                                    if ($arrvar['payeeid']==$customid)
                                    {   echo "<td>$arrvar[amount]</td><td> </td>";
                                        $q="SELECT * FROM registered_payee WHERE slno='".$arrvar['receiveid']."'";
                                         $r=  mysql_query($q);
                                     
                                     $rarry= mysql_fetch_array($r);
                                     echo "<td>$rarry[payeename]</td><td> </td>";
                                     echo "<td>$arrvar[amount]</td>";
                                    }
                              else if ($arrvar['receiveid']==$customid)
                              {echo "<td> </td> <td>$arrvar[amount]</td>";
                                  $r=  mysql_query("SELECT * FROM customers WHERE customerid='".$arrvar['payeeid']."'");
                                     $rarry= mysql_fetch_array($r);
                                       echo "<td> </td> <td>$rarry[firstname] $rarry[lastname] </td>";
                                       echo "<td>$arrvar[amount]</td>";
                              }
                              echo "</tr>";
                              $count=$count+1;
            }
        }
        else if (isset($_REQUEST['button']))
        {
            
                
        }
        
    ?>
      </table>
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
