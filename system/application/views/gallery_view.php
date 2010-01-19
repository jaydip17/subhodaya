
<div style="width:963px; background-color:#fff;border:0px dotted #000">
		 <div id="header" style="border:1px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%">
					
					
				<div style="width:100%; height:100%;float:left;">
					<div   style="float:right;height:100%; border-left:1px solid #00CCFF;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					      <div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					      <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg" width="243" height="268" /></div>
					   </div>
					
					        <? if(!empty($cats)){
						     	$count=0;
						     	foreach ($cats as $sub){
						     
						     ?>
					     
					    <div id="gallerynew" style="border-top:1px solid #00CCFF; padding-top:4px;padding-bottom:6px;">
					       
					          <? if($count!==0){?>
						   <div style="float:left; width:90%;">
						     
						   
						     <div align="left" style="font-size:16px;color:#3598FD;"><b><?=$sub['name']?></b></div>
						     </div>
						     <?}?>
						 
						      
						       
						       <? $count1=1;
						         foreach ($sub['subcats'] as $img){
						       ?>
					            <div id="img4"><a href="<?=base_url()?>gallery/inner/<?=$img['id']?>"><img src="<?=base_url()?>assets/gallery/thumimg<?=$img['imageid']?>.jpg" id="img3"></a><div style="height:36px; width:128px;background-color:#f7f7f7; border:1px solid #dcdcdc;"><span id="anc"><a href="<?=base_url()?>gallery/inner/<?=$img['id']?>"><?=$img['imagename']?></span></a><br /> <?=$img['date']?></div>
							    </div>
							   <? if($count1==4){
							          $count1 = 0;
							          echo '<div></div>'; 
							   }
							    $count1++;
						         }			
						        // print_r($sub);		        
							          ?>
							  
							  <div style="float:right;" id="anchor"><a href="<?=base_url()?>gallery/categeory/<?=$sub['id'] ?>"><?=$more['0']->matter?></a></div>
							  
					     </div>
					     <?$count++;}}?>
							          
				  </div>
			</div>
								
		</div>
		