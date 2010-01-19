
	<div style="width:963px; background-color:#fff;border:0px dotted #000">
		<div id="header" style="border:1px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%">
					
					
				<div style="width:100%; height:100%px; float:left">
					<div   style="float:right; height:100%;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					    <div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					    <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg" width="243" height="268" /></div>
					   </div>
					   
					    <div style="float:left;width:715px;">
					    
					    <div  style="float:left; height:25px; width:700px; background-color:#EFE1E1; margin-top:5px; text-align:left; padding-top:4px; padding-left:5px;"><span><?=$result['0']->title?></span><span style="padding-left:550px;"></span></div> 
					    <div  style="float:left; height:25px; width:700px; background-color:#EFE1E1; text-align:right; padding-top:4px; padding-right:6px; border-top:1px solid #999;"><?echo $paginate; ?></div>
					      
					     
					    <div id="galleryinner">
						  <div style="float:left;width:90%;"></div>
						   
						  
						     <?$count=1;
					          foreach ($result as $row):
					           ?>
					           <div id="img4"><a href="<?=base_url()?>assets/gallery/image<?=$row->id?>.jpg" class="pagelink" target="_blank"><img src="<?=base_url()?>assets/gallery/thumimg<?=$row->id?>.jpg" id="img3"></a><div style="height:36px; width:128px;background-color:#f7f7f7; border:1px solid #dcdcdc;"><span id="anc"><a href="<?=base_url()?>assets/gallery/image<?=$row->id?>.jpg" class="pagelink" target="_blank"><?=$row->title?></a></span><br/> <?=$row->insert_date?></div>
							   </div>
							   
							   <?if($count==4){
					                $count=0;
					                echo'<div></div>';
					           }$count++;
					             endforeach;
						        ?>
							  
	
						         </div>
						 
					
						 <div  style="float:left;height:25px; width:700px; background-color:#EFE1E1;margin-top:20px;text-align:right;padding-top:4px; padding-right:5px;"><?=$result['0']->title?></div>
						 <div  style="float:left;height:25px; width:700px; background-color:#EFE1E1; text-align:left; padding-top:4px; padding-left:5px; border-top:1px solid #999;"><?echo $paginate; ?> </div>
					   </div>
				  </div>
			</div>
									
	</div>