  <?php
    $merchant_id = '39760';
    $secret_word = '2T-A.UE9F0jA{m}';
    $order_id = '154';
    $order_amount = '100.11';
    $currency = 'RUB';
    $sign = md5($merchant_id.':'.$order_amount.':'.$secret_word.':'.$currency.':'.$order_id);
  ?>

  <form method='get' action='https://pay.freekassa.ru/'>
    <input type='hidden' name='m' value='<?echo $merchant_id?>'>
    <input type='hidden' name='oa' value='<?echo $order_amount?>'>
    <input type='hidden' name='o' value='<?echo $order_id?>'>
    <input type='hidden' name='s' value='<?echo $sign?>'>
    <input type='hidden' name='currency' value='<?echo $currency?>'>
    <input type='hidden' name='i' value='1'>
    <input type='hidden' name='lang' value='ru'>
    <input type='hidden' name='us_login' value='<?echo $user['login']?>'>
    <input type='submit' name='pay' value='Оплатить'>
  </form>