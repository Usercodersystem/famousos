<style>
        button {
            color: #ffffff;
            background: #00adff;
        }
        body {
            background: #b2ff95;
        }
    </style>
<h2>USB Connector</h2>
<body>
<?php
if ($_POST['Submit']) {
  $open = fopen("/apps/explorer/usb/index.html", "w+");
  $text = $_POST['update'];
  fwrite($open, $text);
  fclose($open);
  echo "File updated.<br />";
  echo "File:<br />";
  $file = file("/apps/explorer/usb/index.html");
  foreach ($file as $text) {
    echo $text . "<br />";
  }
} else {
  $file = file("/apps/explorer/usb/index.html");
  echo "<form action=\"" . $PHP_SELF . "\" method=\"post\">";
  echo "<textarea Name=\"update\" cols=\"50\" rows=\"10\">";
  foreach ($file as $text) {
    echo $text;
  }
  echo "</textarea>";
  echo "<br><input name=\"Submit\" type=\"submit\" value=\"Save Changes\" />\n
</form>";
}
?>
	</body>