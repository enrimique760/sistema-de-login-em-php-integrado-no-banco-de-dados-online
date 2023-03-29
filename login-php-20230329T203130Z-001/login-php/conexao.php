<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'enricomysql');
define('SENHA', 'scoth780@');
define('DB', 'enricomyaql');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


