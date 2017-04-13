<?php ob_start();?>
<?php 
include('connect.php');
session_start();
//Unset the variables stored in the session
unset($_SESSION['id']);
?>  
<?php include("header.php");?>


<!DOCTYPE html>
<html>
    <head>
        <?php include('navigation.php');?>
    <style>

.connexion {
      position: absolute;
    left:0px;
    transition: all 1.7s;
}

.enregistrer {
      position: absolute; 
    transition: all 1.0s;
}
.active-section {
    position: absolute;
    right:800px;
}
.remove-section {
    position: absolute;
    left: 800px;
}
.big_container {
 
  position: relative;
  width: 650px;
  height: 770px;
  margin: auto;
  margin-top: 70px;
  overflow:hidden;
}     
        
        
        </style>    
        
        
        
    </head>
   <body>
      
       <?php 
      /*  if($_SERVER["REQUEST_METHOD"]== "POST"){
            if(isset($_POST['signup'])){
               */
                ?>
       <div class="big_container ">
       <div class="connexion">
       <div style="padding-top:20px; padding-left:130px;" class="container" >
            <div class="row">
                <div class="col-sm-10">
                  
                     <div id="directory" class="col-sm-6">
    <div class="panel panel-info panel-center ">
  <div class="panel-heading">
        <center><h3 class="panel-title headings">Login</h3> </center>
   
      
  </div>
        <div class="panel-body " >
       
            <!--<center><div >
           <img class="img-circle lets-bounce" height="80px" width="80px" src="images/choosen image" alt="OTM banking"/>
            </div></center>-->
            
       <!---    <div class="alert alert-warning" >
            <a href="#" class="close" data-dismiss="alert" aria-label="close"><span class='glyphicon glyphicon-remove-circle'></span></a>
  <strong>First Time Users:</strong> Please create a new account.
            <br>
            <br>
 <strong>Existing Users:</strong> Please login with your existing account details.
</div> -->
            
      <!--MESSAGE form begins-->
        <form class="form-horizontal" style="margin-top:20px" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on" method="post">
            <div class="form-group">
    <label class="control-label col-sm-3" for="email">Username:</label>
      <div class="col-sm-8">           
    <div class="input-group input-group-sm">
        <input  type="name" class="form-control" name="email" placeholder='Enter your username' required="required" autocomplete="on" ><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
    </div>
  </div>
</div>                
       
  <div class="form-group">
    <label class="control-label col-sm-3" for="password">Password:</label>
       <div class="col-sm-8">
    <div class="input-group input-group-sm">
        <input type="password" class="form-control" name="password" required="required"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
    </div>
  </div>
        </div>
             <div class="form-group">
                
    <div class="col-sm-offset-3 ">
         <div class="col-sm-4">
      <button type="submit" name="login" class="btn btn-success">Sign In</button>
    </div>
  </div>

          </form>
              <a href="#enregistrer"  name="signup" class="btn btn-danger btn-enregistrer active">Create Account</a>   
             </div>
</div> 
        <br>
        <br>
      <div class="panel-footer">
         <center> <a href="#" data-toggle='modal' data-target='#forgotModal'  class="hvr-grow">Forgot Password?</a> </center>
      </div>
    </div>
</div> 
  </div>
   </div>
               </div>
       </div>
       
       
        <div class="enregistrer active-section">
       <div style=" padding-left:130px;" class="container">
            <div class="row">
                <div class="col-sm-8">
                  
                     <div class="col-sm-8">
    <div class="panel panel-info panel-center">
  <div class="panel-heading">
    <center><h3 class="panel-title headings">Sing Up with Minuto Financilas</h3></center>
  </div>
  <div class="panel-body">
          <!--registration form begins-->
        <form class="form-horizontal" id="contactForm" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  autocomplete="on" method="post" data-toggle="validator">

   
    <label class="control-label col-sm-2" for="oragnization name">Organization</label>
            <div class="form-group">
    <div class="col-sm-12">
         <div class="input-group input-group-sm">
      <input type="text" class="form-control" name="name" required id="name" /><span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
    </div> 
 
    </div>
  </div>
           
<label class="control-label col-sm-2" for="username">Username</label>
            <div class="form-group">
    <div class="col-sm-12">
         <div class="input-group input-group-sm">
      <input type="text" class="form-control" name="username" required id="username" /><span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
    </div> 
 
    </div>
  </div>            
 <label class="control-label col-sm-2" for="email">Email</label>
            <div class="form-group">
    <div class="col-sm-12">
         <div class="input-group input-group-sm">
      <input type="email" class="form-control" name="email" required id="email" /><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
    </div> 
 
    </div>
  </div>
<label class="control-label col-sm-2" for="password1">Password</label>
            <div class="form-group">
    <div class="col-sm-12">
         <div class="input-group input-group-sm">
      <input type="password" class="form-control" name="password" required id="pass1" /><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
    </div> 
 
    </div>
  </div>
 <label class="control-label col-sm-5" for="account-type">Retype Password</label>
            <div class="form-group">
    <div class="col-sm-12">
         <div class="input-group input-group-sm">
      <input type="password" class="form-control" name="pass2" required id="pass2" /><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
    </div> 
 
    </div>
  </div>
            <hr/>
     <h4 style="color:blue; text-decoration:underline; ">Activate Products</h4>
     <h5 style="color:red;">Please select at least one of the products</h5>
     <div class="checkbox">
     <!-- <label><input type="checkbox" name="payroll" value="1" >PAYROLL</label>-->
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="financials" value="1">FINANCIALS</label>
    </div>
    <div class="checkbox disabled">
      <label><input type="checkbox" name="cbs" value="1">CBS</label>
    </div>
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        
     <center> <button style="padding-right:20px;" type="submit" name="register" class="btn btn-success hvr-grow">Register</button>
        <input class="btn btn-danger hvr-grow" type="reset" value="Clear Form" />
        </center>
        
    </div>
  </div>
                   
  </form>

    
     </div>
      <div class="panel-footer">
          <a>Return to Homepage</a>
       <a href="#connexion"  role="button" class="btn btn-danger btn-connexion">Cancel</a>
      </div>
  

  </div>
   
</div>
           </div>
     </div>
    <!--end of addin contact panel-->
     </div>
       </div>
       
       
       <?php
    /*   
            }
        }
                else{
                */
                ?>
       <script language='javascript'>	
$('.btn-enregistrer').click(function() {
  $('.connexion').addClass('remove-section');
	$('.enregistrer').removeClass('active-section');
  $('.btn-enregistrer').removeClass('active');
  $('.btn-connexion').addClass('active');
});

$('.btn-connexion').click(function() {
  $('.connexion').removeClass('remove-section');
	$('.enregistrer').addClass('active-section');	
  $('.btn-enregistrer').addClass('active');
  $('.btn-connexion').removeClass('active');
});

</script>
   
       </div>
       <?php 
               // }
      
   include('footer.php');
    ?>     
    <!-- Modal for reseting password--------------------------------------------------------------------------------------------------------->
<div id="forgotModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content ">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title"><span style='padding-right:10px;' class="glyphicon glyphicon-lock"></span>PASSWORD RESET</h4></center>
      </div>
      <div class="modal-body">
          <!--login form begins-->
        <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on" method="post">
  <div class="form-group">
    <label class="control-label col-sm-3" for="email">E-Mail:</label>
       <div class="col-sm-8">
    <div class="input-group input-group-sm">
        <input  type="email" class="form-control" name="email" placeholder='example@yahoo.com' required="required" autocomplete="on" ><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
    </div>
  </div>
</div>
             <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="reset" onclick="return confirm(' A reset link will been sent to your email account');" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span>Send</button> 
    </div>
  </div>    
          </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default"   data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
    
</div>
    <!--end of Reset modal-->
       
       
       
       
       
       
    </body>
      
</html>
       
       
    <!--- php codes to send email for the registration of a user --------------------------------------------------------------------------------------------- -->
       <?php
// ----------------------------------------------- functions to register applicants  --------------------------------------------------------
           
            function register($id,$email,$name,$password,$username,$payroll,$financials,$cbs,$time){
               
                //query to check f data already exists in database
                 $sql=mysql_query("SELECT * FROM organizations WHERE Email='$email' ");
                if(mysql_num_rows($sql)>=1){
                 echo "<script language='javascript'>
				alert('Your Organization already has an account');
				window.location = 'home.php';
				</script>
				"; 
                 }
                else{
                     $q=mysql_query("INSERT INTO organizations(ID,Email,Password,Name,Username,Payroll,Financials,CBS,LastLogin) VALUES ('$id','$email','$password','$name','$username','$payroll','$financials','$cbs','$time')");
                    if($q){
                     //php code used in sending activation link into email using phpmailer
                        $link="Thank You ".$name." for registering with Minuto Financials";
                     
                        error_reporting(E_ALL);
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2;
$mail->From = "minutofinancing@gmail.com";
$mail->FromName = "OTM banking";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "minutofinancing@gmail.com"; // SMTP username
$mail->Password = "minutofinancing2016?"; // SMTP password
$mail->AddAddress($email, "Applicant"); //replace myname and mypassword to yours
$mail->AddReplyTo("minutofinancing@gmail.com", "Minuto Admin");
$mail->WordWrap = 100; // set word wrap
//$mail->AddAttachment("c:\\temp\\js-bak.sql"); // add attachments
//$mail->AddAttachment("c:/temp/11-10-00.zip");

$mail->IsHTML(true); // set email format to HTML
$mail->Subject = $subject;
$mail->Body =$link;
if($mail->Send()) {
                  echo" <script language='javascript'>
              alert('An introduction mail has been sent to email');
				window.location = 'home.php';
				</script>";
                  
                  }

            else {
                echo" <script language='javascript'>
              alert('Email sending was unsuccessful');
				window.location = 'home.php';
				</script>";
            }
                        }
              
                    }
                }       
            
  // ------------------------------------------------------------------------------------------------------------------------------------                       
       
       
      //functionto hash passwords
  $salt =md5('minutogh');     
       function hashword($string, $salt){
           $string = crypt($string, '$1$'.$salt.'$');
       }
       
    
            
            function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}   
  
            
            
 if($_SERVER["REQUEST_METHOD"]== "POST"){
  if (isset($_POST['register']))  {
      
     
     include('connect.php');
$time=date("Y/m/d h:i:sa");
     //sanitising the user inputs  
      $name=test_input($_POST['name']);
      $username=test_input($_POST['username']);
      $email=test_input($_POST['email']);
      $password=test_input($_POST['password']);
      $pass2=test_input($_POST['pass2']);
      $payroll=test_input($_POST['payroll']);
      $financials=test_input($_POST['financials']);
      $cbs=test_input($_POST['cbs']);
                     
         // check if account type is selected //
      if ($name =='') {
   
        echo" <script language='javascript'>
         alert('Please the input field for name is required');
				window.location = 'home.php';
				</script>";
    }
    elseif($password != $pass2){
        echo" <script language='javascript'>
                  alert('Please your passwords does not match');
				window.location = 'home.php';
				</script>";
    }
      elseif($username =='') {
   
        echo" <script language='javascript'>
         alert('Please the input field for username is required');
				window.location = 'home.php';
				</script>";
    }
       elseif($email =='') {
   
        echo" <script language='javascript'>
         alert('Please the input field for email is required');
				window.location = 'home.php';
				</script>";
    }
        elseif($payroll=='' and $financials =='' and $cbs=='') {
   
        echo" <script language='javascript'>
         alert('Please select at least one of the products');
				window.location = 'home.php';
				</script>";
    } 
     
        
            else{
                $password = md5($password);
          register('',$email,$name,$password,$username,$payroll,$financials,$cbs,$time);
           }
    }
      
 }
?>
<!--- login authentication -------------------------------------------------------------------------------------> 
        <?php 
     
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        include('connect.php');
            if(isset($_POST['login'])){
                $username=test_input($_POST['email']);
                $password=test_input($_POST['password']);
               
                $local = mysql_query("SELECT * FROM organizations WHERE username = '$username'");
                
                if(mysql_num_rows($local)){
                    $row = mysql_fetch_assoc($local);
                    $username=$row['username'];
                    $pass = $password;
                    
                    
                
                    if(md5($pass) == $row['Password']){
                        //checking if account is in the current admission year
                      
                                 session_regenerate_id();
                                    $_SESSION['username'] = $row['Username'];
                                $_SESSION['ID'] = $row['ID'];
                                       
                          
                       
                                        session_write_close();
                                echo "<script language ='javascript'>
                               alert('WELCOME $username');
                             window.location='index.php'; 
                             </script>";
                        
                                    header('index.php');
                                     exit();
                                 
                                  }
                               else { 
                                   echo "<script language ='javascript'>
                               alert('password is invalid');
                             window.location='home.php'; 
                             </script>";
                                }   
                        
                    
                               }
                            
                          else { echo "<script language ='javascript'>
                               alert('Invalid Username');
                             window.location='home.php'; 
                             </script>";
                                }   
                     
                }
                     }
//------------------------------------------------------------------------------------------------------------------------------------
       

    
        ?>

       
       <!--- php code for sending reset linkinto user's email -------------------------------------------------------------------------------------> 
        <?php 
    if($_SERVER["REQUEST_METHOD"]== "POST"){
            if(isset($_POST['reset'])){
                $username=test_input($_POST['email']);
                
                //php code used in sending activation link into email using phpmailer
                        $link="Please click on this link to reset your password: http://localhost/passwordreset.php?id=".$username;
                     
                        error_reporting(E_ALL);
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2;
$mail->From = "vvuadmissions@vvu.edu.gh";
$mail->FromName = "Valley View University Admissions";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "vvuadmissions@vvu.edu.gh"; // SMTP username
$mail->Password = "vvuroot1"; // SMTP password
$mail->AddAddress($username, "Applicant"); //replace myname and mypassword to yours
$mail->AddReplyTo("vvuadmissions@vvu.edu.gh", "Admissions Admin");
$mail->WordWrap = 100; // set word wrap
//$mail->AddAttachment("c:\\temp\\js-bak.sql"); // add attachments
//$mail->AddAttachment("c:/temp/11-10-00.zip");

$mail->IsHTML(true); // set email format to HTML
$mail->Subject = 'PASSWORD RESET';
$mail->Body =$link;

if($mail->Send()) {
                  echo" <script language='javascript'>
              alert('A Reset link has been successfully sent into your mail');
				window.location = 'home.php';
				</script>";
                  
                  }

            else {
                echo" <script language='javascript'>
              alert('Email sending was unsuccessful');
				window.location = 'home.php';
				</script>";
            } 
                
       
            }
    }
     ?>  