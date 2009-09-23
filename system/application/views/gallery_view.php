<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
}
</style>

<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td colspan="2" align="center" style="font-weight: bold;font-size: 14px;color: maroon;"><div id="ga_topmenu" style="margin: 2px;"><?=$more['6']->matter?></div></td>
	<td rowspan="4" valign="top">
	<div style="width: 174px;border: 1px solid red;height: 890px;background-color: gray;">
	</div></td>
</tr>
<tr>
	<td rowspan="3" valign="top" width="159" style="background-color: #0772ba;" align="center">
		 <div class="content">
      <div id="info3">
        <div id="menu">
		<ul style="list-style: none;margin: 0;padding: 0;">
		<?php if(!empty($result)){ 
		foreach ($result as $catname):?>
			<li ><a href="<?=base_url()?>gallery/categeory/<?=$catname->id?>"><?=$catname->catname;?></a></li>
		<?php endforeach;
		} else{
			echo 'No data found';
		}
		?>
		
		</ul>
	</div>
      </div>
	</td>
	<td valign="top">
		<div style="width: 595px;height: 198px;margin-left: 6px;"><img src="<?=base_url()?>assets/imgs/banner.jpg"></div>
		<div style="width: 595;height: 440px;margin-top: 5px;">
			<table cellpadding="0" cellspacing="0" style="padding-left: 4px;">
				<tr>
					<td id="gal_leftslide" ></td>
					<td id="gal_menucen" style="font-size: 14px;font-weight: bold;color: maroon;padding-left: 4px;">Recent Gallery</td>
					<td id="gal_rightslide"></td>
				</tr>
				<tr>
					<td colspan="3"  id="gal_center" valign="top" >
					<table cellspacing="10" >
							<tr>
						<?php
						$count=1;
						if(!empty($images)){
						foreach ($images as $cat):
						
						foreach ($cat as $sub):
							?>				
								<td width="125"  align="center" valign="top" >
									<div style="height: 100px;width: 130px;">
										<a href="<?=base_url();?>gallery/inner/<?=$sub['parentid']?>"><img src="<?=base_url();?>assets/gallery/image<?=$sub['id']?>_thumb.jpg" height="97px" width="128px" id="img"></a>
									</div>
									<div id="gall_botto_img"><a href="<?=base_url();?>gallery/inner/<?=$sub['parentid']?>"><?=$sub['title']?></a></div></td>
									<?php 
								if($count==4)
									{
										$count = 0;
										echo "</tr><tr>";
									}
									if($count==12){
										break;}
									$count++;
									endforeach; 
								endforeach;}
								else 'no data found';
						
						?>
							</tr>
					</table>
					</td>
				</tr>
				<tr><td id="gal_bottom" colspan="3" style="border: 1px solid #086FBA;"></td></tr>
			</table>
		</div>
			<div style="width: 605;height: 229px;margin-top: 5px;">
			<table cellpadding="0" cellspacing="0" style="padding-left: 6px;">
				<tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen" style="font-size: 14px;font-weight: bold;color: maroon;padding-left: 4px;">Gallery</td>
					<td id="gal_rightslide"></td>
				</tr>
				<tr>
					<td colspan="3" height="203" id="gal_center" valign="top">
					<table cellspacing="10">
						<tr>
							<?php
							$count=1; 
							 foreach($result1 as $variable):?>
							<td height="10px" width="129px" id="gall_names" style="padding-left: 10px;"><a href="<?=base_url();?>gallery/inner/<?=$variable->id?>"><li><?=$variable->catname?></li></a></td>
						<? if ($count==4)
							{
								$count = 0;
								echo "</tr><tr>";
							}
							else{
							$count++;
							}
							if($count==28)
							break;
							endforeach; ?>
						</tr>
					</table>
						
					</td>
				</tr>
				<tr><td id="gal_bottom" colspan="3" style="border: 1px solid #086FBA;"></td></tr>
			</table>
		</div>
	</td>
</tr>
</table>