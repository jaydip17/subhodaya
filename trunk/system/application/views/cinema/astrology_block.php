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
						      <div style="width:560px; height:80px; padding-top:10px;font-size:23px;color:#02AFF3;text-align: left;">
						      	<img src="<?=base_url()?>assets/image/bavisham.jpg">
						      </div><!--
							        <div style="float:right;text-align:right;width:560px;margin-top:20px;font-size: 13px;">Select Sunsign 
							           <select>
							              <option value=""><?=$this->lang->line('rasi_palam')?></option>
							              <?php foreach ($rasi as $row):?>
							              <option value=""><?=$row->astrolagy_type?></option>
							              <?php endforeach;?>
							           </select>
							        </div>
							        --><?php foreach ($rasi_details as $row):?>
									  <div id="main_rasi_div">
									  	<div id="rasi_div">
										  	<div style="padding-left: 4px;font-size: 14px;font-weight: bold;float: left;width: 50%">
										  		<img src="<?=base_url()?>assets/JSgns/<?=$row->id?>.jpg" align="middle" style="padding-right: 2px;"/><?=$row->astrolagy_type?>
										  	</div>
										  	<div style="float: right;width: 40%;text-align: right;padding-right: 3px;color: gray;"><?=$row->display_date?></div>
										</div>
									  	<div style="padding: 5px;line-height: 22px;">
									  		<?=$row->description?>
									  	</div>
									  </div>
									 <?php endforeach;?>
								</div>
		</div>
	</div>
</div>