<?php
function connectDb() {
	$conn = @new mysqli('localhost', 'root', 'passwd', 'teste');
	if ($conn->connect_error) {
		die('Houve um erro ao conectar: '.$conn->connect_error);
	}
	$conn->set_charset('utf8');
	return $conn;
}

/*$config = array('url' => 'http://localhost/site-teste',
                'title' => 'Site de Teste',
                'description' => 'Descrição do site de teste',
                'adm' => 'Nome Administrador',
                'email_adm' => 'admemail@mail.com'
            );*/

define('SITE_URL', 'http://localhost/site-teste');
define('SITE_NAME', 'Site de Teste');
define('SITE_DESCRIPTION', 'Descrição do site de teste');
define('ADM_NAME', 'Maxmiler Freitas');
define('ADM_EMAIL', 'admin@mail.com');
