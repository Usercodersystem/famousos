<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Download Manager</title>
</head>
<center>
<div class="sib">
<?php
if ($_GET[upload]) {
if ($_POST[from] == "") {
print "Enter Download Link";
} else {
copy("$_POST[from]", "$_POST[to]");
$size = round((filesize($_POST[to])/3000000), 3);
print "Downloaded 100%<br>
<a><a href=\"$_POST[from]\">$_POST[from]</a><br>
<a><a href=\"$_POST[to]\">$_POST[to]</a> : $size MB";
}
} else {
print "<form action=\"$PHP_SELF?upload=true\" method=post>
Download Link: <input name=from><br>
filename with format: <input name=to><br>
<input type=submit value=\"Download\">";
}
?>
<br>
</center>
</body>
</html>
