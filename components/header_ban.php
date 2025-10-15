<?
require ("inc/site_config.php");
header('Content-type: text/html; charset=utf-8');
$site_access = $_GET['access'];
if($site_access != '') {
  $_SESSION['access'] = $site_access;
  header('Location: /');
}
session_start();
if ($_SESSION["ref_id"] == ''){
$ref_id = $_GET['i'];
$_SESSION["ref_id"] = $ref_id;
}
echo $_SESSION["ref_id"];

$d = $_GET['d'];

// if ($d != 1){
// 	if($_SESSION['d'] != 1){
// exit("Тех работы");
// }
// }else{ 
// 	$_SESSION['d'] = $d;
// }

$sid = $_SESSION['hash'];

$selecter1 = "SELECT * FROM kot_user WHERE hash = '$sid'";
         $result4 = mysql_query($selecter1);
         $row = mysql_fetch_array($result4);
		 if($row)
		{
$img = $row['img'];	
$user_id = $row['id'];
          $login = $row['login'];
          $pass = $row['pass'];
          $balance = $row['balance'];
          $id = $row['id'];
          $social_link = $row['social'];
          $is_admin = $row['admin'];
          $is_ban = $row['ban'];
          $bonus = $row['bonus'];
          

          
        }
        
/*
 if($is_admin == 0){
				header('Location: /teh.php');
exit;
	
				} 
	*/		
				
				
				
?>


<?php 




$protocol = $_SERVER['SERVER_NAME'];


   ?>   



<style>
button{
    FONT-FAMILY: 'GILROY-BOLD';
    
}
div{
    FONT-FAMILY: 'GILROY-BOLD';
}
     .dice_sidebar-btns {
    display: grid;
    gap: var(--padding);
    
}

.activel{

}

.navbar-header2 {
    align-items: stretch;
    height: 55px;
    padding: 0;
    justify-content: flex-start;
    background-color: #BAB1ED;

}
body::-webkit-scrollbar {
  width: 8px;               /* ширина scrollbar */
}
body::-webkit-scrollbar-track {
  background: #fff;    /* цвет дорожки */
}
body::-webkit-scrollbar-thumb {
  background-color: #BAB1ED;    /* цвет плашки */
  border-radius: 5px;       /* закругления плашки */

}

.preloader {
position: fixed;
left: 0;
top: 0;
right: 0;
bottom: 0;
overflow: hidden;
/* фоновый цвет */
background: #F7F5FE;
z-index: 50001;
}

.preloader__image {
position: relative;
top: 50%;
left: 50%;
width: 70px;
height: 70px;
margin-top: -35px;
margin-left: -35px;
text-align: center;
animation: preloader-rotate 2s infinite linear;
}

@keyframes preloader-rotate {
100% {
transform: rotate(360deg);
}
}

.loaded_hiding .preloader {
transition: 0.3s opacity;
opacity: 0;
}

.loaded .preloader {
display: none;
}

</style>




<html lang="ru"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



    <!-- Required meta tags -->
 <meta charset="UTF-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Beeze — Качественные игры с выводом средств</title>
    <meta name="description" content="Dizma качественные и интересные игры кабура помогают зарабатывать клиентам и привлекать новых геймеров">
    <meta name="author" content="Beeze">
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="yandex-verification" content="96e28ef72dfc3620">
<script src="https://kit.fontawesome.com/cf70ab6329.js" crossorigin="anonymous"></script>

    <!-- vendor css -->
    <link href="/files/all.css" rel="stylesheet">

    
    <link href="/files/ionicons.css" rel="stylesheet">
    <link href="/files/jqvmap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href="lib/noty.css" rel="stylesheet">
<!-- Подключаем нужную тему -->
<link href="lib/themes/metroui.css" rel="stylesheet">
<link href="lib/themes/relax.css" rel="stylesheet">
<link href="lib/themes/mint.css" rel="stylesheet">
<link href="lib/themes/nest.css" rel="stylesheet">
<link href="lib/themes/semanticui.css" rel="stylesheet">
<link href="lib/themes/sunset.css" rel="stylesheet">
<link href="lib/themes/light.css" rel="stylesheet">



<link href="lib/animate.css" rel="stylesheet">
<script src="lib/noty.js" type="text/javascript"></script>

    <!-- dfg CSS -->
    <link rel="stylesheet" href="/files/dfg_002.css">
    <link rel="stylesheet" href="/files/dfg.css">
    <link rel="stylesheet" href="/night.css">
    

  
<body style="background-color: #F7F5FE;  background-image: url();background-size: 150%;">
 </body>
 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
    $(document).ready(function(){
    	 $('#userBalance').attr("myBalance", <?=$balance;?>)
    	  $('#userBalanceMobile').attr("myBalance", <?=$balance;?>)
   if (!isNaN(window.location.pathname.split("/")[2]) && window.location.pathname.split("/")[1] == 'game'){
            $.ajax({
        type: 'POST',
        url: '/action.php',
        data: {
            type: "gameHistory",
            id: window.location.pathname.split("/")[2]
        },
        success: function (data) {
            $("#checkModal").modal("show");
            $("#checkModal .modal-body").html(data);
        }
        });
        }
        
      

  
if(Cookies.get('theme') == 'day'){
$('#night').hide();
$('#day').show();
 changeCSS('/night.css', '/files/skin.css');
	$('#fnWrapper').html('<div class="custom-control custom-switch"><input autocomplete="off"  type="checkbox" class="custom-control-input" id="customSwitch1" onchange="theme(day);"><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label></div>');
document.getElementById('customSwitch1').setAttribute("onchange","theme('night')")
}
if(Cookies.get('theme') != 'night' && Cookies.get('theme') != 'day') { // если куки не является ни тем, ни тем, то возвращаем ее к значению - день
	Cookies('theme', 'night');
		$('#fnWrapper').html('<div class="custom-control custom-switch"><input autocomplete="off" checked type="checkbox" class="custom-control-input" id="customSwitch1" onchange="theme(day);"><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label></div>');
document.getElementById('customSwitch1').setAttribute("onchange","theme('day')")
}
  

  
function theme(type) {
	delete_cookie('theme');
	if(type == 'night') {
	Cookies('theme', 'night');
$('#night').hide();
$('#day').show();
changeCSS('/files/skin.css', '/night.css');
	$('#fnWrapper').html('<div class="custom-control custom-switch"><input autocomplete="off" checked type="checkbox" class="custom-control-input" id="customSwitch1" onchange="theme(day);"><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label></div>');
document.getElementById('customSwitch1').setAttribute("onchange","theme('day')")
	}
	if(type == 'day') {
	    	Cookies('theme', 'day');
$('#night').hide();
$('#day').show();
	$('#fnWrapper').html('<div class="custom-control custom-switch"><input autocomplete="off"  type="checkbox" class="custom-control-input" id="customSwitch1" onchange="theme(day);"><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label></div>');
document.getElementById('customSwitch1').setAttribute("onchange","theme('night')")
changeCSS('/night.css', '/files/skin.css');
	}
	if(type != 'day' && type != 'night') {
	    alert("Ошибка")
		toastr["error"]("<b>Ошибка!</b><br>Theme is error");
	}
}

        
    //     var conn1 = new WebSocket('wss://a.cabura.cash');
				// conn1.onmessage = function(e) {
				// var kk = JSON.parse(e.data);
				// $("#response").prepend(kk.new);
				// //$("#oe").html(kk.count);
				// $('#response').children().slice(20).remove();
				// };
});
    
    function delete_cookie ( cookie_name )
{
  var cookie_date = new Date ( );  // Текущая дата и время
  cookie_date.setTime ( cookie_date.getTime() - 1 );
  document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
}
function changeCSS(cssFile_old, cssFile_new) {
    var old_link = document.querySelector('link[href*="' + cssFile_old + '"]');

    if (old_link !== null) {
        var new_link = document.createElement("link");
        new_link.setAttribute("rel", "stylesheet");
        new_link.setAttribute("type", "text/css");
        new_link.setAttribute("href", cssFile_new + '?' + Date.now());

        document.getElementsByTagName("head").item(0).replaceChild(new_link, old_link);
    }
}

	function ytWithdraw()
{
new Noty({
  type: 'error',
  layout: 'bottomLeft',
  theme: 'mint',
  timeout: 1000, 
  text: 'Вам не доступнен вывод средств!',
  animation: {
    open: 'animated bounceInLeft', // Animate.css class names
    close: 'animated bounceOutLeft' // Animate.css class names
  }
}).show();

}


function ValuteError()
{
new Noty({
  type: 'error',
  layout: 'bottomLeft',
  theme: 'mint',
  timeout: 1000, 
  text: 'У вас нет прав на смену валюты!',
  animation: {
    open: 'animated bounceInLeft', // Animate.css class names
    close: 'animated bounceOutLeft' // Animate.css class names
  }
}).show();

}

</script>
   <!--Plugin JavaScript file-->
    <script src="script.js"></script>

    <script src="/files/jquery.js"></script>
    <script src="/files/cbrd.js"></script>
    <script src="/files/cookie.js"></script>
    <script src="/files/bootstrap.js"></script>
    <script src="/files/feather.js"></script>
    <script src="/files/typehead.js"></script>
    <script src="/files/perfect-scrollbar.js"></script>
    <script src="/files/jquery_005.js"></script>
    <script src="/files/jquery_006.js"></script>
    <script src="/files/jquery_003.js"></script>
    <script src="/files/Chart.js"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
    <script src="/files/dataTables.responsive.min.js"></script>
    <script src="/files/responsive.dataTables.min.js"></script>
    <script src="/files/dataTables.js"></script>
    <script src="/files/jquery_002.js"></script>
    <script src="/files/jquery_004.js"></script>
    <script src="/files/moment.js"></script>
    <script src="/files/daterangepicker.js"></script>
    <script src="/files/odometer.js"></script>

    <script src="/files/dfg_003.js"></script>
    <script src="/files/dfg.js"></script>
    <script src="/files/jquery-ui.min.js"></script>
    <script src="/files/ion.js"></script>
    <script async="" src="/cdn-cgi/bm/cv/2172558837/api.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}

body {
	font-family: 'Roboto'; 
}

.bzbtn{
        background: radial-gradient(#339cff, #0384fe);
    color: white !important;
    box-shadow: 0 2px 25px 0 rgb(82 152 244 / 42%);
}

.bzbtn:hover{
    background: radial-gradient(#2e8de6, #017aed);
    color: white !important;
    box-shadow: 0 2px 25px 0 rgb(82 152 244 / 42%);
}
/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}
.tx-success2 {
color: #009b4b;
}
.tx-err {
color: ;
}
.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}


.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}

.apexcharts-tooltip-candlestick>div {
  margin: 4px 0;
}

.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
  
}
.navbar-header2 {
    align-items: stretch;
    height: 55px;
    padding: 0;
    justify-content: flex-start;
    border-bottom: 1px solid rgba(72,94,144,.16);
}
#overlayDiv {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index:99;
}

 @media screen and (max-width: 432px){


#topeeed{
    top: -45px;
}
#shoooowd{
    display:none;
}

}
</style>

</head>





<body class="page-profile df-roboto" style="" >
    
    <div id="shoooowd" class="navbar navbar-header navbar-header-fixed mob-head " style="    background: #fff0;position: fixed;top: 0;left: 0;right: 0;z-index: 999;border-bottom: 0px solid rgba(72,94,144,.16);">
        
        
        
        
        



        

        <div class="navbar-right">
           
            <div onclick="window.location.href='/'" class="dropdown dropdown-notification  d-md-none" id="backArr" style="display: none;">
                <a class="" data-toggle="dropdown" style="color:#8f9dae">
                    <svg viewBox="0 0 24 22" width="22" height="25" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                </a>
                
            </div>
            
        </div>
  
    </div>


    <style>


.award {
  width: 710px;
  border-radius: 20px;
  margin: 0 auto;
  box-sizing: border-box;
  padding: 73px 0 42px;
  position: relative;
  min-height: 423px;
  font-size: 34px;
  font-weight: 500;
  color: #FB962C;
  text-align: center;
}

.award::before {
content: '';
    background: rgb(255 255 255);
    filter: blur(4px);
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
}

.a {
  overflow: hidden;
  margin-bottom: 40px;
}
.gameinc.present span, .gameinc:hover span {
    background: #0168fa!important;
    background: linear-gradient(45deg, #1c65c9 0%, #2c80ff 100%)!important;
}


        @media (max-width: 992px) {
        .mg-header {
            margin-top: 55px;
            z-index: 998!important;
        }
        .mg-content {
            margin-top: 90px;
            z-index: 998!important;
        }
     }
    
    
    
    </style>
      <style>
   .tgs {
height: 40px;
    width: 40px;
    border-radius: 12%;
background: #55d4ff;
    background: radial-gradient(#55d4ff, #0d8ad0);
    margin-right: 5px;
   }
   
.vks {
    height: 40px;
    width: 40px;
    border-radius: 12%;
    background: #5576ff;
    background: radial-gradient(#5583ff, #0d65d0);
    margin-right: 15px;
}
   
   
   .tgsm {
height: 40px;
    width: 40px;
    border-radius: 12%;
background: #55d4ff;
    background: radial-gradient(#55d4ff, #0d8ad0);
    margin-right: 5px;
   }
   
   .vksm {
height: 40px;
    width: 40px;
    border-radius: 12%;
    background: #5576ff;
    background: radial-gradient(#5583ff, #0d65d0);
    margin-right: 5px;
        margin-left: 10px;
   }
   
   .tgsmono {
height: 40px;
    width: 40px;
    border-radius: 12%;
background: #55d4ff;
border-color: #c0ccda;
    margin-right: 5px;
   }
   
   
 .active22{
color: #a5c4ef;
}




.nav-link2 {

    color: #707d8e;

}  
   
   .logo_container {
    display: flex;
    margin-top: 5px;
    margin-left: 5%;
    position: relative;
 /*   margin-left: -30%; */

}

.v-logo {
    align-items: center;
    display: flex;
    justify-content: center;
}
.v-logo__circle {
    align-items: center;
background: radial-gradient(73.33% 73.33% at 50% 50%,#3a8bff 0,#73a3ff 100%);
    border-radius: 8px;
    color: #fff;
    display: flex;
    font-size: 1.4rem;
    font-weight: 600;
    height: 40px;
    margin-top: 2%;
    justify-content: center;
    margin-right: 10px;
    position: relative;
    width: 40px;
}

.v-logo__host {
color: #ecf4ff;
    font-size: 25px;
    font-style: normal;
    font-weight: 700;
    letter-spacing: -.01em;
line-height: 50px;
    margin-right: 10px;
}

.v-logo__domain {
background: linear-gradient(90deg,#29a2e1 -18.18%,#376ddd 49.18%,#29a2e1 120%);
    border-radius: 100px;
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    height: 60%;
    line-height: 19px;
    padding: 6px 16px 7px;
    margin-top: 4%;
}



.HeaderDark{
border-radius: 5px;
    background: #f7f5fe;
    width: 85px;
}
  </style>
<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Кнопка выпадающего меню при наведении и фокусировке */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* Контейнер <div> - необходим для размещения выпадающего содержимого */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Выпадающее содержимое (скрыто по умолчанию) */
.dropdown-content {
display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgb(201 201 201 / 42%);
    z-index: 1;
    border-radius: 0.5rem;
}

/* Ссылки внутри выпадающего списка */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.alert_Alert__3I4LL {
margin-top: 1rem;
    position: relative;
    align-items: center;
    font-size: 14px;
    display: flex;
    padding: 15px;
    border-radius: 9px;
    border: 2px solid #dedcf3;
    color: #e4e3ef;
}
.style_EmptyList__1GMVH {
    font-size: 18px;
    color: #828f9a;
    white-space: pre-line;
    text-align: center;
    width: 100%;
}
.style_EmptyList__1GMVH .style_Emoji__17Eyn img {
    width: 60px;
    height: 60px;
    margin-top: -3rem;
}
/* Изменение цвета выпадающих ссылок при наведении курсора */
.dropdown-content a:hover {background-color: #eae4ff;    border-radius: 0.5rem;}

/* Показать выпадающее меню (используйте JS, чтобы добавить этот класс .dropdown-content содержимого, когда пользователь нажимает на кнопку выпадающего списка) */
.show66 {display:block;}












/* Выпадающее содержимое (скрыто по умолчанию) */
.dropdown-contentV {
display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgb(201 201 201 / 42%);
    z-index: 1;
    border-radius: 0.5rem;
}

/* Ссылки внутри выпадающего списка */
.dropdown-contentV a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Изменение цвета выпадающих ссылок при наведении курсора */
.dropdown-contentV a:hover {background-color: #eae4ff;    border-radius: 0.5rem;}

/* Показать выпадающее меню (используйте JS, чтобы добавить этот класс .dropdown-content содержимого, когда пользователь нажимает на кнопку выпадающего списка) */
.showV {display:block;}




</style>

<script>
/* Когда пользователь нажимает на кнопку,
переключение между скрытием и отображением раскрывающегося содержимого */
function myFunction55() {
  document.getElementById("myDropdown").classList.toggle("show66");
}

// Закройте выпадающее меню, если пользователь щелкает за его пределами
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show66')) {
        openDropdown.classList.remove('show66');
      }
    }
  }
}


function Valuta() {
  document.getElementById("ValutaDropbox").classList.toggle("showV");
}

// Закройте выпадающее меню, если пользователь щелкает за его пределами
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-contentV");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('showV')) {
        openDropdown.classList.remove('showV');
      }
    }
  }
}


</script>

   

<style>
    .navbar-header{
    align-items: stretch;
    height: 55px;
    padding: 0;
    justify-content: flex-start;
    background-color: #fff;
    border-bottom: 0px solid rgba(72,94,144,.16);
    border-radius: 1rem;
    }
    
    .rheader__link {
    align-items: center;
    background: transparent;
    border-radius: 6px;
    color: #b6b0d7;
    display: flex;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: .02em;
    line-height: 19px;
    padding: 11px 17px;
    position: relative;
    transition: all .2s;
}

    .rheader__link:hover {
color: #887fbc;
}

.rheader__link--nonactive {
    background: #fff;
}    
    
  .activepage1 {
    background: #f4f2ff;
    color:#8075bd;
}   
    .sizesss{
    top: 0;
    }
</style>


    <header id="topeeed" class="sizesss navbar navbar-header navbar-header-fixed mg-header" style="background: #fff;max-width: 1180px;margin-right: auto;margin-left: auto;position: fixed;  left: 0;right: 0;z-index: 999;height: 69px;">






        <div class="navbar-brand d-none d-sm-flex" style="width:100px!important">
            
        </div>
        
        <div id="navbarMenu" class="navbar-menu-wrapper">
            <div class="navbar-menu-header">
                <a href="/" class="df-logo"><?=$sitename?></a>
                <a id="mainMenuClose" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></a>
                    
            </div><!-- navbar-menu-header -->
            
            <? if($sid){?>
    
            <ul class="nav navbar-menu" style="    margin-left: -20%;font-family: 'Gilroy-Bold';width: 150%;">
                
                
  <a aria-current="page" href="vk.com" id="indexpage1" class="router-link-active rheader__link--nonactive rheader__link "><span class="material-icons" style="font-size: 26px;margin-top: -2px;margin-right: 2px; ">list</span> Обратится в поддержку </a>


  <div id="myDropdown" class="dropdown-content" style="margin-left: 24rem;margin-top: 18.6rem;">
    <a href="/faq" class="12343" style="color: #707d8e;"><span class="material-icons" style="font-size: 17px;margin-top: -2px;margin-right: 2px; color: #707d8e; ">contact_support</span> FAQ</a>
    <a href="/support"style="color: #707d8e;"><span class="material-icons" style="font-size: 20px;margin-top: -2px;margin-right: 2px; color: #707d8e; ">alternate_email</span> Контакты</a>
    <a href="/history"style="color: #707d8e;"><span class="material-icons" style="font-size: 21px;margin-top: -2px;margin-right: 2px; color: #707d8e; ">schedule</span> Все выплаты</a>
     <a href="#modalVoucher" data-toggle="modal" style="color: #707d8e;"><span class="material-icons" style="font-size: 21px;margin-top: -2px;margin-right: 2px; color: #707d8e; ">vpn_key</span> Ваучер</a>
         <a href="/tournamentno"style="color: #707d8e;"><span class="material-icons" style="font-size: 21px;margin-top: -2px;margin-right: 2px; color: #707d8e; ">emoji_events</span> Турнир</a>
  </div>



            </ul>
            
            <?}else{?>
            <ul class="nav navbar-menu" style=" margin-left: -40%;">



	
            </ul>
            <?}?>
            
        </div><!-- navbar-menu-wrapper -->
      
      
      <script>
        if (location.pathname == "/index") {
document.getElementById('indexpage1').className += 'activepage1'
}
        if (location.pathname == "/bonus") {
document.getElementById('bonuspage1').className += 'activepage1'
}
        if (location.pathname == "/ref") {
document.getElementById('revpage1').className += 'activepage1'
}

 
</script>
      
        <style>
            .new-mes {
                fill: rgba(250, 1, 1, 0.06)!important;
                color: #fa7001eb!important;
            }
            
            .ind-top
            {
            fill: rgba(0, 23, 55, 0.04);
            }
            .ind-top:hover
            {
                fill: rgba(1, 104, 250, 0.2);
                color: #0168fa;
            }
            
            
        
            
        </style>
    <style type="text/css">
        .noedit {
            /**
             * Для эксплорера
             */
            -ms-user-select: none;

            /**
             * Для мозилы
             */
            -moz-user-select: none;

            /**
             * Для конкверора
             */
            -khtml-user-select: none;

            /**
             * Для Сафари и Хрома
             */
            -webkit-user-select: none;
        }
        
.balanceview {
    background: #f4f2ff;
border-radius: 6px;
    color: #312C48;
    font-size: 12px;
    font-weight: 600;
    height: 40px;
    width: 125px;
    justify-content: right;
    line-height: 17px;
    /* box-shadow: 0 2px 5px #353333; */
}

.bgbgbg{
    
background-color: #f7f5fe!important;
}
.rheader__balance {
    align-items: flex-end;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    margin-left: auto;
    white-space: nowrap;
}
.rheader__balance-title {
    align-items: center;
    color: #b8b3d1;
    display: flex;
    font-size: 14px;
    font-weight: 600;
    line-height: 17px;
    margin-bottom: 2px;
}
.rheader__balance-title svg {
    margin-left: 6px;
}
.rheader__balance-amount {
    align-items: center;
    color: #312c48;
    display: flex;
    font-size: 18px;
    font-weight: 700;
    justify-content: center;
    line-height: 22px;
}
.odometer.odometer-theme-default {
    font-family: Helvetica Neue,sans-serif;
    line-height: 1.1em;
}
.rheader__balance-amount img {
    height: 17px;
    margin-left: 6px;
    width: 17px;
}
    </style>
<?
$formatted_number = number_format($balance, 2, ',', ' ');
$esese = number_format($balance, strlen(explode('.',$balance)[1]),',',' ');
?> 




		<? if ($sid){?>
		<div class="navbar-right mg-l-100 d-none d-sm-flex" >
   
            <div class="dropdown dropdown-profile ">
                <a class="dropdown-link "style="">
                	



      





 

                    <div class="avatar avatar d-none d-sm-flex "><span class="avatar-initial rounded-circle bgbgbg" style="    color: #707d8e;"><i class="fa fa-user" aria-hidden="true"></i></span></div>
                    <div class=" pd-l-10 " onclick="location.href = '/me';"  style="cursor: pointer;">
                        <span class="d-flex tx-13 tx-color-03 tx-light noedit" style="margin-top: 3px; font-weight: bold;">Привет,</span>
                                                <h4  class="mg-b-3 noedit" style=" font-size: 16px; margin-top: -1px!important; width: max-content;color: #312c48;"> <?=$login;?></h4>
                                                
                                           
                                                
                    </div>
                    
                    <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq122 tx-dark mg-l-4">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a><!-- dropdown-link -->

            </div><!-- dropdown -->
    
        </div>
 
 
 
 
 <div id="ValutaDropbox" class="dropdown-contentV" style="right: 370;top: 70;">
    <a onClick="ValuteError();" class="12343" style="color: #707d8e;cursor:pointer;"><span style="color: #15b316;">RUB</span> - <?=$esese;?></a>
    <a onClick="ValuteError();"class="12343" style="color: #707d8e;cursor:pointer;"><span style="color: black;">USD</span> - 0.00</a>
    <a onClick="ValuteError();"class="12343" style="color: #707d8e;cursor:pointer;"><span style="color: black;">EUR</span> - 0.00</a>
    <a onClick="ValuteError();"class="12343" style="color: #707d8e;cursor:pointer;"><span style="color: black;">BTC</span> - 0.00</a>
    
     <a onClick="ValuteError();"class="12343" style="color: #707d8e;cursor:pointer;    background: #f5f5f5;text-align: center;border-radius: 0.5rem;">Конвертация</a>   
    
  </div>
 

 
 
       
       
        
        <div>
            
        <div class="d-md-none  dropdown-profile " >

            <a class="dropdown-link " style="cursor: pointer;" onclick="location.href = '/me';">
               
                <div class="pd-l-15 ">
                    
                    <span class="d-flex tx-15 tx-color-03 tx-light login-mob" style="font-weight: bold; margin-top: 3px;"> <?=$login;?></span>
                    <i class="fa fa-rub" aria-hidden="true" style="font-size: 14px;color: #69d344;"></i>
                    <h4 class="mg-b-3 balance-mob odometer odometer-auto-theme" id="userBalanceMobile" style="margin-top: -3px;color:#312C48;"><?=$balance;?></h4>
                    

                    
                
                </div>
               
               
                

 

 

            </a><!-- dropdown-link -->
                  

        </div><!-- dropdown -->
        
        </div>
  <!--      <img src="/extra/logobar2.png" height="45"  alt="logo" style="float: right;"> -->
        <div class="navbar-right d-none d-sm-flex" style="width:220px!important">
            
	<? if ($youtube == 0){?>
            <a   class="btn btnwithdraw btn-uppercase flex-fill mg-r-10" style="opacity: 0.5;font-size: 13px;max-width:150px;cursor:pointer">Вывод</a>
           <?}else if($youtube == 1){?>  
              <a  onClick="ytWithdraw();"  class="btn btnwithdraw btn-uppercase flex-fill mg-r-10" style="opacity: 0.5;font-size: 13px;max-width:150px;cursor:pointer">Вывод</a> 
            <?}?>
            
            <a  class="btn btndeposit btn-brand-01 btn-uppercase flex-fill " style=" opacity: 0.5;font-size: 13px;   background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%);    border-color: #7967fa;">Пополнить</a>
            
        <!--    <a href="#modalSetup" data-toggle="modal" class="btn btnwithdraw btn-uppercase flex-fill mg-r-10" style="margin-left: 5%;max-width:150px;cursor:pointer"><img src="/extra/gear.png" width="20"> </a>
-->
        </div>
		
		<?}else{?>
        <div class="navbar-right" style="width:220px!important">

         

            <a href="#modalLogIn"  data-toggle="modal" class=" btndeposit btn-brand-01 btn-uppercase mg-l-5 bt-mob" style="font-size: 13px;width: 65%;    background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%);">Войти</a>

        </div>
        <?}?>
            </header><!-- navbar -->
            
            
              <div class="content content-fixed mg-content">
        <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
    <div class="cont-des d-none mexe-let">
        
        
        <style>
        
        .btndeposit {
    align-items: center;
background: linear-gradient(45deg,#2858dd,#29abe2 98.44%);
    border-radius: 4px;
    color: #fff;
    display: flex;
    font-size: 12px;
    font-weight: 600;
    height: 40px;
    justify-content: center;
    line-height: 17px;

    text-align: center;
    width: 45%;
}

        .btndeposit2 {
    align-items: center;
background: linear-gradient(45deg,#2858dd,#29abe2 98.44%);
    border-radius: 4px;
    color: #fff;

    font-size: 10px;
    font-weight: 600;
    height: 32px;
    padding: 10px 12px;
    line-height: 17px;

    text-align: center;

}

.btnwithdraw2 {
    align-items: center;
background: #2c2d3b;
    border-radius: 4px;
    color: #9ea6bf;
    font-size: 10px;
    font-weight: 600;

    height: 32px;
    justify-content: center;
    line-height: 17px;
    text-align: center;

}

.btnwithdraw2:hover {
    background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%);
    color: #fff;
}

.btnwithdraw {
align-items: center;
    background: #eae4ff;
    border-radius: 4px;
    color: #312c48;
    font-size: 12px;
    font-weight: 600;
    display: flex;
    height: 40px;
    justify-content: center;
    line-height: 17px;
    text-align: center;

}

.btnwithdraw:hover {
    background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%);
    color: #fff;
}

        </style>
        <h1>Базар</h1>
<p>Самые прибыльные и интересные игры <b>базар онлайн</b> представлены на данном официальном сайте. </p>

<p>Лучшие возможности для игры на официальном сайте Cabura лицензионные игры, бонусы и быстрые платежные методы для всех игроков.</p>

<h2>базар промокод</h2>

<p>Играть на нашем сайте базар - просто и прибыльно! </p>
<p>Платежная система выбирается, учитывая интересы региона и персональных желаний потенциальных клиентов. Главными критериями отбора являются удобство и безопасность. Главным достоинством большинства казино является наличие большого количества платежных систем, что позволяет каждому посетителю выбрать способ оплаты, наиболее удобный для него.</p>
<p>Играть онлайн пользователь может без депозита своих средств в игру <b>bazar</b> онлайн это значит, что бонусы не требуют обязательного пополнения счета. Мы гарантируем честную игру, большие промокоды и быстрый вывод средств. Участвуйте в чемпионатах и лотереях, забирайте промокоды за активную игру. Все онлайн игры предоставлены на нашем официальном сайте без изменения функционала, каждую игру проверяйте на честность.</p>

<h3>Мобильная версия</h3>

<p>Тут уже готово все: лицензия, домен, технической обеспечение, контент, платежные системы и так далее. Это требует минимальных затрат в плане времени и финансов, что является несомненным плюсом. Однако заказчик в этом случае не сможет самостоятельно принимать все решения, касающиеся казино. И тут уже каждый сам выбирает что ему важнее: минимальные затраты или возможность самостоятельно принимать решения.</p>

<p>Компания предлагает качественную техническую поддержку. Бесперебойная система, работающая ежедневно и круглосуточно, а также компетентные сотрудники понравятся игрокам. Каждый клиент может задать службе поддержки любой интересующий его вопрос и получить на него ответ.</p>
<h4>Cabura бонус</h4>


<p>Суммы призов также варьируются – от небольших утешительных призов, до действительно солидных денежных вознаграждений. Всё зависит только от удачи, от того, насколько она благосклонна сегодня к конкретному игроку. Вывести свой приз можно в любое время – достаточно заглянуть в личный кабинет и заказать выплату средств.</p>      
<p>Если казино имеет лицензию, то это гарантия законности его деятельности, что является необходимым условием для привлечения пользователей. Также оно получает возможность работать с различными платежными системами и популярными разработчиками программного обеспечения. Вариант лицензирования является оптимальным для региона, в котором проживает заказчик. Клиенту также предоставляется консультация по юридическим вопросам, интересующим его.</p>
<p>
    Компания предоставляет заказчику специальное программное обеспечение, позволяющее осуществлять управление финансами, безопасностью и контентом. Также происходит разработка и отладка функций, дизайна и так далее. Сделать это самостоятельно было бы гораздо труднее.
</p>    </div>