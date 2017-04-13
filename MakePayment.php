<?php
session_start();
error_reporting(0);

include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$acc= mysql_query("select * from accounts where customerid='".$_SESSION['customerid']."'");
?>
<html>
<head>
<link href="images/Dashboard-512.png" rel="shortcut icon">
<?php include('header.php'); ?>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <?php include('nav2.php'); ?> 
     <div class="container ">
              <div class="row">
             <div class="col-sm-10 col-md-offset-1">
    
<div class="panel panel-primary" style="margin-bottom:60px;">
    <div class="panel-body">

    <div>
    
        	
        
        <form id="form1" name="form1" method="post" action="Makepayment2.php">
            <?php if(isset($_REQUEST['error']))
                 {      if($_REQUEST['error']=='nodetails')
                            echo "<h3 style=\"color:red; width:fill-available; text-align:center;\">Deatils Missing or Invalid.<br/>Payment Failed</h3>";
                        else if ($_REQUEST['error']=='passwordmismatch')
                            echo "<h3 style=\"color:red; width:fill-available; text-align:center;\">Password Mismatch<br/>Payment Failed</h3>";
                        else if ($_REQUEST['error'] == 'insufficientbalance')
                            echo "<h3 style=\"color:red; width:fill-available; text-align:center;\">Insufficient Balance<br/>Payment Failed</h3>";
                        else
                            echo "<h3 style=\"color:red; width:fill-available; text-align:center;\">".$_REQUEST['error']."</h3>";
                 }
                            ?>
  <h2  style="color:#3399CC;margin-left:40px; text-decoration:underline;">Make Payment</h2>
     	
           	  <table class="table table-striped" width="591" height="177" border="1">
        	    <tr>
        	      <td><strong>Pay to</strong></td>
        	      <td><label>
        	        <select class="form-control" name="payto" id="payto">
        	        <?php   $result=  mysql_query("SELECT * FROM registered_payee");
					  while($arrvar = mysql_fetch_array($result))
			  {
				echo "<option value='".$arrvar['slno']."'>".$arrvar['payeename']."</option>";
			  }  
                          $result1= mysql_query("SELECT * FROM customers");
					  while($arrvar1 = mysql_fetch_array($result1))
			  {         if (!($arrvar1['customerid'] == $_SESSION['customerid']))
				echo "<option value='".$arrvar1['customerid']."'>".$arrvar1['firstname']." ".$arrvar1['lastname']."</option>";
			  }
			  ?>
                           
      	            </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td><strong>Payment amount</strong></td>
        	      <td>
        	        <input class="form-control" type="number" min="10" name="pay_amt" id="pay_amt"/>
                      </td>
      	      </tr>
        	    <tr>
        	      <td><strong>Select Account number</strong></td>
        	      <td><label>
        	        <select class="form-control" name="ac_no" id="ac_no">
        	 			<?php  while($rowsacc = mysql_fetch_array($acc))
						{
							echo "<option value='$rowsacc[accno]'>$rowsacc[accno]</option>";
						}
						?>
      	            </select>
      	        </label></td>
      	      </tr>
        	    <tr>
        	      <td colspan="2"><div align="right">
        	        <input class="btn btn-info" type="submit" name="pay" id="pay" value="Pay" />
        	      </div></td>
       	        </tr>
      	    </table><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>        	  
       	  </form>
    </div>
    
    <div class="col-md-3">
        <h2  style="color:#3399CC; text-decoration:underline;">Transfer Funds</h2>
      
                
                <ul>
                <li><a href="addexternalpayee.php">Add External Payee</a></li>
                <li><a href="viewexternalpayee.php">View registered Payee</a></li>
                <li><a href="Makepayment.php">Make a Payement</a></li>
                <li><a href="Transactionmade.php?pst=Complete">Payements Made</a></li>
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
