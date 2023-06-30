<?php
    setcookie('user', $finduser, time() - 3600, "/"); 
    header('Location: /');
?>