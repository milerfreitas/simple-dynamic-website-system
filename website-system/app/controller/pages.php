<?php
function homePage() {
	$structure = [
		'parts/header',
		'pages/home',
		'parts/footer'
	];

	layout($structure);
}

function aboutPage() {
	$structure = [
		'parts/header',
		'pages/about',
		'parts/footer'
	];

	layout($structure);
}

function contactPage() {
	$structure = [
		'parts/header',
		'pages/contact',
		'parts/footer'
	];

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		list($input, $errors) = validateInput($_POST);
		if (!empty($errors)) {
			$params['errors'] = $errors;
		} else {
			processForm($input);
			$params['input'] = $input;
		}
		layout($structure, $params);
	} else {
		layout($structure);
	}
}

function notFoundPage() {
	$structure = [
		'parts/header',
		'pages/error-404',
		'parts/footer'
	];

	layout($structure);
}

function servicesPage() {
	$structure = [
		'parts/header',
		'pages/services',
		'parts/footer'
	];

	layout($structure);
}