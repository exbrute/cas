<div class="modal fade" id="modalSignIn" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
<div class="modal-content">
<div class="modal-body pd-20 pd-sm-40">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</a>
<div>
<h4>Авторизация</h4>
<p class="tx-color-03 tx-thin"></p>


<div id="uLogin" data-ulogin="display=buttons;fields=photo_big,first_name,last_name;mobilebuttons=0;redirect_uri=https://<?=$_SERVER['HTTP_HOST']?>/index.php;">

<a href="#" data-uloginbutton="vkontakte"  class="btn btn-outline-facebook btn-block mg-b-15"><i class="fad fa-vk"></i> Войти через Вконтакте</a>

</div> <script src="//ulogin.ru/js/ulogin.js"></script>



</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
<div class="modal-content">
<div class="modal-body pd-20 pd-sm-40">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</a>
<div>
<h4>Создание аккаунта</h4>
<div class="form-group">
<label>Логин</label>
<input id="userRegsiter" type="text" class="form-control" placeholder="">
</div>
<div class="form-group">
<label>Пароль</label>
<input id="userPassRegister" type="password" class="form-control" placeholder="">
</div>
<div class="form-group">
<label>Повторите пароль</label>
<input id="userPassRegister1" type="password" class="form-control" placeholder="">
</div>
<div class="form-group">
Создавая аккаунт, вы соглашаетесь с <a href="terms" target="_blanc">пользовательским соглашением</a> и <a href="policy" target="_blanc">политикой конфеденциальности</a>.
</div>
<div style="transform: scale(0.75);margin-top: -17px;" class="g-recaptcha justify-content-center align-self-center" data-sitekey="6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk"></div>
<div id="error_register" class="alert alert-danger tx-center tx-red" role="alert" style="color: rgb(219, 52, 69);padding: 9px;display:none"></div>
<button id="butRegister" onclick="register()" class="btn btn-primary btn-block">Создать аккаунт</button>
<div class="tx-13 mg-t-20 tx-center">Есть аккаунт? <a data-dismiss="modal" aria-label="Close" href="#modalSignIn" data-toggle="modal">Войти</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
                                    
                                    function login() {
                                if ($('#userLogin').val().length < 4) {
                                    $('#error_enter').css('display', 'block');
                                    return $('#error_enter').html('Логин от 4 символов');
                                }
                                if ($('#userPass').val() == '') {
                                    $('#error_enter').css('display', 'block');
                                    return $('#error_enter').html('Введите пароль');
                                }

                                if ($('#g-recaptcha-response').val() == '') {
                                    $('#error_enter').css('display', 'block');
                                    return $('#error_enter').html('Поставьте галочку');
                                }
                                $.ajax({
                                    type: 'POST',
                                    url: '/action.php',
                                    beforeSend: function() {
                                        
                                        $('#butEnter').html('<div class="spinner-border spinner-border-sm tx-white link-03 tx-medium tx-spacing--0 tx-10"></div>');
                                        $('#butEnter').addClass('disabled');
                                        $('#error_enter').hide();
                                        
                                    },
                                    data: {
                                        type: "login",
                                        login: $('#userLogin').val(),
                                        rc: $('#g-recaptcha-response').val(),
                                        pass: $('#userPass').val()
                                    },
                                    success: function(data) {
                                        
                                

                                        var obj = jQuery.parseJSON(data);
                                        if ('success' in obj) {
                                            Cookies.set('sid', obj.success.sid, { expires: 365,path: '/',secure:true });
                                            Cookies.set('login', $('#userLogin').val(), { expires: 365,path: '/',secure:true });
                                            window.location.href = '';
                                            // return false;
                                        }else{
                                            $('#butEnter').html('Войти');
                                        $('#butEnter').removeClass('disabled');
                                            grecaptcha.reset();
                                       
                                        $('#error_enter').html(obj.error);
                                        $('#error_enter').css('display', 'block');
                                        }


                                    }
                                });
                            }
                            
                            function register() {
                                if ($('#userRegsiter').val().length < 4) {
                                    $('#error_register').css('display', 'block');
                                    return $('#error_register').html('Логин от 4 символов');
                                }
                                if ($('#userPassRegister').val() == '') {
                                    $('#error_register').css('display', 'block');
                                    return $('#error_register').html('Введите пароль');
                                }
                                if ($('#userPassRegister1').val() !== $('#userPassRegister').val()) {
                                    $('#error_register').css('display', 'block');
                                    return $('#error_register').html('Пароли не совпадают');
                                }
                            

                                if ($('#g-recaptcha-response-1').val() == '') {
                                    $('#error_register').css('display', 'block');
                                    return $('#error_register').html('Поставьте галочку');
                                }
                                $.ajax({
                                    type: 'POST',
                                    url: '/action.php',
                                    beforeSend: function() {
                                        $('#butRegister').html('<div class="spinner-border spinner-border-sm tx-white link-03 tx-medium tx-spacing--0 tx-10"></div>').addClass('disabled');
                                        $('#error_register').hide();
                                    },
                                    data: {
                                        type: "register",
                                        login: $('#userRegsiter').val(),
                                        ref: Cookies.get('ref'),
                                        rc: $('#g-recaptcha-response-1').val(),
                                        pass: $('#userPassRegister').val()
                                    },
                                    success: function(data) {
                                        $('#butRegister').html('Зарегистрироваться').removeClass('disabled');
                                        $('#error_register').hide();
                                        var obj = jQuery.parseJSON(data);
                                        if ('success' in obj) {
                                            Cookies.set('sid', obj.success.sid, { expires: 365,path: '/',secure:true });
                                            Cookies.set('login', $('#userLogin').val(), { expires: 365,path: '/',secure:true });
                                            window.location.href = '';
                                            // return false;
                                        }else{
                                            grecaptcha.reset(1);
                                       
                                        $('#error_register').html(obj.error);
                                        $('#error_register').show();
                                        }


                                    }
                                });
                            }
                        
                                    
                                    
                                    
                                </script>

<div class="modal fade" id="firstBonus" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
<div class="modal-content">
<div class="modal-body pd-20 pd-sm-40">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</a>
<div id="wizard1" role="application" class="wizard clearfix">
<div class="steps clearfix align-items-center justify-content-center">
<ul role="tablist">
<li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="wizard1-t-0" href="#wizard1-h-0" aria-controls="wizard1-p-0"><span class="current-info audible">current step: </span><span class="number ">1</span></a></li>
<li role="tab" class="disabled" aria-disabled="true"><a id="wizard1-t-1" href="#wizard1-h-1" aria-controls="wizard1-p-1"><span class="number">2</span></a></li>
</ul>
</div>
<div class="content clearfix" style="min-height:0!important">
<h3 id="wizard1-h-0" tabindex="-1" class="title current tx-center ">Привяжите аккаунт Вконтакте</h3>
</div>
 <div class="actions ">
<a href="/login.php" class="tx-center "><i class="ion ion-logo-vk"></i> Привязать</a>
</div>
</div>
<center id="xrqexr" style="font-size:11px;margin-top: 15px;opacity:0.5;cursor:pointer;" onclick="hideBonus()">Больше не показывать предложение</center>
</div>
</div>
</div>
</div>


<script>
        
        function getBonus() {

                $.ajax({
                                            type: 'POST',
                                            url: '/action.php',
                                             beforeSend: function(data) {
                                                        $('#bonBut').addClass('disabled');
                                                    },
                                            data: {
                                                type: 'getBonus',
                                                sid: Cookies.get('sid'),
                                                a:  Cookies.get('ab')
                                            },
                                            success: function(data) {
                                                $('#error_bonuss1').hide();
                                                $('#bonBut').removeClass('disabled');
                                             var obj = jQuery.parseJSON(data);
                                                if ('success' in obj) {
                                                    $('#firstBonus').modal('toggle');
                                                    $(".absh").hide();
                                                        updateBalance(obj.success.balance, obj.success.new_balance);
                                                         updateBalanceMobile(obj.success.balance, obj.success.new_balance);
                                                
                                                    return;
                                                   
                                                } 
                                                if ('error' in obj) {
                                                    $('#error_bonuss1').show();
                                                    return $('#error_bonuss1').html(obj.error.text);
                                                }
                                            }
                                        });
               
                    
            }
            
            function hideBonus() {
                        $.ajax({
                            type: 'POST',
                            url: '/action.php',
                            data: {
                                type: "hideBonus",
                                sid: Cookies.get('sid'),
                            },
                            success: function(data) {
                                var obj = jQuery.parseJSON(data);
                                if ('success' in obj) {
                                    $('#firstBonus').modal('toggle');
                                }
                            }
                        });
                    }
            
        
        
    </script>
<div class="modal fade" id="userSettings" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered " role="document">
<div class="modal-content">
<div class="modal-body pd-x-25 pd-sm-x-30 pd-t-40 pd-sm-t-20 pd-b-15 pd-sm-b-20">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</a>
<div class="nav-wrapper mg-b-20 tx-13">
<div>
<nav class="nav nav-line tx-medium">
<a href="#performance" class="nav-link active" data-toggle="tab">Настройки</a>
</nav>
</div>
</div>
<div class="tab-content">
<div id="performance" class="tab-pane fade active show">
<h6>Темная тема</h6>
<div class="row row-xs mg-t-15">
<div class="col-lg-4">
<div class="d-md-flex">
<div id="fnWrapper" class="parsley-input">
<div class="custom-control custom-switch">
<input autocomplete="off" type="checkbox" class="custom-control-input" id="customSwitch1" onchange="Cookies.set('tm','1');location.reload(); "><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label>
</div>
</div>
</div>
</div>
</div> <hr>
<h6>Смена пароля</h6>
<div class="row row-xs mg-t-15">
<div class="col-lg-4">
<div class="d-md-flex ">
<div id="fnWrapper" class="parsley-input">
<input type="password" id="resetPass" name="firstname" class="form-control " placeholder="Старый пароль" autocomplete="off" data-parsley-class-handler="#fnWrapper" required="">
</div>
</div>
</div>
<div class="col-lg-4">
<div class="d-md-flex ">
<div id="lnWrapper" class="parsley-input ">
<input type="password" id="resetPassRepeat" name="lastname" class="form-control " placeholder="Новый пароль" autocomplete="off" data-parsley-class-handler="#lnWrapper" required="">
</div>
</div>
</div>
<div class="col-lg-4">
<button onclick="resetPass()" class="btn btn-block btn-primary tx-normal rpbss">Сохранить</button>
</div>
<span id="error_resetPass" class="tx-danger mg-t-15" style="display:none">Пароль</span>
<span id="succes_resetPass" class="tx-success mg-t-15" style="display:none">Пароль изменен</span>
<script>

                                        function resetPass() {
										if ($('#resetPass').val() == ''){
										$('#error_resetPass').show();
										return $('#error_resetPass').html('Введите пароль');
										}
										if ($('#resetPass').val().length < 5){
										$('#error_resetPass').show();
										return $('#error_resetPass').html('Пароль от 5 символов');
										}
									if ($('#resetPass').val() != $('#resetPassRepeat').val()){
										$('#error_resetPass').show();
										return $('#error_resetPass').html('Пароли не совпадают');
									}
									$.ajax({
                                        type: 'POST',
                                        url: 'action.php',
										beforeSend: function() {
										    $('.rpbss').addClass("disabled");
											$('#error_resetPass').hide();
											$('#succes_resetPass').hide();
										},	
                                        data: {
                                            type: "resetPassPanel",
                                            sid: Cookies.get('sid'),
                                            newPass: $('#resetPass').val()
                                        },
                                        success: function(data) {
                                            $('.rpbss').removeClass("disabled");
                                            var obj = jQuery.parseJSON(data);
                                            if ('success' in obj) {
                                               $("#succes_resetPass").show();
											  Cookies.set('sid', obj.success.sid, { path: '/',secure:true });
																						 return false;
                                            }else{
												$('#error_resetPass').show();
												return $('#error_resetPass').html(obj.error.text);
											}
                                        }
                                    });
                                    
                                }
								</script>
</div>
<hr>
<h6 class="d-none">Аккаунт Вконтакте</h6>
<div class="row row-xs mg-t-15 d-none">
<div class="col-lg-4">
<div class="d-md-flex">
<div id="fnWrapper" class="parsley-input">
<a href="" target="_blank">https://werwr.wrer</a>
</div>
</div>
</div>
</div>
<hr>
<div class="row row-xs mg-t-15">
<div class="col-lg-12">
<div class="d-md-flex">
<button type="submit" class="btn btn-outline-primary btn-block tx-normal" onclick="exit();location.href = '';">Выйти из аккаунта</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="checkModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true" onclick="22">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body pd-x-25 pd-sm-x-30 pd-t-40 pd-sm-t-20 pd-b-15 pd-sm-b-20">
<div class="text-center">
<div class="spinner-border"></div>
</div>
</div>
</div>
</div>
<script>
                                    
                                    $("#checkModal").on('hide.bs.modal', function(){
    history.pushState(null, null, '/');
  });
  
                                    </script>
</div>
<div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" style="display: none;" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content tx-14">
<div class="modal-header">
<h4 class="mg-b-5 ">Пополнение баланса</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="form-group mg-b-5">
<label class="tx-normal la-mob">Выберите платежную систему:</label>
</div>
<div class="d-none d-sm-flex flex-row justify-content-start">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('3'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')"><svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 29.573537 13.433727" version="1.1">
<g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-48.845523,-338.5318)">
<g id="g5493" transform="matrix(0.26458333,0,0,0.26458333,48.943684,337.05093)" style="fill:none">
<path class="qdt" id="path5489" d="m 54.406,34.313 h 1.737 v 3.893 h 1.255 l 2.252,-3.893 h 1.899 l -2.703,4.569 v 0.032 L 61.71,43.9 H 59.747 L 57.43,39.717 H 56.176 V 43.9 h -1.738 v -9.588 h -0.032 z m 11.197,2.542 c 2.09,0 3.796,1.512 3.796,3.603 0,2.124 -1.673,3.604 -3.764,3.604 -2.092,0 -3.765,-1.48 -3.765,-3.604 -0.032,-2.123 1.641,-3.603 3.733,-3.603 z m 5.147,0.16 h 1.641 v 5.406 h 2.156 v -5.405 h 1.64 v 5.405 h 2.156 v -5.405 h 1.641 V 43.9 h -9.17 v -6.885 z m 14.093,-0.16 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.285,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.447,-3.635 3.507,-3.635 z m 3.86,5.598 c 0.837,-0.129 1.448,-0.836 1.448,-3.282 v -2.155 h 5.02 V 43.9 h -1.706 v -5.502 h -1.673 v 0.772 c 0,2.992 -0.804,4.73 -3.089,4.794 v -1.512 z m 11.358,-5.598 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.284,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.448,-3.635 3.507,-3.635 z m 4.472,0.16 h 1.705 v 2.639 h 0.837 l 1.673,-2.638 h 1.898 l -2.188,3.281 v 0.033 l 2.445,3.57 h -1.994 l -1.802,-2.798 h -0.9 V 43.9 H 104.5 v -6.885 h 0.032 z m -38.93,5.567 c 1.126,0 2.059,-0.869 2.059,-2.156 0,-1.255 -0.933,-2.156 -2.06,-2.156 -1.125,0 -2.026,0.87 -2.026,2.156 0,1.287 0.9,2.156 2.027,2.156 z M 86.162,39.59 c 0,-0.901 -0.612,-1.448 -1.384,-1.448 -0.868,0 -1.512,0.579 -1.673,1.448 z m 15.218,0 c 0,-0.901 -0.611,-1.448 -1.383,-1.448 -0.87,0 -1.513,0.579 -1.674,1.448 z" inkscape:connector-curvature="0" style="fill:#2d3540" />
<path id="path5491" d="M 78.44,13.432 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 h 3.314 a 0.44,0.44 0 0 1 0.45,0.45 z m 25.868,-0.45 c 0.129,0 0.29,0.064 0.45,0.193 0.097,0.096 0.097,0.257 0.065,0.386 l -5.47,16.28 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.097 -0.418,-0.29 L 92.37,20.35 89.185,29.84 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.096 -0.418,-0.29 l -5.47,-16.28 c -0.032,-0.128 -0.032,-0.257 0.064,-0.385 0.065,-0.129 0.226,-0.193 0.354,-0.193 h 3.7 c 0.193,0 0.354,0.128 0.419,0.321 l 2.927,9.62 3.218,-9.62 a 0.458,0.458 0 0 1 0.418,-0.29 h 2.606 c 0.193,0 0.354,0.097 0.418,0.29 l 3.218,9.62 2.928,-9.62 a 0.444,0.444 0 0 1 0.418,-0.321 h 3.7 z m 5.598,0 c 0.225,0 0.418,0.193 0.45,0.45 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 z m -37.611,16.57 c 0.193,0.225 0.032,0.546 -0.258,0.546 H 67.983 A 0.519,0.519 0 0 1 67.565,29.905 L 66.89,29.069 c -1.416,0.9 -3.09,1.448 -4.859,1.448 -4.954,0 -8.976,-4.022 -8.976,-8.977 0,-4.955 4.022,-8.977 8.976,-8.977 4.955,0 8.977,4.022 8.977,8.977 0,1.77 -0.515,3.443 -1.416,4.858 l 2.703,3.153 z m -33.88,7.882 c 0.837,0.322 1.159,1.576 1.223,2.123 0.129,0.998 -0.16,1.384 -0.482,1.384 -0.322,0 -0.773,-0.386 -1.255,-1.158 -0.483,-0.773 -0.676,-1.641 -0.418,-2.092 0.16,-0.29 0.514,-0.418 0.933,-0.257 z m -4.89,3.636 c 0.515,0 1.094,0.225 1.609,0.675 0.997,0.837 1.287,1.802 0.772,2.51 -0.29,0.354 -0.772,0.579 -1.319,0.579 -0.547,0 -1.126,-0.193 -1.512,-0.547 -0.901,-0.772 -1.158,-2.06 -0.58,-2.767 0.226,-0.29 0.58,-0.45 1.03,-0.45 z m -11.26,9.298 c -12.227,0 -22.136,-9.91 -22.136,-22.136 0,-12.226 9.91,-22.135 22.135,-22.135 12.226,0 22.136,9.91 22.136,22.135 0,4.15 -1.158,8.044 -3.12,11.358 -0.065,0.096 -0.226,0.064 -0.258,-0.065 -0.772,-5.437 -4.086,-8.43 -8.912,-9.33 -0.419,-0.065 -0.483,-0.322 0.064,-0.386 1.48,-0.129 3.571,-0.097 4.665,0.096 0.064,-0.547 0.097,-1.126 0.097,-1.705 0,-8.076 -6.564,-14.64 -14.64,-14.64 -8.075,0 -14.639,6.564 -14.639,14.64 0,8.076 6.564,14.64 14.64,14.64 h 0.675 a 19.749,19.749 0 0 1 -0.29,-3.958 c 0.033,-0.901 0.226,-1.03 0.612,-0.322 2.027,3.507 4.923,6.66 10.585,7.915 4.633,1.03 9.266,2.22 14.253,8.558 0.45,0.547 -0.225,1.126 -0.74,0.676 -5.083,-4.505 -9.716,-5.985 -13.931,-5.985 -4.73,0.033 -7.947,0.644 -11.197,0.644 z m 41.986,-24.42 -1.77,-2.156 c -0.192,-0.225 -0.031,-0.579 0.258,-0.579 h 3.732 c 0.193,-0.515 0.29,-1.094 0.29,-1.673 0,-2.67 -1.995,-4.987 -4.73,-4.987 -2.734,0 -4.73,2.317 -4.73,4.987 0,2.67 1.996,4.955 4.73,4.955 0.772,0.032 1.545,-0.193 2.22,-0.547 z" inkscape:connector-curvature="0" style="fill:#ff8c00" />
</g>
</g>
</svg>
</div>



</div>
<div class="d-sm-none d-block ">
<div class="row row-xs">
<div class="col-6">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('3'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')" style="height: 55px!important;width: 100%!important;"><svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 29.573537 13.433727" version="1.1">
<g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-48.845523,-338.5318)">
<g id="g5493" transform="matrix(0.26458333,0,0,0.26458333,48.943684,337.05093)" style="fill:none">
<path class="qdt" id="path5489" d="m 54.406,34.313 h 1.737 v 3.893 h 1.255 l 2.252,-3.893 h 1.899 l -2.703,4.569 v 0.032 L 61.71,43.9 H 59.747 L 57.43,39.717 H 56.176 V 43.9 h -1.738 v -9.588 h -0.032 z m 11.197,2.542 c 2.09,0 3.796,1.512 3.796,3.603 0,2.124 -1.673,3.604 -3.764,3.604 -2.092,0 -3.765,-1.48 -3.765,-3.604 -0.032,-2.123 1.641,-3.603 3.733,-3.603 z m 5.147,0.16 h 1.641 v 5.406 h 2.156 v -5.405 h 1.64 v 5.405 h 2.156 v -5.405 h 1.641 V 43.9 h -9.17 v -6.885 z m 14.093,-0.16 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.285,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.447,-3.635 3.507,-3.635 z m 3.86,5.598 c 0.837,-0.129 1.448,-0.836 1.448,-3.282 v -2.155 h 5.02 V 43.9 h -1.706 v -5.502 h -1.673 v 0.772 c 0,2.992 -0.804,4.73 -3.089,4.794 v -1.512 z m 11.358,-5.598 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.284,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.448,-3.635 3.507,-3.635 z m 4.472,0.16 h 1.705 v 2.639 h 0.837 l 1.673,-2.638 h 1.898 l -2.188,3.281 v 0.033 l 2.445,3.57 h -1.994 l -1.802,-2.798 h -0.9 V 43.9 H 104.5 v -6.885 h 0.032 z m -38.93,5.567 c 1.126,0 2.059,-0.869 2.059,-2.156 0,-1.255 -0.933,-2.156 -2.06,-2.156 -1.125,0 -2.026,0.87 -2.026,2.156 0,1.287 0.9,2.156 2.027,2.156 z M 86.162,39.59 c 0,-0.901 -0.612,-1.448 -1.384,-1.448 -0.868,0 -1.512,0.579 -1.673,1.448 z m 15.218,0 c 0,-0.901 -0.611,-1.448 -1.383,-1.448 -0.87,0 -1.513,0.579 -1.674,1.448 z" inkscape:connector-curvature="0" style="fill:#2d3540" />
<path id="path5491" d="M 78.44,13.432 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 h 3.314 a 0.44,0.44 0 0 1 0.45,0.45 z m 25.868,-0.45 c 0.129,0 0.29,0.064 0.45,0.193 0.097,0.096 0.097,0.257 0.065,0.386 l -5.47,16.28 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.097 -0.418,-0.29 L 92.37,20.35 89.185,29.84 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.096 -0.418,-0.29 l -5.47,-16.28 c -0.032,-0.128 -0.032,-0.257 0.064,-0.385 0.065,-0.129 0.226,-0.193 0.354,-0.193 h 3.7 c 0.193,0 0.354,0.128 0.419,0.321 l 2.927,9.62 3.218,-9.62 a 0.458,0.458 0 0 1 0.418,-0.29 h 2.606 c 0.193,0 0.354,0.097 0.418,0.29 l 3.218,9.62 2.928,-9.62 a 0.444,0.444 0 0 1 0.418,-0.321 h 3.7 z m 5.598,0 c 0.225,0 0.418,0.193 0.45,0.45 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 z m -37.611,16.57 c 0.193,0.225 0.032,0.546 -0.258,0.546 H 67.983 A 0.519,0.519 0 0 1 67.565,29.905 L 66.89,29.069 c -1.416,0.9 -3.09,1.448 -4.859,1.448 -4.954,0 -8.976,-4.022 -8.976,-8.977 0,-4.955 4.022,-8.977 8.976,-8.977 4.955,0 8.977,4.022 8.977,8.977 0,1.77 -0.515,3.443 -1.416,4.858 l 2.703,3.153 z m -33.88,7.882 c 0.837,0.322 1.159,1.576 1.223,2.123 0.129,0.998 -0.16,1.384 -0.482,1.384 -0.322,0 -0.773,-0.386 -1.255,-1.158 -0.483,-0.773 -0.676,-1.641 -0.418,-2.092 0.16,-0.29 0.514,-0.418 0.933,-0.257 z m -4.89,3.636 c 0.515,0 1.094,0.225 1.609,0.675 0.997,0.837 1.287,1.802 0.772,2.51 -0.29,0.354 -0.772,0.579 -1.319,0.579 -0.547,0 -1.126,-0.193 -1.512,-0.547 -0.901,-0.772 -1.158,-2.06 -0.58,-2.767 0.226,-0.29 0.58,-0.45 1.03,-0.45 z m -11.26,9.298 c -12.227,0 -22.136,-9.91 -22.136,-22.136 0,-12.226 9.91,-22.135 22.135,-22.135 12.226,0 22.136,9.91 22.136,22.135 0,4.15 -1.158,8.044 -3.12,11.358 -0.065,0.096 -0.226,0.064 -0.258,-0.065 -0.772,-5.437 -4.086,-8.43 -8.912,-9.33 -0.419,-0.065 -0.483,-0.322 0.064,-0.386 1.48,-0.129 3.571,-0.097 4.665,0.096 0.064,-0.547 0.097,-1.126 0.097,-1.705 0,-8.076 -6.564,-14.64 -14.64,-14.64 -8.075,0 -14.639,6.564 -14.639,14.64 0,8.076 6.564,14.64 14.64,14.64 h 0.675 a 19.749,19.749 0 0 1 -0.29,-3.958 c 0.033,-0.901 0.226,-1.03 0.612,-0.322 2.027,3.507 4.923,6.66 10.585,7.915 4.633,1.03 9.266,2.22 14.253,8.558 0.45,0.547 -0.225,1.126 -0.74,0.676 -5.083,-4.505 -9.716,-5.985 -13.931,-5.985 -4.73,0.033 -7.947,0.644 -11.197,0.644 z m 41.986,-24.42 -1.77,-2.156 c -0.192,-0.225 -0.031,-0.579 0.258,-0.579 h 3.732 c 0.193,-0.515 0.29,-1.094 0.29,-1.673 0,-2.67 -1.995,-4.987 -4.73,-4.987 -2.734,0 -4.73,2.317 -4.73,4.987 0,2.67 1.996,4.955 4.73,4.955 0.772,0.032 1.545,-0.193 2.22,-0.547 z" inkscape:connector-curvature="0" style="fill:#ff8c00" />
</g>
</g>
</svg>
</div>
</div>

</div>
<div class="row-md">
</div>
</div>


<form >
	

<div class="form-group mg-t-15">
<label class="tx-normal la-mob">Сумма:</label>
<div id="the-basics" class="input-group tx-light tx-16 col-6 pd-0">
<input name="amount" autocomplete="off" class="form-control tx-normal " id="depositSize"style="border-top-right-radius: 5px;border-bottom-right-radius: 5px; " placeholder="">
</div>


<span class="nav-line-profile badge bt-com" style="margin-top:10px; background-color: #e5e9f2;color: #8392a5;">Комиссия: 0%</span>
</div>
<button type="button" class="btn btn-primary tx-normal btn-la-mob" onclick="deposit()"style="padding: 8px 18px;">Далее</button>
</form>


<script>
                        function deposit() {
					
						if ( $('#depositSize').val() == ''){
							$('#error_deposit').show();
							return $('#error_deposit').html('Введите сумму');
						}
						
						if (!$.isNumeric($('#depositSize').val())){
							$('#error_deposit').show();
							return $('#error_deposit').html('Введите корректную сумму');
						}
						$.ajax({
                    type: 'POST',
                    url: 'action.php',
                    data: {
                        type: "deposit",
                        sum: $('#depositSize').val()
                    },
					  beforeSend: function(data) {
						
						$('#depositButton').addClass('disabled');
					},
                    success: function(data) {
                        var obj = jQuery.parseJSON(data);
                        if ('success' in obj) {
							window.location.href = obj.locations;
                        }

                        if ('error' in obj) {
                            $('#depositButton').removeClass('disabled');
                            $('#error_deposit').show();
                            return $('#error_deposit').html(obj.error.text);
                        }

                    }
                });
						
					}
                        
                        
                        
                    </script>
<div class="table-responsive mg-t-30 ">
<div class="table-responsive">
<table class="table table-sm mg-b-0 table-deposit">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Дата</th>
<th scope="col">Сумма</th>
</tr>
</thead>
<tbody>
	<? $deposits = mysql_query("SELECT * FROM kot_payments WHERE user_id='$id'");
		while ($row = mysql_fetch_array($deposits)){
			$summa = $row['suma'];
			$i = $row['id'];
			$data = $row['data'];
			
			echo '<tr><td>'.$i.'</td><td>'.$data.'</td><td>'.$summa.'</td></tr>' ;
			
			
		}
	?>
</tbody>
</table>
 </div>
</div>
</div>
</div>
</div>
</div>



