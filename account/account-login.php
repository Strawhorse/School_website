<?php

setcookie('example', '', time() -3600);
// to delete cookie, set time in the past


var_dump($_COOKIE);

echo 'Cookie deleted';