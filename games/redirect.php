<?
require_once('../../epsilon.php');
function redirect() {
	$serverName = $_SERVER['SERVER_NAME'];
	if ($serverName == "eclipse.org") {
		//FIX if server == eclipse.org it doesn't work - for some reason
		$serverName = "www.eclipse.org";
	}
	if ($_SERVER['SERVER_PORT'] != 80) {
		// Useful if we're working locally on the website, with a custom port number
		$serverName = "$serverName:" . $_SERVER['SERVER_PORT'];
	}
	$requestUrl = $_SERVER["REQUEST_URI"];
	$requestUrl = trim($requestUrl,"/");
	$gameId = substr($requestUrl, strrpos($requestUrl,"/")+1);
	$redirectUrl = 'http://'.$serverName.Epsilon::getRelativeLocation('')."/games/game.php?game=".$gameId;

	// in case there are spaces in the URL (probably only on local servers)
	$redirectUrl = str_replace(" ","%20",$redirectUrl);

	echo file_get_contents($redirectUrl);

}
?>
