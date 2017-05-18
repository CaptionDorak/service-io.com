<?php 
    $connection_odin = mysqli_connect(
        "localhost",
        "root",
        "",
        "u0318191_odin");
    $connection_odin->query("SET NAMES 'utf8'");

    /*if(!$connection_odin) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }

    echo "Соединение с MySQL установлено!" . PHP_EOL;
    echo "Информация о сервере: " . mysqli_get_host_info($connection_odin) . PHP_EOL;*/
    
    
?>