<?php      
   foreach($hotvideos->result() as $video){
        ?>
      <div style="float:left;vertical-align:middle;padding-right:4px;margin-left:15px;margin-right:30px;">
      <div style="vertical-align:middle;float:left;text-align:justify;padding-right:10px;">
       <a href="<?=base_url();?>video/index/<?=$video->id?>/<?=$video->video_cat_id?>">
        <div id="catvideo_time"><?=$video->time?></div style="margin-left:25px;"> <img id="img" src="<?=base_url();?>assets/videos/image_preview/home_image<?=$video->id?>_thumb.jpg"></a>
       </div>
         
       <span style="font-size:12px;font-weight:bold;padding-left:8px;"><?=$video->insert_date?></span><br/><span style="font-size:12px;font-weight:bold;padding-left:8px;padding-bottom:-8px;"><?=$video->name?></span><br/>
          <span style="font-size:12px;font-weight:bold;color:#FF6507;padding-left:8px;"><?=$video->no_of_views?> views</span>
          <br/><span style="font-size:12px;font-weight:bold;padding-left:8px;"><?=$video->time?></span><br/><div id="hotimg"><?=$more['36']->matter?>: <span style="color:#FF6507;"><?=$video->rating?></span></div>
          
           </div>
             
    <?}?> 
     <div  id="hotvi" class="hiname"><a href="#"><? echo $paginate;?></a></div>
   </div>  