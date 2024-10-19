
<?php

get_header();
?>



    
<section class="hero">


<video autoplay muted loop id="myVideo">
<source src="<?php echo get_template_directory_uri().'/images/one.mp4'; ?>" style="opacity:50;">
</video>



<div class="container">
<div class="logo2">

<img src="<?php echo get_template_directory_uri().'/images/logo2.png'; ?>" alt="">
</div>
</div>




        
<div class="swiper-container swiper" style="width:100%;position:absolute;z-index: 0;overflow: hidden;">

  

  
     




    <div class="swiper-wrapper">
       
        <div class="swiper-slide">

   
           <div class="container" style="width:100%;">
       
            <div class="empty" style="width:50%;"></div>



            <div class="talk">
               
             <h1 class="h1-first">
               حقق حلم حياتك بإمتلاكك مك صرف
             </h1>
             <h1  class="h1-second">
              بموقع مميز في بغداد
             </h1>

             <div style="display: inline-flex;">
             <button type="button" class="btn-form"> شاهد عروضنا</button>&nbsp;&nbsp;
             <button type="button" class="btn-form">   شاهد عروضنا</button>
             </div>
            
        
            </div>  

        




           </div>

  

        </div>








       
        <div class="swiper-slide">

   
           <div class="container" style="width:100%;">
       
            <div class="empty" style="width:50%;"></div>



            <div class="talk">
               
             <h1 class="h1-first">
             الفا وحدة سكنية تم تسليمها خلال 2023
             </h1>
             <h1  class="h1-second">
             خدمات  كاملة وممتازة
             </h1>

             <div style="display: inline-flex;">
             <button type="button" class="btn-form"> شاهد عروضنا</button> &nbsp;&nbsp;
             <button type="button" class="btn-form">   شاهد عروضنا</button>
             </div>
            
        
            </div>  

        




           </div>

  

        </div>
















    
        <div class="swiper-slide">
      

            
          <div class="container" style="width:100%;">
       
                <div class="empty" style="width:50%;"></div>



             <div class="talk">
          
                 <h1 class="h1-first">
                 شقق للبيع بمساحات و مواقع مختلفة
                </h1>
                <h1  class="h1-second">
                من 80 متر مربع الى  140 متر مربع
                </h1>

                <div style="display: inline-flex;">
                    <button type="button" class="btn-form"> شاهد عروضنا</button>&nbsp;&nbsp;
                    <button type="button" class="btn-form">   شاهد عروضنا</button>
                </div>
       
   
            </div>  

   




          </div>



        </div>








        





        





        
        <div class="swiper-pagination page"></div>
        <div class="swiper-button-next next"></div>
        <div class="swiper-button-prev prev"></div>

</div>



<script src="<?php echo get_template_directory_uri().'/js/swiper-bundle.min.js'; ?> "></script>








</section>




















<section class="projects">


<div class="container extra">

<div class="exp" style="">
<img src="<?php echo get_template_directory_uri().'/images/experience.png';  ?> " alt="" style="width:390px;">
</div>







<div  style="width:50%;">


<h1>
مشاريعنا 
</h1>



<p>
    

تأسست شركتنا في بغداد عام 2014، ومنذ ذلك الحين رسخت مكانتها كشركة رائدة في بناء وبيع المجمعات السكنية الحديثة. بفضل فريق متميز من المهندسين والعمال ذوي الخبرة، نعمل ليل نهار على تقديم أفضل الحلول السكنية لتلبية احتياجات عملائنا. خلال عام 2023، حققنا إنجازًا كبيرًا ببيع أكثر من 2000 وحدة سكنية، مما يعكس التزامنا بتقديم الجودة والتميز في كل مشروع نقوم به. رؤيتنا تتجلى في بناء مجمعات متكاملة توفر الراحة والرفاهية للمجتمع العراقي

</p>
<br>

<button class="btn-form">
أرسل طلبك
</button>
</div>








<div style="width:50%;text-align:center;"> 

<?php

global $mypost;

$mypost=get_post(17);

$title=$mypost->post_title;

$contents= apply_filters('the_content',$mypost->post_content);

echo $contents;



?>


</div>


 
</div>

</section>


















<section class="staff">


<div style="width:50%;text-align:center;"> 

<?php

global $mypost;

$mypost=get_post(46);

$title=$mypost->post_title;

$contents= apply_filters('the_content',$mypost->post_content);

echo $contents;



?>


</section>




























<section class="whyus">


</section>





<section class="gallery">
    
</section>








<section class="formcontact">


</section>



<?php
get_footer();
?>

