<?php

$ROOT_DIR = '/var/www/html';
$smarty = new Smarty();
$smarty->setTemplateDir("$ROOT_DIR/smarty/templates/");
$smarty->setCompileDir("$ROOT_DIR/smarty/templates_c/");
$smarty->setConfigDir("$ROOT_DIR/smarty/configs/");
$smarty->setCacheDir("$ROOT_DIR/smarty/cache/");

define("DB_HOST", "mysql");
define("DB_NAME", "DBNAME");
define("DB_USER", "DBUSER");
define("DB_PASS", "DBPASS");


define("EMAIL_USE_SMTP", true);
define("EMAIL_SMTP_AUTH", true);
define("EMAIL_SMTP_ENCRYPTION", "ssl");
define("EMAIL_SMTP_HOST", "ssl://smtp.gmail.com");
define("EMAIL_SMTP_USERNAME", "EMAIL");
define("EMAIL_SMTP_PASSWORD", "PASSWORD");
define("EMAIL_SMTP_PORT", 465);
define("EMAIL_SMTP_FROM_EMAIL", "EMAIL");
define("EMAIL_SMTP_FROM_NAME", "kindernewsBot");

define("ROOT_DOMAIN", "http://kindernews.marvwal.uk");
define("ACCOUNT_CONFIRM_SUBJECT", "Du hast dich Registriert!");
define("ACCOUNT_CONFIRM_URL", ROOT_DOMAIN . "/?confirm");
define("ACCOUNT_CONFIRM_CONTENT", "Bitte öffne den folgenden Link, um dein Konto zu bestätigen: \n \n \n");

define("ACCOUNT_RESETMAIL_SUBJECT", "Du wolltest dein Passwort zurücksetzten!");
define("ACCOUNT_RESETMAIL_URL", ROOT_DOMAIN . "/?resetPassword");
define("ACCOUNT_RESETMAIL_CONTENT", "Bitte öffne den folgenden Link, um dein Passwort zu erneuern: \n \n \n");

define("NEWSAPIKEY", "KEY");
define("CHATGPTAPIKEY", "KEY");
define("CHATGPTAPIKEY_PRIVATE","KEY");