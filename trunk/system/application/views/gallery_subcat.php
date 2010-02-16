	 <div style="width:963px; background-color:#fff;border:0px dotted #000">	
	        <div id="header" style="border:1px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%">	
				<div style="width:100%;float:left;">
					<div style="float:right; height:100%;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					    <div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					    <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg" width="243" height="268" /></div>
					   </div>
					   <div style="float:left;width:715px;"> 
					     <div  style="float:left;height:25px; width:700px; background-color:#EFE1E1; margin-top:5px; text-align:left; padding-top:4px; padding-left:5px;font-size: 14px;font-weight: bold;"><?=$catname['0']->catname?></div> 
					     <div  style="float:left;height:25px; width:700px; background-color:#EFE1E1; text-align:right; padding-top:4px; padding-right:6px; border-top:1px solid #999;"><?echo $paginate; ?></div>
					               <table width="100%">
					      	<tr>
					      	<?php $count=1;
					      	 foreach ($result as $row):?>
					      		<td><a href="<?=base_url()?>gallery/inner/<?=$row->cat_id?>" class="pagelink">
					      		<img src="<?=base_url()?>assets/gallery/thumbnail_images/<?=$row->folder_path?>/<?=$row->image_path?>_thumb.jpg" id="img3" style="margin-bottom: -2px;">
					      		</a>
					      		<div style="height:36px; width:128px;background-color:#f7f7f7; border:1px solid #dcdcdc;text-align: center;"><span id="anc"><a href="<?=base_url()?>gallery/inner/<?=$row->cat_id?>"><?=$row->catname?></span></a><br /> <?=$row->insert_date?></div>
					      		</td>
					      		<?php if($count==5){
					      			$count=0;
					      			echo '</tr></tr>';
					      		}
					      		$count++;
					      		endforeach;
					      		?>
					      	</tr>
					      </table>
						   <div  style="float:left;height:25px; width:700px; background-color:#EFE1E1; text-align:right;padding-top:4px; padding-right:5px;margin-top:20px;font-size: 14px;font-weight: bold;"><?=$catname['0']->catname?></div>
						  <div  style="float:left;height:25px; width:700px; background-color:#EFE1E1; text-align:left; padding-top:4px; padding-left:5px; border-top:1px solid #999;"><?echo $paginate; ?> </div>
					   </div>
				  </div>
			</div>									
		</div>