<?php
// $_COOKIE
if(isset($_COOKIE['cookie'])){
    echo $_COOKIE['cookie'] .'</br>';
}
else{
    echo 'Cookies Eliminadas <br/>';
}
?>
<a href="borrarCookie.php">Borrar Cookies</a>