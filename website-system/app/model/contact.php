<?php
function validateInput($input = []) {
	if (!isset($_POST['required'])) :
		return false;
	endif;

	$errors = [];

	foreach ($input['required'] as $key => $value) :
		if (empty($value)) :
			$errors[] = 'Preencha todos os campos!';
			break;
		endif;
		if (empty($errors)) :
			$input[$key] = $input['required'][$key];
		endif;
	endforeach;

	unset($input['required']);

	if (isset($_POST['number'])) {
		$input['number'] = $_POST['number'];
	}

	foreach ($input as $key => $value) :
		switch ($key) {
			case 'name':
				$name = filter_var(trim($value), FILTER_SANITIZE_STRING);
				if (!strstr($name, ' ')) :
					$errors[] = 'Informe um nome e sobrenome!';
				endif;
				break;

			case 'email':
				$email = filter_var($value, FILTER_VALIDATE_EMAIL);
				@list($username, $domain) = explode('@', $email);
				if (!$email OR !checkdnsrr($domain, 'MX')) :
					$errors[] = 'Informe um email válido!';
				endif;
				break;

			case 'message':
				$message = filter_var(trim($value), FILTER_SANITIZE_STRING);
				if (strlen($message) < 10 OR strlen($message) > 150) :
					$errors[] = 'A mensagem deve ter mais que 10 e menos que 150 caracteres.';
				endif;
				break;
		}
	endforeach;

	return array($input, $errors);
}

function processForm($input) {
	$conn = connectDb();
	$stmt = $conn->prepare("INSERT INTO `contact` (`name`, `email`, `message`) VALUES (?, ?, ?)");
	$stmt->bind_param('sss', $input['name'], $input['email'], $input['message']);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
