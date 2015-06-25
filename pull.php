<?php

if (empty($_POST)) exit();
chdir("/var/alternc/html/c/courscrypto/www");
passthru("git pull 2>&1");

