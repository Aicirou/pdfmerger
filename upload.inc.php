<?php
//getting uploadded files
$file = $_FILES['file'];
/*
$fileName = $_FILES['file']['name'];

$fileExt = explode('.', $fileName);
$fileActualext = strtolower(end($fileExt));
$allowed = array('pdf');

in_array($fileActualext, $allowed);
*/
//uploading in uploads folder
move_uploaded_file($file['tmp_name'],"uploads/".$file['name']);

//redirecting back
header("location: index.php");
