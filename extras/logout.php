<?php
session_start();

session_destroy();
header('Location: /php_crash/13_sessions.php');