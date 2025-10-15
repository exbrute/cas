<?
require ("inc/site_config.php");
?>
<div class="carddd  hidemobile3" style="font-family: 'Gilroy-Bold'; width:100%; background:#fff;border-radius: 0rem;">
    <div class="card-header  align-items-start justify-content-between bd-b-0 pd-b-0">
        <div>
<style>
    
    i{
            color: #6157f3;
    }
</style>
        </div>
        <div class="d-flex mg-t-20 mg-sm-t-0" >
            <div class="btn-group flex-fill">

            </div>
        </div>
    </div><!-- card-header -->

    <div class="table-responsive mg-t-20 mg-b-15 " style="    margin-top: -17px; border-radius:0rem;" >
        <table class="table mg-b-0 table-live" >
            <thead style="background: #EBE6FC;">
                <tr>
                    
                    <th class="text-center wd-10p" style=" font-weight: bold; color: #9893b6;border-top: 0px solid rgba(72,94,144,.16); ">Игра</th>
                    <th class="text-center wd-20p" style=" font-weight: bold; color: #9893b6;border-top: 0px solid rgba(72,94,144,.16);">Логин</th>
                    <th class="text-center wd-25p" style=" font-weight: bold; color: #9893b6;border-top: 0px solid rgba(72,94,144,.16);">Сумма</th>
                    <th class="text-center wd-20p" style=" font-weight: bold; color: #9893b6;border-top: 0px solid rgba(72,94,144,.16);">Коэффициент</th>
                    <th class="text-center wd-25p" style=" font-weight: bold; color: #9893b6;border-top: 0px solid rgba(72,94,144,.16);">Результат</th>
                </tr>
            </thead>
            <style>
                #response {
                    color: #fff;
                }
            </style>
            <tbody id="response"style="  color: #312c48;  ">
				<?
				$sel_game = mysql_query("SELECT * FROM kot_games ORDER BY id DESC LIMIT 20 WHERE user_id='$id'");
				while ($row = mysql_fetch_array($sel_game)){
					$game = $row['game'];
					$g = '';
					if($game == 1){
						$g = '';
					}
					if($game == 2){
						$g = '';
					}
					$log = $row['login'];
					$bet = $row['sum'];
					$win = $row['win_summa'];
					$coef = $win / $bet;
					$type = $row['type'];
					if ($type == 'win'){
						$type = 'tx-success';
					}else{
						$type = '';
					}
					
					echo '
					<tr>
                    <td class="text-center" >'.$g.'</td>
                    <td class="text-center">'.$log.'</td>
                    <td class="text-center ">'.$bet.'</td>
                    <td class="text-center">x'.$coef.'</td>
                    <td class="text-center  tx-semibold '.$type.'">'.$win.'</td>
                </tr>
					';
				}
				
				?>
                
               
                
            </tbody>
        
            <tbody id="myresponse" style="display:none;border-top: 0;">

                	<?
				$sel_game = mysql_query("SELECT * FROM kot_games WHERE user_id='$user_id' ORDER BY id DESC LIMIT 20");
				while ($row = mysql_fetch_array($sel_game)){
					$game = $row['game'];
					$g = '';
					if($game == 1){
											$g = '';
					}
					if($game == 2){
						$g = '';
					}

					$log = $row['login'];
					$bet = $row['sum'];
					$win = $row['win_summa'];
					$coef = $win / $bet;
					$type = $row['type'];
					if ($type == 'win'){
						$type = 'tx-success';
					}else{
						$type = '';
					}
					
					echo '
					<tr>
                    <td class="text-center" >'.$g.'</td>
                    <td class="text-center">'.$log.'</td>
                    <td class="text-center ">'.$bet.'</td>
                    <td class="text-center">x'.$coef.'</td>
                    <td class="text-center  tx-semibold '.$type.'">'.$win.'</td>
                </tr>
					';
				}
				
				?>
               
                
            </tbody>
        
        </table>
        <style>
            .table td{
                   border-top: 16px solid rgb(247 245 254);
}           
            
            .transition {
  transition: 200ms;
}    
        </style>
    </div><!-- table-responsive -->
</div><!-- card -->