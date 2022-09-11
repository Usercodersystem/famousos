<style>
        button {
            color: #ffffff;
            background: #00adff;
        }
        body {
            background: #b2ff95;
        }
    </style>
<h2>User Accounts Controls Settings</h2>
<body>
<?php
if ($_POST['Submit']) {
  $open = fopen("lock.js", "w+");
  $text = $_POST['update'];
  fwrite($open, $text);
  fclose($open);
  echo "File updated.<br />";
  echo "File:<br />";
  $file = file("lock.js");
  foreach ($file as $text) {
    echo $text . "<br />";
  }
} else {
  $file = file("lock.js");
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