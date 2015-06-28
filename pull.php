<?php

$f=fopen("/var/alternc/html/c/courscrypto/log.txt","ab");
fputs($f,date("Y-M-d H:m:s")." pull called\n");
//if (empty($_POST)) exit();
fputs($f,date("Y-M-d H:m:s")." POST non empty\n");
chdir("/var/alternc/html/c/courscrypto/www");
exec("git pull 2>&1",$out,$ret);
foreach($out as $line) {
  fputs($f,date("Y-M-d H:m:s")." $line\n");
}
fputs($f,date("Y-M-d H:m:s")." exit code $ret\n");
fclose($f);
