    <style type="text/css">
        .blocked1 {
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
        
        .labelinfo {
    color: #a0a0a0 !important;
    position: absolute;
    z-index: 1;
    top: -8px;
    right: -13px;
    padding: 4px 6px;
    font-weight: bold;
    font-size: 9px;
    background-color: rgb(63 65 81);
    border-radius: 6px;
    transition: background-color .3s ease;
}
    </style>     
     
        <style type="text/css">

.games_block1 {
    /* border-radius: 10px; */
    background: #fff;
    /* border-radius: 10px; */
    position: fixed;

    display: block;
box-shadow: 0px 10px 30px #cfcfcf9c;
    padding-top: 17px;
    height: calc(100% - 95px - 1.5rem);

margin-top: -5%;
    height: 100%;
right: 0;
}
.game i {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    font-size: 30px;
    color: #fff;
}

.game {
    cursor: pointer;
    width: 45px;
    text-align: center;
    height: 45px;
    border: none;

    box-sizing: border-box;
    border-radius: 10px;
    position: relative;
    transition: .5s;
    margin-bottom: 10px;

}

.game.nonactive {
    opacity: 0.4;
    cursor: help;
}



.cardgames {
    overflow-x: auto;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(72, 94, 144, .16);
    border-radius: 0.25rem;
    margin-left: 80px;
        box-shadow: 0 4px 25px 0 rgb(0 0 0 / 10%);
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
#message {
  position: absolute;
  bottom: 10; /* Прилипнет к нижней рамке родителя (если у последнего будет position) */
  cursor: pointer;
margin-top: 279px;
}

#overlayDiv {


}
#mini {
    border: 10px solid silver;
    left:0;
    bottom:10%;
    position:fixed;
    }
    .preview {
    justify-content: center;
    align-items: center;
top: calc(20%);
}

@media screen and (max-width: 600px) {
  .hidemobile1 {
    visibility: hidden;
    display: none;
  }
}





.prokrutka1{
    overflow: auto;
}




.prokrutka1::-webkit-scrollbar {
  width: 5px;
  height: 5px;
}
.prokrutka1::-webkit-scrollbar-thumb {
background: #eae4ff;
  border-radius: 1px;
}
.prokrutka1::-webkit-scrollbar-track {
background-color: #fff;
    border: 1px solid #fff;
}

.prokrutka1::-webkit-scrollbar-button:hover {
  background-color: #ccc;
}







.dropbtn2 {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Кнопка выпадающего меню при наведении и фокусировке */
.dropbtn2:hover, .dropbtn2:focus {
  background-color: #2980B9;
}

/* Контейнер <div> - необходим для размещения выпадающего содержимого */
.dropdown2 {
  position: relative;
  display: inline-block;
}

/* Выпадающее содержимое (скрыто по умолчанию) */
.dropdown-content2 {
display: none;
    position: absolute;
    background-color: #f4f2ff;
    min-width: 42px;
    box-shadow: 0px 8px 16px 0px rgb(148 148 148 / 29%);
    z-index: 1;
    border-radius: 1rem;
    border-radius: -4.5rem;
}

/* Ссылки внутри выпадающего списка */
.dropdown-content2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Изменение цвета выпадающих ссылок при наведении курсора */
.dropdown-content2 a:hover {background-color: #eae4ff;    border-radius: 0.5rem;}

/* Показать выпадающее меню (используйте JS, чтобы добавить этот класс .dropdown-content содержимого, когда пользователь нажимает на кнопку выпадающего списка) */
.show2 {display:block;}

    </style>





                    
                                                  <div class="games_block1 hidemobile1 blocked1 prokrutka1 " style="font-family: 'Gilroy-Bold';    width: 4rem;">
<!--<div onclick="location.href='/index'" class="blackz "style="cursor: pointer" class="" id=""><img src="/Logotype.png" height="80" width="80" alt="logo"></div>
<br>-->


jfghjfg


</div>




 <script>

function taskno()
{
new Noty({
  type: 'error',
  layout: 'bottomLeft',
  theme: 'mint',
  timeout: 1000, 
  text: 'На данный момент новых заданий нет.',
  animation: {
    open: 'animated bounceInLeft', // Animate.css class names
    close: 'animated bounceOutLeft' // Animate.css class names
  }
}).show();

}

</script>
