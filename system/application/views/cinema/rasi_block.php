<div style="width:963px; background-color:#fff;border:0px dotted #000">
	<div id="header" style="border:1px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%">
		<div style="width:100%; float:left">
			<div style="width:144px; height:450px; float:left; border:0px solid #979797;background-color:#225B6F;">
				<div>
		            <ul style="list-style: none;text-align: left;padding:0px 10px 0px 5px;margin: 0px;">
		            <?php foreach ($rasi as $row):?>
				         <li id="alink"><img src="<?=base_url()?>assets/image/as14.jpg" style="float:none;margin:0px 4px 0px 0px;" align="bottom"/><a href="<?=base_url()?>astrolagy/details/<?=$row->id?>"><?=$row->astrolagy_type?></a></li>
				        <?php endforeach;?>
		            </ul>
	           </div> 
		</div>
					 <div  style="float:right;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					   <div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					   <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg" width="243" height="268" /></div>
				      </div>
					    <div style="width:560px;float:left; margin-left:5px;border:0px solid #cee2ec;">
					    	 <div style="width: 100%;text-align:left;font-weight: bold;padding:2px 0px 2px 10px;"><a href="">Send To Friend</a></div>
						      <div style="width:560px; height:80px;">
						     	 <div style="float: left;width: 50%;text-align: left;"><img src="<?=base_url()?>assets/image/bavisham.jpg"></div>
						      	 <div style="float: right;color: black;font-size: 26px;width: 50%;padding-top: 20px;">
						      	 	<img src="<?=base_url()?>assets/JSgns/<?=$rasi_in['0']->id?>.jpg" align="middle" style="padding-right: 2px;height: 40px; width: 40px;"/><?=$rasi_in['0']->astrolagy_type?>
						      	 </div>
						      </div><!--
									  <div id="main_rasi_div">
									  		<div style="padding:0px 4px 0px 4px;font-size: 17px;font-weight: bold;float: left;width: 100%;">
										  		<img src="<?=base_url()?>assets/JSgns/<?=$rasi_in['0']->id?>.jpg" align="middle" style="padding-right: 2px;height: 30px; width: 30px;"/><?=$rasi_in['0']->astrolagy_type?>
										  	</div>
									  </div>
									   --><div id="main_rasi_div">
										  	<div id="rasi_div">
											  	<div style="padding-left: 4px;font-size: 14px;font-weight: bold;float: left;width: 50%">
											  		<img src="<?=base_url()?>assets/JSgns/<?=$rasi_in['0']->id?>.jpg" align="middle" style="padding-right: 2px;"/><?=$this->lang->line('day')?>
											  	</div>
											  	<div style="float: right;width: 40%;text-align: right;padding-right: 3px;color: gray;"></div>
											</div>
										  	<div style="padding: 5px;line-height: 22px;">
										  	<?php if(!empty($rasi_details[0]->day)){?>
										  		<?=$rasi_details[0]->day?>
										  		<?php }else {echo 'day details not avaliable';}?>
										  	</div>
									  </div>
									   <div id="main_rasi_div">
										  	<div id="rasi_div">
											  	<div style="padding-left: 4px;font-size: 14px;font-weight: bold;float: left;width: 50%">
											  		<img src="<?=base_url()?>assets/JSgns/<?=$rasi_in['0']->id?>.jpg" align="middle" style="padding-right: 2px;"/><?=$this->lang->line('week')?>
											  	</div>
											  	<div style="float: right;width: 40%;text-align: right;padding-right: 3px;color: gray;"></div>
											</div>
										  	<div style="padding: 5px;line-height: 22px;">
										  	<?php if(!empty($rasi_details[0]->week)){?>
										  		<?=$rasi_details[0]->week?>
										  		<?php }else{echo 'week details not avaliable';}?>
										  	</div>
									  </div>
									   <div id="main_rasi_div">
										  	<div id="rasi_div">
											  	<div style="padding-left: 4px;font-size: 14px;font-weight: bold;float: left;width: 50%">
											  		<img src="<?=base_url()?>assets/JSgns/<?=$rasi_in['0']->id?>.jpg" align="middle" style="padding-right: 2px;"/><?=$this->lang->line('month')?>
											  	</div>
											  	<div style="float: right;width: 40%;text-align: right;padding-right: 3px;color: gray;"></div>
											</div>
										  	<div style="padding: 5px;line-height: 22px;">
										  		<?php if(!empty($rasi_details[0]->month)){?>
										  		<?=$rasi_details[0]->month?>
										  		<?php }else{echo 'Month details not avaliable';}?>
										  	</div>
									  </div>
									   <div id="main_rasi_div">
										  	<div id="rasi_div">
											  	<div style="padding-left: 4px;font-size: 14px;font-weight: bold;float: left;width: 50%">
											  		<img src="<?=base_url()?>assets/JSgns/<?=$rasi_in['0']->id?>.jpg" align="middle" style="padding-right: 2px;"/><?=$this->lang->line('year')?>
											  	</div>
											  	<div style="float: right;width: 40%;text-align: right;padding-right: 3px;color: gray;"></div>
											</div>
										  	<div style="padding: 5px;line-height: 22px;">
										  		<?=$rasi_details[0]->year?>
										  	</div>
									  </div>
									     <div id="main_rasi_div">
											<a href="" style="font-size: 14px;">send to friend</a>
									     </div>
								</div>
								 
		</div>
	</div>
</div>