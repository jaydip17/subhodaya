
<?php      
   foreach($hotvideos->result() as $video){
        ?>
       
<div id="vi_d"><span id="vi_div">views:<?=$video->no_of_views?></span><br /><div id="video_img"><img src="<?=base_url();?>assets/image/buttion.png"/></div><div id="video_time"><?=$video->time?></div><img src="<?=base_url();?>assets/videos/image_preview/home_image<?=$video->id?>_thumb.jpg" id="img2" height="88" width="126"/><br /><span id="vi_div"><?=$video->name?></span></div>
  
     <?}?>   
     </div> 