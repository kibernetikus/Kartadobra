﻿<?php defined('SYSPATH') OR die('No direct access allowed.');
//print_r($_SERVER);
return array
(
	// Возможные значения: small, panel, window
	'type' 			=> 'panel',
	
	// на какой адрес придёт POST-запрос от uLogin
	'redirect_uri' 	=>	'http://'.$_SERVER['HTTP_HOST'].'/login',
	
	// Сервисы, выводимые сразу
	'providers'		=> array(
		'vkontakte',
		'facebook',
		'twitter',
		'google',
	),
	
	// Выводимые при наведении
	'hidden' 		=> array(
		'odnoklassniki',
		'mailru',
		'livejournal',
		'openid'
	),
	
	// Эти поля используются для поля username в таблице users
	'username' 		=> array (
		'first_name',
		'last_name',
	),
	
	// Обязательные поля
	'fields' 		=> array(
            'email',
            'first_name',
            'last_name',
            'city',
	),
	
	// Необязательные поля
	'optional'		=> array('photo'=>'avatar_small', 'photo_big'=>'avatar_orig', 'sex'),
);
