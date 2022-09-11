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
  $open = fopen("/css/styles.css", "w+");
  $text = $_POST['update'];
  fwrite($open, $text);
  fclose($open);
  echo "File updated.<br />";
  echo "File:<br />";
  $file = file("/css/styles.css");
  foreach ($file as $text) {
    echo $text . "<br />";
  }
} else {
  $file = file("/css/styles.css");
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