<?php
$site = [];

$site['config'] = require 'config.php';

require_once 'core/database/Connection.php';
require_once 'core/database/QueryBuilder.php';

$site['database'] = new QueryBuilder(
    Connection::make($site['config']['database'])
);