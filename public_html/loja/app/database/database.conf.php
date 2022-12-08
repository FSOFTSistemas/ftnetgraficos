<?php

# Configura��o dos bancos de dados suportados no PDO
$databases = array(
    # MYSQL
    'default' => array
        (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'u114975982_ftnet',
        'user' => 'u114975982_ftnet',
        'password' => 'Ftnet2022_bd',
	'limite_produto' => 1000, //limite de produtos cadastrados
        'emailAdmin' => 'ftnet@ftgraficos.com'
    )
);

/* end file */
