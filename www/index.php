<?php 
header('Content-type: text/plain');
$str = 'World';

$greeting = "Hello $str";

echo $greeting . "\n";


// For loop

for ($i = 1; $i < 5; $i++) {
    $number = 10 + $i;
    echo $number . "\n";
}


// Function

$list_of_numbers = [9, 5, 17, 12, 8, 2, 10];

function get_total($array) {
    $total = 0;
    foreach ($array as $item) {
        $total += $item;
    }

    return $total;
}

$total = get_total($list_of_numbers);
echo $total . "\n";

/**
[xdebug]
zend_extension=/usr/local/Cellar/php/7.3.7/pecl/20180731/xdebug.so
xdebug.default_enable=1
xdebug.remote_enable=1
xdebug.remote_port=9000
xdebug.remote_handler=dbgp
xdebug.remote_connect_back=0
xdebug.remote_host=host.docker.internal
xdebug.idekey=VSCODE
0xdebug.remote_autostart=1
1xdebug.remote_log=/usr/local/etc/php/xdebug.log  
 
 */