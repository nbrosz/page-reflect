<?php
header('Access-Control-Allow-Origin: *', false);
header('Content-type:text/plain;charset=utf-8', false);
echo file_get_contents($_GET['target']);
?>