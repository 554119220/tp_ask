<?php
return array(
    'DB_TYPE'    => 'mysql',
    'DB_HOST'    => 'localhost',
    'DB_NAME'    => 'ask',
    'DB_USER'    => 'root',
    'DB_PWD'     => '',
    'DB_PORT'    => 3306,
    'DB_PREFIX'  => 'kjrs_',
    'DB_CHARSET' => 'utf8',

    //备份配置
    'DB_PATH_NAME' => 'db_bak',
    'DB_PATH'      => './db_bak/',
    'DB_COMPRESS'  => '1',
    'DB_LEVEL'     => '9',

    //目录配置常量
    'AdminPublic'  => './Public/Admin',
    'HomePublic'  => './Public/Home',
    'CommonPublic' => './Public',

    //
    'URL_MODEL' => 2,
);
