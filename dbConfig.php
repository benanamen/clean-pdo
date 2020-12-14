<?php

return [
    'charset' =>'utf8mb4'
    , 'name' =>'yourDatabase'
    , 'username' =>'root'
    , 'password' =>''
    , 'host' => 'localhost'
    , 'options'  =>[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        , PDO::ATTR_EMULATE_PREPARES => false
    ]
];
