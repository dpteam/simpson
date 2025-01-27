<?php
	require_once __DIR__ . '/../config/users.php';

	define('LC_STR_POWERED_BY',
		'Работает на ');

	define('LC_STR_EDIT_PROFILE',
		'Ред. профиль');

	define('LC_ALT_AVATAR',
		'Аватар');

	define('LC_STR_REGISTERED',
		'Зарегистрирован');

	define('LC_STR_LAST_ACTIVE',
		'Посл. активность');

	define('LC_CAPTION_HOME',
		'Домой');

	define('LC_CAPTION_MESSAGES',
		'Сообщения');

	define('LC_CAPTION_MY_PROFILE',
		'Мой профиль');

	define('LC_CAPTION_LOGOUT',
		'Выйти');

	define('LC_ERROR_DBEXCEPTION',
		'Ошибка базы данных: ');

	define('LC_STR_NO_MESSAGES',
		'Сообщений пока нет.');

	define('LC_STR_WRITEMSG',
		'Написать сообщение');

	define('LC_STR_WRITEMSG_PLACEHOLDER',
		'Напишите сообщение&hellip;');

	define('LC_MSG_EMAIL_TAKEN',
		'That e-mail address is taken.');

	define('LC_MSG_PASSWORD_TOO_SHORT',
		'That password is too short (must be at least ' . MIN_PASSWORD_LENGTH . ' characters).');

	define('LC_MSG_INVALID_FIRST_NAME',
		'That first name is invalid (must be 3-30 characters.');

	define('LC_MSG_INVALID_LAST_NAME',
		'That last name is invalid (must be 3-30 characters.');

	define('LC_MSG_EMAIL_MISSING',
		'Enter an e-mail address.');

	define('LC_MSG_FIRST_NAME_MISSING',
		'Enter a first name.');

	define('LC_MSG_LAST_NAME_MISSING',
		'Enter a last name.');

	define('LC_MSG_USER_DOESNT_EXIST',
		'That user doesn\'t exist.');

	define('LC_MSG_AVATAR_GENERAL_ERROR',
		'The avatar couldn\'t be uploaded.');

	define('LC_MSG_AVATAR_WRONG_FILE_FORMAT',
		'The avatar is in the wrong format.');

	define('LC_MSG_BAD_TOKEN',
		'Bad token.');

	define('LC_MSG_WRONG_PASSWORD',
		'That password is wrong.');

	define('LC_MSG_PASSWORDS_DONT_MATCH',
		'The new passwords don\'t match.');

	define('LC_MSG_EDIT_PROFILE_SUCCESS',
		'Changes saved!');

	define('LC_MSG_NO_MESSAGE_CONTENT',
		'Enter a message.');

	define('LC_MSG_MESSAGE_DOESNT_EXIST',
		'That message doesn\'t exist.');

	define('LC_MSG_NOT_YOUR_MESSAGE',
		'That message isn\'t yours.');

	define('LC_MSG_MESSAGE_DELETE_SUCCESS',
		'The message has been deleted.');

	define('LC_MSG_MESSAGE_DELETE_FAILURE',
		'The message couldn\'t be deleted.');
