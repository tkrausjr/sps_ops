<?php //Main Application access point
require_once "/var/www/html/xataface/public-api.php";
df_init(__FILE__, "../xataface")->display();
