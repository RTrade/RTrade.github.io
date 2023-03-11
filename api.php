$userid = $_GET["id"];
$response = http_get("http://api.roblox.com/users/" . $userid . "/onlinestatus/");
echo $response;
