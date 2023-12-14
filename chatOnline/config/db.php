<?php
require("func.php");
require("value.php");
$db = mysqli_connect("localhost","root","") or die("can't connect to this database");
mysqli_select_db($db, "chatOnline");
mysqli_set_charset($db, 'utf8');
