<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | PDFMerger</title>
  <!-- ===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="style.css">
  <script src="main.js"></script>

</head>

<body style="min-height: 100vh;">

  <div class="container">
    <div class="forms">
      <div class="form login">
        <span class="title">Login</span>

        <form action="login.inc.php" method="POST">

          <div class="error">
            <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "emptyinput") {
                echo "<p>**Fill in all fields, try again!</p>";
              } else if ($_GET["error"] == "wronglogin") {
                echo "<p>**Incorrect login information, try again!</p>";
              } else if ($_GET["error"] == "wrongpass") {
                echo "<p>**Incorrect password, try again!</p>";
              }
            }
            ?>
          </div>
          <div class="input-field">
            <i class="uil uil-envelope icon"></i>
            <input type="text" name="uid" placeholder="Enter email/username" required>

          </div>
          <div class="input-field">
            <i class="uil uil-lock icon"></i>
            <input type="password" name="pwd" class="password" placeholder="Enter password" required>

            <i class="uil uil-eye-slash showHidePw"></i>
          </div>

          <div class="input-field button">
            <input type="submit" name="login" value="Login Now"">
          </div>
        </form>

        <div class="login-signup">
          <span class="text">Not a member?
            <a href="signup.php" class="text signup-link">Signup now</a>
          </span>
        </div>
      </div>
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
</body>

</html>