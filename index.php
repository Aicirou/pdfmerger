<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Merger</title>
    <link rel="stylesheet" href="style.css">

</head>
<body >

<?php

if (isset($_SESSION["userid"])) {
    echo "<p>Hello There, " . $_SESSION["userid"] ."!</p>";
    $logout = "logout.inc.php";
    echo "<p><a href=\"$logout\">Log out</a></p>";
    
} else{
    echo "<p>Hello There, Guest!";
    echo "<h2>**Please login to see uploaded files!</h2>";
    echo "<p>Already Have an Account ?  <a href =\"login.php\">login</a>!</p>";
    echo "<p>Don't Have an account ? Please <a href =\"signup.php\">signup</a>!</p>";
}

?>

<form method="POST" action="upload.inc.php" enctype="multipart/form-data">
    <input type="file" name="file" value="file">
    <input type="submit" name="submit" value="upload">
</form>

<?php
if (isset($_SESSION["userid"])) {

$files = scandir("uploads");

for($a=2;$a<count($files);$a++)
{
?>
<p>
    <?php echo $files[$a];?>
    <a href="upload/<?php echo $files[$a];?>"download="<?php echo $files[$a];?>">
    Download
</a>
<a href="delete.php?name=uploads/<?php echo $files[$a];?>" style="color: red;">
    Delete
</a>
</p>

<?php

}}
?>
</body>
</html>