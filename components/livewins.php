   <style>
    .slots__live {
align-items: center;
    background: #fff;
    border-radius: 0px 0px 12px 12px;
    /* display: flex; */
    display: inline-block;
    margin-bottom: 20px;
    margin-top: 20px;
    min-height: 100px;
    overflow: hidden;
    padding: 13px;
    position: fixed;
    right: 0;
    margin-right: 2.5rem;
        z-index: 1000;
}
.slots__live-item {
align-items: center;
    background-color: #f7f5fe;
    border-radius: 10px;
    display: flex;
    flex-shrink: 0;
    padding: 12px;
    /* margin-right: 1rem; */
    margin-bottom: 1rem;
    width: 200px;
    
}
    .slots__live-item+.slots__live-item {
    margin-left: 20px;
}
.slots__live-item-image {
    border-radius: 4px;
    flex-shrink: 0;
    height: 50px;
    margin-right: 8px;
    width: 50px;
}
.slots__live-item-image img {
border-radius: 11px;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%;
}
.slots__live-item-center {
    margin-right: 12px;
    max-width: 80px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.slots__live-item-center-title {
    color: #2b2b2b;
    font-size: 14px;
    font-weight: 700;
    line-height: 17px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.theme__dark .slots__live-item-center-title {
    color: #fcfcfc!important;
}
.slots__live-item-center-subtitle {
    color: #b6b0d7;
    font-size: 11px;
    font-weight: 500;
    line-height: 13px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.slots__live-item-amount {
     background: #7e6afc;
    border-radius: 4px;
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    line-height: 14px;
    padding: 7px 9px;
    text-align: center;
    white-space: nowrap;
}
.slots__live-header {
align-items: center;
background: linear-gradient(45.87deg, #7274ff 6.6%, #7867fb 102.94%);
    border-radius: 6px 6px 0 0;
    color: #ffffff;
    display: flex;
    font-size: 12px;
    font-weight: 700;
    height: 54px;
    right: 0;
    line-height: 14px;
    padding: 11px 13px;
position: fixed;
    top: 0;
    transform: translateY(-100%);
    width: 224px;
    z-index: 1000;
margin-top: 120px;
    margin-right: 2.5rem;
}
.slots__live-header-online {
    align-items: center;
    background: rgba(154,213,127,.25);
    border-radius: 50%;
    display: flex;
    height: 14px;
    justify-content: center;
    margin-right: 10px;
    width: 14px;
}
.slots__live-header-online-dot {
    background: #9ad47f;
    border-radius: 50%;
    height: 6px;
    width: 6px;
}
</style>   
 <?

$images = array(
    
        '/extra/live//gates.png',
        '/extra/live//fparty.png',
        '/extra/live//wildwest.png',
        '/extra/live//ejuicy.png',        
        '/extra/live//crazy.png',                
        '/extra/live//geisha.png',                
        '/extra/live//sweetb.png',                
        '/extra/live//dhouse.png',                
        '/extra/live//bigbass.png',                
        '/extra/live//srush.png',    
        '/extra/live//bj.png',    
        '/extra/live//ppub.png',    
        '/extra/live//rfury.png',    
        '/extra/live//injazz.png',    
        '/extra/live//cwolf.png',  
        '/extra/live//cleo.png',  
        '/extra/live//sweetxmas.png',          
    );

    $image  = $images[array_rand($images)];


$images2 = array(
    
        '/extra/live//gates.png',
        '/extra/live//fparty.png',
        '/extra/live//wildwest.png',
        '/extra/live//ejuicy.png',        
        '/extra/live//crazy.png',                
        '/extra/live//geisha.png',                
        '/extra/live//sweetb.png',                
        '/extra/live//dhouse.png',                
        '/extra/live//bigbass.png',                
        '/extra/live//srush.png',    
        '/extra/live//bj.png',    
        '/extra/live//ppub.png',    
        '/extra/live//rfury.png',    
        '/extra/live//injazz.png',    
        '/extra/live//cwolf.png',  
        '/extra/live//cleo.png', 
        '/extra/live//sweetxmas.png',          
    );

    $image2  = $images2[array_rand($images2)];

$images3 = array(
    
        '/extra/live//gates.png',
        '/extra/live//fparty.png',
        '/extra/live//wildwest.png',
        '/extra/live//ejuicy.png',        
        '/extra/live//crazy.png',                
        '/extra/live//geisha.png',                
        '/extra/live//sweetb.png',                
        '/extra/live//dhouse.png',                
        '/extra/live//bigbass.png',                
        '/extra/live//srush.png',    
        '/extra/live//bj.png',    
        '/extra/live//ppub.png',    
        '/extra/live//rfury.png',    
        '/extra/live//injazz.png',    
        '/extra/live//cwolf.png',  
        '/extra/live//cleo.png',  
        '/extra/live//sweetxmas.png',          
    );

    $image3  = $images3[array_rand($images3)];
    
 $images4 = array(
    
        '/extra/live//gates.png',
        '/extra/live//fparty.png',
        '/extra/live//wildwest.png',
        '/extra/live//ejuicy.png',        
        '/extra/live//crazy.png',                
        '/extra/live//geisha.png',                
        '/extra/live//sweetb.png',                
        '/extra/live//dhouse.png',                
        '/extra/live//bigbass.png',                
        '/extra/live//srush.png',    
        '/extra/live//bj.png',    
        '/extra/live//ppub.png',    
        '/extra/live//rfury.png',    
        '/extra/live//injazz.png',    
        '/extra/live//cwolf.png',  
        '/extra/live//cleo.png',  
        '/extra/live//sweetxmas.png',          
    );

    $image4  = $images4[array_rand($images4)];
 
    
 $images5 = array(
    
        '/extra/live//gates.png',
        '/extra/live//fparty.png',
        '/extra/live//wildwest.png',
        '/extra/live//ejuicy.png',        
        '/extra/live//crazy.png',                
        '/extra/live//geisha.png',                
        '/extra/live//sweetb.png',                
        '/extra/live//dhouse.png',                
        '/extra/live//bigbass.png',                
        '/extra/live//srush.png',    
        '/extra/live//bj.png',    
        '/extra/live//ppub.png',    
        '/extra/live//rfury.png',    
        '/extra/live//injazz.png',    
        '/extra/live//cwolf.png',  
        '/extra/live//cleo.png',  
        '/extra/live//sweetxmas.png',          
    );

    $image5  = $images5[array_rand($images5)]; 
 
    
 $images6 = array(
    
        '/extra/live//gates.png',
        '/extra/live//fparty.png',
        '/extra/live//wildwest.png',
        '/extra/live//ejuicy.png',        
        '/extra/live//crazy.png',                
        '/extra/live//geisha.png',                
        '/extra/live//sweetb.png',                
        '/extra/live//dhouse.png',                
        '/extra/live//bigbass.png',                
        '/extra/live//srush.png',    
        '/extra/live//bj.png',    
        '/extra/live//ppub.png',    
        '/extra/live//rfury.png',    
        '/extra/live//injazz.png',    
        '/extra/live//cwolf.png',  
        '/extra/live//cleo.png',  
        '/extra/live//sweetxmas.png',          
    );

    $image6  = $images6[array_rand($images6)]; 
 
    
 $images7 = array(
    
        '/extra/live//gates.png',
        '/extra/live//fparty.png',
        '/extra/live//wildwest.png',
        '/extra/live//ejuicy.png',        
        '/extra/live//crazy.png',                
        '/extra/live//geisha.png',                
        '/extra/live//sweetb.png',                
        '/extra/live//dhouse.png',                
        '/extra/live//bigbass.png',                
        '/extra/live//srush.png',    
        '/extra/live//bj.png',    
        '/extra/live//ppub.png',    
        '/extra/live//rfury.png',    
        '/extra/live//injazz.png',    
        '/extra/live//cwolf.png',  
        '/extra/live//cleo.png',  
        '/extra/live//sweetxmas.png',          
    );

    $image7  = $images7[array_rand($images7)]; 
 
    
 $images8 = array(
    
        '/extra/live//gates.png',
        '/extra/live//fparty.png',
        '/extra/live//wildwest.png',
        '/extra/live//ejuicy.png',        
        '/extra/live//crazy.png',                
        '/extra/live//geisha.png',                
        '/extra/live//sweetb.png',                
        '/extra/live//dhouse.png',                
        '/extra/live//bigbass.png',                
        '/extra/live//srush.png',    
        '/extra/live//bj.png',    
        '/extra/live//ppub.png',    
        '/extra/live//rfury.png',    
        '/extra/live//injazz.png',    
        '/extra/live//cwolf.png',  
        '/extra/live//cleo.png',  
        '/extra/live//sweetxmas.png',          
    );

    $image8  = $images8[array_rand($images8)]; 
 
     $summgame = rand(1000,8000);
       $summgame2 = rand(1000,8000);
        $summgame3 = rand(1000,8000);
         $summgame4 = rand(1000,8000);
         $summgame5 = rand(1000,8000);
         $summgame6 = rand(1000,8000);
         $summgame7 = rand(1000,8000);
         $summgame8 = rand(1000,8000);
         
         
     $f_contents31 = file("fakelive.txt"); 
    $hashverify1 = $f_contents31[rand(0, count($f_contents31) - 1)];
        
     $f_contents32 = file("fakelive.txt"); 
    $hashverify2 = $f_contents32[rand(0, count($f_contents32) - 1)];         
         
      $f_contents33 = file("fakelive.txt"); 
    $hashverify3 = $f_contents33[rand(0, count($f_contents33) - 1)];        

     $f_contents34 = file("fakelive.txt"); 
    $hashverify4 = $f_contents34[rand(0, count($f_contents34) - 1)];         
   
   
     $f_contents3411 = file("fakelive.txt"); 
    $hashverify5 = $f_contents3411[rand(0, count($f_contents3411) - 1)];           
   
     $f_contents323211 = file("fakelive.txt"); 
    $hashverify6 = $f_contents323211[rand(0, count($f_contents323211) - 1)];           
      
     $f_contents323zzx1 = file("fakelive.txt"); 
    $hashverify7 = $f_contents323zzx1[rand(0, count($f_contents323zzx1) - 1)];           
         
      $f_contents323232323zzx1 = file("fakelive.txt"); 
    $hashverify8 = $f_contents323232323zzx1[rand(0, count($f_contents323232323zzx1) - 1)];           
           
   
   
    ?>
 
   
 <style>
         @media screen and (max-width: 832px){

#hiddemt{
        display:none;
}
}
     
 </style>  
   
   
   
   <div id="hiddemt">
   
   <div class="slots__live-header">
       <div class="slots__live-header-online">
           <div class="slots__live-header-online-dot"></div></div> Люди выигрывают!</div>
   
   <div  class="slots__live">
       
       <div class="slots__live-item" style="background: linear-gradient(45deg,#ffda6d,#ffbd2d 98.44%);color: #fff;">

           <a href="/slot" class="slots__live-item-image">
               <img src="/extra/live//rfury.png"></a>
               <div class="slots__live-item-center">
                   <a class="slots__live-item-center-title">LordTreputin</a>
                  </div>
                   <div class="slots__live-item-amount" style="background: #ddab22;">41 288 ₽</div>
                   
                
                   </div>
                 <div>
                    </div> 
         <div class="slots__live-item">
           <a href="/slot"class="slots__live-item-image">
               <img src="<?echo $image2?>"></a>
               <div class="slots__live-item-center">
                   <a class="slots__live-item-center-title"><?echo $hashverify2?></a>
                  </div>
                   <div class="slots__live-item-amount"><?echo $summgame2?> ₽</div></div>
                 <div>                   
 </div>
   
          <div class="slots__live-item">
           <a href="/slot"class="slots__live-item-image">
               <img src="<?echo $image3?>"></a>
               <div class="slots__live-item-center">
                   <a class="slots__live-item-center-title"><?echo $hashverify3?></a>
                  </div>
                   <div class="slots__live-item-amount"><?echo $summgame3?> ₽</div></div>
                 <div>                   
 </div>

         <div class="slots__live-item">
           <a href="/slot"class="slots__live-item-image">
               <img src="<?echo $image4?>"></a>
               <div class="slots__live-item-center">
                   <a class="slots__live-item-center-title"><?echo $hashverify4?></a>
                  </div>
                   <div class="slots__live-item-amount"><?echo $summgame4?> ₽</div></div>
                 <div>                   
 </div>
 
 
 
 
 
 
         <div class="slots__live-item">
           <a href="/slot"class="slots__live-item-image">
               <img src="<?echo $image5?>"></a>
               <div class="slots__live-item-center">
                   <a class="slots__live-item-center-title"><?echo $hashverify5?></a>
                  </div>
                   <div class="slots__live-item-amount"><?echo $summgame5?> ₽</div></div>
                 <div>                   
 </div> 

         <div class="slots__live-item">
           <a href="/slot"class="slots__live-item-image">
               <img src="<?echo $image6?>"></a>
               <div class="slots__live-item-center">
                   <a class="slots__live-item-center-title"><?echo $hashverify6?></a>
                  </div>
                   <div class="slots__live-item-amount"><?echo $summgame6?> ₽</div></div>
                 <div>                   
 </div>
 
         <div class="slots__live-item">
           <a href="/slot"class="slots__live-item-image">
               <img src="<?echo $image7?>"></a>
               <div class="slots__live-item-center">
                   <a class="slots__live-item-center-title"><?echo $hashverify7?></a>
                  </div>
                   <div class="slots__live-item-amount"><?echo $summgame7?> ₽</div></div>
                 <div>                   
 </div>
 
         <div class="slots__live-item">
           <a href="/slot"class="slots__live-item-image">
               <img src="<?echo $image8?>"></a>
               <div class="slots__live-item-center">
                   <a class="slots__live-item-center-title"><?echo $hashverify8?></a>
                  </div>
                   <div class="slots__live-item-amount"><?echo $summgame8?> ₽</div></div>
                 <div>                   
 </div>
 

   
                 </div></div>


<style>
 @media screen and (max-width: 432px){


#hidenlive {
        display: none;
}


#infa {
        display: none;
}



#gameses {
         height: 5.5rem; 
}
#banner {
         height: 90px;
}
 
            .scale11 {
    display: inline-block; /* Строчно-блочный элемент */
    overflow: hidden; /* Скрываем всё за контуром */
   }
   .scale11 img {
    transition: 1s; /* Время эффекта */
    display: block; /* Убираем небольшой отступ снизу */
   }
   .scale11 img:hover {
    transform: scale(1.02); /* Увеличиваем масштаб */
   }
     
 </style>