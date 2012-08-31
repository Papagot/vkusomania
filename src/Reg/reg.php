<?php

use Mappers\UserMapper;

require_once("..\autoLoader.php");

$login = trim(strip_tags($_GET['login']));
$pass = trim(strip_tags($_GET['pass']));
$FIO = trim(strip_tags($_GET['fio']));
$email = trim(strip_tags($_GET['email']));


$user = new UserMapper;
$result = $user->check($login, $pass, $FIO, $email);
if ($result == '') {
    echo $user->insertUser($login, $pass, $FIO, $email);
} else {
    echo $result;
}
?>