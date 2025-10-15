<?
session_start();
require("../../inc/site_config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Авторизуемся..</title>
  </head>
  <body>
<script language="JavaScript"> 
  window.location.href = "https://oauth.vk.com/authorize?client_id=<?=$client_id?>&redirect_uri=<?=$linksite?>/auth.php&response_type=code"
</script>

  </body>
</html>