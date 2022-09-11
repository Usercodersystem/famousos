<?php
$query1 = $_GET["url"];
if(isset($query1)){
echo readfile($query1);
}else{
echo "Please Enter Your URL with http or https";
}
