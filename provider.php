<style>


.preloader1 {
position: fixed;
left: 0;
top: 0;
right: 0;
bottom: 0;
overflow: hidden;
/* фоновый цвет */
    background: #303030;
z-index: 50001;
}

.preloader__image1 {
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

.loaded_hiding1 .preloader1 {
transition: 1s opacity;
opacity: 0;
}

.loaded1 .preloader1 {
display: none;
}

</style>
<script>
window.onload = function () {
document.body.classList.add('loaded_hiding1');
window.setTimeout(function () {
document.body.classList.add('loaded1');
document.body.classList.remove('loaded_hiding1');
}, 2000);
}
</script>

<div class="preloader1">
<svg class="preloader__image1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
<path fill="#fff"
d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
</path>
</svg>
</div>

<body bgcolor="#000" style="font-family: 'Gilroy-Bold';">
    <span style="color:#fff;display: flex;justify-content: center;text-align: center;    margin-top: 25%; ">Слоты с депозитом от 500 монет</span>
    
    
    
