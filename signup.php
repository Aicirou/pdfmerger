<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp | PDFMerger</title>
  <!-- ===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="style.css">

</head>

<body style="min-height: 100vh;">

  <div class="form signup">
    <span class="title">Signup</span>

    <form action="signup.inc.php" method="POST">
      <div class="error">
        <?php

        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p> **fill in All fields!</p>";
          } else if ($_GET["error"] == "invaliduid") {
            echo "<p> **Choose a proper username!</p>";
          } else if ($_GET["error"] == "invalidemai") {
            echo "<p> **Choose a proper email!</p>";
          } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p> **Passwords doesn't match!</p>";
          } else if ($_GET["error"] == "stmtfailed") {
            echo "<p> **Something went wrong, try again!</p>";
          } else if ($_GET["error"] == "usernametaken") {
            echo "<p> **Username already taken!</p>";
          } else if ($_GET["error"] == "none") {
            echo "<p> **Woah, You have signed Up!</p>";
          }
        }
        ?>
      </div>

      <div class="input-field">
        <i class="uil uil-user"></i>
        <input type="text" name="name" placeholder="Enter your name" >

      </div>
      <div class="input-field">
        <i class="uil uil-user"></i>
        <input type="text" name="uid" placeholder="Enter your username" >

      </div>
      <div class="input-field">
        <i class="uil uil-envelope icon"></i>
        <input type="text" name="email" placeholder="Enter your email" >

      </div>
      <div class="input-field">
        <i class="uil uil-lock icon"></i>
        <input type="password" name="pwd" class="password" placeholder="Create a password" required>

      </div>
      <div class="input-field">
        <i class="uil uil-lock icon"></i>
        <input type="password" name="pwdrepeat" class="password" placeholder="Confirm a password" required>
        <i class="uil uil-eye-slash showHidePw"></i>
      </div>

      <div class="input-field button">
        <input type="submit" name="signup" value="Signup Now">
      </div>

      <div class="login-signup">
        <span class="text">Already a member?
          <a href="login.php" class="text login-link">Login now</a>
        </span>
      </div>
    </form>


    <script>
      const container = document.querySelector(".container");
      pwShowHide = document.querySelectorAll(".showHidePw");
      pwFields = document.querySelectorAll(".password");

      //   js code to show/hide password and change icon
      pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener("click", () => {
          pwFields.forEach(pwField => {
            if (pwField.type === "password") {
              pwField.type = "text";

              pwShowHide.forEach(icon => {
                icon.classList.replace("uil-eye-slash", "uil-eye");
              })
            } else {
              pwField.type = "password";

              pwShowHide.forEach(icon => {
                icon.classList.replace("uil-eye", "uil-eye-slash");
              })
            }
          })
        })
      })
    </script>

  </div>
  </div>
  </div>