<?php
session_start();
 include "../modal/pdo.php";
 include "../modal/product.php";
       if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['phone'];
        $image = $_FILES['avatar']['name'];
        $confirmPassword = $_POST['confirmPassword'];
        $role =0;
        if($image!=='') {
            // $productImage =  $_FILES['productImage']['name'];
            $tempImage = $_FILES['avatar']['tmp_name'];
            // Di chuyển tệp ảnh mới
            move_uploaded_file($tempImage, '../upload/'.$image);
        }
        $isUsernameExists = checkUsernameExists($username,$email);
        $isEmailExists = checkEmailExists($email);
        if ($isUsernameExists) {
          $_SESSION['validUsername'] = "The username already exists. Please choose a different username.";
        }elseif($isEmailExists){
          $_SESSION['validEmail'] = "The email already exists. Please choose a different email.";
        }elseif($password !== $_POST['confirmPassword']){
          $_SESSION['checkPass'] = "Re-enter password does not match";
        }else {
          register($username, $password, $fullName, $image, $email, $address, $tel, $role);
          $_SESSION['registered'] = "Đăng kí thành công";
        }
        }                 
?>
<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>Register form</title> 
  <link rel="stylesheet" href="./style.css"> 
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>	
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
}        
.btn-grad {
            background-image: linear-gradient(to right, #ffb347 0%, #ffcc33  51%, #ffb347  100%);
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
         
body 
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #000;
}
section 
{
  position: absolute;
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2px;
  flex-wrap: wrap;
  overflow: hidden;
}
section::before 
{
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, #ffb347 0%, #ffcc33  51%, #ffb347  100%);
  animation: animate 5s linear infinite;
}
@keyframes animate 
{
  0%
  {
    transform: translateY(-100%);
  }
  100%
  {
    transform: translateY(100%);
  }
}
section span 
{
  position: relative;
  display: block;
  width: calc(6.25vw - 2px);
  height: calc(6.25vw - 2px);
  background: #181818;
  z-index: 2;
  transition: 1.5s;
}
section span:hover 
{
    background: linear-gradient(to right, #ffb347 0%, #ffcc33  51%, #ffb347  100%);
}

section .signin
{
  position: absolute;
  width: 400px;
  background: #222;  
  z-index: 1000;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  border-radius: 4px;
  box-shadow: 0 15px 35px rgba(0,0,0,9);
}
section .signin .content 
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 40px;
}
section .signin .content h2 
{
  font-size: 2em;
  color:#ffb347;
  text-transform: uppercase;
}
section .signin .content .form 
{
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 5px;
}
section .signin .content .form .inputBox
{
  position: relative;
  width: 100%;
  margin-bottom: 3px;
}
section .signin .content .form .inputBox input 
{
  position: relative;
  width: 100%;
  background: #333;
  border: none;
  outline: none;
  padding: 25px 10px 2.5px;
  border-radius: 4px;
  color: #fff;
  font-weight: 500;
  font-size: 1em;
  height: 37px;
}
section .signin .content .form .inputBox i 
{
  position: absolute;
  left: 0;
  padding: 8px 8px;
  font-style: normal;
  color: #aaa;
  transition: 0.5s;
  pointer-events: none;
}
.signin .content .form .inputBox input:focus ~ i,
.signin .content .form .inputBox input:valid ~ i
{
  transform: translateY(-7.5px);
  font-size: 0.7em;
  color: #fff;
}
.signin .content .form .links 
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.signin .content .form .links a 
{
  color: #fff;
  text-decoration: none;
}
.signin .content .form .links a:nth-child(2)
{
    font-weight: 600;
}
.signin .content .form .inputBox input[type="submit"]
{
  padding: 10px;
  color: #fff;
  font-weight: 600;
  font-size: 1em;
  letter-spacing: 0.05em;
  cursor: pointer;
  background-image: linear-gradient(to right, #ffb347 0%, #ffcc33  51%, #ffb347  100%);
  /* margin: 10px; */
    padding: 5px 15px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;            
    box-shadow: 0 0 20px #eee;
    border-radius: 10px;
    display: block;
    animation: boxshadow 4s infinite;
}
@keyframes boxshadow {
  0% {
    box-shadow: 0 0 20px #eee;
  }
  50% {
    box-shadow: 0 0 50px #ffb347; 
  }
  100% {
    box-shadow: 0 0 20px #eee;
  }
}
input[type="submit"]:active
{
  opacity: 0.6;
}
@media (max-width: 900px)
{
  section span 
  {
    width: calc(10vw - 2px);
    height: calc(10vw - 2px);
  }
}
@media (max-width: 600px)
{
  section span 
  {
    width: calc(20vw - 2px);
    height: calc(20vw - 2px);
  }
}
 </style>
 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 
  <div class="signin"> 
    <div class="content"> 

     <h2>Sign Up</h2> 

     <form  class="form" method="post" enctype="multipart/form-data"> 

      <div class="inputBox"> 

       <input name="username" id="username" type="text" required> <i>Username</i> 
       <p style="color:red;"><?php 
        echo isset($_SESSION['validUsername']) ? $_SESSION['validUsername'] : '';
        unset($_SESSION['validUsername']);
    ?></p>
      </div> 
      <div class="inputBox"> 

       <input name="email" id="email" type="email" required> <i>Email</i> 
       <p style="color:red;"><?php 
        echo isset($_SESSION['validEmail']) ? $_SESSION['validEmail'] : '';
        unset($_SESSION['validEmail']);
    ?></p>
      </div> 

      <div class="inputBox"> 

       <input name="password" id="password" type="password" required> <i>Password</i> 

      </div>
      <div class="inputBox"> 

<input name="confirmPassword" id="confirmPassword" type="password" required> <i>Confirm password</i> 
<p style="color:red;"><?php 
        echo isset($_SESSION['validUsername']) ? $_SESSION['validUsername'] : '';
        unset($_SESSION['validUsername']);
    ?></p>
</div>
      <div class="inputBox"> 

       <input name="fullName" id="fullName" type="text" required> <i>Full name</i> 

      </div> 
      <div class="inputBox"> 

    <input id="address" name="address" type="text" required> <i>Address</i> 

    </div> 
    <div class="inputBox"> 

    <input id="phone" name="phone" type="text" required> <i>Phone</i> 

    </div> 
    <div class="inputBox">
    <label for="avatar" style="color:white;">Ảnh đại diện:</label>
    <input type="file" id="avatar" name="avatar"  required>
    </div>
      <div class="links"> <p style="color:white;">You have an account? </p><a href="./login.php">Sign in</a></div> 
      <div class="inputBox"> 

       <input type="submit" name="register" value="Register"> 

      </div> 

     </form> 

    </div> 

   </div> 
  </section>
  
 
 
  <!-- partial --> 
  <!-- Jquery -->
  <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.0.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="../js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="../js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="../js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="../js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="../js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="../js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="../js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="../js/finalcountdown.min.js"></script>
	<!-- Ytplayer JS -->
	<script src="../js/ytplayer.min.js"></script>
	<!-- Nice Select JS -->
	<script src="../js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="../js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="../js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="../js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="../js/easing.js"></script>
	<!-- Active JS -->
	<script src="../js/active.js"></script>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script>
   <?php if(isset($_SESSION['registered'])):?>
	alertify.set('notifier','position', 'top-right');
    alertify.success('<p style="color:white;"><?php echo $_SESSION['registered']; ?></p>');
 <?php unset($_SESSION['registered']);?>
<?php endif;?>
 </script>
 </body>

</html>