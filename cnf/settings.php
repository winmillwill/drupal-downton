<?php

require __DIR__ . '/vendor/autoload.php';

$databases['default']['default'] = array(
  'username' => getenv('DOWNTON_DB_1_ENV_MYSQL_USER'),
  'password' => getenv('DOWNTON_DB_1_ENV_MYSQL_PASSWORD'),
  'database' => getenv('DOWNTON_DB_1_ENV_MYSQL_DATABASE'),
  'host' => getenv('DB_1_PORT_3306_TCP_ADDR'),
  'driver' => 'mysql'
);
