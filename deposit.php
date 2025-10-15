<?php

require ("components/header.php");
require ("components/main.php");
require ("components/gamebar.php");
require ("components/livewins.php");

require("inc/site_config.php");

?>

      
            <div class="row ">

                <div class="col-sm-6 col-lg-2 mg-t-10">


                    


                 




                </div>



<div class="col-lg-8 col-xl-8 mg-t-10 " style="margin-bottom:35%">
    
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
    
    .game-container {
    position: relative;
    margin: 0 auto 15px auto;
    max-width: 1200px;
    width: 100%;
}
.game-container_wallet {
background: #ffffff;
    border-radius: 12px;
    color: #9286c1;
}
.wallet-header__item {
    display: block;
    padding: 15px 20px;
    flex: 1;
    text-align: center;
    position: relative;
    transition: .2s color;
color: #fff;
    
}
.modal-active{
    display:block;
}
.wallet-header {
    display: flex;
    justify-content: space-around;
background: linear-gradient(45.87deg, #7274ff 6.6%, #7867fb 102.94%);
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    border-bottom: 1px solid #fff;
    /* padding: 0px 20px; */
}


.wallet-header__item.active::after {
    content: "";
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #6056f2;
}

.wallet-header__item {
    display: block;
    padding: 15px 20px;
    flex: 1;
    text-align: center;
    position: relative;
    transition: .2s color;
}

.wallet-body {
    display: flex;
}
.wallet-sidebar {
    flex: 1;
    padding: 25px;
    border-right: 1px solid #e5dfff;
}
.wallet-sidebar__header {
    margin-bottom: 10px;
}
 .wallet-options__item.active {
    border-color: #9c93ff;
    cursor: pointer;
}
.wallet-area {
    flex: 2;
    padding: 25px;
}
.wallet-options__item {
    display: flex;
    align-items: center;
border: 1px solid #e5dfff;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
    margin-bottom: 10px;
    box-sizing: border-box;
    -webkit-appearance: none;
    width: 100%;
background: #f7f5fe;
    outline: none;
    position: relative;
        height: 100%;
    margin: 0.5rem;
}
.wallet-area__payway {
    display: flex;
    align-items: center;
}
.wallet-area__payway-image {
    width: 20px;
    display: inline-block;
}
.wallet-area__payway-image {
    width: 20px;
    margin-left: 10px;
    margin-right: 5px;
}

.wallet-area__payway-name {
    color: #8b77bd;
}
.wallet-area-select {
    margin-top: 10px;
    display: none;
}
.form-select_light select {
    background-color: #22252f;
}
.form-select select {
    width: 100%;
    background-color: #1b1c24;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    outline: none;
    color: #cdcdcd;
    font-size: 14px;
    height: 46px;
    border-radius: 8px;
    padding-left: 10px;
}
.form-select_light span {
    font-size: 10px;
    top: 19px;
    color: #cdcdcd;
}
.form-select span {
    position: absolute;
    top: 16px;
    right: 10px;
}
.wallet-area__delimiter {
    display: flex;
    justify-content: center;
    margin: 15px 0;
    overflow: hidden;
    position: relative;
}
.wallet-area__delimiter::before {
    content: '';
    position: absolute;
    width: 100%;
    background: #e5dfff;
    height: 1px;
    left: 0;
    top: 50%;
}
.wallet-area__delimiter_item {
    background: #ffffff;
    position: relative;
    z-index: 55;
    padding: 0 20px;
    font-size: 10px;
    color: #8b77bd;
    font-weight: 800;
}
.myicon-down-arrow:before {
    content: "\e929";
}


.sum-options {
    display: flex;
    flex-wrap: wrap;
    margin: 10px -5px 5px -5px;
}
.sum-option-wrapper {
    width: 25%;
    padding: 5px;
}
.sum-option {
    background: #f9f7ff;
    -webkit-appearance: none;
    outline: none;
    border: 1px solid #e5dfff;
    color: #9286c1;
    /* width: 25%; */
    width: 100%;
    border-radius: 8px;
    height: 42px;
    font-weight: 500;
    font-size: 16px;
}
.sum-option__currency {
    font-size: 12px;
}

.payment-total {
border: 1px solid #e5dfff;
    padding: 20px;
    background: #ffffff;
    border-radius: 10px;
}
.payment-total__first-row {
    display: flex;
}
.payment-sum {
    margin-right: 10px;
}
.payment-field {
    flex: 1;
}
.payment-field label {
    font-size: 14px;
    line-height: 14px;
    margin-bottom: 15px;
    display: inline-block;
}
.validation-wrapper {
    position: relative;
}

.withdraw__rate {
    display: none;
}

.info-block {
    color: #fff;
    margin: 10px 0 25px 0;
    padding: 15px 10px;
    background: #22252f;
    font-size: 13px;
    border-radius: 5px;
    border-left: 5px #ffbb29 solid;
    line-height: 1.5;
}
.payment-total__second-row {
    display: flex;
    margin-top: 10px;
}
.promo-column {
    flex: 1;
    margin-right: 10px;
}
.payment-promocode-call {
    color: #adadad;
    font-size: 12px;
    margin-top: 5px;
    display: inline-block;
    border-bottom: 1px dashed;
}
.payment-result {
    flex: 1;
    margin-top: 5px;
}
.payment-result__row.hidden {
    display: none;
}
.payment-result__row {
    display: flex;
    font-size: 12px;
    color: #adadad;
    margin-bottom: 5px;
}
.payment-result__row {
    display: flex;
    font-size: 12px;
    color: #adadad;
    margin-bottom: 5px;
}
.payment-result__row-dots {
    flex: 1;
    /* border-bottom: 1px dotted #484848; */
    /* margin: 0 7px; */
    /* transform: translateY(-2px); */
}
.payment-result__row-value {
    color: #fff;
    /* flex: 1; */
    /* text-align: right; */
    position: relative;
}
.payment-result__row_finish {
    font-weight: 800;
    font-size: 14px;
    margin-top: 7px;
}
.payment-result__row {
    display: flex;
    font-size: 12px;
    color: #adadad;
    margin-bottom: 5px;
}
.payment-result__row_finish .payment-result__row-label {
    text-transform: uppercase;
}
.payment-result__row {
    display: flex;
    font-size: 12px;
    color: #adadad;
    margin-bottom: 5px;
}
.game-sidebar__play-button.game-sidebar__play-button_green {
    width: 100%;
    margin-top: 15px;

    color: #fff;
 background: linear-gradient(45.87deg,#89C763 0%, #0E9347 100%); 
}
.payment-raffle {
    margin-top: 25px;
    color: #adadad;
    display: flex;
    align-items: center;
}
.payment-raffle__left {
    font-size: 60px;
    margin-right: 15px;
    color: green;
}

.payment-raffle__title {
    font-size: 16px;
    margin-bottom: 5px;
    color: #cdcdcd;
}
.payment-raffle__description {
    font-size: 12px;
}
.def_link {
    border-bottom: 1px solid #ffbb29;
    -webkit-transition: .2s all ease;
    -o-transition: .2s all ease;
    transition: .2s all ease;
}

.wallet-options__item-image {
    display: flex;
    align-items: center;
    height: 40px;
    width: 65px;
    justify-content: center;
    margin-right: 10px;
    margin-left: -7px;
background: #ffffff;
}

.wallet-options__item.active .wallet-options__item-comission {
    background: #f7f5fe;
    color: #b8a8e1;
}
.wallet-options__item.active .wallet-options__item-comission__value-wrapper {
    display: none;
}
.wallet-options__item.active .wallet-options__item-comission__checked {
    display: block;
}
.wallet-options__item-comission__checked:after {
    position: absolute;
    left: 9px;
    top: 2px;
    width: 5px;
    height: 9px;
    border: solid #fff;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
.wallet-options__item-comission {
    margin-left: auto;
    margin-right: 11px;
font-size: 10px;
    color: #b8a8e1;
    background: #f7f5fe;
    padding: 2px 5px;
    border-radius: 3px;
    width: 25px;
    height: 18px;
    position: relative;
}
.game-sidebar__input {
    width: 100%;
    display: block;
border: solid 1px #e5dfff;
    background: #f9f7ff;
    font-size: 16px;
    line-height: 45px;
    padding: 0 12px;
    color: #8b77c3;
    outline: none;
    border-radius: 8px;
}

.game-sidebar__play-button.game-sidebar__play-button_green {
    width: 100%;
    margin-top: 15px;

    color: #fff;
    background: linear-gradient(45.87deg,#8879ff 0%, #7470fe 100%);
}
.game-sidebar__play-button {
    padding: 15px 20px;
    border: none;
    background: var(--gradient-yellow);
    border-radius: 8px;
    color: var(--color-black);
    font-size: 14px;
    font-weight: 500;
    position: relative;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    /* height: 100%; */
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-transition: .2s linear;
    -o-transition: .2s linear;
    transition: .2s linear;
    touch-action: manipulation;
}
</style>


      <style>
           .wallet-options__item:nth-child(3), .wallet-options__item:nth-child(4), .wallet-options__item:nth-child(7){
    margin-bottom: 25px;
}
          /* .wallet-options__item:nth-child(3), .wallet-options__item:nth-child(7), .wallet-options__item:nth-child(8), .wallet-options__item:nth-child(10) {
              margin-bottom: 25px;
          } */
          .new-badge_crypto:before {
            right: -26px;
            top: -10px;
          }
          .qiwi_button {
            margin: 20px 0;
            background: linear-gradient(to bottom, #ff9810, #ff8300);
            background: #ff8300;
            box-shadow: 0 10px 15px 0 rgb(255 140 0 / 20%);
            color: #fff;
            height: 50px;
            font-size: 16px;
            display: block;
            /* min-width: 180px; */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            margin: 20px 0;
            outline: none;
            padding: 0;
            position: relative;
            transition: color 333ms ease-in-out, background 333ms ease-in-out, border-color 333ms ease-in-out, box-shadow 333ms ease-in-out, fill 333ms ease-in-out, stroke 333ms ease-in-out;
            font-family: inherit;
            font-weight: 500;
          }
          .wallet-input-currency {
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    color: #9c9c9c;
    font-size: 14px;
    padding-bottom: 1px;
    pointer-events: none;
}
 @media screen and (max-width: 432px){


#systemms {
       display: inline-table;
}
}
.systens-wt111{
    display:flex;
}
      </style>
<div class="header-wrappers">
    <img src="/extra/panel/icoWallet2ZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Пополнить
</div>
    
    

<div class="wrapperhistory" style="display: flex;">






<div id="deposits" onclick="location.href = '/deposit';" class="mainn" style="width: 50%;">
    <img src="/extra/panel/icoDeposit2ZZ.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Пополнить</span>
</div>
<div id="withdraws"onclick="location.href = '/withdraw';" class="mainn" style="width: 50%;">
    <img src="/extra/panel/icoWithdraw2ZZ.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Вывести</span>
</div>

</div>


    
    
    <div class="cardh">
         <div class="card-header pd-t-20  align-items-start justify-content-between bd-b-0 pd-b-0"style="border-color: #fff">
            <div>
                
<span style="color: #b6b7e3;margin-left: -11px;">Поддерживаемые платежные системы</span>
            </div>
        </div>
       <br>
    <center>
  <!-- <img src="https://ponchik.gq/payments/qiwi.png" style="cursor: pointer;" height="100" width="250" type="button" data-toggle="modal" data-target="#depositQiwi1"> -->

<script>
function payOFFF(){
      new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Метод оплаты временно недоступен',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

  
}
    function CardCopy1s(){
  document.getElementById("CardNumber1").value = document.getElementById("depositSummSBP").value;
  
  new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Заявка на пополнение созданна',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

  
}

    function sbpCopy(){
  document.getElementById("sbpNumber").value = document.getElementById("depositSummSBP").value;
  
  new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Заявка на пополнение созданна',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

  
}
    function QiwiCopy(){
  document.getElementById("QiwiNumber").value = document.getElementById("depositSummSBP").value;
  
  new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Заявка на пополнение созданна',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

  
}

    function PiasCopy(){
  document.getElementById("PiastrixNumber").value = document.getElementById("depositSummSBP").value;
  
  new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Заявка на пополнение созданна',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

  
}



function notys(){
      new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Заявка на пополнение созданна',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();
}



function isright(obj)
{
if (obj.value<300) obj.value=300; 
}

</script>

<style>
     @media screen and (max-width: 432px){

#numbers{
    font-size: 11px;
    margin-left: 1px;
}
#btnspay{
    display: contents;
}
#paysel{
        max-width: 95%;
}
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
.actpanl{
    border: 1px solid #776afc69;
}
</style>


 

<div id="systemms" class="mg-b-20 systems-wt systens-wt111" style="margin-top: -25px;margin-bottom: -2rem;overflow-x: auto;">

                           
                     <button id="paysel" class="wallet-options__item">
                        <div class="wallet-options__item-image" style="margin-left: -6px;"><img src="/extra/sbp.png" alt="" style="height: 35;"></div>
                        <div class="wallet-options__item-name ">СБП</div>

                    </button>
                     <button id="paysel" class="wallet-options__item">
                        <div class="wallet-options__item-image" style="margin-left: -6px;"><img src="/extra/card.png" alt="" style="height: 24;"></div>
                        <div class="wallet-options__item-name ">Карты</div>

                    </button>
                                <button id="paysel" class="wallet-options__item">
                        <div class="wallet-options__item-image"style="margin-left: -6px;"><img src="/extra/sbernew.png" alt=""style="height: 35;"></div>
                        <div class="wallet-options__item-name ">Сбер</div>

                    </button>
                                <button  id="paysel" class="wallet-options__item ">
                        <div class="wallet-options__item-image"style="margin-left: -6px;"><img src="/extra/cardsms.png" alt=""style="height: 35;"></div>
                        <div class="wallet-options__item-name ">Связь</div>

                    </button>                        
                     
                    </div> 
 
<div id="systemms" class="mg-b-20 systems-wt systens-wt111" style="margin-top: 5px;margin-bottom: -2rem;overflow-x: auto;">

                           
                     <button id="paysel" class="wallet-options__item">
                        <div class="wallet-options__item-image"style="margin-left: -6px;"><img src="/extra/alfa.png" alt="" style="height: 35;"></div>
                        <div class="wallet-options__item-name ">АльфаБанк</div>

                    </button>
                     <button id="paysel" class="wallet-options__item">
                        <div class="wallet-options__item-image"style="margin-left: -6px;"><img src="/extra/ymoney.png" alt="" style="height: 24;"></div>
                        <div class="wallet-options__item-name ">Юмани</div>

                    </button>
                                <button id="paysel" class="wallet-options__item">
                        <div class="wallet-options__item-image"style="margin-left: -6px;"><img src="/extra/qiwipay.png" alt=""style="height: 35;"></div>
                        <div class="wallet-options__item-name ">Киви</div>
  
                    </button>
                                <button id="paysel" class="wallet-options__item ">
                        <div class="wallet-options__item-image"style="margin-left: -6px;"><img src="/extra/cryptme.png" alt=""style="height: 35;"></div>
                        <div class="wallet-options__item-name ">Крипта</div>

                    </button>                        
                     
                    </div>  
 
 
 
 
 
   </center>                                	
<br>
<br>




<div class="wallet-area__row" style="    margin: 1rem;">

                <div class="payment-total">
                    <div class="payment-total__first-row">
                        <div class="payment-field payment-sum">
                            <label class="payment-field-label" for="deposit-sum">Сумма пополнения
                            </label>

                            <div class="validation-wrapper">
                                <span class="validation-message"></span>
                                <div class="wallet-input-wrapper">
                                    <input type="text" type="text" id="depositSize" value="300" placeholder="Мин. 300" class="numeric-input-validate game-sidebar__input game-sidebar__input_dark" autocomplete="off">
                                    <div class="wallet-input-currency" style="padding-bottom: 0;"><span class="myicon-coins" style="font-size: 18px; color: #cdcdcd;"></span></div>
                                </div>
                            </div>
                        </div>
 <div class="payment-field payment-sum">
                            <label class="payment-field-label" for="deposit-sum">Промокод к депозиту
                            </label>

                            <div class="validation-wrapper">
                                <span class="validation-message"></span>
                                <div class="wallet-input-wrapper">
                                    <input type="text" name="amount" id="" placeholder="Введите промокод" class="numeric-input-validate game-sidebar__input game-sidebar__input_dark" autocomplete="off">
                                    <div class="wallet-input-currency" style="padding-bottom: 0;"><span class="myicon-coins" style="font-size: 18px; color: #cdcdcd;"></span></div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                    
                    <div class="info-block withdraw__rate" style="display: none;">

                    </div>
                    <div class="payment-total__second-row" id="btnspay" style="">
                        <a onclick="deposit_default()"  class="dicebtn" style="width:100%;margin: 0.2rem;" id='depositButton'>Оплатить</a>
                          <a href="#depositproblem" data-toggle="modal"  class="dicebtn" style="width:100%;margin: 0.2rem;background: #eae4ff;box-shadow: 0px 0px 20px #eae4ff;">Не пришел депозит</a>
                        <a id="error_deposit" style="color: rgb(255, 255, 255); display:none" class="btn btnError bg-danger "></a>
                        <div class="payment-fake-row">

 

                      

                        </div>
                        
                        <div class="withdraw-result__row">
                            <input type="hidden" name="payway" value="sbp" id="payment-payway">
                    <center>
                           
                           
                           
                           </center>
           
                    <button id="error_withdraw" style=" padding: 8px 22px; pointer-events: none; display:none" class="btn tx-medium btn-la-mob bg-danger-dice tx-white bd-0 btn-sel-d "></button>
                        </div>



                    </div>
                  










 <div class="modal fade" id="depositproblem" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 90%;float: right;margin-right: 5%; ">
                   
                     
<div class="modal1 htp-modal1 narrow-modal1" style="width: 100%;">
                        <div class="heading1" style="padding: 18px 20px;">
                            <div class="flex-align1" style="gap: 10px;">
                                <span style="width: 25px; display: flex; align-items: center;">
                                    <img src="files/assets/helps.png" style="max-width: 100%;" alt="">
                                </span>
                                <span style=" font-size: 16px;">Проблема с пополнением</span>
                            </div>
                            <a  role="button" data-dismiss="modal" aria-label="Close" class="myicon-close1 modal-close1"><i class="fa fa-close" aria-hidden="true"></i></a>
                        </div>
                        <div class="htp-content1">


                            <p class="htp-description1">Напишите нам в <a href="https://vk.com/gim213209074">поддержку</a></p>
                           
<p class="htp-description1">Так же пришлите нам:</p>
                            <div class="deposit__warning1">
                                Сумму которую оплачивали <br>
                                Чек об оплате <br>
                                Ваш айди на сайте <br>
                                БЕЗ ЧЕКА МЫ НЕ СМОЖЕМ ВАМ ПОМОЧЬ!
                            </div>

<a href="https://vk.com/gim213209074" class="dicebtn" style="color:black;width: 100%;" id="">Написать в поддержку</a>
                            <div class="" style="text-align: center; margin-bottom: 7px; margin-top: 20px; font-size: 12px;">
                                <p class="htp-description1">При отправлении поддельного чека вы будете <span style="white-space: nowrap" class="text-bold1 h2h_deadline">заблокированы!</span></p>
                            </div>


                        </div>

                </div>
</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->





 <style>
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
width: 27%;
    height: 55px;
    text-align: center;
}
     
 </style>     
<script>
 function deposit_default() {
   $.ajax({
                                                                                type: 'POST',
                                                                                url: '/action.php',
beforeSend: function() {
$('#depositButton').html('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>');  
$("#error_deposit").hide();
										},	
                                                                                data: {
                                                                                    type: "deposit",
           sum: $("#depositSize").val()
                                                                          
                                           
           },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
$('#depositButton').html('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>');                         
                  window.location.href = obj.locations;
                                                                return 
                                            }else{
                 $('#depositButton').html('К оплате');                              
                $("#error_deposit").show();                               
                $("#error_deposit").html(obj.error); 
                                            }
                                        }   
   });
}



</script>
 <style>
    .HidenSbp{
        display:none;
    }
.msgg{
    font-weight: bold;
    border-radius: 10px;
    margin-top: 15px;
    width: 100%;
    color: #000000;
    background-color: #07cd2624;
    border-color: #abcfa74d;
}
</style>                            
      <style>
 .modal-window1 {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    overflow: hidden;
    outline: 0;
    visibility: hidden;
    opacity: 0;
    transition: .2s all ease;
    overflow-x: hidden;
    overflow-y: auto;
}
.modal-dialog1.modal-w5001 {
    width: 100%;
    max-width: 500px;
    justify-content: center;
}

.modal-dialog1 {
    width: 100%;
    max-width: 320px;
    position: relative;
    z-index: 11;
    flex: 0 1 auto;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    align-items: center;
    min-height: 100%;
    padding: 10px 5px;
}

.modal.narrow-modal1 {
    max-width: 320px;
}
.modal1 {
    border-radius: 10px;
    position: relative;
    background: #f5f2ff;
    overflow: hidden;
}
.heading1 {
    padding: 20px;
    background: white;
    font-weight: 400;
    margin-bottom: 0;
    font-size: 16px;
    line-height: 20px;
    color:#b6b0d7;
}
  .flex-align1 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}
.modal-close1 {
    color: #fff;
    top: 15px;
    padding: 10px;
    font-size: 12px;
    position: absolute;
    right: 12px;
    cursor: pointer;
}

.htp-content1 {
    padding: 20px 15px;
}
.htp-description1 {
    color: #cdcdcd;
    margin-top: 5px;
    line-height: 1.3;
}
.your-code__link1 {
    position: relative;
    margin-top: 10px;
    width: 100%;
}
.form-promocode1 {
    align-items: center;
    width: 100%;
    display: flex;
    max-width: 500px;
    margin: auto;
}
.game-sidebar__input1.dark_input1 {
    background: #1b1c24;
}
.promocode-input1 {
    border-right: 0;
    border-radius: 8px 0 0 8px;
    min-width: 0;
}
.referal-link1 {
    max-width: 300px;
    width: 100%;
}
.game-sidebar__input1 {
    width: 100%;
    display: block;
    border: solid 1px #e5dfff;
    background: #ffffff;
    font-size: 16px;
    line-height: 45px;
    padding: 0 12px;
    color: #605a7d;
    outline: none;
    border-radius: 8px;
}
.promocode-activate-btn1 {
    border-radius: 0 8px 8px 0;
}
.game-sidebar__play-button1 {
    padding: 15px 20px;
    border: none;
    background: linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%);
    border-radius: 8px;
    color: black;
    font-size: 14px;
    font-weight: 500;
    position: relative;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    /* height: 100%; */
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-transition: .2s linear;
    -o-transition: .2s linear;
    transition: .2s linear;
    touch-action: manipulation;
}
.game-sidebar__play-button1:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: inline-block;
    border-radius: 8px;
    border: 2px solid transparent;
    background: linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%); border-box;
    -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
}
.deposit__divider1 {
    margin: 25px 0;
}
.your-code__link1 {
    position: relative;
    margin-top: 10px;
    width: 100%;
}
.sbp__receiver1 {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 12px;
    color: #177528;
    font-weight: 700;
}
.your-code__link1 {
    position: relative;
    margin-top: 10px;
    width: 100%;
}
.deposit__warning1 {
    margin-top: 10px;
    padding: 10px 15px;
    font-size: 13px;
    font-weight: 500;
    color: #7c75a1;
    border: 2px solid #ffd96a;
    border-radius: 8px;
    line-height: 1.65;
}
.htp-description1 {
    color: #7c75a1;
    margin-top: 5px;
    line-height: 1.3;
}
.text-bold1 {
    font-weight: 800;
    color: black;
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: transparent;
    background-clip: padding-box;
    border-radius: 0.3rem;
    outline: 0;
    border-color: rgb(28 39 60 / 0%);
}


.promocode-activate-btn {
    border-radius: 0 8px 8px 0;
}

.game-sidebar__play-button {
    padding: 15px 20px;
    border: none;
background: linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%);
    border-radius: 8px;
    color: black;
    font-size: 14px;
    font-weight: 500;
    position: relative;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    /* height: 100%; */
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-transition: .2s linear;
    -o-transition: .2s linear;
    transition: .2s linear;
    touch-action: manipulation;
}
  </style>          
            
    
    
                            <select id="sbpvibor" class="HidenSbp" style="   width: 25%;background: linear-gradient(45deg,#ffda6d,#ffbd2d 98.44%);border-radius: 0.8rem;color: #000;">    
  <option value="Select">Сбербанк</option>}  
  <option value="Vineet">Тинькофф Банк</option>  
  <option value="Sumit">Райффайзен Банк</option>  
  <option value="Dorilal">Альфа-Банк</option>  
  <option value="Omveer">ВТБ</option>  
  <option value="Rohtash">Ozon Банк</option>  
  <option value="Maneesh">МТС Банк</option>  
  <option value="Maneesh">Уралсиб</option> 
  <option value="Maneesh">Ренессанс Банк</option> 
</select>        

                </div>

            </div> 
            
            
    
            
            
            
            
            
 <div class="modal fade" id="SBP" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 90%;float: right;margin-right: 5%; ">
                   
                     
<div class="modal1 htp-modal1 narrow-modal1" style="width: 100%;">
                        <div class="heading1" style="padding: 18px 20px;">
                            <div class="flex-align1" style="gap: 10px;">
                                <span style="width: 25px; display: flex; align-items: center;">
                                    <img src="assets/images/sbp_af.png?v=6" style="max-width: 100%;" alt="">
                                </span>
                                <span style=" font-size: 16px;">Перевод через СБП</span>
                            </div>
                            <a  role="button" data-dismiss="modal" aria-label="Close" class="myicon-close1 modal-close1"><i class="fa fa-close" aria-hidden="true"></i></a>
                        </div>
                        <div class="htp-content1">


                            <p class="htp-description1">Номер телефона</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="text" readonly=""  value="+79957740972" id="banks" style="max-width: 100%;" class="dark_input h2h_sbp_wallet referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;"  class="game-sidebar__play-button promocode-activate-btn"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Получатель</p>
                            <div class="your-code__link1 sbp__receiver1" style="color:black">
                                <img src="/assets/images/rai.png" style="width: 36px;" alt="" class="h2h_sbp_bank_image">
                                <div>
                                    <div class="h2h_sbp_bank1">Райффайзен</div>
                                    <div class="h2h_sbp_receiver1">Банк</div>
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Сумма перевода (RUB)</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="text" readonly="" placeholder="Сумма не указана" value=""  id="sbpNumber" style="max-width: 100%;" class="dark_input h2h_sbp_amount referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;"  class="game-sidebar__play-button promocode-activate-btn"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                </div>
                            </div>


                            <div class="deposit__warning1">
                                Переводите только указанную сумму. <br>
                                Переводите только на указанный банк. <br>
                                Сверяйте получателя. <br>
                                Иначе деньги будут УТЕРЯНЫ!
                            </div>


                            <div class="" style="text-align: center; margin-bottom: 7px; margin-top: 20px; font-size: 12px;">
                                <p class="htp-description1">Перевод необходимо совершить в течении <span style="white-space: nowrap" class="text-bold1 h2h_deadline">30 минут</span></p>
                            </div>


                        </div>

                </div>
</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
              

            
            
            
            
            
            
            
            
            
 <div class="modal fade" id="PIASTRIX" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 90%;float: right;margin-right: 5%; ">
                   
                     
<div class="modal1 htp-modal1 narrow-modal1" style="width: 100%;">
                        <div class="heading1" style="padding: 18px 20px;">
                            <div class="flex-align1" style="gap: 10px;">
                                <span style="width: 25px; display: flex; align-items: center;">
                                    <img src="files/assets/piastrix.png" style="max-width: 100%;" alt="">
                                </span>
                                <span style=" font-size: 16px;">Перевод через Piastrix</span>
                            </div>
                            <a  role="button" data-dismiss="modal" aria-label="Close" class="myicon-close1 modal-close1"><i class="fa fa-close" aria-hidden="true"></i></a>
                        </div>
                        <div class="htp-content1">


                            <p class="htp-description1">Номер кошелька</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="text" readonly=""  value="201557640220" id="banks" style="max-width: 100%;" class="dark_input h2h_sbp_wallet referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;"  class="game-sidebar__play-button promocode-activate-btn"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Получатель</p>
                            <div class="your-code__link1 sbp__receiver1" style="color:black">
                                <img src="files/assets/piastrix.png" style="width: 36px;" alt="" class="h2h_sbp_bank_image">
                                <div>
                                    <div class="h2h_sbp_bank1">Piastrix</div>
                              
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Сумма перевода (RUB)</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="text" readonly="" placeholder="Сумма не указана" value=""  id="PiastrixNumber" style="max-width: 100%;" class="dark_input h2h_sbp_amount referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;"  class="game-sidebar__play-button promocode-activate-btn"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                </div>
                            </div>


                            <div class="deposit__warning1">
                                Переводите только указанную сумму. <br>
                                Переводите только на указанный банк. <br>
                                Сверяйте получателя. <br>
                                Иначе деньги будут УТЕРЯНЫ!
                            </div>


                            <div class="" style="text-align: center; margin-bottom: 7px; margin-top: 20px; font-size: 12px;">
                                <p class="htp-description1">Перевод необходимо совершить в течении <span style="white-space: nowrap" class="text-bold1 h2h_deadline">30 минут</span></p>
                            </div>


                        </div>

                </div>
</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                         
            
   <div class="modal fade" id="CARD" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 90%;float: right;margin-right: 5%; ">
                   
                     
<div class="modal1 htp-modal1 narrow-modal1" style="width: 100%;">
                        <div class="heading1" style="padding: 18px 20px;">
                            <div class="flex-align1" style="gap: 10px;">
                                <span style="width: 25px; display: flex; align-items: center;">
                                    <img src="assets/images/card_af.png" style="max-width: 100%;" alt="">
                                </span>
                                <span style=" font-size: 16px;">Перевод через Банковские карты</span>
                            </div>
                            <a  role="button" data-dismiss="modal" aria-label="Close" class="myicon-close1 modal-close1"><i class="fa fa-close" aria-hidden="true"></i></a>
                        </div>
                        <div class="htp-content1">


                            <p class="htp-description1">Номер карты</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="text" readonly=""  value="2202 2039 3006 4888" id="banks" style="max-width: 100%;" class="dark_input h2h_sbp_wallet referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;"  class="game-sidebar__play-button promocode-activate-btn"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Получатель</p>
                            <div class="your-code__link1 sbp__receiver1" style="color:black">
                                <img src="assets/images/mir.png" style="width: 36px;" alt="" class="h2h_sbp_bank_image">
                                <div>
                                    <div class="h2h_sbp_bank1">Банковкая</div>
                                 <div class="h2h_sbp_receiver1">Карта</div>
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Сумма перевода (RUB)</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="text" readonly="" placeholder="Сумма не указана" value=""  id="CardNumber1" style="max-width: 100%;" class="dark_input h2h_sbp_amount referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;"  class="game-sidebar__play-button promocode-activate-btn"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                </div>
                            </div>


                            <div class="deposit__warning1">
                                Переводите только указанную сумму. <br>
                                Переводите только на указанный банк. <br>
                                Сверяйте получателя. <br>
                                Иначе деньги будут УТЕРЯНЫ!
                            </div>


                            <div class="" style="text-align: center; margin-bottom: 7px; margin-top: 20px; font-size: 12px;">
                                <p class="htp-description1">Перевод необходимо совершить в течении <span style="white-space: nowrap" class="text-bold1 h2h_deadline">30 минут</span></p>
                            </div>


                        </div>

                </div>
</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                                   
            
            
            
            
            
            
            
    <style>
.alert {
    background-color: #51e57d4d;
    border-radius: 10px;
    color: #47855a;
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 15px;
    padding: 15px;
    text-align: center;
}
    </style>       
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
<div class="modal fade" id="FK" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;background-color: #f7f5fe;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 50%; float: right; margin-right: 3%;margin-top: 2%; ">
                   
                     
<div class="modal_payment modal-custom2" data-v-2836fdb5-s="" style="margin-bottom: -12rem;">
    <div class="modal-custom__header2" data-v-2836fdb5-s="">
        <div class="modal-custom__header-title2" data-v-2836fdb5-s="">Перевод средств</div>
        <button class="modal_payment__header-close2 modal-custom__close2"role="button" data-dismiss="modal" aria-label="Close"  data-v-2836fdb5-s="">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-2836fdb5-s=""><path d="M0.313541 15.6231C-0.104514 15.2025 -0.104514 14.5233 0.313541 14.1028L14.0394 0.376922C14.3029 0.0692215 14.7166 -0.0648086 15.1105 0.0299373C15.5044 0.124683 15.8119 0.432214 15.9067 0.826092C16.0014 1.21997 15.8674 1.63372 15.5597 1.89722L1.83384 15.6231C1.41329 16.0411 0.734091 16.0411 0.313541 15.6231Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path><path d="M0.313541 0.376651C0.734091 -0.0414033 1.41329 -0.0414033 1.83384 0.376651L15.5597 14.1025C15.8674 14.366 16.0014 14.7798 15.9067 15.1736C15.8119 15.5675 15.5044 15.875 15.1105 15.9698C14.7166 16.0645 14.3029 15.9305 14.0394 15.6228L0.313541 1.89695C-0.104514 1.4764 -0.104514 0.797201 0.313541 0.376651Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path></svg></button></div>
             
             <iframe style="margin-left: 6rem;" src="https://widgets.freekassa.ru?type=payment-window&lang=ru&theme=light&default_amount=999&api_key=1137ce9a7c2769d2fe7966a213968db4&shopID=39760" width="300" height="590" frameborder="0"></iframe>
             </div>
                     
                     
                              
                                    <p class="tx-color-03 tx-thin"></p>
                                    
                                                                    <div>

</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div>   

<div class="modal fade" id="CARD1" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;background-color: #f7f5fe;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 50%; float: right; margin-right: 3%;margin-top: 2%; ">
                   
                     
<div class="modal_payment modal-custom2" data-v-2836fdb5-s="">
    <div class="modal-custom__header2" data-v-2836fdb5-s="">
        <div class="modal-custom__header-title2" data-v-2836fdb5-s="">Перевод средств</div>
        <button class="modal_payment__header-close2 modal-custom__close2"role="button" data-dismiss="modal" aria-label="Close"  data-v-2836fdb5-s="">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-2836fdb5-s=""><path d="M0.313541 15.6231C-0.104514 15.2025 -0.104514 14.5233 0.313541 14.1028L14.0394 0.376922C14.3029 0.0692215 14.7166 -0.0648086 15.1105 0.0299373C15.5044 0.124683 15.8119 0.432214 15.9067 0.826092C16.0014 1.21997 15.8674 1.63372 15.5597 1.89722L1.83384 15.6231C1.41329 16.0411 0.734091 16.0411 0.313541 15.6231Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path><path d="M0.313541 0.376651C0.734091 -0.0414033 1.41329 -0.0414033 1.83384 0.376651L15.5597 14.1025C15.8674 14.366 16.0014 14.7798 15.9067 15.1736C15.8119 15.5675 15.5044 15.875 15.1105 15.9698C14.7166 16.0645 14.3029 15.9305 14.0394 15.6228L0.313541 1.89695C-0.104514 1.4764 -0.104514 0.797201 0.313541 0.376651Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path></svg></button></div>
            <div class="modal_payment__body2 modal-custom__grid2" data-v-2836fdb5-s="">
                <div data-v-2836fdb5-s="">
                    <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Номер банковской карты</div>
                    <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                        <input class="modal_payment__body-input2" type="text" name="RaifCard" id="banks" readonly="" data-v-2836fdb5-s="" style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="5213 2440 5141 3660">
                        <button type="button"  class="modal-custom__copy2" data-v-2836fdb5-s="">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 477.867 477.867" xml:space="preserve" class="" data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M341.333,85.333H51.2c-28.277,0-51.2,22.923-51.2,51.2v290.133c0,28.277,22.923,51.2,51.2,51.2h290.133c28.277,0,51.2-22.923,51.2-51.2V136.533C392.533,108.256,369.61,85.333,341.333,85.333z M358.4,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V136.533c0-9.426,7.641-17.067,17.067-17.067h290.133c9.426,0,17.067,7.641,17.067,17.067V426.667z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M426.667,0h-307.2c-28.277,0-51.2,22.923-51.2,51.2c0,9.426,7.641,17.067,17.067,17.067S102.4,60.626,102.4,51.2s7.641-17.067,17.067-17.067h307.2c9.426,0,17.067,7.641,17.067,17.067v307.2c0,9.426-7.641,17.067-17.067,17.067s-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067c28.277,0,51.2-22.923,51.2-51.2V51.2C477.867,22.923,454.944,0,426.667,0z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g></g></svg></button></div></div><div data-v-2836fdb5-s="">
                                <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Сумма</div>
                                <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                                    <input class="modal_payment__body-input2" type="number" id="CardNumber1" name="amount" placeholder="Сумма не указана" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="$summadeps">
                                    <button type="button" class="modal-custom__copy2" data-v-2836fdb5-s="">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 477.867 477.867" xml:space="preserve" class="" data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M341.333,85.333H51.2c-28.277,0-51.2,22.923-51.2,51.2v290.133c0,28.277,22.923,51.2,51.2,51.2h290.133c28.277,0,51.2-22.923,51.2-51.2V136.533C392.533,108.256,369.61,85.333,341.333,85.333z M358.4,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V136.533c0-9.426,7.641-17.067,17.067-17.067h290.133c9.426,0,17.067,7.641,17.067,17.067V426.667z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M426.667,0h-307.2c-28.277,0-51.2,22.923-51.2,51.2c0,9.426,7.641,17.067,17.067,17.067S102.4,60.626,102.4,51.2s7.641-17.067,17.067-17.067h307.2c9.426,0,17.067,7.641,17.067,17.067v307.2c0,9.426-7.641,17.067-17.067,17.067s-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067c28.277,0,51.2-22.923,51.2-51.2V51.2C477.867,22.923,454.944,0,426.667,0z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g></g></svg></button></div></div><div data-v-2836fdb5-s="">
                                          
                                            <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                                             <!----></div></div>
                                              
                                                                                          <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Банк получателя</div>
                                            <div class="modal-custom__relative2" data-v-2836fdb5-s="" style="margin-top: -1rem;">
                                                <input class="modal_payment__body-input2" type="text" name="wallet_owner" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="Тинькофф Банк"><!----></div>
                                                
                                              
                                                <div class="modal_payment__body-alert-qiwi2 modal_payment__body-alert-qiwi-withdraw modal-custom__label2"  style="border: 1px solid #e5e5e5;" data-v-2836fdb5-s="">
                                                    <img src="/images/warning.png" alt="" data-v-2836fdb5-s=""> Пополняйте точную сумму перевода иначе зачисления не будет!</div><!----></div></div>
                     
                     
                              
                                    <p class="tx-color-03 tx-thin"></p>
                                    
                                                                    <div>

</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div>     






                  <div class="modal fade" id="PIAS2323TRIX" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;background-color: #f7f5fe;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 50%; float: right; margin-right: 3%;margin-top: 2%; ">
                   
                     
<div class="modal_payment modal-custom2" data-v-2836fdb5-s="">
    <div class="modal-custom__header2" data-v-2836fdb5-s="">
        <div class="modal-custom__header-title2" data-v-2836fdb5-s="">Перевод средств</div>
        <button class="modal_payment__header-close2 modal-custom__close2"role="button" data-dismiss="modal" aria-label="Close"  data-v-2836fdb5-s="">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-2836fdb5-s=""><path d="M0.313541 15.6231C-0.104514 15.2025 -0.104514 14.5233 0.313541 14.1028L14.0394 0.376922C14.3029 0.0692215 14.7166 -0.0648086 15.1105 0.0299373C15.5044 0.124683 15.8119 0.432214 15.9067 0.826092C16.0014 1.21997 15.8674 1.63372 15.5597 1.89722L1.83384 15.6231C1.41329 16.0411 0.734091 16.0411 0.313541 15.6231Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path><path d="M0.313541 0.376651C0.734091 -0.0414033 1.41329 -0.0414033 1.83384 0.376651L15.5597 14.1025C15.8674 14.366 16.0014 14.7798 15.9067 15.1736C15.8119 15.5675 15.5044 15.875 15.1105 15.9698C14.7166 16.0645 14.3029 15.9305 14.0394 15.6228L0.313541 1.89695C-0.104514 1.4764 -0.104514 0.797201 0.313541 0.376651Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path></svg></button></div>
            <div class="modal_payment__body2 modal-custom__grid2" data-v-2836fdb5-s="">
                <div data-v-2836fdb5-s="">
                    <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Номер кошелька Piastrix</div>
                    <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                        <input class="modal_payment__body-input2" type="text" name="RaifCard" id="banks" readonly="" data-v-2836fdb5-s="" style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="201557640220">
                        <button type="button"  class="modal-custom__copy2" data-v-2836fdb5-s="">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 477.867 477.867" xml:space="preserve" class="" data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M341.333,85.333H51.2c-28.277,0-51.2,22.923-51.2,51.2v290.133c0,28.277,22.923,51.2,51.2,51.2h290.133c28.277,0,51.2-22.923,51.2-51.2V136.533C392.533,108.256,369.61,85.333,341.333,85.333z M358.4,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V136.533c0-9.426,7.641-17.067,17.067-17.067h290.133c9.426,0,17.067,7.641,17.067,17.067V426.667z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M426.667,0h-307.2c-28.277,0-51.2,22.923-51.2,51.2c0,9.426,7.641,17.067,17.067,17.067S102.4,60.626,102.4,51.2s7.641-17.067,17.067-17.067h307.2c9.426,0,17.067,7.641,17.067,17.067v307.2c0,9.426-7.641,17.067-17.067,17.067s-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067c28.277,0,51.2-22.923,51.2-51.2V51.2C477.867,22.923,454.944,0,426.667,0z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g></g></svg></button></div></div><div data-v-2836fdb5-s="">
                                <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Сумма</div>
                                <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                                    <input class="modal_payment__body-input2" type="number" id="PiastrixNumber" name="amount" placeholder="Сумма не указана" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="$summadeps">
                                    <button type="button" class="modal-custom__copy2" data-v-2836fdb5-s="">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 477.867 477.867" xml:space="preserve" class="" data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M341.333,85.333H51.2c-28.277,0-51.2,22.923-51.2,51.2v290.133c0,28.277,22.923,51.2,51.2,51.2h290.133c28.277,0,51.2-22.923,51.2-51.2V136.533C392.533,108.256,369.61,85.333,341.333,85.333z M358.4,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V136.533c0-9.426,7.641-17.067,17.067-17.067h290.133c9.426,0,17.067,7.641,17.067,17.067V426.667z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M426.667,0h-307.2c-28.277,0-51.2,22.923-51.2,51.2c0,9.426,7.641,17.067,17.067,17.067S102.4,60.626,102.4,51.2s7.641-17.067,17.067-17.067h307.2c9.426,0,17.067,7.641,17.067,17.067v307.2c0,9.426-7.641,17.067-17.067,17.067s-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067c28.277,0,51.2-22.923,51.2-51.2V51.2C477.867,22.923,454.944,0,426.667,0z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g></g></svg></button></div></div><div data-v-2836fdb5-s="">
                                            <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Реквизиты</div>
                                            <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                                                <input class="modal_payment__body-input2" type="text" name="wallet_owner" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="-"><!----></div></div>
                                                <div class="modal_payment__body-alert-qiwi2 modal_payment__body-alert-qiwi-withdraw modal-custom__label2"  style="border: 1px solid #e5e5e5;" data-v-2836fdb5-s="">
                                                    <img src="/images/warning.png" alt="" data-v-2836fdb5-s=""> Пополняйте точную сумму перевода иначе зачисления не будет!</div><!----></div></div>
                     
                     
                              
                                    <p class="tx-color-03 tx-thin"></p>
                                    
                                                                    <div>

</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div>      
    
                  <div class="modal fade" id="SBP" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;background-color: #f7f5fe;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 50%; float: right; margin-right: 3%;margin-top: 2%; ">
                   
                     
<div class="modal_payment modal-custom2" data-v-2836fdb5-s="">
    <div class="modal-custom__header2" data-v-2836fdb5-s="">
        <div class="modal-custom__header-title2" data-v-2836fdb5-s="">Перевод средств</div>
        <button class="modal_payment__header-close2 modal-custom__close2"role="button" data-dismiss="modal" aria-label="Close"  data-v-2836fdb5-s="">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-2836fdb5-s=""><path d="M0.313541 15.6231C-0.104514 15.2025 -0.104514 14.5233 0.313541 14.1028L14.0394 0.376922C14.3029 0.0692215 14.7166 -0.0648086 15.1105 0.0299373C15.5044 0.124683 15.8119 0.432214 15.9067 0.826092C16.0014 1.21997 15.8674 1.63372 15.5597 1.89722L1.83384 15.6231C1.41329 16.0411 0.734091 16.0411 0.313541 15.6231Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path><path d="M0.313541 0.376651C0.734091 -0.0414033 1.41329 -0.0414033 1.83384 0.376651L15.5597 14.1025C15.8674 14.366 16.0014 14.7798 15.9067 15.1736C15.8119 15.5675 15.5044 15.875 15.1105 15.9698C14.7166 16.0645 14.3029 15.9305 14.0394 15.6228L0.313541 1.89695C-0.104514 1.4764 -0.104514 0.797201 0.313541 0.376651Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path></svg></button></div>
            <div class="modal_payment__body2 modal-custom__grid2" data-v-2836fdb5-s="">
                <div data-v-2836fdb5-s="">
                    <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Номер телефона СБП </div>
                    <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                        <input class="modal_payment__body-input2" type="text" name="RaifCard" id="banks" readonly="" data-v-2836fdb5-s="" style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="+7 (905) 819‑53‑89">
                        <button type="button"  class="modal-custom__copy2" data-v-2836fdb5-s="">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 477.867 477.867" xml:space="preserve" class="" data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M341.333,85.333H51.2c-28.277,0-51.2,22.923-51.2,51.2v290.133c0,28.277,22.923,51.2,51.2,51.2h290.133c28.277,0,51.2-22.923,51.2-51.2V136.533C392.533,108.256,369.61,85.333,341.333,85.333z M358.4,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V136.533c0-9.426,7.641-17.067,17.067-17.067h290.133c9.426,0,17.067,7.641,17.067,17.067V426.667z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M426.667,0h-307.2c-28.277,0-51.2,22.923-51.2,51.2c0,9.426,7.641,17.067,17.067,17.067S102.4,60.626,102.4,51.2s7.641-17.067,17.067-17.067h307.2c9.426,0,17.067,7.641,17.067,17.067v307.2c0,9.426-7.641,17.067-17.067,17.067s-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067c28.277,0,51.2-22.923,51.2-51.2V51.2C477.867,22.923,454.944,0,426.667,0z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g></g></svg></button></div></div><div data-v-2836fdb5-s="">
                                <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Сумма</div>
                                <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                                    <input class="modal_payment__body-input2" type="number" id="sbpNu11mber" name="amount" placeholder="Сумма не указана" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="$summadeps">
                                    <button type="button" class="modal-custom__copy2" data-v-2836fdb5-s="">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 477.867 477.867" xml:space="preserve" class="" data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M341.333,85.333H51.2c-28.277,0-51.2,22.923-51.2,51.2v290.133c0,28.277,22.923,51.2,51.2,51.2h290.133c28.277,0,51.2-22.923,51.2-51.2V136.533C392.533,108.256,369.61,85.333,341.333,85.333z M358.4,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V136.533c0-9.426,7.641-17.067,17.067-17.067h290.133c9.426,0,17.067,7.641,17.067,17.067V426.667z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M426.667,0h-307.2c-28.277,0-51.2,22.923-51.2,51.2c0,9.426,7.641,17.067,17.067,17.067S102.4,60.626,102.4,51.2s7.641-17.067,17.067-17.067h307.2c9.426,0,17.067,7.641,17.067,17.067v307.2c0,9.426-7.641,17.067-17.067,17.067s-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067c28.277,0,51.2-22.923,51.2-51.2V51.2C477.867,22.923,454.944,0,426.667,0z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g></g></svg></button></div></div><div data-v-2836fdb5-s="">

                                            <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                                            <!----></div></div>
                                                
                                            <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Банк получателя</div>
                                            <div class="modal-custom__relative2" data-v-2836fdb5-s="" style="margin-top: -1rem;">
                                                <input class="modal_payment__body-input2" type="text" name="wallet_owner" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="Сбербанк"><!----></div>
                                                
                                                <div class="modal_payment__body-alert-qiwi2 modal_payment__body-alert-qiwi-withdraw modal-custom__label2"  style="border: 1px solid #e5e5e5;" data-v-2836fdb5-s="">
                                                    <img src="/images/warning.png" alt="" data-v-2836fdb5-s=""> Пополняйте точную сумму перевода иначе зачисления не будет!</div><!----></div></div>
                     
                     
                              
                                    <p class="tx-color-03 tx-thin"></p>
                                    
                                                                    <div>

</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div>       
    
    
    
    
<div class="modal fade" id="QIWI" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;background-color: #f7f5fe;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 50%; float: right; margin-right: 3%;margin-top: 2%; ">
                     
                     
<div class="modal_payment modal-custom2" data-v-2836fdb5-s="">
    <div class="modal-custom__header2" data-v-2836fdb5-s="">
        <div class="modal-custom__header-title2" data-v-2836fdb5-s="">Перевод средств</div>
        <button class="modal_payment__header-close2 modal-custom__close2"role="button" data-dismiss="modal" aria-label="Close"  data-v-2836fdb5-s="">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-2836fdb5-s=""><path d="M0.313541 15.6231C-0.104514 15.2025 -0.104514 14.5233 0.313541 14.1028L14.0394 0.376922C14.3029 0.0692215 14.7166 -0.0648086 15.1105 0.0299373C15.5044 0.124683 15.8119 0.432214 15.9067 0.826092C16.0014 1.21997 15.8674 1.63372 15.5597 1.89722L1.83384 15.6231C1.41329 16.0411 0.734091 16.0411 0.313541 15.6231Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path><path d="M0.313541 0.376651C0.734091 -0.0414033 1.41329 -0.0414033 1.83384 0.376651L15.5597 14.1025C15.8674 14.366 16.0014 14.7798 15.9067 15.1736C15.8119 15.5675 15.5044 15.875 15.1105 15.9698C14.7166 16.0645 14.3029 15.9305 14.0394 15.6228L0.313541 1.89695C-0.104514 1.4764 -0.104514 0.797201 0.313541 0.376651Z" fill="#B9C0D3" data-v-2836fdb5-s=""></path></svg></button></div>
            <div class="modal_payment__body2 modal-custom__grid2" data-v-2836fdb5-s="">
                <div data-v-2836fdb5-s="">
                    <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Номер кошелька QIWI</div>
                    <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                        <input class="modal_payment__body-input2" type="text" name="RaifCard" id="banks" readonly="" data-v-2836fdb5-s="" style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="---">
                        <button type="button"  class="modal-custom__copy2" data-v-2836fdb5-s="">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 477.867 477.867" xml:space="preserve" class="" data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M341.333,85.333H51.2c-28.277,0-51.2,22.923-51.2,51.2v290.133c0,28.277,22.923,51.2,51.2,51.2h290.133c28.277,0,51.2-22.923,51.2-51.2V136.533C392.533,108.256,369.61,85.333,341.333,85.333z M358.4,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V136.533c0-9.426,7.641-17.067,17.067-17.067h290.133c9.426,0,17.067,7.641,17.067,17.067V426.667z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M426.667,0h-307.2c-28.277,0-51.2,22.923-51.2,51.2c0,9.426,7.641,17.067,17.067,17.067S102.4,60.626,102.4,51.2s7.641-17.067,17.067-17.067h307.2c9.426,0,17.067,7.641,17.067,17.067v307.2c0,9.426-7.641,17.067-17.067,17.067s-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067c28.277,0,51.2-22.923,51.2-51.2V51.2C477.867,22.923,454.944,0,426.667,0z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g></g></svg></button></div></div><div data-v-2836fdb5-s="">
                                <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Сумма</div>
                                <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                                    <input class="modal_payment__body-input2" type="number" id="QiwiNumber" name="amount" placeholder="Сумма не указана" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="$summadeps">
                                    <button type="button" class="modal-custom__copy2" data-v-2836fdb5-s="">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 477.867 477.867" xml:space="preserve" class="" data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M341.333,85.333H51.2c-28.277,0-51.2,22.923-51.2,51.2v290.133c0,28.277,22.923,51.2,51.2,51.2h290.133c28.277,0,51.2-22.923,51.2-51.2V136.533C392.533,108.256,369.61,85.333,341.333,85.333z M358.4,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V136.533c0-9.426,7.641-17.067,17.067-17.067h290.133c9.426,0,17.067,7.641,17.067,17.067V426.667z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""><g data-v-2836fdb5-s=""><path d="M426.667,0h-307.2c-28.277,0-51.2,22.923-51.2,51.2c0,9.426,7.641,17.067,17.067,17.067S102.4,60.626,102.4,51.2s7.641-17.067,17.067-17.067h307.2c9.426,0,17.067,7.641,17.067,17.067v307.2c0,9.426-7.641,17.067-17.067,17.067s-17.067,7.641-17.067,17.067s7.641,17.067,17.067,17.067c28.277,0,51.2-22.923,51.2-51.2V51.2C477.867,22.923,454.944,0,426.667,0z" data-original="#000000" class="" data-v-2836fdb5-s=""></path></g></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g><g data-v-2836fdb5-s=""></g></g></svg></button></div></div><div data-v-2836fdb5-s="">
                                            <div class="modal_payment__body-label2" data-v-2836fdb5-s="">Реквизиты</div>
                                            <div class="modal-custom__relative2" data-v-2836fdb5-s="">
                                                <input class="modal_payment__body-input2" type="text" name="wallet_owner" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="---"><!----></div></div>
                                                <div class="modal_payment__body-alert-qiwi2 modal_payment__body-alert-qiwi-withdraw modal-custom__label2"  style="border: 1px solid #e5e5e5;" data-v-2836fdb5-s="">
                                                    <img src="/images/warning.png" alt="" data-v-2836fdb5-s=""> Пополняйте точную сумму перевода иначе зачисления не будет!</div><!----></div></div>
                     
                     
                              
                                    <p class="tx-color-03 tx-thin"></p>
                                    
                                                                    <div>

</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->
                </div>           
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <style>
    
    .btnnew2{
color: #fff;
    background: linear-gradient(45deg, #ffffff 0%, #fafafa 100%);
    border-color: #eaeaea;
}

.btnnew2:Hover{
color: #fff;
background: linear-gradient(45deg, #fcfcfc 0%, #fafafa 100%);
    border-color: #eaeaea;
}
.en-refill__payment-label {
color: #7866fa !important;
    position: absolute;
    z-index: 1;
    top: 5px;
    right: 5px;
    padding: 4px 6px;
    font-weight: bold;
    font-size: 11px;
    background-color: rgb(95 86 243 / 20%);
    border-radius: 6px;
    transition: background-color .3s ease;
} 

.en-refill__payment-label2 {
color: #7866fa !important;
    position: absolute;
    z-index: 1;
    top: 5px;
    right: 5px;
    padding: 4px 6px;
    font-weight: bold;
    font-size: 11px;
    background-color: rgb(95 86 243 / 20%);
    border-radius: 6px;
    transition: background-color .3s ease;
} 
.komka {
color: #a966fa !important;
    position: absolute;
    z-index: 1;
    bottom: 5px;
    right: 5px;
    padding: 2px 3px;
    font-weight: bold;
    font-size: 10px;
    background-color: rgb(162 86 243 / 20%);
    border-radius: 6px;
    transition: background-color .3s ease;
}     
    .dep1{
height: 80px;
    width: 195px;
    color: #35304c;
    text-align: right;
    background-color: #f4f1ff;
    border-color: black;
    border-radius: 10px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    position: relative;
    margin: 5px;
    }
    
    .dep1:hover{
        height: 80px;
        width: 195px;
        color: gray;
        text-align: right;
background-color: #eae4ff;

        border-radius: 10px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  position: relative;
  margin: 5px;
    }
    </style>
                </ul>
                

<script>
function goToSite() {

      window.location.href = "https://donate.qiwi.com/payin/ponchik.gq?&message=id:<?php echo $id?>&senderName=<?php echo $login?>";
}

function goToSite2() {

      window.location.href = "https://my.qiwi.com/NYKOLAY-Sn2ETRnmwi";
}



</script>          
       
        
            </div>
            <style>
.bonuses-title-content {
    display: flex;
    justify-content: center;
    position: relative;
margin: 15px 0;
    overflow: hidden;
}
.bonuses-title-container:first-child {
    padding-left: 20px;
}


.bonuses-title-container:last-child {
    padding-left: 10px;
    padding-right: 20px;
}

.bonuses-title-container {
    display: flex;

    z-index: 3;
}
.bonuses-title {
    position: relative;
    display: block;
    font-style: normal;
    font-weight: 700;
    font-size: 30px;
    line-height: 30px;
    text-align: center;
    text-transform: uppercase;
background: linear-gradient(45.87deg, #6f7dff 6.6%, #852fff 102.94%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.bonuses-title::before {
    height: 1px;
    width: calc(100% - 20px);
    display: block;
    position: absolute;
    top: 15px;
    right: -100%;
background: linear-gradient(270deg,#c3beff,#8237ff 49.48%,rgba(50,49,72,.2));
    content: "";
}
.bonuses-title::after {
    height: 1px;
    width: calc(100% - 20px);
    display: block;
    position: absolute;
    top: 15px;
    left: -100%;
background: linear-gradient(270deg,#c3beff,#8237ff 49.48%,rgba(50,49,72,.2));
    content: "";
}
            </style>


<div data-v-7e2626f1="" class="bonuses-title-content"><div data-v-7e2626f1="" class="bonuses-title-container"><div data-v-7e2626f1="" class="bonuses-title">
          ПОПОЛНЕНИЯ
        </div></div></div>         
            <div class="cardh mg-b-10 mg-t-10 hash-mob">

   

    <div class="table-responsive mg-t-20 mg-b-15" style=" padding: 0px 20px 10px 20px;">
        
    
        <style>
            .table{
               color:#312c48;
            }
            .mg-t-20 {
    margin-top: -5px;
}
        </style>
  <center>    
  <div class="table-responsive mg-t-30 ">
                        <div class="table-responsive">
                          <table class="table table-sm mg-b-0 table-deposit">
                                <thead>
                                    <tr>
                                        <th scope="col">ID платежа</th>
                                        <th scope="col">Сумма</th>
                                       
                                        <th scope="col">Дата</th>
                                        <th scope="col">Номер транзакции</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    	<? $deposits = mysql_query("SELECT * FROM kot_payments WHERE user_id='$id'");
		while ($row = mysql_fetch_array($deposits)){
			$summa = $row['suma'];
			$i = $row['id'];
			$transac = $row['transaction'];
			$bonusdep = $row['bonusdep'];
			$time = $row['data'];
			echo '<tr><td>'.$i.'</td><td>'.$summa.' ₽</td><td>'.$time.'</td><td>'.$transac.'</td></tr>' ;
			
			
		}
	?>


                                </tbody>
                            </table>  
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
        </center>

</div><!-- card -->
</div>

        
        
        
        
     
        
        
        
        
        
        
        
            
<style>
th{
    color:#948bbf;
}
td{
    color:#b6b0d7;
}
</style>
<?php
require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");
?>