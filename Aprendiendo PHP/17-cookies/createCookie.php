<?php

//Creacion de cookies

setcookie('cookie','valor cookie');

//Cookie con expiración

setcookie('cookieYear','dura un año', time()+(60*60*24*365));

?>
<a href="verCookie.php">Ver cookie</a>