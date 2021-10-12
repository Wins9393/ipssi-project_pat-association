<?php
session_start();

define("ROOT", dirname(__DIR__));

require ROOT. "/vendor/autoload.php";   

include ROOT."../App/router/router.php";

?>