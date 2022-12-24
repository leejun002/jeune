<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #222222;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.closecontainer {
  margin: 5px 0 10px 0;
  position: relative;
}

.container {
  padding: 25px;
}

p.msg {
  font-size: 15px;
  color: red;
}

#error-msg-holder {
  display: none;
}

.bottomcontainer {
  padding: 20px 30px 35px 30px;
}

span.membership {
  float: left;
}

span.psw {
  float: right;
}

/* The Modal (background) */
.modal {
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.2); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #a0a0a0;
  width: 80%; /* Could be more or less, depending on screen size */
}

.close {
  position: absolute;
  right: 15px;
  top: 3px;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,.close:focus {
  opacity: 0.8;
  cursor: pointer;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
</style>
<script src="https://kit.fontawesome.com/1a2cc02835.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="modal">
  <form action="register.php" method="post" class="modal-content">
    <div class="closecontainer">
      <span onclick="location.href='mainpage.html'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label><b>Create Your ID</b></label>
      <?php include('errors.php'); ?>
      <input type="text" placeholder="ID" name="id" value="<?php echo $id; ?>" required>
      <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
      <input type="password" placeholder="Password" name="password" required>
      <input type="password" placeholder="Confirm Password" name="confirm_password" required>
      <div class="msg-holder" id="error-msg-holder">
        <p class="msg" id="error-msg"><i class="fa-solid fa-exclamation"></i> Password is not the same.</span></p>
      </div>
      <button type="submit">Sign up</button>
    </div>
    <div class="bottomcontainer" style="background-color:#f1f1f1">
      <span class="membership">Already have an ID? <a href="login.php">Sign in</a></span>
    </div>
  </form>
</div>
</body>
</html>
