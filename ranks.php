<?
require ("components/header.php");
require ("components/gamebar.php");
 require ("components/livewins.php");
?>  
<script>


function bots() {
if(navigator.onLine) {
 $.ajax({
            url: 'bots.php',
            timeout: 10000,
            success: function(data) {
				
				
            },
            error: function() {
            }
        });
		} else {
}
		}
		
		setInterval('bots()',1000);
var online = "1";
	 function historys() {
	     online = window.online
if(online == "1") {
 $.ajax({
            url: 'core.php',
            timeout: 10000,
            success: function(data) {
				var obj = jQuery.parseJSON(data);
                $("#response").prepend(obj.game);
				$('#response').children().slice(15).remove();
				
				 $("#myresponse").prepend(obj.my_game);
				$('#myresponse').children().slice(15).remove();
				$("#oe").html(obj.online);
            },
            error: function() {
            }
        });
		} 
		}
		
		setInterval('historys()',100);
</script>
<style>

.games_Online__pysYz {
    position: absolute;
    left: 6px;
    top: 7px;
    color: #fff;
    font-size: 13px;
    display: flex;
    align-items: center;
    z-index: 1;
    pointer-events: none;
    touch-action: none;
}

.col7 {
flex: 0 0 100%;
max-width: 100%;
}

.badge7 {
    font-size: 10px;
    font-weight: 500;
    font-family: -apple-system,BlinkMacSystemFont,inter ui,Roboto,sans-serif;
    padding: 3px 5px 4px;
    border-radius: 40px;
}
</style>
      
    
    
            <div class="row ">

                <div class="col-sm-6 col-lg-2 mg-t-10">


                    <!--<div class="spinner-border" role="status">-->
                    <!--      <span class="sr-only">Loading...</span>-->
                    <!--    </div>-->


                 


                                                 


      


                </div>
<?

   $sum1 = rand(300,2000);
   $sum2 = rand(300,2000);   
   $sum3 = rand(300,2000);   
     $sum4 = rand(300,2000); 
     $sum5 = rand(300,2000);
        $sum6 = rand(300,2000);
           $sum7 = rand(300,2000);
              $sum8 = rand(300,2000);
                 $sum9 = rand(300,2000);
                    $sum10 = rand(300,2000);
                    
                    $data1 = date("d.m.Y T", time());
                    $data2 = date("d.m.Y T", time());
                    $data3 = date("d.m.Y T", time());
                    $data4 = date("d.m.Y T", time());
                    $data5 = date("d.m.Y T", time());
                    $data6 = date("d.m.Y T", time());
                    $data7 = date("d.m.Y T", time());
                    $data8 = date("d.m.Y T", time());
                    $data9 = date("d.m.Y T", time());
                    $data10 = date("d.m.Y T", time());
                    
 $koshel1 = rand(901837,964824);
  $koshel2 = rand(111837,264824);
  $koshel3 = rand(901837,564824);
  $koshel4 = rand(121837,464824);
  $koshel5 = rand(401837,164824);
  $koshel6 = rand(451837,964824);
  $koshel7 = rand(941837,364824);    
 $koshel8 = rand(901837,964824);     
  $koshel9 = rand(511837,364824);    
  $koshel10 = rand(311837,964824);    
  
$id = $row['id'];
$sum = $row['sum'];
$ps = $row['ps'];
$wallet = $row['wallet'];
$status = $row['status'];
$acces = $row['status'];
$date = $row['date'];
$date = substr($date,0,-3);
$wallet_not_full = substr($wallet,0,-4);
$izi = '502 Bad Gateway';
$sech = 'сек. назад';

  $sech2 = rand(5,10);   
    $sech23 = rand(1,20);   
    $sech24 = rand(5,10);   
      $sech25 = rand(5,20);   
        $sech26 = rand(1,12);
          $sech27 = rand(5,10);   
            $sech28 = rand(5,9);   
              $sech29 = rand(1,4);   
                $sech291 = rand(5,6);   
                  $sech292 = rand(5,20);   
if($status == '1') {
  $span = "badge-success";
  $text = "Отправлено";
  $dffd = "";
}
$ps2 = "/images/pay/SBP2.png";


    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data11 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data22 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data33 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data44 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data55 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data66 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data77 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data88 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data99 = $line;

    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data999 = $line;
	$ps = '<img src="/extra/qiwinew.png" style=" width: 1.3rem;" alt="">';
	
	
	
	

    $images = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image  = $images[array_rand($images)];
    $output = "$image";

    $images2 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image2  = $images2[array_rand($images2)];
    $output2 = "$image2";

    $images3 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image3  = $images3[array_rand($images3)];
    $output3 = "$image3";

    $images4 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image4  = $images4[array_rand($images4)];
    $output4 = "$image4";
		
    $images5 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image5  = $images5[array_rand($images5)];
    $output5 = "$image5";
	
    $images6 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image6  = $images6[array_rand($images6)];
    $output6 = "$image6";
	
    $images7 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image7  = $images7[array_rand($images7)];
    $output7 = "$image7";

    $images8 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image8  = $images8[array_rand($images8)];
    $output8 = "$image8";

    $images9 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image9  = $images9[array_rand($images9)];
    $output9 = "$image9";


    $images10 = array(
    
        '/extra/payout/qiwi2.png',
        '/extra/payout/qiwinew1.png',
    );

    $image10  = $images10[array_rand($images10)];
    $output10 = "$image10";

?>
  <style>

 .game_shape { 
    padding: 20px; /* Поля */
    background: #fff; /* Цвет фона */
     width: 100%;
     height: 380px;
    border-radius: 20px;
    box-shadow: 0 15px 85px rgb(215 211 236 / 45%);
   }
   
    .center { 
	text-align: 150px;
   }
   
    .sign {
    float: right; /* Выравнивание по правому краю */
    border: 1px solid #333; /* Параметры рамки */
    padding: 7px; /* Поля внутри блока */
    margin: 10px 0 5px 5px; /* Отступы вокруг */
    background: #f0f0f0; /* Цвет фона */ 
   }
   .sign figcaption {
    margin: 0 auto 5px; /* Отступы вокруг абзаца */
   }
   
    .game_shape1 { 
            display: flex;
    padding: 20px; /* Поля */


     height: 255px;
    border-radius: 20px;
   }
   
       .game_shape12 { 
            display: flex;


    box-shadow: 0 15px 85px rgb(215 211 236 / 45%);
     height: 220px;
    border-radius: 20px;
    margin: 5px;
   }
   
       .game_shape13 { 
            display: flex;


    box-shadow: 0 15px 85px rgb(215 211 236 / 45%);
     height: 215px;
    border-radius: 20px;
    margin-top: 20px;
   }
   .bott222 {
       
   padding: 10px 15px;
   }
.hover-effect3 {
-webkit-transition: all 0.2s ease;
-moz-transition: all 0.2s ease;
transition: all 0.2s ease;
}
.hover-effect3:hover{
margin-top:-5px;
-webkit-transition: all 0.2s ease;
-moz-transition: all 0.2s ease;
transition: all 0.2s ease;
}
.mode-block {
    display: flex;
    justify-content: center;
    position: relative;
    user-select: none;
    transition: .2s all ease;
    border-radius: 8px;
    overflow: hidden;
}

    .termsshape1 { 
            display: flex;
    padding: 20px; /* Поля */

     width: 45%;
     height: 70px;
    border-radius: 20px;
    box-shadow: 1px 6px 10px 6px rgb(211 220 236 / 45%);
   }
   .icon {
    display: inline-flex;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: currentColor;
    fill: currentColor;
}
.cardh2 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(72,94,144,.16);
    border-radius: 1.25rem;
}
  </style> 
  
  <? 
  $onlinedice = rand(35,67);
    $onlinemines = rand(55,98);
  
  ?>

                <div class="col7 col-xl-10 mg-t-10" id="loadPage" style="display:none;height:100vh">
                    <div class="spinner-border">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div style="display: contents;" id="mainView">
                                                          
</center>
                        </div>
</div>

<style>
    .header-wrappers{
 
     
    background: linear-gradient(45.87deg, #7274ff 6.6%, #7867fb 102.94%);
    color: #fff;
    font-size: 16px;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 1rem;
    
     
    }
</style>

<div class="header-wrappers">
    <img src="/extra/panel/icoRanksZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Система рангов
</div>


                        <div class="cardh2 mg-b-10 mg-t-10 hash-mob">
    <div class="card-header pd-t-20  align-items-start justify-content-between bd-b-0 pd-b-0"style="border-color: #fff">
        <div>
           
       <!--     <p class="tx-13 tx-color-03 mg-b-0">Online: <span id="oe">0</span></p> -->
        </div>
        <div class="d-flex mg-t-20 mg-sm-t-0" >
        </div>




<style>
.tops{
    color:white;
}
     @media screen and (max-width: 432px){

#pay {

    max-width: 40px;
    height: 40px;
}
#ico{
max-width: 20px;
    right: 20px;
    position: relative;
}
#telephonesz{
       height: 40px;
          max-width: 90px;
}
#numbers{
    font-size: 11px;
    margin-left: 1px;
}
#summm{
        height: 40px;
      max-width: 60px;     
}
#dataaa{
    display:none;
}
#stats{
        height: 40px;
max-width: 80px;    
}
#statusnumbers{
    font-size: 11px;
    margin-left: 1px;
}



]
    
</style>
<div class="wrapperhistory">



<div id="pay" class="mainn" style="width: 6rem;">
    <span id="numbers" class="tops"></span>
</div>


<div id="telephonesz" class="mainn" style="width: 10rem;">
    <span id="numbers" class="tops">Название</span>
</div>
<div id="summm" class="mainn" style="width: 8rem;">
    <span id="numbers" class="tops">Депов</span>
</div>
<div id="dataaa" class="mainn" style="width: 13.5rem;">
    <span id="numbers" class="tops">Награда</span>
</div>
<div id="dataaa" class="mainn" style="width: 11rem;">
    <span id="numbers" class="tops">Ставок</span>
</div>
<div id="stats" class="mainn" style="width: 10.5rem;">
    <span id="numbers" class="tops">Статус</span>
</div>
<div id="pay" class="mainn" style="width: 6rem;">
    <span id="numbers" class="tops"></span>
</div>

</div>


<div style="    display: inline-grid;margin-bottom: 1rem;">
    
    

<div class="wrapperhistory">



<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/images/gem.png" style="width: 36px;margin-left:20px; " alt="ico">
</div>


<div id="telephonesz" class="rank_def transition" style="width: 10rem;">
    <span id="numbers" class="telephone">Starter</span>
</div>
<div id="summm" class="rank_def transition" style="width: 8rem;">
    <span id="numbers" class="summaa">0 ₽</span>
</div>
<div id="dataaa" class="rank_def transition" style="width: 13.5rem;">
    <span id="" class="datas">50 ₽</span>
</div>
<div id="dataaa" class="rank_def transition" style="width: 11rem;">
    <span id="" class="times">0 ₽</span>
</div>

<? if ($ranked == NULL){?>   
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">Текущий</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/payout/check.png" style="width: 36px;margin-left: 20px; " alt="ico">
</div>
<?}else{?>
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">-</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/wait.png" style="width: 36px;margin-left: 20px;opacity:0.4 " alt="ico">
</div>
<?}?>
</div>



<div class="wrapperhistory">


<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/images/Starter.png" style="width: 36px;margin-left:20px; " alt="ico">
</div>
<div id="telephonesz" class="rank_def transition" style="width: 10rem;">
    <span id="numbers" class="telephone">Smart</span>
</div>
<div id="summm" class="rank_def transition" style="width: 8rem;">
    <span id="numbers" class="summaa">500 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 13.5rem;">
    <span class="datas">500 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 11rem;">
    <span class="times">1 000 ₽</span>
</div>
<? if ($ranked == "smart"){?>   
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">Текущий</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/payout/check.png" style="width: 36px;margin-left: 20px; " alt="ico">
</div>
<?}else{?>
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">-</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/wait.png" style="width: 36px;margin-left: 20px;opacity:0.4 " alt="ico">
</div>
<?}?>




</div>


<div class="wrapperhistory">


<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/images/Gambler.png" style="width: 36px;margin-left:20px; " alt="ico">
</div>
<div id="telephonesz" class="rank_def transition" style="width: 10rem;">
    <span id="numbers" class="telephone">Gambler</span>
</div>
<div id="summm" class="rank_def transition" style="width: 8rem;">
    <span id="numbers" class="summaa">1 000 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 13.5rem;">
    <span class="datas">750 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 11rem;">
    <span class="times">2 500 ₽</span>
</div>
<? if ($ranked == "gambler"){?>   
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">Текущий</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/payout/check.png" style="width: 36px;margin-left: 20px; " alt="ico">
</div>
<?}else{?>
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">-</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/wait.png" style="width: 36px;margin-left: 20px;opacity:0.4 " alt="ico">
</div>
<?}?>


</div>


<div class="wrapperhistory">


<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/images/Pro.png" style="width: 36px;margin-left:20px; " alt="ico">
</div>
<div id="telephonesz" class="rank_def transition" style="width: 10rem;">
    <span id="numbers" class="telephone">Pro</span>
</div>
<div id="summm" class="rank_def transition" style="width: 8rem;">
    <span id="numbers" class="summaa">2 000 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 13.5rem;">
    <span class="datas">1 000 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 11rem;">
    <span class="times">5 000 ₽</span>
</div>
<? if ($ranked == "pro"){?>   
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">Текущий</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/payout/check.png" style="width: 36px;margin-left: 20px; " alt="ico">
</div>
<?}else{?>
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">-</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/wait.png" style="width: 36px;margin-left: 20px;opacity:0.4 " alt="ico">
</div>
<?}?>


</div>


<div class="wrapperhistory">


<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/images/Boss.png" style="width: 36px;margin-left:20px; " alt="ico">
</div>
<div id="telephonesz" class="rank_def transition" style="width: 10rem;">
    <span id="numbers" class="telephone">Boss</span>
</div>
<div id="summm" class="rank_def transition" style="width: 8rem;">
    <span id="numbers" class="summaa">3 000 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 13.5rem;">
    <span class="datas">1 500 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 11rem;">
    <span class="times">10 000 ₽</span>
</div>
<? if ($ranked == "boss"){?>   
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">Текущий</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/payout/check.png" style="width: 36px;margin-left: 20px; " alt="ico">
</div>
<?}else{?>
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">-</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/wait.png" style="width: 36px;margin-left: 20px;opacity:0.4 " alt="ico">
</div>
<?}?>


</div>

<div class="wrapperhistory">


<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/images/Master.png" style="width: 36px;margin-left:20px; " alt="ico">
</div>
<div id="telephonesz" class="rank_def transition" style="width: 10rem;">
    <span id="numbers" class="telephone">Master</span>
</div>
<div id="summm" class="rank_def transition" style="width: 8rem;">
    <span id="numbers" class="summaa">5 000 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 13.5rem;">
    <span class="datas">2 500 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 11rem;">
    <span class="times">20 000 ₽</span>
</div>
<? if ($ranked == "master"){?>   
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">Текущий</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/payout/check.png" style="width: 36px;margin-left: 20px; " alt="ico">
</div>
<?}else{?>
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">-</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/wait.png" style="width: 36px;margin-left: 20px;opacity:0.4 " alt="ico">
</div>
<?}?>

</div>

<div class="wrapperhistory">


<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/images/King.png" style="width: 36px;margin-left:20px; " alt="ico">
</div>
<div id="telephonesz" class="rank_def transition" style="width: 10rem;">
    <span id="numbers" class="telephone">King</span>
</div>
<div id="summm" class="rank_def transition" style="width: 8rem;">
    <span id="numbers" class="summaa">10 000 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 13.5rem;">
    <span class="datas">5 000 ₽</span>
</div>
<div id="dataaa"class="rank_def transition" style="width: 11rem;">
    <span class="times">50 000 ₽</span>
</div>
<? if ($ranked == "king"){?>   
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">Текущий</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/payout/check.png" style="width: 36px;margin-left: 20px; " alt="ico">
</div>
<?}else{?>
<div id="stats" class="rank_def transition" style="width: 10.5rem;">
    <span id="statusnumbers" class="statuses"style="color: #8392ab;">-</span>
</div>
<div id="pay" class="rank_def transition" style="width: 6rem;">
    <img id="ico" src="/extra/wait.png" style="width: 36px;margin-left: 20px;opacity:0.4 " alt="ico">
</div>
<?}?>


</div>







</div>
    </div><!-- card-header -->





    
</div><!-- card -->


<style>
.statuses{
    font-size: 19px;
    color: #13b601;
    margin-left: 1.5rem;
}
.telephone{
    font-size: 19px;
    color: #8392ab;

}
.summaa{
    font-size: 19px;
    color: #8392ab;
    margin-left: 1rem;

}
.times{
    font-size: 19px;
    color: #8392ab;
    margin-left: 1rem;

}
.datas{
    font-size: 19px;
    color: #8392ab;
    margin-left: 1rem;

}
.telephone2{
    font-size: 19px;
color: #13b601;

}

.wrapperhistory{
    display: inline-flex;
}
.rank_def {
    background: #e8e5f8;
    color: #313d6b;
    font-size: 14px;
    border-radius: 10px;
    padding: 10px;
    margin-right: 0.5rem;
        margin-bottom: 5px;
    cursor:pointer;
}

.rank_def:hover {
background: linear-gradient(45deg,#ffda6d,#ffbd2d 98.44%);

}

    .active{
background: linear-gradient(45deg,#ffda6d,#ffbd2d 98.44%);

    }
    
    
        .mainn{
background: linear-gradient(45.87deg, #7274ff 6.6%, #7867fb 102.94%);
            color:#fff;

    font-size: 14px;
    border-radius: 10px;
    padding: 10px;
    margin-right: 0.5rem;
        margin-bottom: 5px;
    cursor:pointer;
    }
.transition {
  transition: 200ms;
}    
    
</style>
                    </div>


                    <script>
                            function sendMesSupport() {
    if ($("#mesSupport").val() == "") {
        return $("#errorMesSupport").show().html("Введите сообщение");
    }
    $.ajax({
        type: 'POST',
        url: '/action.php',
        beforeSend: function () {
            $("#errorMesSupport").hide();
        },
        data: {
            type: "sendMesSupport",
            sid: Cookies.get('sid'),
            mes: $("#mesSupport").val()
        },
        success: function (data) {
            location.reload();
        }
    });
}
                        </script>





                </div>


<?
require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");
?>

    


<script>history.pushState(null, null, window.location.pathname.split("?")[0]);</script>


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="backdrop"></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=t0l4mk8srjk1" name="c-1m1i84a7sfb0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=j3m5luo2lm13" name="c-m1yvhjw86w55" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>