<?php

unset($_COOKIE['cookie']);
setcookie('cookie', '', time() - 100);

unset($_COOKIE['cookieYear']);
setcookie('cookieyear', '', time() - 100);

header('Location:verCookie.php');