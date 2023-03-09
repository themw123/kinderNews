<?php
require_once("./config.php");
require_once("./includes/startTemplate.inc.php");
require_once("./klassen/Logs.inc.php");
require_once("./klassen/DbFunctions.inc.php");
require_once("./klassen/Login.inc.php");
require_once('./libraries/PHPMailer.php');
require_once('./klassen/Mail.inc.php');
require_once("./klassen/Register.inc.php");
require_once("./klassen/Reset.inc.php");


$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
$link = DbFunctions::connectWithDatabase();

$login = new Login($link);
$register = new Register($link);
$reset = new Reset($link);

if (isset($_GET["resetPassword"])) {
	$smarty->assign("resetPassword", "resetPassword");
	$token = Reset::resetPasswordFrontend();
	$smarty->assign("token", $token);
}

//loggedOutBefore damit Token neu generiert wird und nicht das alte Token genommen wird.
if ($REQUEST_METHOD == "GET") {
	if (!isset($_SESSION["csrfToken"]) || isset($_SESSION["loggedOutBefore"])) {
		$_SESSION["csrfToken"] = bin2hex(random_bytes(64));
	}
} else {
	if (!isset($_POST["csrfToken"]) || !isset($_SESSION["csrfToken"]) || $_POST["csrfToken"] != $_SESSION["csrfToken"]) {
		unset($_SESSION["csrfToken"]);
		die("CSRF Token ungültig!");
	}
}
$smarty->assign('csrfToken', $_SESSION["csrfToken"]);


if (Logs::getErrors() != null) {
	$smarty->assign('errors', Logs::getErrors());
} else if (Logs::getMessages() != null) {
	$smarty->assign('messages', Logs::getMessages());
}


if ($login->isUserLoggedIn()) {
	if (isset($_GET["news"])) {
		$template = 'news.tpl';
	}
} else {
	$template = 'notloggedIn.tpl';
}
$smarty->display($template);