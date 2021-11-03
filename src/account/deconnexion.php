<?php
    session_start();
    session_unset();
    session_destroy();
    header('Location: '.$_SERVER['DOCUMENT_ROOT'].'/index.php')
?>
