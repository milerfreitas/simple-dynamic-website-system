<?php
function layout($structure = [], $params = null) {
	if (!is_array($structure)) {
		die('Estrutura inválida!');
	}

	if (!empty($params) && is_array(($params))) {
		extract($params);
	}

	foreach ($structure as $body) {
		include(__DIR__.'/../views/'.$body.'.tpl.php');
	}
}
