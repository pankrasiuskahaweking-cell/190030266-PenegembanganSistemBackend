<?php

require_once __DIR__ . '/../../helpers/auth_helper.php';
logout_user();
header('Location: ' . '/public/login.php');
exit;
