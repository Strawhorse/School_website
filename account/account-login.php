<?php

session_start();

$_SESSION['is_logged_in'] = true;

var_dump($_SESSION);
