<?
require ("components/header_ban.php");




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




<style>
    .visual {
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -o-transition: all 1s ease;
   -ms-transition: all 1s ease;
   transition: all 1s ease;
}

.visual:hover {
   -webkit-filter: brightness(950%);
   filter: brightness(95%);
}
.fiatbtn {
    align-items: center;
    background: linear-gradient(90deg,#6256e5 .06%,#6a5df6 98.49%);
    border-radius: 4px;
    color: #fff;
    display: flex;
 position: absolute;
 right: 0;
    font-weight: 600;
    height: 40px;
    justify-content: center;
    line-height: 17px;
    margin-right: 25px;
    text-align: center;
    margin-top: -37px;
    width: 36px;
    cursor:pointer;
}
.fiatbtn:hover {
background: linear-gradient(90deg,#5f54da .06%,#6559e7 98.49%);
}
</style>

    
    <div class="cardh2">
        <div class=""style="">
        
                                               	 <div class="btn-group ">

           
            </div>
                                               	

<style>
.cardh2 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
}

.col7 {
flex: 0 0 100%;
max-width: 100%;
}
</style>
<style>
     .dice_sidebar-btns {
    display: grid;
    gap: var(--padding);
}
.dice_sidebar-btns:hover{
    opacity:0.9;
}
.bt {
    align-items: center;
    background: transparent;
    border: 0;
    border-radius: 4px;
    color: inherit;
    cursor: pointer;
    display: flex;
    font-family: inherit;
    font-size: inherit;
    gap: 4px;
    justify-content: center;
    line-height: 1.2;
    outline: none;
    padding: 0;
    transition: .3s;
}
.bt-light {
    background: #3a3f4e;
    color: #78819d;
}

 .bt-light {
    border-radius: 4px;
    color: #b6b0d7;
    font-weight: 600;
    padding: 0 12px;
}
    .diceinput {
        border: none;
    border-radius: 4px;
    position: relative;
    width: 100%;
    z-index: 1;
 background: #e7e2f9; 
 color:#312C48;

    text-align: center;
    FONT-FAMILY: 'GILROY-BOLD';
    font-size:16px;
}
    .dice_sidebar_field__body {
    background: #3a3f4e;
}
.dice_sidebar {
    border-right: 1px solid #282d38;
}

.dice_sidebar {
    border-right: 1px solid var(--primary-100);
    display: flex;
    flex-direction: column;
    gap: var(--padding);
    min-width: 350px;
    padding: var(--padding);
    width: 350px;
}

.dice_sidebar_field {
    font-size: 14px;
}

.dice .input_gradient {
    flex-grow: 1;
    position: relative;
}
.dice_sidebar-btns {
    display: grid;
    gap: var(--padding);
}

.dice_sidebar-footer {
    margin-top: auto;
}
.dice_sidebar-hash {
    color: var(--primary-300);
    display: flex;
    font-size: 12px;
    font-weight: 500;
    gap: 4px;
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
}
.dice .bt-light {
    background: #3a3f4e;
    color: #78819d;
}

.dice .bt-light {
    border-radius: 4px;
    color: #b6b0d7;
    font-weight: 600;
    padding: 0 12px;
}
 .dice_sidebar_field__body input {
    height: 40px;
}

.dice_sidebar-toolbar_btn {
    background: linear-gradient(90deg,#7449e6 .06%,#69a4ff 98.49%);
    border-radius: 4px;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
    min-width: 44px;
    width: 44px;
}
.dice_sidebar_field__body {
    background: #3a3f4e;
}

.dice_sidebar_field__body {
    background: var(--primary-100);
    border-radius: 4px;
    display: flex;
    gap: 6px;
    justify-content: space-between;
    padding: 8px;
}
.dice_sidebar_field__header {
    color: #78819d;
}

.dice_sidebar_field__header {
    align-items: center;
    color: #b6b0d7;
    display: flex;
    font-weight: 500;
    justify-content: space-between;
}
.dice_sidebar_field__header {
    gap: 12px;
    margin-bottom: 8px;
}
 .dice_sidebar-header {
    color: #f2f0ff;
}

.dice_sidebar-header {
    align-items: center;
    display: flex;
    font-weight: 600;
    gap: 8px;
}
  
 .bt-light {
    background: #3a3f4e;
    color: #78819d;
}

.dice_sidebar-footer .bt {
    height: 42px;
}
.onmob {
    display: none;
}
.dice_sidebar-hash span {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

 .bt-light {
    border-radius: 4px;
    color: #b6b0d7;
    font-weight: 600;
    padding: 0 12px;
} 
   
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


.dicebtn {
   color: black;
    background: linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%);
    border-color: #FFDB6F;
    border-radius: 8px;
    cursor: pointer;
    display: block;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: .03em;
    margin-top: 10px;
    padding: 15px;
    width: 100%;
}

.dicebtn:hover{
background: linear-gradient(45deg,#FFBB29 ,#FFDB6F 98.44%);

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
</style>

         
<style>
.switchbomb {
    background: linear-gradient(90deg,#7449e6 .06%,#69a4ff 98.49%);
    border-radius: 4px;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
    min-width: 44px;
    width: 44px;
    opacity:0.5;
}
.switchbomb:hover{
    opacity:1;
}

.switchbomb.active{
    opacity:1;
}



.errors-notify-list-container {
    margin-bottom: 40px;
}
.error-notify:last-child {
    margin-bottom: 0;
}

.error-notify {
    overflow: hidden;
    margin-bottom: 16px;
    border-radius: 4px;
}
.error-notify.danger .error-notify__header-container {
    background-color: #eb5042;
}

.error-notify__header-container {
    display: flex;
    align-items: center;
    padding: 16px;
}
.error-notify__header-icon {
    width: 20px;
    height: 20px;
    margin-right: 8px;
}
.error-notify__header {
    font-weight: 700;
    font-size: 15px;
    line-height: 20px;
    color: #fff;
    margin: 0;
}

.error-notify.danger .error-notify__body {
    background-color: #ffe8e5;
}
.error-notify__body {
    display: flex;
    justify-content: space-between;
}
.error-notify__content-container {
    display: flex;
    flex-direction: column;
    max-width: 580px;
    padding: 16px 16px 20px 16px;
}
.error-notify__title {
    font-weight: 700;
    font-size: 22px;
    line-height: 24px;
    color: #060614f5;
    margin: 0;
    margin-bottom: 8px;
}
.error-notify__description {
    font-weight: 400;
    font-size: 15px;
    line-height: 20px;
    color: #060614e0;
    margin: 0;
    margin-bottom: 24px;
}

.error-notify__description, .error-notify__title {
    font-family: Open Sans,Arial,Helvetica,Nimbus Sans,Roboto Condensed,sans-serif;
    font-style: normal;
}
.error-notify__buttons-container {
    display: flex;
    flex-wrap: wrap;
}
img {
    vertical-align: middle;
}

img {
    border: 0;
}
.focus-visible\:ui4-outline-solid\!:focus-visible, .ui4-outline-solid\!, .ui4-outline\! {
    outline-style: solid!important;
}

.focus-visible\:ui4-outline-offset-\[-1px\]\!:focus-visible, .ui4-outline-offset-\[-1px\]\! {
    outline-offset: -1px!important;
}
.ui4-outline-current {
    outline-color: currentColor;
}
.focus-visible\:ui4-outline-transparent:focus-visible, .focus\:ui4-outline-transparent:focus, .ui4-outline-transparent {
    outline-color: #0000;
}
.focus-visible\:ui4-outline-1\!:focus-visible, .ui4-outline-1\! {
    outline-width: 1px!important;
}
.ui4-text-grey_dark_1 {
    --un-text-opacity: 1;
    color: rgba(28,28,40,var(--un-text-opacity));
}
.ui4-leading-\[20px\] {
    line-height: 20px;
}
.ui4-font-700, .ui4-font-bold {
    font-weight: 700;
}
.ui4-text-\[15px\], .ui4-text-size-\[15px\] {
    font-size: 15px;
}
.ui4-font-main {
    font-family: Open Sans,sans-serif;
}
.ui4-text-center {
    text-align: center;
}
.ui4-py-\[18px\] {
    padding-top: 18px;
    padding-bottom: 18px;
}
.ui4-px-\[24px\] {
    padding-left: 24px;
    padding-right: 24px;
}
.ui4-bg-\[transparent\], .ui4-bg-transparent {
    background-color: #0000;
}
.before\:ui4-bg-light_hole:before, .ui4-bg-\[\#FFFFFF\], .ui4-bg-grey_light_3, .ui4-bg-light_hole {
    --un-bg-opacity: 1;
    background-color: rgba(255,255,255,var(--un-bg-opacity));
}
.ui4-border-none {
    border-style: none;
}
.before\:ui4-rounded-\[2px\]:before, .ui4-rounded-\[2px\] {
    border-radius: 2px;
}
.ui4-justify-center {
    justify-content: center;
}
.ui4-items-center {
    align-items: center;
}
.ui4-cursor-pointer {
    cursor: pointer;
}
.ui4-flex {
    display: flex;
}
.before\:ui4-w-full:before, .ui4-w-full {
    width: 100%;
}
.before\:ui4-box-border:before, .ui4-box-border {
    box-sizing: border-box;
}
</style>


        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row " style="margin-left: -43px;">
                <div class="col-xs-12  mg-b-20" style="">
 

                    
                 
 <div class="errors"><div id="banlist" class="errors-notify-list-container" style="width:147%">
     <div class="error-notify danger">
         <div class="error-notify__header-container">
             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="error-notify__header-icon"><g clip-path="url(#clip0_4350_44646)"><path d="M17.0224 19.043L2.95884 19.008C1.47326 19.0044 0.510088 17.4396 1.17598 16.1116L8.19715 2.10918C8.93485 0.63797 11.0346 0.637756 11.7726 2.10881L18.815 16.1462C19.4832 17.4781 18.5125 19.0467 17.0224 19.043Z" stroke="#060614" stroke-opacity="0.96" stroke-width="2" class="ui4-stroke-current"></path> <path d="M11.502 14.5C11.502 15.3284 10.8304 16 10.002 16C9.17353 16 8.50195 15.3284 8.50195 14.5C8.50195 13.6716 9.17353 13 10.002 13C10.8304 13 11.502 13.6716 11.502 14.5Z" fill="#060614" fill-opacity="0.96" class="ui4-fill-current"></path> <path d="M10.5399 12H9.46007C9.20002 12 8.98339 11.8007 8.96179 11.5415L8.54513 6.54152C8.52083 6.25001 8.75088 6 9.0434 6H10.9566C11.2491 6 11.4792 6.25001 11.4549 6.54152L11.0382 11.5415C11.0166 11.8007 10.8 12 10.5399 12Z" fill="#060614" fill-opacity="0.96" class="ui4-fill-current"></path></g> <defs><clipPath id="clip0_4350_44646"><rect width="20" height="20" fill="white"></rect></clipPath></defs></svg> 
             <h5 class="error-notify__header">Доступ к сайту ограничен</h5></div> 
             <div class="error-notify__body">
                 <div class="error-notify__content-container">
                     <h4 class="error-notify__title">На сайте ведутся технические работы</h4> 
                     <p class="error-notify__description">Информацию об окончании технических работ можно уточнить в поддержке!</p> 
                     <div class="error-notify__buttons-container"><!----> 
                     <div class="error-notify__button">
                         <button style="background: #ffe8e5;"tabindex="0" type="button" class="ui4-font-main ui4-text-center ui4-outline-1! ui4-outline-offset-[-1px]! ui4-outline-transparent ui4-outline-transparent ui4-cursor-pointer ui4-main-transition ui4-flex ui4-items-center ui4-justify-center ui4-rounded-[2px] ui4-box-border ui4-border-none focus-visible:ui4-outline-1! focus-visible:ui4-outline-offset-[-1px]! focus-visible:ui4-outline-solid! focus-visible:ui4-outline-focused_red! ui4-w-full ui4-px-[24px] ui4-py-[18px] ui4-text-[15px] ui4-leading-[20px] ui4-font-700 ui4-text-grey_dark_1 ui4-bg-grey_light_3 hover:ui4-bg-grey_light_2 active:ui4-bg-grey_light_1 ui4-outline! ui4-outline-1! ui4-outline-current ui4-bg-transparent">
    
    
            Написать в поддержку
          </button style=""></div></div></div> <div class="error-notify__aside"><img src="/images/flag.svg" alt="error-image"></div></div></div> <!----></div></div>                
                 
                 
                 
                 
                 
                 
                    

            

                                                    
                   </div>   
            </div><!-- card-body -->
        </div><!-- card-body -->
    </div><!-- card -->
    


    


    

</div>
<style>
       @media screen and (max-width: 432px){


#banlist {
   max-width: 105%;
}



}
    .textsuc{

        color:  red;
    }
</style>
<?

require ("components/modal.php");
require ("components/footer.php");
?>