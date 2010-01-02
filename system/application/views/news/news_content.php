<div>
	<div style="width:641px ;height:77px;float: left;text-align: left;">
		<div style="padding-left: 10px;font-size:large"><?=$cat_name?></div>
		<div style="padding-left: 10px;height: 20px;"><span style="font-size: 17px;"></span></div>
		<div id="hr"><hr style="border: 1px solid #cee2ed;width: 95%" /></div>
		<div>
				<div id="thaja_vartha" style="width:395px;">
							<div><span style="font-size: 18px;"><?=$this->lang->line('thaja_vartha');?></span></div>
							<a href="<?=$link?><?=$thaja_varhta[0]->id?>/<?=$cat_id?>"><img src="<?=(isset($image_link)) ? $image_link : ''?>" style="float: left;"/></a>
							<span id="headings"><a href="<?=$link?><?=$thaja_varhta[0]->id?>/<?=$cat_id?>"><?=$thaja_varhta[0]->heading?></a></span><br/>
                            <span id="summery"><?=$thaja_varhta[0]->summary?></span>    
				</div>
				<div id="side_add" style="width:225px;">
						<div>
							<ul>
							<? $count=0; foreach($thaja_varhta as $row):
          						 					 if($count==0)
          											{
	          											$count++;
	          											continue;
          											} ?>
								<li><a href="<?=$link?><?=$row->id?>/<?=$cat_id?>"><?=$row->heading?></a></li>
										<? if($count==7){
							         					break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}?>
							</ul>
							</div>
				</div>
		</div>
	</div>
	<div id="content_left_add">
		<img src="<?=base_url();?>assets/home_images/ads/ad1.jpg"/>
	</div>
</div>
<div id="hr_div"><hr id="hrline"></hr></div>
<div>
<div style="float: left;width: 718px;">
	<div style="float: left;width: 50%;height: 35px;">
		<div style="text-align: left;padding-left: 25px;"><span style="font-size: 17px;"><?=$this->lang->line('marinni_visheshalu');?></span></div>
	</div>
	<div style="float: right;width: 50%;height: 35px;"><span>view</span>
	<img src="<?=base_url();?>assets/imgs/LIN.png" style="cursor: pointer"onclick="loadNews('content','<?=base_url()?><?=$list?>/listview/<?=$cat_id?>')" />
    <img style="cursor: pointer; " src="<?=base_url();?>assets/imgs/FUL.png" onclick="loadNews('content','<?=base_url()?><?=$list?>/thumbview/<?=$cat_id?>')" />
	</div>
	<div id="divcontent">
		<div style="margin: 200px 0px 0px 80px;border: 1px solid silver;height: 41px;width: 216px;">
			<span style="color: silver;">Loading...............</span><br>
	 		<img src="<?=base_url();?>assets/imgs/loadingAnimation.gif" align="middle" ></img>
	 	</div>
	</div>
</div>
<div id="content_left_news">
	<div id="content_left" ><div style="padding-top: 7px;">Most Read Stories</div></div>
	<ul style="text-align: left;">
		<?php foreach ($most_read_news as $heading):?>
		<li><a href="<?=$link?><?=$heading->id?>/<?=$cat_id?>"><?=$heading->heading?></a></li>
		<?php endforeach;?>
		
	</ul>
	<div><img src="<?=base_url();?>assets/home_images/ads/content_add.jpg"/></div>
</div>
</div>