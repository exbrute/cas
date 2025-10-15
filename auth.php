<?
session_start();
require("inc/site_config.php");
$sid = $_SESSION['hash'];
$client_id = $client_id; // ID приложения
$client_secret = $client_secret; // Защищённый ключ
$redirect_uri = "http://".$_SERVER['SERVER_NAME']."/auth.php"; // Адрес сайта
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
    
    // exit($hashq);
// получили инфу о пользователе, пользователь имеется в бд
//$network = $user['network'];



$sql_select2 = "SELECT COUNT(*) FROM  kot_user WHERE social='$hashq'";
$result2 = mysql_query($sql_select2);
$row = mysql_fetch_array($result2);
if($row)
{	
$logc = $row['COUNT(*)'];
}
    
        if($logc == 0) {
        if($hashq != '') {

			$home_url = 'http://'.$_SERVER['HTTP_HOST'] .'/';
            header('Location: ' . $home_url);
    
        }
        }
       if($logc == 1) {
         if($hashq != '') {
         $selecter = "SELECT * FROM  kot_user WHERE social = '$hashq'";
         $result3 = mysql_query($selecter);
         $row1 = mysql_fetch_array($result3);
		 if($row1)
		{	
		$admin = $row1['admin'];
		$hashlog = $row1['hash'];
         
		}
		
	


		 	$client  = @$_SERVER['HTTP_CLIENT_IP'];
			$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
			$remote  = @$_SERVER['REMOTE_ADDR'];
			 
			if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
			elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
			else $ip = $remote;
        
         mysql_query("UPDATE  kot_user SET ip = '$ip' WHERE hash = '$hashq'");
          mysql_query("UPDATE  kot_user SET vk_id = '$vk_id_s' WHERE hash = '$hashq'");
        
          $_SESSION['hash'] = $hashlog;
           $_SESSION['login'] = 1;
          $home_url = 'http://'.$_SERVER['HTTP_HOST'] .'/';
          
            header('Location: ' . $home_url);
       }
       }



      
}
?>