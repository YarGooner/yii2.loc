<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = 'mysql:host=yii2.loc;dbname=yii2basic_test';

return $db;
