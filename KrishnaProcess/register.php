<?php
include('Includes/header.php');
include('Includes/config.php');
?>
<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fname=$_POST['username'];
$mnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$created_date = date("Y-m-d H:i:s");
$sql="INSERT INTO userregistration (name, email, password, mobileNumber, creationDate) VALUES(:fname,:email,:password,:mnumber,:created_date)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':created_date',$created_date,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
header('location:ThankYou.php');
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:ThankYou.php');
}
}
?>
<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>



<!DOCTYPE html>
<html>
  <head>
  
      <title>Register</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   
  </head>
  
  <body>
    
     <div id="flayer">
          <div id="slayer">
    
    <div class="container" id="content">
        
       
        <div class="row">
          <div class="col l3 m3 s12"></div>
          <div class="col l6 m6 s12">
            <form action="" method="POST">
                 <div class="card-panel z-depth-5">
                  <h5 class="center">Register</h5>
                  <p class="center">Join to our community now !</p>
                   <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="username" placeholder="Enter username">
                  </div>
                  
                   <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" class="validate" placeholder="Enter email">
                  </div>
                  
                   <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="pswrd" placeholder="Enter Password">
                  </div>
                  
                    
                   <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="confrmpswd" placeholder="Enter Confirm password">
                  </div>

                  <div class="input-field">
                    <i class="material-icons prefix">phone</i>
                    <input type="number" name="mobilenumber" placeholder="Enter Mobile Number">
                  </div>
                  <p class="right">Already have an account? <a href="signIn.php" class="modal-trigger">login</a></p>
                  <input type="submit" name="submit" value="register" class="btn left col s12">
                
                  <div class="clearfix"></div>
               </div>
            </form>
            
          </div>
            <div class="col l3 m3 s12"></div>
      
          
          
        </div>
    </div>
     </div>
          </div>
      <!-- login form put in the form -->
     <!-- <div class="modal modal-fixed-footer" id="login">
        <form action="" method="POST">
            <div class="modal-conent">
              <div class="container">
                    <h5 class="center">Login</h5>
                  <p class="center">Let's talk & share</p>
                  <div class="row">
                  
                    <div class="col m12 s12">
                      <div class="input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="username">
                    <label>Enter username/email</label>
                  </div>
                  
                  <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="pass1">
                    <label>Enter password</label>
                  </div>
                  <p>
                    <label>
                      <input type="checkbox">
                      <span>Remember me</span>
                    </label>
                  </p>
                    </div>
                    
                  </div>
              </div><!-- end of modal container 
            </div>
            
            <div class="modal-footer">
                  <div class="container">
                         <p class="left">Are you New? <a href="register.php" >Register</a></p>
                         <input type="submit" name="submit" value="login" class="btn pulse">
                          <input type="button"  value="close" class="btn modal-close red">
                      </div>
     
               
                 
                  </div>
            </div>
         </form>
      </div>
    
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--<script>
    
      const login = document.querySelectorAll(".modal");
      M.Modal.init(login,{
        opacity:0.7,
        dismissible:false
      });
      
      document.querySelector("#content").style.display="none";
      document.querySelector("#flayer").classList.add("progress");
      document.querySelector("#slayer").classList.add("indeterminate");
      
      setTimeout(function(){
          document.querySelector("#flayer").classList.remove("progress");
          document.querySelector("#slayer").classList.remove("indeterminate");
          document.querySelector("#content").style.display="block";
      },2000)
    </script>
  </body>
</html>