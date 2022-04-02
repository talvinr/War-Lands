<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
     <img src="images/backgroundimg.jpg" class="background">     
     <form action="signup-check.php" method="post" class="form" onsubmit="return validateForm()" name="email_form">
     

     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Email</label>
          <?php if (isset($_GET['emailid'])) { ?>
               <input type="text" 
                      name="emailid" 
                      placeholder="Email"
                      value="<?php echo $_GET['emailid']; ?>"><br>
             

          <?php }else{ ?>
               <input type="text" 
                      name="emailid" 
                      placeholder="Email"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="loginscreen.php" class="ca">Already have an account?</a>
     </form>
</body>


<script>

function validateForm() {

var x = document.forms["email_form"]["emailid"].value;

if (x.includes("aston.ac.uk")) {
     return true;

}

alert("this is not a valid aston email")
 return false; 

}

</script>



</html>