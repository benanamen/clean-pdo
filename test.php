<?php

set_exception_handler('my_exception_handler');
require 'connection.php';
require 'DB.php';

// Handle Exceptions however you want
function my_exception_handler($e) {
    echo 'Error';
    error_log($e->getMessage());
}

$id = 1;
$db = new DB((new Connection())->connect(require 'dbConfig.php'));
$user = $db->run('SELECT username FROM users WHERE user_id = ?', [$id])->fetch();
var_dump($user);
