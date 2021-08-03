<?php

$config['charset'] = 'utf8';
$config['prefix'] = 'aws_';
$config['driver'] = 'MySQLi';
$config['master'] = array (
  'charset' => 'utf8',
  'host' => '172.16.1.51',
  'username' => 'wp_wc',
  'password' => '123',
  'dbname' => 'wc',
);
$config['slave'] = false;
