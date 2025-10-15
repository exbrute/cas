<?
session_start();
require("inc/site_config.php");
$sid = $_SESSION['hash'];
$client_id = $client_id; // ID приложения
$client_secret = $client_secret; // Защищённый ключ
$redirect_uri = "http://".$_SERVER['SERVER_NAME']."/vk_bonus.php"; // Адрес сайта
$url = 'http://oauth.vk.com/authorize';




if (isset($_GET['code'])) {

    $result = true;
    $params = [
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri
    ];

    $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

    if (isset($token['access_token'])) {
        $params = [
            'uids' => $token['user_id'],
            'fields' => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
            'access_token' => $token['access_token'],
            'v' => '5.101'];

        $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['response'][0]['id'])) {
            $userInfo = $userInfo['response'][0];
            $result = true;
        }
    }
// инфа о пользователе

    $vk_id_s = $userInfo['id'];
    $fname = $userInfo['first_name'];
    $last_name = $userInfo['last_name'];
    $name = "$fname $last_name";
    $ava = $userInfo['photo_big'];
    $hashq = "http://vk.com/id$vk_id_s";
// получили инфу о пользователе, пользователь имеется в бд

if ($sid){
	mysql_query("UPDATE kot_user SET vk_id = '$vk_id_s', social='$hashq',ava='$ava',vk_bon=1 WHERE hash = '$sid'");
	 $home_url = 'http://'.$_SERVER['HTTP_HOST'] .'/';
 header('Location: ' . $home_url);
}



      
}

?>
