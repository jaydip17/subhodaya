<?php      
   foreach($hotvideos->result() as $video){
        ?>
      <div style="float:left;vertical-align:middle;padding-right:px;padding-bottom:5px;padding-top:2px;">
      <div style="vertical-align:middle;float:left;text-align:justify;padding-right:10px;">
       <a href="<?=base_url();?>video/index/<?=$video->id?>/<?=$video->video_cat_id?>">
        <div id="catvideo_time"><?=$video->time?></div> <img id="img" src="<?=base_url();?>assets/videos/image_preview/home_image<?=$video->id?>_thumb.jpg"></a>
       </div>
       
       <span style="font-size:12px;font-weight:bold;"><?=$video->insert_date?></span><br/><span style="font-size:12px;font-weight:bold;"><?=$video->name?></span><br/>
          <span style="font-size:12px;font-weight:bold;color:#FF6507;padding-top:7px;"><?=$video->no_of_views?> views</span>
          <br/><span style="font-size:12px;font-weight:bold;padding-top:3px;"><?=$video->time?></span><br/><div id="hotimg"><?=$more['36']->matter?>: <span style="color:#FF6507;"><?=$video->rating?></span></div>
          
           </div>
             
    <?}?> 
     <div  id="hotvi" class="hiname"><a href="#"><? echo $paginate;?></a></div>
   </div>  