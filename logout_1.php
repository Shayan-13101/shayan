<?php

require 'user_configure.php';
$_SESSION = [];
session_unset();
session__desstroy();
 header("Location: home_page.html")

?>
