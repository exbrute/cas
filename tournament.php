<?
require ("components/header.php");
require ("components/gamebar.php");
 require ("components/livewins.php");
$result22233 = mysql_query("SELECT sum(sum) as sum FROM kot_games WHERE user_id='$id'"); 
$res22233 = mysql_fetch_assoc($result22233); 
$getfdsdf = $res22233['sum'];


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
<div class="col7 col-xl-10 mg-t-10">
    
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
    <img src="/extra/panel/icoTournamentZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Турнир
</div>
    
    <div class="cardh2">
        <div class="card-header pd-y-20  align-items-center justify-content-between d-none d-sm-block"style="border-color: #fff">
           
                                               	 <div class="btn-group ">

           
            </div>
                                               	

<style>
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

.col7 {
flex: 0 0 100%;
max-width: 100%;
}
</style>
<style>
.carddd{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #2f3140;
    background-clip: border-box;
    /* border: 1px solid rgba(72,94,144,.16); */
    border-radius: 1.25rem;
}


.dicebtn{
        background: linear-gradient(90deg,#ffc658 -18.18%,#f4a100 49.18%,#ffc658 120%);
    border-radius: 3px;
    box-shadow: 0 8px 15px #f5a30440;
    color: #2c3034;
    cursor: pointer;
margin: 5px;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: .03em;
    margin-top: 10px;

    width: 90%;
}

.dicebtn:hover{
    background: linear-gradient(90deg,#ffb82e -18.18%,#e99a00 49.18%,#ffb82e 120%);

}

.cardh {
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

<style>
.bgbtn {
    background-color: #f0f4ff;
}
.btnnew2{
color: #fff;
    background: linear-gradient(45deg, #ffffff 0%, #fafafa 100%);
    border-color: #eaeaea;
}

.diceosn{
color: #c5c5c5;
    background: linear-gradient(45deg, #ffffff 0%, #fafafa 100%);
    border-color: #eaeaea;
font-weight: bold;


}

.diceact{
color: #fff;
    background: linear-gradient(45deg, #0586f9 0%, #3094e7 100%);
    border-color: #eaeaea;
font-weight: bold;

}

.btnnew2:Hover{
color: #fff;
background: linear-gradient(45deg, #fcfcfc 0%, #fafafa 100%);
    border-color: #eaeaea;
}

</style>
<style>

.active2{
    
    background-color:  #e5f2ff;
    border-color: #edf6ff;

}

.tablebtn{
    
font-size: 11px;
    width: 100px;
    border-radius: 1.2rem;
    border-color: #e6e6e6;
    height: 2.5rem;

        text-align: center;


}

.editnew {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.9375rem + 2px);
    padding: 0.46875rem 0.625rem;
    font-size: 16px;
    font-weight: 400;
    line-height: 2.5;
    color: #596882;
    background-color: #2a2c38;
    background-clip: padding-box;
    /* border: 1px solid #c0ccda; */
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    
    margin-bottom: 5%;
    
    
}


.btnvibor {
    align-items: center;
background: #262832;
    color: #8392a5;
    font-size: 12px;
    font-weight: 600;

    justify-content: center;
    line-height: 17px;
    text-align: center;
}
.btnvibor:hover{
    background: linear-gradient(45deg,#2858dd,#29abe2 98.44%);
    color: white;
}

.divider-text2 {
    position: relative;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #838d9b;
    font-size: 10px;
    font-weight: bold;
    font-family: -apple-system,BlinkMacSystemFont,inter ui,Roboto,sans-serif;
    letter-spacing: .5px;
    margin: 15px 0;
}



.game_ {
    align-items: center;
    border: 0;
    border-radius: 10px;
    box-shadow: 0 5px 10px 2px rgb(8 10 12/5%);
    cursor: pointer;
    display: inline-flex;
    height: 207px;
    justify-content: center;
    margin: 5px;
    overflow: hidden;
    position: relative;
    transition: .2s ease;
    width: 140px;
}
.game_ .game_image {
    height: 207px;
    width: 140px;
}
.vue-load-image {
    background-color: initial;
    display: inline-block;
    height: 207px;
    overflow: hidden;
    position: relative;
    width: 140px;
}
.provider_container {
    align-items: center;
    background: linear-gradient(180deg,rgba(3,25,58,0),#0a0a0a);
    bottom: 0;
    display: flex;
    justify-content: center;
    left: 0;
    opacity: 1;
    padding: 5px 0;
    position: absolute;
    right: 0;
    z-index: 1;
}
.small_provider {
    font-size: 8px;
    letter-spacing: .14em;
    line-height: 100%;
    margin-bottom: 0;
    text-transform: uppercase;
}
.provider_container2 {
    color: #fff;
    opacity: 1;
}
.game_badges {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    position: absolute;
    right: 0;
    top: 0;
}
.game_badge {
    box-sizing: border-box;
    height: 2rem;
    opacity: 1;
    padding: 0;
    position: relative;
    width: 2rem;
}

.game_ .game_image {
    height: 207px;
    width: 140px;
}
.info {
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
    opacity: 0;
    pointer-events: none;
    text-align: center;
    transition: .45s ease;
    width: 100%;
}
.info:before {
    background-color: rgba(32,43,77,.9);
    content: "";
    height: 100%;
    left: 0;
    opacity: .85;
    position: absolute;
    top: 0;
    width: 100%;
}
.info .title, .info .title2 {
    color: #fff;
    display: flex;
    font-weight: 700;
    height: 30px;
    justify-content: center;
    margin: 0 auto;
    text-align: center;
    z-index: 1;
}
.info .title {
    font-size: .875rem;
    line-height: 1rem;
    padding-bottom: 20px;
    padding-top: 25px;
    width: 90%;
}
.go {
    background-image: url(/image/button__play.svg);
    background-repeat: no-repeat;
    background-size: 100%;
    height: 42px;
    margin: 0 auto;
    opacity: .95;
    width: 42px;
    z-index: 1;
}
.info .title3 {
    color: #fff;
    font-size: 8px;
    font-weight: 500;
    letter-spacing: .14em;
    line-height: 100%;
    padding-bottom: 5px;
    text-transform: uppercase;
    z-index: 1;
}


.blackz {
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -o-transition: all 1s ease;
   -ms-transition: all 1s ease;
   transition: all 1s ease;
}

.blackz:hover {
   -webkit-filter: brightness(750%);
   filter: brightness(75%);
}

.top3Winners.svelte-7v4qc0 {
    display: grid;
    column-gap: 18px;
    grid-template-columns: 1fr 1fr 1fr;
    margin-bottom: 25px;
}
.tournamentWinnerCardWrapper.svelte-1yh2sl4.svelte-1yh2sl4 {
    position: relative;
        width: 21rem;
    height: 100%;
    border-radius: 15px;
}
.tournamentWinnerCardBG.svelte-1yh2sl4.svelte-1yh2sl4 {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    border-radius: 15px;
}

.tournamentWinnerCard.svelte-1yh2sl4.svelte-1yh2sl4 {
    padding: 15px 10px;
}

.tournamentWinnerCard.svelte-1yh2sl4.svelte-1yh2sl4 {
    position: relative;
    height: 100%;
    padding: 15px 22px 32px 22px;
    border-radius: 15px;
       background: #f2f0f9;
    z-index: 1;
}
.tournamentWinnerPlace.svelte-1yh2sl4.svelte-1yh2sl4 {
    display: flex;
    min-height: 20px;
    justify-content: space-between;
    font-weight: 500;
    font-size: 12px;
    line-height: 155%;
    color: #7e7e7e;
}
.tournamentWinnerAvatarWrapper.svelte-1yh2sl4.svelte-1yh2sl4 {
    position: relative;
    margin-bottom: 19px;
}
.tournamentWinnerAvatarLine.svelte-1yh2sl4.svelte-1yh2sl4 {
    position: absolute;
    width: 100%;
    top: 50%;
    right: 0;
    transform: translate(0, -50%);
border-bottom: 2px dashed #bab1ed;
}
.tournamentWinnerAvatar.svelte-1yh2sl4.svelte-1yh2sl4 {
    position: relative;
    margin: 0 auto;
    width: max-content;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.inlineSkeletonWrapper.svelte-cwtbyk {
    position: relative;
    border-radius: 50%;
    background: #fff;
}
.inlineSkeletonBG.svelte-cwtbyk {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    background: rgb(80, 81, 86);
background: linear-gradient( 45deg, rgb(186 177 237) 0%, rgb(192 183 239) 100% );
}
.inlineSkeleton.svelte-cwtbyk {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: calc(100% - 8px);
    height: calc(100% - 8px);
    border-radius: 50%;
    background: #fff;
}
.tournamentWinnerName.svelte-1yh2sl4.svelte-1yh2sl4 {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 35px;
}
.tournamentWinnerNameFullname.svelte-1yh2sl4.svelte-1yh2sl4 {
    margin-bottom: 2px;
    font-weight: 600;
    font-size: 24px;
    line-height: 28px;
    color: #fff;
}
.inlineSkeleton.svelte-2k7wxt {
    height: 18px;
    border-radius: 10px;
}
.tournamentWinnerNameDescription.svelte-1yh2sl4.svelte-1yh2sl4 {
    font-weight: 500;
    font-size: 12px;
    line-height: 155%;
    color: #7e7e7e;
}
.inlineSkeleton.svelte-2k7wxt {
    height: 18px;
    border-bottom: 2px dotted #bab1ed;
    border-radius: 10px;
}
.tournamentWinnerPlates.svelte-1yh2sl4.svelte-1yh2sl4 {
    grid-template-columns: 1fr 1.3fr;
}
.cardSkeleton.svelte-3wfrqq {
    width: 100%;
    height: 100%;
    background: #fff;
    border-radius: 10px;
}

.tournamentWinnerPlates.svelte-1yh2sl4.svelte-1yh2sl4 {
    display: grid;
    column-gap: 12px;
    grid-template-columns: 1fr 1.3fr;
    grid-template-rows: 86px;
}

.avatars{
width: 133px;
    height: 135px;
    border-radius: 27rem;
    margin-bottom: -8.55rem;
    z-index: 1;
    object-fit: cover;    
}

.medals{
    text-align: center; 
    position: absolute;
    height: 5rem;
    margin-left: 6.5rem;
    margin-top: -1rem;
}
.nicktop{
    color: #312c48;
    margin: 0 auto;
    text-align: center;
}
.tournamentHeaderInactive.svelte-e02fys {
    display: grid;
    position: relative;
    justify-content: space-between;
    padding: 8px;
    column-gap: 63px;
    margin-bottom: 25px;
    grid-template-columns: 1fr 408px;
    background: linear-gradient(45deg,#d6a433,#FED25A 98.44%);
    border-radius: 15px;
    overflow: hidden;
}
.tournamentHeaderInactiveImage.svelte-e02fys {
position: absolute;
left: 65%;
    top: 50%;
    transform: translate(-20%, -50%);
    background: url(/images/coines.png) no-repeat;
    /* background-position: center; */
    height: 100%;
    width: 100%;
    z-index: 0;
}
.tournmentDidntStart.svelte-e02fys {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-left: 15px;
    z-index: 1;
}
.tournmentDidntStartTitle.svelte-e02fys {
    margin-bottom: 14px;
    font-weight: 600;
    font-size: 32px;
    line-height: 100%;
    color: white;
}
.tournmentDidntStartDescription.svelte-e02fys {
    font-weight: 400;
    font-size: 12px;
    line-height: 127%;
    color: white;
    opacity: 0.8;
}
.tournamentInfo.svelte-ic5hp7.svelte-ic5hp7 {
    display: flex;
    align-items: center;
    border-radius: 15px;
}
.howToStart.svelte-ic5hp7.svelte-ic5hp7 {
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 15px;
    background: #2f323d;
    border-radius: 14px;
    overflow: hidden;
}
.howToStartBG.svelte-ic5hp7.svelte-ic5hp7 {
    position: absolute;
    max-width: 184px;
    z-index: 0;
    top: -7px;
    right: -60px;
    overflow: hidden;
    opacity: .35;
}
.howToStartBG.svelte-ic5hp7 img.svelte-ic5hp7 {
    width: 184px;
    height: auto;
}

.howToStartTitle.svelte-ic5hp7.svelte-ic5hp7 {
    max-width: 125px;
    margin-bottom: 12px;
    font-weight: 500;
    font-size: 12px;
    line-height: 127%;
    color: white;
}
.dark_btn {
    font-size: 14px;
    font-weight: 500;
    position: relative;
    color: var(--color-black);
    background: #0f0f0f;
    border-radius: 8px;
    cursor: pointer;
    border: none;
    outline: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-transition: .2s linear;
    -o-transition: .2s linear;
    transition: .2s linear;
    touch-action: manipulation;
}
.tournamentInfoButtonContent.svelte-ic5hp7.svelte-ic5hp7 {
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 8px;
    align-items: center;
    justify-content: center;
    color: #fff;
}
</style>

        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12  mg-b-20" style="margin-left: 1.6rem;
    margin-bottom: -16px;">
            

<div class="tournamentHeaderInactive svelte-e02fys" id="interaer"style="height: 7rem;">
    <div class="tournamentHeaderInactiveImage svelte-e02fys"id="coinses"></div> 
    <div class="tournmentDidntStart svelte-e02fys">
        
      
        <span class="tournmentDidntStartTitle svelte-e02fys" id="txtsh">Призовой фонд 1.000.000 ₽</span> 
      <span class="tournmentDidntStartDescription svelte-e02fys"style=""id="txtsh">10 призовых мест! Окончание турнира 01.01.2024</span>
      
      
      
 <span class="tournmentDidntStartTitle svelte-e02fys dnones"id="txt2">10 млн призов!</span> 
      <span class="tournmentDidntStartDescription svelte-e02fys dnones" id="txt1"style="">10 призовых мест! Окончание турнира 01.01.2024</span>      
      
      
      </div>
    
       </div>



<style>
.dnones{
    display:none;
}
.vinette{
position: absolute;
    width: 10%;
    height: 20%;
    top: 13%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #8f8f8f;
    filter: blur(27px);
}
.vinette2{
position: absolute;
    width: 10%;
    height: 20%;
    top: 13%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #f3ba71;
    filter: blur(27px);
}
@media screen and (max-width: 432px){
     
  #mobcardb{
      display: contents;  
      
  }   
  #cardwrappersts{
          max-width: 19rem;
    max-height: 30rem;
    margin-bottom: 2rem;
  }
  #interaer{

    max-width: 19rem;
  }
  #txt1{
    font-size: 11px;
    margin-top: -33px;
    display: block;
    width: 260px;
  }
    #txt2{
margin-bottom: 33px;
    font-size: 16px;
    width: 136px;
    display: block;
    margin-top: -39px;
  }
  #coinses{
      left: 20%;
    top: 100%;
  }
  #txtsh{
      display:none;
  }
#imagesss{
    margin-left: 5.5rem;
}
}
</style>
                    
                      
<div class="top3Winners svelte-7v4qc0" id="mobcardb">
    
    
    <div class="tournamentWinnerCardWrapper  svelte-1yh2sl4">
        <div class="tournamentWinnerCardBG  svelte-1yh2sl4"></div> 
        <div class="tournamentWinnerCard  svelte-1yh2sl4" style=""id="cardwrappersts">
            
            
            
            
            <div class="tournamentWinnerPlace svelte-1yh2sl4" ></div><div class="vinette"></div>   <img src="/images/two_medal.png" class="medals" id="imagesss"> 
            <div class="tournamentWinnerAvatarWrapper svelte-1yh2sl4" style="  margin-top: 90px">
                <div class="tournamentWinnerAvatarLine svelte-1yh2sl4"></div> 
                <div class="tournamentWinnerAvatar svelte-1yh2sl4"> 
            <img src="/images/ProfilePhoto2.svg" class="avatars" alt=""> 
            <div class="inlineSkeletonWrapper svelte-cwtbyk" style="    width: 140px;  height: 140px;">
                <div class="inlineSkeletonBG svelte-cwtbyk"></div> 
                <div class="inlineSkeleton svelte-cwtbyk"></div></div></div></div> 
                <div class="tournamentWinnerName svelte-1yh2sl4">
                    <span class="tournamentWinnerNameFullname svelte-1yh2sl4" style="    text-align: center;"> <span class="nicktop">Barbie1***</span>
                        <div class="inlineSkeleton responsiveInlineSkeleton svelte-2k7wxt" style="width: 148px;height: 4px;"></div></span> 
                        <span class="tournamentWinnerNameDescription svelte-1yh2sl4">
                            <div class="inlineSkeleton responsiveInlineSkeleton" style="width: 74px;"></div></span></div> 
                         
    <div class="tournamentWinnerPlates svelte-1yh2sl4">
                           <div class="cardSkeleton svelte-3wfrqq" style=" display: grid;   text-align: center;"><span style="    margin-top: 1rem;    color: #8392a5;">Сумма ставок</span> <span style="    color: #8392a5;">175.000</span></div> 
 <div class="cardSkeleton svelte-3wfrqq" style=" display: grid;   text-align: center;background: linear-gradient(45deg,#d6a433,#FED25A 98.44%);"><span style="    margin-top: 1rem;    color: #fff;">Приз</span> <span style="    color: #fff;">300.000 ₽</span></div>
                        </div>
                         
                           </div></div>
                           
                           
    <div class="tournamentWinnerCardWrapper  svelte-1yh2sl4" >
        <div class="tournamentWinnerCardBG  svelte-1yh2sl4"></div> 
        <div class="tournamentWinnerCard  svelte-1yh2sl4" style=""id="cardwrappersts">
            <div class="tournamentWinnerPlace svelte-1yh2sl4"></div>  <div class="vinette2"></div> <img src="/images/one_medal.png" class="medals" id="imagesss"> 
            <div class="tournamentWinnerAvatarWrapper svelte-1yh2sl4" style="  margin-top: 90px">
                <div class="tournamentWinnerAvatarLine svelte-1yh2sl4"></div> 
                <div class="tournamentWinnerAvatar svelte-1yh2sl4"> 
            <img src="/images/ProfilePhoto.svg" class="avatars" alt=""> 
            <div class="inlineSkeletonWrapper svelte-cwtbyk" style="    width: 140px;  height: 140px;">
                <div class="inlineSkeletonBG svelte-cwtbyk"></div> 
                <div class="inlineSkeleton svelte-cwtbyk"></div></div></div></div> 
                <div class="tournamentWinnerName svelte-1yh2sl4">
                    <span class="tournamentWinnerNameFullname svelte-1yh2sl4" style="    text-align: center;"> <span class="nicktop">lexuso***</span>
                        <div class="inlineSkeleton responsiveInlineSkeleton svelte-2k7wxt" style="width: 148px;height: 4px;"></div></span> 
                        <span class="tournamentWinnerNameDescription svelte-1yh2sl4">
                            <div class="inlineSkeleton responsiveInlineSkeleton" style="width: 74px;"></div></span></div> 
                         
     <div class="tournamentWinnerPlates svelte-1yh2sl4">
                           <div class="cardSkeleton svelte-3wfrqq" style=" display: grid;   text-align: center;"><span style="    margin-top: 1rem;    color: #8392a5;">Сумма ставок</span> <span style="    color: #8392a5;">250.000</span></div> 
 <div class="cardSkeleton svelte-3wfrqq" style=" display: grid;   text-align: center;background: linear-gradient(45deg,#d6a433,#FED25A 98.44%);"><span style="    margin-top: 1rem;    color: #fff;">Приз</span> <span style="    color: #fff;">450.000 ₽</span></div>
                        </div>                        
                         
                           </div></div>


    <div class="tournamentWinnerCardWrapper  svelte-1yh2sl4">
        <div class="tournamentWinnerCardBG  svelte-1yh2sl4"></div> 
        <div class="tournamentWinnerCard  svelte-1yh2sl4" style=""id="cardwrappersts">
            <div class="tournamentWinnerPlace svelte-1yh2sl4"></div> <div class="vinette"></div>  <img src="/images/three_medal.png" class="medals" id="imagesss"> 
            <div class="tournamentWinnerAvatarWrapper svelte-1yh2sl4" style="  margin-top: 90px">
                <div class="tournamentWinnerAvatarLine svelte-1yh2sl4"></div> 
                <div class="tournamentWinnerAvatar svelte-1yh2sl4"> 
            <img src="/images/ProfilePhoto2.svg" class="avatars" alt=""> 
            <div class="inlineSkeletonWrapper svelte-cwtbyk" style="    width: 140px;  height: 140px;">
                <div class="inlineSkeletonBG svelte-cwtbyk"></div> 
                <div class="inlineSkeleton svelte-cwtbyk"></div></div></div></div> 
                <div class="tournamentWinnerName svelte-1yh2sl4">
                    <span class="tournamentWinnerNameFullname svelte-1yh2sl4" style="    text-align: center;"> <span class="nicktop">Antong***</span>
                        <div class="inlineSkeleton responsiveInlineSkeleton svelte-2k7wxt" style="width: 148px;height: 4px;"></div></span> 
                        <span class="tournamentWinnerNameDescription svelte-1yh2sl4">
                            <div class="inlineSkeleton responsiveInlineSkeleton" style="width: 74px;"></div></span></div> 
                       
                       
                       <div class="tournamentWinnerPlates svelte-1yh2sl4">
                           <div class="cardSkeleton svelte-3wfrqq" style=" display: grid;   text-align: center;"><span style="    margin-top: 1rem;    color: #8392a5;">Сумма ставок</span> <span style="    color: #8392a5;">100.000</span></div> 
                           <div class="cardSkeleton svelte-3wfrqq" style=" display: grid;   text-align: center;background: linear-gradient(45deg,#d6a433,#FED25A 98.44%);"><span style="    margin-top: 1rem;    color: #fff;">Приз</span> <span style="    color: #fff;">200.000 ₽</span></div> 
                        </div>
                           
                           </div></div>

                           
                           
                           
                           
                           
                           
                           
                           </div>       
       
                                 
 <style>
     .table td{
         border-top: 23px solid rgb(247 245 254);
     }
    
 </style>                                      


                                                    
                   </div>  
            </div><!-- card-body -->
        </div><!-- card-body -->
            <div class="table-responsive mg-t-20 mg-b-15" id="tablees">
  <center>      <table class="table mg-b-0 table-live">
            
            <thead>
                <tr>
                    
                    <th class="" style=" font-weight: bold;color: #8392a5;">Место</th>
                    <th class="" style=" font-weight: bold;color: #8392a5;">Игрок</th>
                    <th class="" style=" font-weight: bold;color: #8392a5;">Ставок</th>
                    <th class="" style=" font-weight: bold;color: #8392a5;">Приз</th>
                </tr>
            </thead>
            
                        <tbody>
                           <?php
                           
$withdraws_list = "SELECT * FROM kot_withdraws ORDER BY date DESC LIMIT 1";
$all_withdraws_list = mysql_query($withdraws_list);
while($row = mysql_fetch_array($all_withdraws_list)) {
   $sum1 = rand(300,2000);
                    
                    $data1 = date("d.m.Y T", time());

                    

 $rndmesto =  rand(496,594);
  
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

$allsum = number_format($getfdsdf);


    $f_contents = file("successrnd.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
$data999 = $line;


	$photo1 = '<img src="/images/ProfilePhoto.svg" style=" width:2rem;height:2rem; border-radius:1rem;" alt="">';
$photo2 = '<img src="/images/ProfilePhoto2.svg" style=" width:2rem;height:2rem; border-radius:1rem;" alt="">';
$photo3 = '<img src="/images/PhotoProfileDefault.svg" style=" width:2rem;height:2rem; border-radius:1rem;" alt="">';


     $f_contents9 = file("tourfake.txt"); 
    $top4 = $f_contents9[rand(0, count($f_contents9) - 1)];         
    
     $f_contents92 = file("tourfake.txt"); 
    $top5 = $f_contents92[rand(0, count($f_contents92) - 1)];         

     $f_contents93 = file("tourfake.txt"); 
    $top6 = $f_contents93[rand(0, count($f_contents93) - 1)];         
    
     $f_contents94 = file("tourfake.txt"); 
    $top7 = $f_contents94[rand(0, count($f_contents94) - 1)];         

     $f_contents95 = file("tourfake.txt"); 
    $top8 = $f_contents95[rand(0, count($f_contents95) - 1)];         

     $f_contents96 = file("tourfake.txt"); 
    $top9 = $f_contents96[rand(0, count($f_contents96) - 1)];         

     $f_contents97 = file("tourfake.txt"); 
    $top10 = $f_contents97[rand(0, count($f_contents97) - 1)];         
    
 $rnd11 =  rand(97139,98517);
 $top4sum = number_format($rnd11); 

 $rnd112 =  rand(92139,92517);
 $top4sum2 = number_format($rnd112); 

 $rnd1123 =  rand(87139,88517);
 $top4sum3 = number_format($rnd1123); 

 $rnd11234 =  rand(76139,76817);
 $top4sum4 = number_format($rnd11234);   
 
 $rnd112345 =  rand(72139,73817);
 $top4sum5 = number_format($rnd112345);   
 
 $rnd1123456 =  rand(68139,68817);
 $top4sum6 = number_format($rnd1123456);   

 $rnd11234567 =  rand(64139,65517);
 $top4sum7 = number_format($rnd11234567);   
 
 $rnd112345678 =  rand(278139,279517);
 $top4sum8 = number_format($rnd112345678);   
 
 $rnd1123456789 =  rand(158139,159517);
 $top4sum9 = number_format($rnd1123456789);   

 $rnd11234567891 =  rand(118139,112517);
 $top4sum10 = number_format($rnd11234567891);   

 
echo '

<tr>
<td style="font-weight: bold; color: #8392a5;">1</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo1.'  lexuso***</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum8.'</td>  
<td style="font-weight: bold; color: #8392a5;">450.000 ₽</td>  
</tr>


<tr>
<td style="font-weight: bold; color: #8392a5;">2</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo2.'  Barbie1***</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum9.'</td>  
<td style="font-weight: bold; color: #8392a5;">300.000 ₽</td>  
</tr>


<tr>
<td style="font-weight: bold; color: #8392a5;">3</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo2.'  Antong***</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum10.'</td>  
<td style="font-weight: bold; color: #8392a5;">200.000 ₽</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">4</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo3.'  '.$top4.'</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum.'</td>  
<td style="font-weight: bold; color: #8392a5;">7.150 ₽</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">5</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo3.'  '.$top5.'</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum2.'</td>  
<td style="font-weight: bold; color: #8392a5;">7.150 ₽</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">6</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo3.'  '.$top6.'</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum3.'</td>  
<td style="font-weight: bold; color: #8392a5;">7.150 ₽</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">7</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo3.'  '.$top7.'</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum4.'</td>  
<td style="font-weight: bold; color: #8392a5;">7.150 ₽</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">8</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo3.'  '.$top8.'</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum5.'</td>  
<td style="font-weight: bold; color: #8392a5;">7.150 ₽</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">9</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo3.'  '.$top9.'</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum6.'</td>  
<td style="font-weight: bold; color: #8392a5;">7.150 ₽</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">10</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo3.'  '.$top10.'</td>  
<td style="font-weight: bold; color: #8392a5;">'.$top4sum7.'</td>  
<td style="font-weight: bold; color: #8392a5;">7.150 ₽</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">-</td> 
<td style="font-weight: bold; color: #8392a5;">-</td>  
<td style="font-weight: bold; color: #8392a5;">-</td>  
<td style="font-weight: bold; color: #8392a5;">-</td>  
</tr>

<tr>
<td style="font-weight: bold; color: #8392a5;">'.$rndmesto.'</td> 
<td style="font-weight: bold; color: #8392a5;">'.$photo3.'  '.$login.'</td>  
<td style="font-weight: bold; color: #8392a5;">'.$allsum.'</td>  
<td style="font-weight: bold; color: #8392a5;">0 ₽</td>  
</tr>

';

  }
  

?>

                        </tbody>            
            
            <style>
            i{
                color: #5f9c62;
            }
                #response tr:hover{
                    cursor:pointer;
                }
            </style>
           
        
        </table>
        </center>
    </div><!-- table-responsive --> 
    </div><!-- card -->
    


         <script>
function slotdep()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Для доступа к игре, вам необходимо иметь депозит от 1000р за последние 7 дней!',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}

</script>      


    
    <BR>


</div>
<style>
    
    .textsuc{

        color:  red;
    }
</style>
<?
                  require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");
?>