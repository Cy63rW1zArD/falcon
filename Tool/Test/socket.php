<?php
define("ROOT", dirname(dirname(__DIR__)));
require ROOT. '/Tool/cli.php';

// nc -l -p 8888 localhost
$socket = new Bull_Net_Socket();

// connect ...
$socket->connect("localhost", 8888, true, 30);
// Send data including linebreak
$socket->writeLine("String with data");

// receive data until linebreak
$result = $socket->readLine();
var_dump($result);

// receive a number of data
// $result = $socket->read(512);

// close connection
$socket->disconnect();