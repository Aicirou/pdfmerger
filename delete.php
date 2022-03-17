<?php
//delete file
unlink($_GET['name']);
echo "deleted!";

$files = scandir("uploads");
//redirecting back
header("location:".$_SERVER["HTTP_REFERER"]);
