<?php

require ("components/header.php");
require ("components/main.php");
require ("components/gamebar.php");
require ("components/livewins.php");

require("inc/site_config.php");
?>

      
            <div class="row ">

            


                    <!--<div class="spinner-border" role="status">-->
                    <!--      <span class="sr-only">Loading...</span>-->
                    <!--    </div>-->


                 




                </div>



<div class="col-lg-8 col-xl-8  " style="max-width:100%">
    
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


    
   
         <div class="card-header pd-t-20  align-items-start justify-content-between bd-b-0 pd-b-0"style="border-color: #fff">
            <div>
                
            </div>
        </div>
   
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
    background: transparent;
    outline: none;
    position: relative;
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
    width: 40px;
    justify-content: center;
    margin-right: 10px;
    margin-left: -7px;
background: #f7f5fe;
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





<div class="game-container game-container_wallet">
        <div class="wallet-header">
            <a class="wallet-header__item active" href="#">Пополнение</a>
            <a class="wallet-header__item " href="/wallet/withdraw">Вывод</a>
            <a class="wallet-header__item " href="/wallet/history">История</a>
        </div>
        
    <script>
        function removeCurrencyFromName(name) {
            return name.replace(/_{2}.+/, '');
        }

        function extractCurrencyFromName(name) {
            return name.match(/_{2}.+/)[0].replace('__', '').toUpperCase();
        }

        function inForeignCurrency(name) {
            return name.indexOf('__') !== -1;
        }

        var deposit_promocode = null;
        var avaiable_payways = [{"id":48,"title":"\u0421\u0411\u041f","name":"sbp_af","min":200,"max":30000,"comission":0,"status":1,"is_default":1,"position":-35,"provider":"aifory","project_fee":5.5,"currency":"RUB"},{"id":46,"title":"\u0421\u0411\u041f #2","name":"sbp_rp","min":200,"max":30000,"comission":0,"status":1,"is_default":0,"position":-34,"provider":"rubpay","project_fee":6,"currency":"RUB"},{"id":39,"title":"\u0411\u0430\u043d\u043a\u043e\u0432\u0441\u043a\u0438\u0435 \u043a\u0430\u0440\u0442\u044b \u0420\u0424","name":"card_rp","min":200,"max":300000,"comission":0,"status":1,"is_default":0,"position":-25,"provider":"rubpay","project_fee":6,"currency":"RUB"},{"id":44,"title":"\u0411\u0430\u043d\u043a\u043e\u0432\u0441\u043a\u0438\u0435 \u043a\u0430\u0440\u0442\u044b \u0420\u0424 #2","name":"card_af","min":300,"max":100000,"comission":0,"status":1,"is_default":0,"position":-24,"provider":"aifory","project_fee":6,"currency":"RUB"},{"id":32,"title":"Qiwi #2","name":"qiwi_rub3","min":3000,"max":50000,"comission":0,"status":1,"is_default":0,"position":-4,"provider":"skypay","project_fee":0,"currency":"RUB"},{"id":42,"title":"\u041a\u0440\u0438\u043f\u0442\u043e\u0432\u0430\u043b\u044e\u0442\u044b","name":"crypto","min":100,"max":200000,"comission":0,"status":1,"is_default":0,"position":-3,"provider":"cryptomus","project_fee":0.7,"currency":"RUB"},{"id":52,"title":"\u0411\u0430\u043d\u043a\u043e\u0432\u0441\u043a\u0438\u0435 \u043a\u0430\u0440\u0442\u044b KZT","name":"card_af__kzt","min":3000,"max":1000000,"comission":0,"status":1,"is_default":0,"position":-1,"provider":"aifory","project_fee":7,"currency":"KZT"},{"id":55,"title":"\u0411\u0430\u043d\u043a\u043e\u0432\u0441\u043a\u0438\u0435 \u043a\u0430\u0440\u0442\u044b UAH","name":"card_uah__uah","min":500,"max":30000,"comission":0,"status":1,"is_default":0,"position":0,"provider":"flexify","project_fee":8,"currency":"UAH"},{"id":38,"title":"Yoomoney","name":"yoomoney_rp","min":300,"max":300000,"comission":0,"status":1,"is_default":0,"position":4,"provider":"rubpay","project_fee":6,"currency":"RUB"},{"id":1,"title":"Piastrix","name":"piastrix_rub","min":100,"max":200000,"comission":0,"status":1,"is_default":0,"position":8,"provider":"piastrix","project_fee":7,"currency":"RUB"},{"id":19,"title":"FKWallet","name":"fkwallet_rub","min":100,"max":200000,"comission":0,"status":1,"is_default":0,"position":9,"provider":"freekassa","project_fee":7,"currency":"RUB"}];
        var payment_options = {};
        var default_payway = {"id":48,"title":"\u0421\u0411\u041f","name":"sbp_af","min":200,"max":30000,"comission":0,"status":1,"is_default":1,"position":-35,"provider":"aifory","project_fee":5.5,"currency":"RUB"};
        var comission = default_payway.comission;

        for (var i = 0; i < avaiable_payways.length; i++){
            payment_options[avaiable_payways[i].name] = {
                name: avaiable_payways[i].title,
                min: avaiable_payways[i].min,
                max: avaiable_payways[i].max,
                comission: avaiable_payways[i].comission,
                image: '/assets/images/' + removeCurrencyFromName(avaiable_payways[i].name) + '.png?v=6'
            };
        }
    </script>

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

      </style>
    <div class="wallet-body">
        <div class="wallet-sidebar">
            <div class="wallet-sidebar__header">
                Выберите способ
            </div>
            <div class="wallet-options">
                                <button class="wallet-options__item active" data-payway="sbp_af">
                        <div class="wallet-options__item-image"><img src="assets/images/sbp_af.png?v=6" alt="" style="height: 24;"></div>
                        <div class="wallet-options__item-name ">СБП</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                                <button class="wallet-options__item " data-payway="card_rp">
                        <div class="wallet-options__item-image"><img src="assets/images/card_rp.png?v=6" alt=""style="height: 24;"></div>
                        <div class="wallet-options__item-name ">Банковские карты РФ</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                                <button class="wallet-options__item " data-payway="qiwi_rub3">
                        <div class="wallet-options__item-image"><img src="assets/images/qiwi_rub3.png?v=6" alt=""style="height: 24;"></div>
                        <div class="wallet-options__item-name ">Qiwi #2</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                                <button class="wallet-options__item " data-payway="piastrix_rub">
                        <div class="wallet-options__item-image"><img src="assets/images/piastrix_rub.png?v=6" alt=""style="height: 24;"></div>
                        <div class="wallet-options__item-name ">Piastrix</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                                <button class="wallet-options__item " data-payway="fkwallet_rub">
                        <div class="wallet-options__item-image"><img src="assets/images/fkwallet_rub.png?v=6" alt=""style="height: 24;"></div>
                        <div class="wallet-options__item-name ">FKWallet</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                    
                    
                                <button class="wallet-options__item " disabled="disabled">
                        <div class="wallet-options__item-image"><img src="assets/images/crypto.png?v=6" alt=""style="height: 24;"></div>
                        <div class="wallet-options__item-name new-badge new-badge_crypto">Криптовалюты</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                                   <button class="wallet-options__item " disabled="disabled">
                        <div class="wallet-options__item-image"><img src="assets/images/card_af.png?v=6" alt=""style="height: 24;"></div>
                        <div class="wallet-options__item-name ">Банковские карты KZT</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                                   <button class="wallet-options__item " disabled="disabled">
                        <div class="wallet-options__item-image"><img src="assets/images/card_uah.png?v=6" alt=""style="height: 24;"></div>
                        <div class="wallet-options__item-name ">Банковские карты UAH</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                                 <button class="wallet-options__item " disabled="disabled">
                        <div class="wallet-options__item-image"><img src="assets/images/yoomoney_rp.png?v=6" alt=""style="height: 24;"></div>
                        <div class="wallet-options__item-name ">Yoomoney</div>
                        <div class="wallet-options__item-comission">
                                <span class="wallet-options__item-comission__value">0%</span>
                        </div>
                    </button>
                            </div>
        </div>

        <div class="wallet-area">
            <div class="wallet-area__row">
                <div class="wallet-area__payway">
                    <span>Способ оплаты: </span>
                    <img class="wallet-area__payway-image" src="assets/images/sbp_af.png?v=6" alt="">
                    <div class="wallet-area__payway-name">СБП</div>
                </div>
                <div class="wallet-area-select mt-10">
                    <div class="form-select form-select_light">
                        <select id="payway-select">
                            <option disabled="" value="none" selected="">Выбрать другой способ</option>
                                                            <option value="sbp_af">СБП</option>
                                                            <option value="sbp_rp">СБП #2</option>
                                                            <option value="card_rp">Банковские карты РФ</option>
                                                            <option value="card_af">Банковские карты РФ #2</option>
                                                            <option value="qiwi_rub3">Qiwi #2</option>
                                                            <option value="crypto">Криптовалюты</option>
                                                            <option value="card_af__kzt">Банковские карты KZT</option>
                                                            <option value="card_uah__uah">Банковские карты UAH</option>
                                                            <option value="yoomoney_rp">Yoomoney</option>
                                                            <option value="piastrix_rub">Piastrix</option>
                                                            <option value="fkwallet_rub">FKWallet</option>
                                                    </select>
                        <span class="myicon-down-arrow"></span>
                    </div>
                </div>
            </div>
            <div class="wallet-area__delimiter">
             .
            </div>

            <div class="fiat__rows">
                <div class="wallet-area__row">
                    <span>Выберите сумму</span>
                    <div class="sum-options">
                        <div class="sum-option-wrapper">
                            <button class="sum-option" data-sum="200">
                                <div class="sum-option__value">
                                    200 <span class="sum-option__currency">₽</span>
                                </div>
                            </button>
                        </div>
                        <div class="sum-option-wrapper">
                            <button class="sum-option active" data-sum="500">
                                <div class="sum-option__value">
                                    500 <span class="sum-option__currency">₽</span>
                                </div>
                            </button>
                        </div>
                        <div class="sum-option-wrapper">
                            <button class="sum-option" data-sum="1000">
                                <div class="sum-option__value">
                                    1000 <span class="sum-option__currency">₽</span>
                                </div>
                            </button>
                        </div>

                        <div class="sum-option-wrapper">
                            <button class="sum-option" data-sum="2500">
                                <div class="sum-option__value">
                                    2500 <span class="sum-option__currency">₽</span>
                                </div>
                            </button>
                        </div>

                        <div class="sum-option-wrapper">
                            <button class="sum-option" data-sum="5000">
                                <div class="sum-option__value">
                                    5000 <span class="sum-option__currency">₽</span>
                                </div>
                            </button>
                        </div>
                        <div class="sum-option-wrapper">
                            <button class="sum-option" data-sum="10000">
                                <div class="sum-option__value">
                                    10000 <span class="sum-option__currency">₽</span>
                                </div>
                            </button>
                        </div>
                        <div class="sum-option-wrapper">
                            <button class="sum-option" data-sum="15000">
                                <div class="sum-option__value">
                                    15000 <span class="sum-option__currency">₽</span>
                                </div>
                            </button>
                        </div>

                        <div class="sum-option-wrapper">
                            <button class="sum-option" data-sum="30000">
                                <div class="sum-option__value">
                                    30000 <span class="sum-option__currency">₽</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="wallet-area__delimiter">
                   .
                </div>
                <div class="wallet-area__row">

                    <form action="/deposit" method="post" target="_blank" id="deposit_form" class="deposit_form">
                        <input type="hidden" name="_token" value="4npKbizHSKJMqpNnaxC1r4LMm4fwjQHe7zYouAZY">                        <div class="payment-total">
                            <div class="payment-total__first-row">
                                <div class="payment-field payment-sum">
                                    <label for="deposit-sum">Сумма<span class="sm-hidden"> пополнения</span></label>
                                    <div class="validation-wrapper">
                                        <span class="validation-message"></span>
                                        <div class="wallet-input-wrapper">
                                            <input inputmode="numeric" value="500" type="text" name="amount" id="amount" data-what="Сумма" data-min="200" data-max="30000" data-value-on-nonnumeric="200" class="numeric-input-validate game-sidebar__input game-sidebar__input_dark" autocomplete="off">
                                            <div class="wallet-input-currency wallet-input-currency_from">руб.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-field payment-to-enroll">
                                    <label for="deposit-sum">К зачислению</label>
                                    <div class="validation-wrapper">
                                        <div class="wallet-input-wrapper">
                                            <input value="5000" type="text" name="deposit-coins" id="deposit-coins" class="game-sidebar__input game-sidebar__input_dark" autocomplete="off" disabled="" style="opacity: 0.5">
                                      <div class="wallet-input-currency wallet-input-currency_from">руб.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info-block withdraw__rate">

                            </div>
                            <div class="payment-total__second-row">
                                <div class="promo-column">
                                  
                                    <div class="payment-promo success">
                                        <div style="display:none" class="validation-wrapper">
                                            <span class="validation-message validation-message_bottom"></span>
                                            <div class="form-promocode">
                                                <input type="text" name="dep_code" id="deposit-promocode" class="promocode-input game-sidebar__input small-placeholder" autocomplete="off" placeholder="Введите промокод">
                                                <button style="padding: 15px 15px;" class="game-sidebar__play-button promocode-activate-btn promocode-deposit"><i class="fas fa-check"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-result">
                                    <div class="payment-result__row payment-result__row_promo hidden">
                                        <div class="payment-result__row-label">Промокод</div>
                                        <div class="payment-result__row-dots"></div>
                                        <div class="payment-result__row-value payment-result__row-value_promocode" style="display: flex; align-items: center;">
                                            <span class="payment-result__row-value_promocode-code"></span>
                                            <span class="myicon-close promo-cancel"></span>
                                        </div>
                                    </div>
                                    <div class="payment-result__row payment-result__row_wager hidden">
                                        <div class="payment-result__row-label">Отыгрыш</div>
                                        <div class="payment-result__row-dots"></div>
                                        <div class="payment-result__row-value payment-result__row-value_wager" style="display: flex; align-items: center;">
                                            <span class="payment-result__row-value_promocode-wager"></span>
                                            <span class="wager-info tooltip-fixed tooltipstered">
                                                <span class="myicon-question-mark"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="payment-result__row">
                                        <div class="payment-result__row-label">Комиссия</div>
                                        <div class="payment-result__row-dots"></div>
                                        <div class="payment-result__row-value payment-result__row-value_comission">0%</div>
                                    </div>

                                    <div class="payment-result__row payment-result__row_finish">
                                        <div class="payment-result__row-label">К оплате</div>
                                        <div class="payment-result__row-dots"></div>
                                        <div class="payment-result__row-value payment-result__row-value_to-pay">500 руб.</div>
                                    </div>
                                    <div class="payment-result__row">
                                        <input type="hidden" name="payway" value="sbp_af" id="payment-payway">
                                        <button type="submit" class="game-sidebar__play-button game-sidebar__play-button_green pay_button">Оплатить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>




            <div class="wallet-area__row">
                <div class="payment-raffle">
                    <span class="myicon-is-raffle payment-raffle__left"><i style="    color: #8477ff;font-size: 36px;margin-top: -20px;" class="fa fa-info" aria-hidden="true"></i></span>
                    <div class="payment-raffle__right">

                        <div class="payment-raffle__description">
                            <p>Если вам не пришел депозит, обратитесь в группу <a href="https://vk.com/beeze_casino">ВКонтакте</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-window modal_card_h2h">
        <div class="modal-dialog modal-w500">
                <div class="modal htp-modal narrow-modal" style="width: 100%;">
                        <div class="heading">Перевод на карту  <a class="myicon-close modal-close"></a></div>
                        <div class="htp-content">

                            <p class="htp-description" style="margin-bottom: 7px; margin-top: 0;">Номер карты <span id="h2h_card_bank" class="h2h_card_bank"></span></p>
                            <div class="your-code__link">
                                <div class="form-promocode" style="max-width: 100%">
                                    <input type="text" onclick="copyToClipboard('#h2h_card_number')" readonly="" value="" id="h2h_card_number" style="max-width: 100%;" class="dark_input h2h_card_number referal-link promocode-input game-sidebar__input small-placeholder" autocomplete="off">
                                    <button style="padding: 15px 15px;" onclick="copyToClipboard('#h2h_card_number')" class="game-sidebar__play-button promocode-activate-btn"><i class="fas fa-copy"></i></button>
                                </div>
                            </div>

                            <p class="htp-description" style="margin-bottom: 7px; margin-top: 20px;">Сумма перевода (RUB)</p>
                            <div class="your-code__link">
                                <div class="form-promocode" style="max-width: 100%">
                                    <input type="text" onclick="copyToClipboard('#h2h_card_amount')" readonly="" value="" id="h2h_card_amount" style="max-width: 100%;" class="dark_input h2h_card_amount referal-link promocode-input game-sidebar__input small-placeholder" autocomplete="off">
                                    <button style="padding: 15px 15px;" onclick="copyToClipboard('#h2h_card_amount')" class="game-sidebar__play-button promocode-activate-btn"><i class="fas fa-copy"></i></button>
                                </div>
                            </div>

                            <div class="htp-popup-message" style="display: flex; align-items: center; margin-top: 15px;">
                                <div class="">
                                    <span class="myicon-alert" style="color: #ffc200; font-size: 30px;"></span>
                                </div>
                                <div class="" style="font-size: 12px; margin-left: 15px; color: #aaa;">
                                    Переводите сумму в точности, платежи с неверной суммой зачислены не будут
                                </div>
                            </div>

                            </div>
                </div>
        </div>
    </div>

    <div class="modal-window modal_sbp_p2p">
        <div class="modal-dialog modal-w500">
                <div class="modal htp-modal narrow-modal" style="width: 100%;">
                        <div class="heading" style="padding: 18px 20px;">
                            <div class="flex-align" style="gap: 10px;">
                                <span style="width: 25px; display: flex; align-items: center;">
                                    <img src="/assets/images/sbp.png" style="max-width: 100%;" alt="">
                                </span>
                                <span style="color: #fff; font-size: 16px;">Перевод по СБП</span>
                            </div>
                            <a class="myicon-close modal-close"></a>
                        </div>
                        <div class="htp-content">


                            <p class="htp-description">Номер телефона</p>
                            <div class="your-code__link">
                                <div class="form-promocode" style="max-width: 100%">
                                    <input type="text" readonly="" onclick="copyToClipboard('#h2h_sbp_wallet')" value="" id="h2h_sbp_wallet" style="max-width: 100%;" class="dark_input h2h_sbp_wallet referal-link promocode-input game-sidebar__input small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;" onclick="copyToClipboard('#h2h_sbp_wallet')" class="game-sidebar__play-button promocode-activate-btn"><i class="myicon-is-copy"></i></button>
                                </div>
                            </div>

                            <div class="deposit__divider"></div>

                            <p class="htp-description">Получатель</p>
                            <div class="your-code__link sbp__receiver">
                                <img src="" alt="" class="h2h_sbp_bank_image">
                                <div>
                                    <div class="h2h_sbp_bank">
                                    </div>
                                    <div class="h2h_sbp_receiver"></div>
                                </div>
                            </div>

                            <div class="deposit__divider"></div>

                            <p class="htp-description">Сумма перевода (RUB)</p>
                            <div class="your-code__link">
                                <div class="form-promocode" style="max-width: 100%">
                                    <input type="text" readonly="" value="" onclick="copyToClipboard('#h2h_sbp_amount')" id="h2h_sbp_amount" style="max-width: 100%;" class="dark_input h2h_sbp_amount referal-link promocode-input game-sidebar__input small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;" onclick="copyToClipboard('#h2h_sbp_amount')" class="game-sidebar__play-button promocode-activate-btn"><i class="myicon-is-copy"></i></button>
                                </div>
                            </div>


                            <div class="deposit__warning">
                                Переводите только указанную сумму. <br>
                                Переводите только на указанный банк. <br>
                                Сверяйте получателя. <br>
                                Иначе деньги будут УТЕРЯНЫ!
                            </div>


                            <div class="" style="text-align: center; margin-bottom: 7px; margin-top: 20px; font-size: 12px;">
                                <p class="htp-description">Перевод необходимо совершить до <span style="white-space: nowrap" class="text-bold h2h_deadline"></span></p>
                            </div>


                        </div>

                </div>
        </div>
    </div>

    <div class="modal-window modal_card_p2p">
        <div class="modal-dialog modal-w500">
                <div class="modal htp-modal narrow-modal" style="width: 100%;">
                        <div class="heading" style="padding: 18px 20px;">
                            <div class="flex-align" style="gap: 10px;">
                                <span style="width: 25px; display: flex; align-items: center;">
                                    <img src="/assets/images/card_rub.png" style="max-width: 100%;" alt="">
                                </span>
                                <span style="color: #fff; font-size: 16px;">Перевод по карте</span>
                            </div>
                            <a class="myicon-close modal-close"></a>
                        </div>
                        <div class="htp-content">


                            <p class="htp-description">Номер карты</p>
                            <div class="your-code__link">
                                <div class="form-promocode" style="max-width: 100%">
                                    <input type="text" readonly="" value="" id="p2p_card_number" style="max-width: 100%;" class="p2p_card_copy dark_input h2h_card_number referal-link promocode-input game-sidebar__input small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;" class="p2p_card_copy game-sidebar__play-button promocode-activate-btn"><i class="myicon-is-copy"></i></button>
                                </div>
                            </div>

                            <div class="deposit__divider"></div>

                            <p class="htp-description">Сумма перевода (RUB)</p>
                            <div class="your-code__link">
                                <div class="form-promocode" style="max-width: 100%">
                                    <input type="text" readonly="" value="" id="p2p_card_amount" onclick="copyToClipboard('#p2p_card_amount')" style="max-width: 100%;" class="dark_input h2h_card_amount referal-link promocode-input game-sidebar__input small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;" onclick="copyToClipboard('#p2p_card_amount')" class="game-sidebar__play-button promocode-activate-btn"><i class="myicon-is-copy"></i></button>
                                </div>
                            </div>


                            <div class="deposit__warning">
                                Переводите строго указанную сумму. <br>
                                Переводите только на указанную карту. <br>
                                Иначе деньги будут УТЕРЯНЫ!
                            </div>


                            <div class="" style="text-align: center; margin-bottom: 7px; margin-top: 20px; font-size: 12px;">
                                <p class="htp-description">Перевод необходимо совершить до <span style="white-space: nowrap" class="text-bold h2h_deadline"></span></p>
                            </div>


                        </div>

                </div>
        </div>
    </div>




    <div class="modal-window modal_p2p_warning">
        <div class="modal-dialog modal-w500">
                <div class="modal htp-modal narrow-modal" style="width: 100%;">
                        <div class="heading">Инструкция <a class="myicon-close modal-close"></a></div>
                        <div class="htp-content">

                            <p class="htp-description" style="margin-bottom: 7px; margin-top: 0;">Перед созданием платежа, пожалуйста, внимательно ознакомьтесь с инструкцией</p>

                            <div class="htp-popup-message qiwi_p2p_sbp" style="display: flex; align-items: center; margin-top: 15px;">
                                <div class="flex-align">
                                    <span class="myicon-alert" style="color: #ffc200; font-size: 28px;"></span>
                                    <span style="color: #fff; font-size: 15px; margin-left: 15px">Данный перевод осуществляется через СБП (систему быстрых платежей). Для перевода с QIWI, ознакомьтесь с инструкцией  <a href="https://qiwi.com/support/payments/subject35/perevod_sbp" class="colored-link" target="_blank">как переводить деньги c QIWI по СБП? </a></span>
                                </div>
                            </div>

                            <div class="htp-popup-message" style="display: flex; align-items: center; margin-top: 15px;">
                                <div class="flex-align">
                                    <span class="myicon-alert" style="color: #ffc200; font-size: 28px;"></span>
                                    <span style="color: #fff; font-size: 15px; margin-left: 15px">Переводите сумму в точности, если вы переведете другую сумму, то платеж <span class="necessary">НЕ БУДЕТ ЗАЧИСЛЕН</span> </span>
                                </div>
                            </div>

                            <div class="htp-popup-message" style="display: flex; align-items: center; margin-top: 15px;">
                                <div class="flex-align">
                                    <span class="myicon-alert" style="color: #ffc200; font-size: 28px;"></span>
                                    <span style="color: #fff; font-size: 15px; margin-left: 15px">При создании пополнения вам выдаются реквизиты платежа. Переводите только по этим реквизитам. Платежи по старым реквизитам <span class="necessary">ЗАЧИСЛЕНЫ НЕ БУДУТ.</span> </span>
                                </div>
                            </div>

                            <div class="htp-popup-message" style="display: flex; align-items: center; margin-top: 15px;">
                                <div class="flex-align">
                                    <span class="myicon-alert" style="color: #ffc200; font-size: 28px;"></span>
                                    <span style="color: #fff; font-size: 15px; margin-left: 15px">Переводите только на указанный банк. Переводы в другие банки <span class="necessary">ЗАЧИСЛЕНЫ НЕ БУДУТ.</span> </span>
                                </div>
                            </div>

                            <button type="button" id="p2p_submit_instruction" style="margin-top: 25px;" class="game-sidebar__play-button game-sidebar__play-button_green pay_button">
                                Перейти к платежу
                            </button>

                        </div>

                </div>
        </div>
    </div>
    </div>




















 
   








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

<div class="modal fade" id="CARD" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
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






                  <div class="modal fade" id="PIASTRIX" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
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
                                    <input class="modal_payment__body-input2" type="number" id="sbpNumber" name="amount" placeholder="Сумма не указана" readonly="" data-v-2836fdb5-s=""style=" background: rgba(120,129,157,.15);box-shadow: none!important;color: #000000b0;" value="$summadeps">
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













var payway_rates = {
    'KZT': 0.18,
    'UZS': 0.01,
    'EUR': 100,
    'UAH': 2.6,
};

$(document).ready(function(){


    function formatDate(date){
        var d = new Date(date);
        return addZero(d.getDate()) + '.' + addZero(d.getMonth() + 1) + ' ' + addZero(d.getHours()) + ':' + addZero(d.getMinutes());
    }

    $('.payment-promocode-call').on('click', function(){
        $(this).hide();
        $('.payment-promo').fadeIn(0);
    });

    $('.deposit_form').submit(function() {
        $('#deposit-promocode').val(promocode);
        return true;
    });

    if (deposit_promocode) {
        preActivateDepositPromocode(deposit_promocode);
        $('.payment-promocode-call').trigger('click');
        $('#deposit-promocode').val(deposit_promocode);
    }

    $('.promo-cancel').on('click', function() {
        deActivateDepositPromocode();
    });

    function deActivateDepositPromocode() {
        $.ajax({
            url : '/deposit/deActivatePromocode',
            type : 'post',
            success : function(data) {
                $.notify({
                    position : 'bottom-right',
                    type: 'success',
                    message: 'РџСЂРѕРјРѕРєРѕРґ РѕС‚РјРµРЅРµРЅ'
                });
                cancelPromo();
                calculatePayment();
            },
            error : function(data) {
                $.notify({
                    position : 'bottom-right',
                    type: 'error',
                    message: 'РџСЂРѕРёР·РѕС€Р»Р° РѕС€РёР±РєР° РїСЂРё РѕС‚РјРµРЅРµ РїСЂРѕРјРѕРєРѕРґР°'
                });
            }
        });
    }

    function preActivateDepositPromocode(code, notify=true) {
        $.ajax({
            url : '/deposit/preActivatePromocode',
            type : 'post',
            data: {
                'code': code
            },
            success : function(data) {
                if (data.success) {
                    promocode_value = data.data.value;
                    promocode_min_dep = data.data.min_dep;
                    promocode = data.data.code;
                    promocode_wager = data.data.wager;
                    notify && $.notify({
                        position : 'bottom-right',
                        type: 'success',
                        message: 'РџСЂРѕРјРѕРєРѕРґ РЅР° +' + data.data.value + '% РїСЂРёРјРµРЅРµРЅ'
                    });
                }
                else {
                    promocode = '';
                    promocode_wager = 0;
                    promocode_value = 0;
                    promocode_min_dep = 0;
                    notify && $.notify({
                        position : 'bottom-right',
                        type: 'error',
                        message: data.error
                    });
                }
                updatePromo();
                calculatePayment();
            },
            error : function(data) {
                notify && $.notify({
                    position : 'bottom-right',
                    type: 'error',
                    message: 'РћС€РёР±РєР° РїСЂРё РѕС‚РїСЂР°РІРєРµ РґР°РЅРЅС‹С… РЅР° СЃРµСЂРІРµСЂ'
                });
            }
        });
    }

    $('.promocode-deposit').on('click', function(e) {
        e.preventDefault();
        var code = $('#deposit-promocode').val();
        if (!validateString(code)) {
            $.notify({
                position : 'bottom-right',
                type: 'error',
                message: 'РќРµРІРµСЂРЅРѕ РІРІРµРґРµРЅРЅС‹Р№ РєРѕРґ'
            });
            return;
        }
        preActivateDepositPromocode(code);
    });

    $('.wallet-options__item').on('click', function(){
        $('.wallet-options__item.active').removeClass('active');
        $(this).addClass('active');
        changePayway($(this).data('payway'));
    });

    $('#payway-select').on('change', function(){
        changePayway(this.value);
    });


    var loadingRequest;
    var cryptoLoadingRequst;

    $(document).on('click', '.crypto-option', function() {
        if (cryptoLoadingRequst) cryptoLoadingRequst.abort();
        $('.crypto-option').removeClass('crypto-option_selected');
        $(this).addClass('crypto-option_selected');
        $('.crypto-wallet-loader').show();
        $('.crypto-wallet-content').hide();
        var currency = $(this).data('currency');
        var network = $(this).data('network');
        cryptoLoadingRequst = $.ajax({
            url : '/v2/api/deposit/crypto/wallet',
            type : 'post',
            data : {
                network: network,
                currency: currency,
            },
            success: function(data) {
                if (data.success) {
                    $('.crypto-wallet-loader').hide();
                    $('.crypto-wallet-content').show();
                    $('.crypto-min-sum').text(data.data.min.toPrecision(4) + ' ' + currency + ' в‰€ ' + data.data.min_rub.toFixed(2) + ' RUB');
                    $('.crypto-currency-code').text(currency);
                    $('#crypto-address').val(data.data.wallet.address);
                    $('.crypto-hint').text('1 ' + currency + ' в‰€ ' + data.data.rate.toFixed(2) + ' RUB');
                    $('.crypto-qr-img').attr('src', 'https://chart.googleapis.com/chart?chs=240x240&cht=qr&chl=' + data.data.wallet.address);
                }
            },
            error: function(data) {
                if (data.statusText != 'abort')
                    $.notify({
                        position: 'bottom-right',
                        type: 'error',
                        message: "РџСЂРѕРёР·РѕС€Р»Р° РѕС€РёР±РєР° РїСЂРё Р·Р°РіСЂСѓР·РєРµ РґР°РЅРЅС‹С…. РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РїРѕРїСЂРѕР±СѓР№С‚Рµ РїРѕР·Р¶Рµ"
                    });
            },
        });
    });
    function changePayway(payway){
        // if (payway == 'piastrix_rub') {
        //     $('.info-block').show();
        // }
        // else {
        //     $('.info-block').hide();
        // }

        $('.withdraw__rate').hide();


        if (loadingRequest) loadingRequest.abort();
        if (cryptoLoadingRequst) cryptoLoadingRequst.abort();

        if (payway == 'crypto') {
            $('.fiat__rows').hide();
            $('.crypto__rows').show();
            $('.crypto__loader').show();
            $('.crypto__content').hide();

            $('#payment-payway').val(payway);
            $('.wallet-area__payway-name').text(payment_options[payway]['name']);
            $('.wallet-area__payway-image').attr('src', payment_options[payway]['image']);


            loadingRequest = $.ajax({
                url : '/v2/api/deposit/crypto/list',
                type : 'post',
                data : {
                },
                success : function(data) {
                    console.log(data);
                    $('.crypto__loader').hide();
                    $('.crypto__content').show();
                    var options_html = '';
                    for (var i = 0; i < data.data.currencies.length; i++) {
                        options_html += '<div class="crypto-option" data-name="' + data.data.currencies[i].name + '" data-network="' + data.data.currencies[i].network + '" data-currency="' + data.data.currencies[i].currency + '">\
                                            <div class="crypto-icon">\
                                                <img src="/assets/images/' + data.data.currencies[i].slug + '.svg" alt="">\
                                            </div>\
                                            <div class="crypto-name">\
                                                ' + data.data.currencies[i].name + '\
                                            </div>\
                                        </div>';
                    }
                    $('.crypto-options').html(options_html);
                    $('.crypto-option:first-child').trigger('click');
                },
                error: function(data) {
                    // console.log(data);
                    $('.crypto__loader').hide();
                    if (data.statusText != 'abort')
                        $.notify({
                            position: 'bottom-right',
                            type: 'error',
                            message: "РџСЂРѕРёР·РѕС€Р»Р° РѕС€РёР±РєР° РїСЂРё Р·Р°РіСЂСѓР·РєРµ РґР°РЅРЅС‹С…. РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РїРѕРїСЂРѕР±СѓР№С‚Рµ РїРѕР·Р¶Рµ"
                        });
                }
            });
            return;
        }
        else {
            $('.fiat__rows').show();
            $('.crypto__rows').hide();
        }

        if (inForeignCurrency(payway)) {
            $('.withdraw__rate').show();
            $('.withdraw__rate').text('Р—Р°РіСЂСѓР·РєР° РєСѓСЂСЃР°...');
            $('.wallet-input-currency_from').text(extractCurrencyFromName(payway));
            $.ajax({
                url : '/v2/api/currency/rate',
                type : 'post',
                data : {
                    payway: payway,
                },
                success: function(data) {
                    payway_rates[data.data.currency.toUpperCase()] = data.data.rate;
                    $('.withdraw__rate').html('1 <span class="withdraw__rate-currency-from">' + data.data.currency + '</span> в‰€ <span class="info-block-what"> <span class="withdraw__rate-value-to">' + data.data.rate.toFixed(2) + '</span> RUB</span> <br /> <span style="display: inline-block; margin-top: 5px; color: var(--color-gray); font-size: 0.7rem">РњРѕРЅРµС‚С‹ Р·Р°С‡РёСЃР»СЏСЋС‚СЃСЏ РїРѕ РєСѓСЂСЃСѓ РЅР° РјРѕРјРµРЅС‚ РїР»Р°С‚РµР¶Р°, РїРѕСЌС‚РѕРјСѓ С„РёРЅР°Р»СЊРЅР°СЏ СЃСѓРјРјР° РјРѕР¶РµС‚ РѕС‚Р»РёС‡Р°С‚СЊСЃСЏ РЅР° РЅРµСЃРєРѕР»СЊРєРѕ РјРѕРЅРµС‚</span>')
                    calculatePayment();
                },
                error: function(data) {
                    if (data.statusText != 'abort')
                        $.notify({
                            position: 'bottom-right',
                            type: 'error',
                            message: "РџСЂРѕРёР·РѕС€Р»Р° РѕС€РёР±РєР° РїСЂРё Р·Р°РіСЂСѓР·РєРµ РєСѓСЂСЃР°. РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РѕР±РЅРѕРІРёС‚Рµ СЃС‚СЂР°РЅРёС†Сѓ"
                        });
                },
            });
        }
        else {
            $('.wallet-input-currency_from').text('RUB');
        }


        if (payway == 'sber' || payway == 'steampay' || payway == 'yamoney_rub' || payway == 'card_rub') {
            $('.depnot').hide();
        }
        else {
            $('.depnot').show();
        }


        $('#payment-payway').val(payway);
        $('.wallet-area__payway-name').text(payment_options[payway]['name']);
        $('.wallet-area__payway-image').attr('src', payment_options[payway]['image']);
        $('#amount').data('min', payment_options[payway]['min']);
        $('#amount').data('max', payment_options[payway]['max']);
        comission = parseInt(payment_options[payway]['comission']);

        validateField('#amount');
        calculatePayment();
    }


    $('.sum-option').on('click', function(){
        $('.sum-option.active').removeClass('active');
        $(this).addClass('active');
        $('#amount').val($(this).data('sum'));
        validateField('#amount');
        calculatePayment();
    });

    $('#amount').on('input', calculatePayment);
    $('#deposit-promocode').on('input', calculatePayment);

    function onPaymentSubmit(e, skip_instruction=false) {
        var pp = $('#payment-payway').val();

        // if (pp === 'card_af') {
        //     if (!skip_instruction) {
        //         e.preventDefault();
        //         if (pp == 'qiwi_af') {
        //             $('.qiwi_p2p_sbp').show();
        //         }
        //         else {
        //             $('.qiwi_p2p_sbp').hide();
        //         }
        //         $('.modal_p2p_warning, .modal-backdrop').addClass('active');
        //     }
        //     else {
        //         $('#deposit_form').submit();
        //     }
        // }

        if (pp === 'card_h2h' || pp === 'qiwi_h2h' ||  pp == 'card_rp' || pp === 'qiwi_card_rp' || pp == 'qiwi_rp' || pp == 'sbp_rp' || pp == 'sbp_bp' || pp == 'sbp_af' || pp == 'card_af' || pp == 'sbp_pl') {
            e.preventDefault();
            $('.pay_button').prop('disabled', true);
            $.ajax({
                url : '/deposit',
                type : 'post',
                data : {
                    amount : $('#amount').val(),
                    payway : $('#payment-payway').val(),
                    dep_code: $('#deposit-promocode').val()
                },
                success : function(data) {
                    $('.pay_button').prop('disabled', false);

                    if (data.success) {


                        if (pp === 'qiwi_h2h') {
                            $('.h2h_card_amount').val(data.data.amount);
                            $('.h2h_card_number').val(cc_format(data.data.card));
                            $('.h2h_card_bank').text(data.data.bank);
                            $('.modal_qiwi_h2h, .modal-backdrop').addClass('active');
                        }
                        else if (pp === 'card_h2h') {
                            $('.h2h_card_amount').val(data.data.amount);
                            $('.h2h_card_number').val(cc_format(data.data.card));
                            $('.h2h_card_bank').text(data.data.bank);
                            $('.modal_card_h2h, .modal-backdrop').addClass('active');
                        }
                        else if (pp === 'sbp_rp' || pp == 'qiwi_rp' || pp == 'sbp_af' || pp == 'sbp_pl') {
                            if (pp == 'qiwi_rp') $('.qiwi_instruction').show();
                            else $('.qiwi_instruction').hide();
                            $('.h2h_sbp_amount').val(data.data.amount);
                            $('.h2h_sbp_bank').text(data.data.sbp_bank);
                            $('.h2h_sbp_receiver').text(data.data.wallet_owner);
                            $('.h2h_sbp_wallet').val('+' + data.data.sbp_wallet);
                            $('.h2h_deadline').text(formatDate(data.data.deadline));

                            let imgSrc = '';
                            if (data.data.sbp_bank == 'РЎР±РµСЂР±Р°РЅРє') {
                                imgSrc = '/assets/images/sberbank.svg';
                            }
                            else if (data.data.sbp_bank == 'РўРёРЅСЊРєРѕС„С„') {
                                imgSrc = '/assets/images/tinkoff.svg';
                            }
                            else if (data.data.sbp_bank == 'Р Р°Р№С„С„Р°Р№Р·РµРЅ') {
                                imgSrc = '/assets/images/raiffeisen.svg';
                            }

                            if (! imgSrc) {
                                $('.h2h_sbp_bank_image').hide();
                            }
                            else {
                                $('.h2h_sbp_bank_image').attr('src', imgSrc);
                                $('.h2h_sbp_bank_image').show();
                            }

                            $('.modal_sbp_p2p, .modal-backdrop').addClass('active');
                        }
                        else if (pp === 'card_rp' || pp === 'qiwi_card_rp' || pp === 'card_af') {
                            $('#p2p_card_amount').val(data.data.amount);
                            $('#p2p_card_number').val(cc_format(data.data.card));
                            $('.p2p_card_copy').off().on('click', function() {
                                copyValueToClipboard(data.data.card);
                            });
                            $('.h2h_deadline').text(formatDate(data.data.deadline));
                            $('.modal_card_p2p, .modal-backdrop').addClass('active');
                        }

                        $('body').addClass('modal-active');
                    }
                    else {
                        $.notify({
                            position : 'bottom-right',
                            type: 'error',
                            message: data.error
                        });
                    }
                },
                error : function(data) {
                    $('.pay_button').prop('disabled', false);
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
            });
        }
    }
    $('.pay_button').on('click', function(e) {
        onPaymentSubmit(e);
    });

    $('#p2p_submit_instruction').on('click', function(e) {
        onPaymentSubmit(e, true);
    });

    calculatePayment();


});

var promocode = '';
var promocode_wager = 0;
var promocode_value = 0;
var promocode_min_dep = 0;


function cc_format(value) {
    var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
    var matches = v.match(/\d{4,16}/g);
    var match = matches && matches[0] || ''
    var parts = []

    for (i=0, len=match.length; i<len; i+=4) {
        parts.push(match.substring(i, i+4))
    }

    if (parts.length) {
        return parts.join(' ')
    } else {
        return value
    }
}

function updatePromo() {
    if (promocode !== '') {
        $('.payment-result__row-value_promocode-code').text(promocode.toUpperCase());
        $('.payment-result__row-value_promocode-wager').text(promocode_wager + '%');
        if (promocode_wager > 0 ) {
            $('.payment-result__row_wager').removeClass('hidden');
        }
        else {
            $('.payment-result__row_wager').addClass('hidden');

        }
        $('.payment-result__row_promo').removeClass('hidden');
    }
    else {
        $('.payment-result__row_promo').addClass('hidden');
        $('.payment-result__row_wager').addClass('hidden');
    }
}

function cancelPromo() {
    promocode = '';
    promocode_wager = 0;
    promocode_value = 0;
    promocode_min_dep = 0;
    $('.payment-result__row_promo').addClass('hidden');
    $('.payment-result__row_wager').addClass('hidden');
    $('#deposit-promocode').removeClass('hasErrors');
    $('#deposit-promocode').parents('.validation-wrapper').children('.validation-message').fadeOut(100).text('');
}

function pickSumOption(sum){
    $('.sum-option.active').removeClass('active');
    $('.sum-option').each(function(){
        if (parseInt($(this).data('sum')) == parseInt(sum)){
            $(this).addClass('active');
            return true;
        }
    });
}

function calculatePayment(){
    var payway = $('#payment-payway').val();
    var foreign = inForeignCurrency(payway);
    var currency = foreign ? extractCurrencyFromName(payway) : 'RUB';

    var current_sum = parseInt($('#amount').val());
    if (isNaN(current_sum) || current_sum < 0) current_sum = 0;

    var rate = 1;
    if (!foreign) {
        pickSumOption(current_sum);
    }
    else {
        rate = payway_rates[currency];
    }

    var to_enroll_coins = Math.floor(current_sum * 1 * rate);
    if (promocode != '') {
        if (to_enroll_coins / 10 >= promocode_min_dep) {
            to_enroll_coins += Math.floor(to_enroll_coins * promocode_value / 100);
            $('#deposit-promocode').removeClass('hasErrors');
            $('#deposit-promocode').parents('.validation-wrapper').children('.validation-message').fadeOut(100).text('');
        }
        else {
            var errorMsg = 'РњРёРЅРёРјР°Р»СЊРЅР°СЏ СЃСѓРјРјР°: ' + promocode_min_dep + 'СЂ.';
            $('#deposit-promocode').addClass('hasErrors');
            $('#deposit-promocode').parents('.validation-wrapper').children('.validation-message').fadeIn(100).text(errorMsg);
        }
    }

    if (inForeignCurrency(payway)) {
        $('#deposit-coins').val('в‰€ ' + Math.floor(to_enroll_coins));
    }
    else {
        $('#deposit-coins').val(to_enroll_coins);
    }
    var _cm = comission;

    // if (current_sum >= comission_free && comission_free >= 0 && pway != 'steampay' && pway != 'sber' && pway != 'yamoney_rub' && pway != 'card_rub' && pway != 'card_uah') _cm = 0;
    $('.payment-result__row-value_comission').text(_cm + '%');
    $('.payment-result__row-value_to-pay').text(Math.floor((current_sum + current_sum * _cm / 100) * 100) / 100 + ' ' + currency);
}


function validateString(str){
    var regex = /^[A-Za-z0-9]+$/
    return regex.test(str);
}
</script>          
       
        
            </div>
            
<style></style>




<?php
require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");
?>