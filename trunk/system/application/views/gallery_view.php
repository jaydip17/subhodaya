<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
}
</style>

<table width="100%" cellpadding="5" cellspacing="0">
<tr>
	<td colspan="2" align="center" style="font-weight: bold;font-size: 14px;"><div id="ga_topmenu"><?=$more['6']->matter?></div></td>
	<td rowspan="4" valign="top">
	<div style="width: 174px;border: 1px solid red;height: 890px;background-color: gray;">
	</div></td>
</tr>
<tr>
	<td rowspan="3" valign="top">
		 <div class="content">
      <div id="info3"><img src="<?=base_url();?>assets/imgs/info-left.gif" width="7" height="34" style="float:left" />
       <img src="<?=base_url();?>assets/imgs/info-right.gif" width="7" height="34" style="float:right" />
      <div id="information"><?=$more['37']->matter?></div>
     
        <div id="menu">
		<ul style="list-style: none;margin: 0;padding: 0;">
		<?php if(!empty($result)){ 
		foreach ($result as $catname):?>
			<li><a href="<?=base_url()?>gallery/categeory/<?=$catname->id?>"><?=$catname->catname;?></a></li>
		<?php endforeach;
		} else{
			echo 'No data found';
		}
		?>
		
		</ul>
	</div>
    

        <div id="Left-footer"></div>
      </div>
	</td>
	<td valign="top">
		<div style="width: 595px;height: 198px;"><img src="<?=base_url()?>assets/imgs/banner.jpg"></div>
		<div style="width: 595;height: 420px;margin-top: 5px;">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen"></td>
					<td id="gal_rightslide"></td>
				</tr>
				<tr>
					<td colspan="3" height="388" id="gal_center" valign="top" >
					<table cellspacing="15">
							<tr>
						<?php foreach ($images as $cat):
						$count=1;
						foreach ($cat as $sub):
							?>				
								<td width="125"  align="center" valign="top" >
									<div style="height: 95px;width: 130px;">
										<a href="<?=base_url();?>gallery/inner/<?=$sub['parentid']?>"><img src="<?=base_url();?>assets/gallery/image<?=$sub['id']?>_thumb.jpg" height="95px" width="130px" border="0"></a>
									</div>
									<div id="gall_botto_img"><a href="<?=base_url();?>gallery/inner/<?=$sub['parentid']?>"><?=$sub['title']?></a></div></td>
									<?php 
								if ($count==4)
									{
										$count = 0;
										echo "</tr><tr>";
									}
									$count++;
									endforeach; 
								endforeach;
						
						?>
							</tr>
					</table>
					</td>
				</tr>
				<tr><td id="gal_bottom" colspan="3" style="border: 1px solid #086FBA;"></td></tr>
			</table>
		</div>
			<div style="width: 605;height: 229px;margin-top: 5px;">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen"></td>
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
									$count++;
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