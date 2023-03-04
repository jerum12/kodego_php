<?php

include 'students/User.php';
include 'teacher/User.php';

use namespaces\Students as s;
use namespaces\Teacher as t;


$obj = new s\User('Jay','White');

echo $obj->getName();

$obj = new t\User('CYAN','White');
echo $obj->getName();
?>