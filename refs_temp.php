


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
.col7 {
flex: 0 0 100%;
max-width: 100%;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:focus {
    border-radius: 5px!important;
    background-color: #eae4ff;
    color: #424f60!important;
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

.btn-outline-light2 {
    border-color: #0061ff;
    color: #ffffff;
    background-color: #2f85ff;
}

.btn-outline-light2:hover {
    border-color: #0061ff;
    color: #ffffff;
    background-color: #1174ff;
}
</style>




<div class="col7 col-xl-10 mg-t-10" style="height: 88vh;">
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
    <img src="/extra/panel/icoRevenuShareZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Партнерская прогрмма
</div>



    <div class="cardh">
        <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0"style="border-color: rgb(72 94 144 / 6%);">
            <div>

          
<div id="mobileterm" class="home-text">
<h2>Ваша реферальная ссылка></h2>
<div class="custom-email">
<input type="text" class="custom-email-input" id="refid" value="<?=$linksite?>/?i=<?=$user_id;?>" readonly="">
<button id="copyText" type="button"   class="custom-email-botton">
    <svg height="20" viewBox="0 0 21 21" width="20" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 2)"><path d="m14.5 12.5v-7l-5-5h-5c-1.1045695 0-2 .8954305-2 2v10c0 1.1045695.8954305 2 2 2h8c1.1045695 0 2-.8954305 2-2z"></path><path d="m9.5.5v3c0 1.1045695.8954305 2 2 2h3m-12-3c-1.1045695 0-2 .8954305-2 2v10c0 1.1045695.8954305 2 2 2h8c1.1045695 0 2-.8954305 2-2"></path></g></svg>
    </button>
</div>

</div>            
           
            
<style>
@media screen and (max-width: 432px){


#mobileterm {
max-width: 100%;
    height: 9rem;
    margin: 5px;
}

#refid{
    font-size: 10px;
}


}
.home-text {
    border: 2px dashed #766afc;
    padding: 25px;
    border-radius: 12px;
    background: 0 0;
        width: 34rem;
        height: 8rem;
}
.ref-nav .active {
    cursor: pointer;
    color: #766bfc!important;
    font-size: 10px;
}
.home-text h2 {
    font-size: 20px;
    font-weight: 400;
    color: black;
    margin: 0 0 20px;
    text-align: center;
}
h3 {
    font-size: 16px;
    font-weight: 400;
    color: black;
    margin: 0 0 20px;
    text-align: center;
}
.custom-email {
    position: relative;
    width: 100%;
}
.custom-email-input {
    width: 100%;
    border: none;
    border-radius: 100px;
    padding: 10px 100px 10px 20px;
    line-height: 1;
    background-color: hsl(249.23deg 100% 97.45%);
    color: #9294a5;
    box-sizing: border-box;
    outline: none;
    height: 40px;
    font-size: 16px;
}
 input {
    overflow: visible;
}
.custom-email-botton:disabled {
    background: #3323f5;
    opacity: .6;
        cursor:pointer;
}

.custom-email-botton {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    border: 0;
background: #766efd;
    color: #fff;
    outline: none;
    margin: 0;
    padding: 0 10px;
    border-radius: 100px;
    z-index: 2;
    width: 37px;
    font-size: 24px;
    cursor: pointer;
}
.home-btn {
    margin-top: 25px;
}
.align-items-center {
    -ms-flex-align: center!important;
    align-items: center!important;
}
.text-center {
    text-align: center!important;
}
.home-btn .btn {
    margin-bottom: 25px;
    white-space: nowrap;
}
.btn-1 {
    background-color: #fff;
    padding: 12px 30px;
    border-radius: 30px;
    border: none;
    color: var(--main-color);
    text-transform: capitalize;
    transition: all .5s ease;
    box-shadow: var(--shadow-black-300);
    font-weight: 500;
    width: 100%;
}
.btnR {
    display: inline-block;
    font-weight: 400;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #766bfc;
    border: 1px solid transparent;
    /* padding: 0.375rem 0.75rem; */
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 30.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    cursor:pointer;
}
    

    
</style>           


               
            </div>
  <div id="mobileterm" class="home-text">
<h3>Делитесь ссылкой и получайте 50% дохода на свой баланс!</h3>

<h3>Что бы вывести прибыль на баланс напишите в группу ВК</h3>  

</div>           
                <script>




/* сохраняем текстовое поле в переменную text */
var text = document.getElementById("refid");

/* сохраняем кнопку в переменную btn */
var btn = document.getElementById("copyText");

/* вызываем функцию при нажатии на кнопку */
btn.onclick = function() {
  text.select();    
  document.execCommand("copy");
}


</script>
 
 
 
 
 
           
        </div>


<style>
    .formc2{
        display: block;
    width: 100%;
    height: calc(1.5em + 0.9375rem + 2px);
    padding: 0.46875rem 0.625rem;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #596882;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #0486fe;
    border-radius: 0.8rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.table{
    color: #6e7a8d;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:focus {
    border-radius: 5px!important;
    background-color: #eae4ff;
    color: #424f60!important;
}
table.dataTable thead .sorting_asc, table.dataTable thead .sorting_desc {
    background-image: none;
    background-color: #f7f5fe;
    position: relative;
}

</style>


        <div class="card-body pd-20 bd-b pd-b-20">
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="row">
                
                <div class="col-12">

                    <div class=" card-crypto">
                        <div class="card-header pd-y-8 d-sm-flex align-items-center justify-content-between" style="padding: 7px 0px;">
                            <nav class="nav nav-line ref-nav" style="letter-spacing: 0px;">
                            
                                <a class="nav-link active" style="padding: 0;" onclick="">Статистика</a>
                                
                            </nav>
                            <div class="tx-12 tx-color-03 align-items-center d-none d-sm-block">

                              <input id="dateRange" type="text" name="dates" class="dis-ra d-inline form-control pull-right bd-0" style="margin: -8px;background: transparent; cursor:pointer; color: #8392a5; width:170px" readonly="">

                            </div>
                        </div><!-- card-header -->

                        
                        <div id="refStatBlock" class="ref-block" style="display:none;position: relative;">
                            
                        <div id="chart" style="min-height: 395px;"><div id="apexchartswamyt5vz" class="apexcharts-canvas apexchartswamyt5vz apexcharts-theme-light" style="width: 248px; height: 380px;"><svg id="SvgjsSvg1232" width="248" height="380" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1234" class="apexcharts-inner apexcharts-graphical" transform="translate(33.125, 40)"><defs id="SvgjsDefs1233"><clipPath id="gridRectMaskwamyt5vz"><rect id="SvgjsRect1242" width="211.875" height="265.5708099975586" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskwamyt5vz"><rect id="SvgjsRect1243" width="208.875" height="266.5708099975586" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1248" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1249" stop-opacity="0.6" stop-color="rgba(1,104,250,0.6)" offset="0"></stop><stop id="SvgjsStop1250" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop><stop id="SvgjsStop1251" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1241" x1="0" y1="0" x2="0" y2="262.5708099975586" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="262.5708099975586" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1254" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1255" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1257" font-family="Helvetica, Arial, sans-serif" x="0" y="285.5708099975586" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 1 280.3203125)"><tspan id="SvgjsTspan1258">08.11.2020</tspan><title>08.11.2020</title></text><text id="SvgjsText1260" font-family="Helvetica, Arial, sans-serif" x="34.14583333333333" y="285.5708099975586" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 35.140625 280.3203125)"><tspan id="SvgjsTspan1261">09.11.2020</tspan><title>09.11.2020</title></text><text id="SvgjsText1263" font-family="Helvetica, Arial, sans-serif" x="68.29166666666667" y="285.5708099975586" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 69.296875 280.3203125)"><tspan id="SvgjsTspan1264">10.11.2020</tspan><title>10.11.2020</title></text><text id="SvgjsText1266" font-family="Helvetica, Arial, sans-serif" x="102.43750000000001" y="285.5708099975586" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 103.4375 280.3203125)"><tspan id="SvgjsTspan1267">11.11.2020</tspan><title>11.11.2020</title></text><text id="SvgjsText1269" font-family="Helvetica, Arial, sans-serif" x="136.58333333333337" y="285.5708099975586" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 137.578125 280.3203125)"><tspan id="SvgjsTspan1270">12.11.2020</tspan><title>12.11.2020</title></text><text id="SvgjsText1272" font-family="Helvetica, Arial, sans-serif" x="170.7291666666667" y="285.5708099975586" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 171.734375 280.3203125)"><tspan id="SvgjsTspan1273">13.11.2020</tspan><title>13.11.2020</title></text><text id="SvgjsText1275" font-family="Helvetica, Arial, sans-serif" x="204.87500000000006" y="285.5708099975586" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 205.875 280.3203125)"><tspan id="SvgjsTspan1276">14.11.2020</tspan><title>14.11.2020</title></text></g><line id="SvgjsLine1277" x1="0" y1="263.5708099975586" x2="204.875" y2="263.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1292" class="apexcharts-grid"><g id="SvgjsG1293" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1302" x1="0" y1="0" x2="204.875" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1303" x1="0" y1="52.51416199951173" x2="204.875" y2="52.51416199951173" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1304" x1="0" y1="105.02832399902346" x2="204.875" y2="105.02832399902346" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1305" x1="0" y1="157.5424859985352" x2="204.875" y2="157.5424859985352" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1306" x1="0" y1="210.0566479980469" x2="204.875" y2="210.0566479980469" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1307" x1="0" y1="262.5708099975586" x2="204.875" y2="262.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1294" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1295" x1="0" y1="263.5708099975586" x2="0" y2="269.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1296" x1="34.145833333333336" y1="263.5708099975586" x2="34.145833333333336" y2="269.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1297" x1="68.29166666666667" y1="263.5708099975586" x2="68.29166666666667" y2="269.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1298" x1="102.4375" y1="263.5708099975586" x2="102.4375" y2="269.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1299" x1="136.58333333333334" y1="263.5708099975586" x2="136.58333333333334" y2="269.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1300" x1="170.72916666666669" y1="263.5708099975586" x2="170.72916666666669" y2="269.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1301" x1="204.87500000000003" y1="263.5708099975586" x2="204.87500000000003" y2="269.5708099975586" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1309" x1="0" y1="262.5708099975586" x2="204.875" y2="262.5708099975586" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1308" x1="0" y1="1" x2="0" y2="262.5708099975586" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1244" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1245" class="apexcharts-series" seriesName="Заработок" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1252" d="M 0 262.5708099975586L 0 262.5708099975586C 11.951041666666667 262.5708099975586 22.194791666666667 262.5708099975586 34.145833333333336 262.5708099975586C 46.096875000000004 262.5708099975586 56.340625 262.5708099975586 68.29166666666667 262.5708099975586C 80.24270833333334 262.5708099975586 90.48645833333333 262.5708099975586 102.4375 262.5708099975586C 114.38854166666667 262.5708099975586 124.63229166666667 262.5708099975586 136.58333333333334 262.5708099975586C 148.534375 262.5708099975586 158.778125 262.5708099975586 170.72916666666666 262.5708099975586C 182.68020833333333 262.5708099975586 192.92395833333333 262.5708099975586 204.875 262.5708099975586C 204.875 262.5708099975586 204.875 262.5708099975586 204.875 262.5708099975586M 204.875 262.5708099975586z" fill="url(#SvgjsLinearGradient1248)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwamyt5vz)" pathTo="M 0 262.5708099975586L 0 262.5708099975586C 11.951041666666667 262.5708099975586 22.194791666666667 262.5708099975586 34.145833333333336 262.5708099975586C 46.096875000000004 262.5708099975586 56.340625 262.5708099975586 68.29166666666667 262.5708099975586C 80.24270833333334 262.5708099975586 90.48645833333333 262.5708099975586 102.4375 262.5708099975586C 114.38854166666667 262.5708099975586 124.63229166666667 262.5708099975586 136.58333333333334 262.5708099975586C 148.534375 262.5708099975586 158.778125 262.5708099975586 170.72916666666666 262.5708099975586C 182.68020833333333 262.5708099975586 192.92395833333333 262.5708099975586 204.875 262.5708099975586C 204.875 262.5708099975586 204.875 262.5708099975586 204.875 262.5708099975586M 204.875 262.5708099975586z" pathFrom="M -1 262.5708099975586L -1 262.5708099975586L 34.145833333333336 262.5708099975586L 68.29166666666667 262.5708099975586L 102.4375 262.5708099975586L 136.58333333333334 262.5708099975586L 170.72916666666666 262.5708099975586L 204.875 262.5708099975586"></path><path id="SvgjsPath1253" d="M 0 262.5708099975586C 11.951041666666667 262.5708099975586 22.194791666666667 262.5708099975586 34.145833333333336 262.5708099975586C 46.096875000000004 262.5708099975586 56.340625 262.5708099975586 68.29166666666667 262.5708099975586C 80.24270833333334 262.5708099975586 90.48645833333333 262.5708099975586 102.4375 262.5708099975586C 114.38854166666667 262.5708099975586 124.63229166666667 262.5708099975586 136.58333333333334 262.5708099975586C 148.534375 262.5708099975586 158.778125 262.5708099975586 170.72916666666666 262.5708099975586C 182.68020833333333 262.5708099975586 192.92395833333333 262.5708099975586 204.875 262.5708099975586" fill="none" fill-opacity="1" stroke="#0168fa" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwamyt5vz)" pathTo="M 0 262.5708099975586C 11.951041666666667 262.5708099975586 22.194791666666667 262.5708099975586 34.145833333333336 262.5708099975586C 46.096875000000004 262.5708099975586 56.340625 262.5708099975586 68.29166666666667 262.5708099975586C 80.24270833333334 262.5708099975586 90.48645833333333 262.5708099975586 102.4375 262.5708099975586C 114.38854166666667 262.5708099975586 124.63229166666667 262.5708099975586 136.58333333333334 262.5708099975586C 148.534375 262.5708099975586 158.778125 262.5708099975586 170.72916666666666 262.5708099975586C 182.68020833333333 262.5708099975586 192.92395833333333 262.5708099975586 204.875 262.5708099975586" pathFrom="M -1 262.5708099975586L -1 262.5708099975586L 34.145833333333336 262.5708099975586L 68.29166666666667 262.5708099975586L 102.4375 262.5708099975586L 136.58333333333334 262.5708099975586L 170.72916666666666 262.5708099975586L 204.875 262.5708099975586"></path><g id="SvgjsG1246" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1315" r="0" cx="0" cy="0" class="apexcharts-marker wuxxf6ib4 no-pointer-events" stroke="#ffffff" fill="#0168fa" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1247" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1310" x1="0" y1="0" x2="204.875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1311" x1="0" y1="0" x2="204.875" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1312" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1313" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1314" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1316" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1317" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><text id="SvgjsText1236" font-family="Helvetica, Arial, sans-serif" x="10" y="21" text-anchor="start" dominant-baseline="auto" font-size="16px" font-weight="900" fill="#263238" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;"></text><rect id="SvgjsRect1240" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1278" class="apexcharts-yaxis" rel="0" transform="translate(3.125, 0)"><g id="SvgjsG1279" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1280" font-family="Helvetica, Arial, sans-serif" x="20" y="41.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1281">5</tspan></text><text id="SvgjsText1282" font-family="Helvetica, Arial, sans-serif" x="20" y="94.01416199951173" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1283">4</tspan></text><text id="SvgjsText1284" font-family="Helvetica, Arial, sans-serif" x="20" y="146.52832399902346" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1285">3</tspan></text><text id="SvgjsText1286" font-family="Helvetica, Arial, sans-serif" x="20" y="199.0424859985352" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1287">2</tspan></text><text id="SvgjsText1288" font-family="Helvetica, Arial, sans-serif" x="20" y="251.5566479980469" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1289">1</tspan></text><text id="SvgjsText1290" font-family="Helvetica, Arial, sans-serif" x="20" y="304.0708099975586" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1291">0</tspan></text></g></g><g id="SvgjsG1235" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 190px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(1, 104, 250);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><div class="apexcharts-zoomin-icon" title="Zoom In"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
</svg>
</div><div class="apexcharts-zoomout-icon" title="Zoom Out"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path d="M0 0h24v24H0z" fill="none"></path>
    <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
</svg>
</div><div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
    <path d="M0 0h24v24H0V0z" fill="none"></path>
    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
</svg></div><div class="apexcharts-pan-icon" title="Panning"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
    <defs>
        <path d="M0 0h24v24H0z" id="a"></path>
    </defs>
    <clipPath id="b">
        <use overflow="visible" xlink:href="#a"></use>
    </clipPath>
    <path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
</svg></div><div class="apexcharts-reset-icon" title="Reset Zoom"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
    <path d="M0 0h24v24H0z" fill="none"></path>
</svg></div><div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div><div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div></div></div></div></div>
                            
                        <script type="text/javascript">
                            
                         
                            
                            
                            
                            $('#refList').DataTable({
                                "type"   : "POST",
                                'ajax': 'getreflist.php',
                                "order": [[ 0, "desc" ]]
                            });


                            $(function() {
                                moment.lang("ru");
                                var start = moment().subtract(6, 'days');
                                var end = moment();

                                function cb(start, end) {
                                    
                                     $.ajax({
                                        type: 'POST',
                                        url: 'action.php',
                                        beforeSend: function () {

                                        },
                                        data: {
                                            type: "getRefEarn",
                                            start: start.format('YYYY-MM-DD'),
                                            end: end.format('YYYY-MM-DD')
                                        },
                                        success: function (data) {
                                        var obj = jQuery.parseJSON(data);
                                        $("#startEarn").html(start.format('DD-MM-YYYY'));
                                        $("#endEarn").html(end.format('DD-MM-YYYY'));
                                        $("#earnRange").html(obj.er);
                                            chart.updateSeries([{
                                                name: 'Заработок',
                                                data: obj.chart
                                             }])
                                        }
                                    });
                                }

                                $('#dateRange').daterangepicker({
                                    autoApply: true,
                                    locale: {
                                        format: 'DD.MM.YYYY'
                                    },
                                    "maxSpan": {
                                        "days": 30
                                    },
                                    startDate: moment().subtract(6, 'days'),
                                    endDate: moment(),
                                    ranges: {
                                        'Сегодня': [moment(), moment()],
                                        'Вчера': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                        'Неделя': [moment().subtract(6, 'days'), moment()],
                                        'Месяц': [moment().startOf('month'), moment().endOf('month')],
                                    }
                                }, cb);

                                cb(start, end);

                            });
                            
                            $('#daterange').on('apply.daterangepicker', function(ev, picker) {
  console.log(picker.startDate.format('YYYY-MM-DD'));
  console.log(picker.endDate.format('YYYY-MM-DD'));
});

                        </script>





                        <script>

                            var options = {
                                            title: {
                                                text: "",
                                                align: 'left',
                                                margin: 10,
                                                offsetX: 0,
                                                offsetY: 0,
                                                floating: false,
                                                style: {
                                                    fontSize: '16px',
                                                    color: '#263238'
                                                },
                                            },
                                            stroke: {
                                                width: 3
                                            },
                                            markers: {
                                                size: 0,
                                            },
                                            toolbar: {
                                                show: false

                                            },
                                            colors: ['#0168fa', '#0168fa', '#0168fa'],
                                            chart: {
                                                height: 380,
                                                type: "area"
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            series: [{
                                                name: "Новых рефералов",
                                                data: []
                                            }],
                                            noData: {
                                                text: 'Загрузка...'
                                              },

                                            fill: {

                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.6,
                                                    opacityTo: 0.9

                                                }
                                            },
                                            tooltip: {
                                                enabled: true,

                                            },

                                            xaxis: {
                                                tooltip: {
                                                    enabled: false
                                                },
                                                categories: []
                                            }
                                        };

                                        var chart = new ApexCharts(document.querySelector("#chart"), options);

                                        chart.render();
                            
                            
                            
                                    </script>
                      
                        <div class="card-footer pd-20">
                            <div class="row row-md">

                             
                                

                            </div><!-- row -->
                        </div><!-- card-footer -->
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 249px; height: 549px;"></div></div><div class="contract-trigger"></div></div></div>
                        
                        <div id="refListBlock" class="ref-block mg-t-20" >
                        <div id="refList_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="refList_length"><label>Show <select name="refList_length" aria-controls="refList" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="refList_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="refList"></label></div><table id="refList" class="table dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="refList_info">
                            <thead>
                                <tr role="row"><th class="wd-20p sorting_desc" tabindex="0" aria-controls="refList" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: activate to sort column ascending" style="width: 0px;">ID</th><th class="wd-20p sorting" tabindex="0" aria-controls="refList" rowspan="1" colspan="1" aria-label="Логин: activate to sort column ascending" style="width: 0px;">Логин</th><th class="wd-20p sorting" tabindex="0" aria-controls="refList" rowspan="1" colspan="1" aria-label="Регистрация: activate to sort column ascending" style="width: 0px;">Регистрация</th><th class="wd-20p sorting" tabindex="0" aria-controls="refList" rowspan="1" colspan="1" aria-label="Активность: activate to sort column ascending" style="width: 0px;">Активность</th><th class="wd-20p sorting" tabindex="0" aria-controls="refList" rowspan="1" colspan="1" aria-label="Заработок: activate to sort column ascending" style="width: 0px;">Заработок</th></tr>
                            </thead>
                        <tbody><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">Загружаем...</td></tr></tbody></table>
                    
                        </div>
                        </div>
                        
                        
                        
                    
                    
                    </div><!-- card -->
                </div>

            </div>
            
            
            
            

            
            
            
            
        </div><!-- card-body -->
