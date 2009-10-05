<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/cr.jpg);
padding-left: 20px;
}
</style>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top" width="2px"><img src="<?=base_url()?>assets/imgs/body-left.jpg"></td>
	<td id="gal_center-top" width="745px;" align="left">
			<div style="width: 50%;text-align: left;float: left;color: red;font-weight: bold;font-size: 14px;"><?=$result['0']->catname?></div>
			<div style="text-align: right;color: red;font-weight: bold;font-size: 14px;">View Most Viewed</div>
	</td>
	<td valign="top" width="2px"><img src="<?=base_url()?>assets/imgs/body-right.jpg"></td>
	<td valign="top" rowspan="3" align="center" style="width: 180;height: 500px;">
		<table width="97%" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top" width="4px"><img src="<?=base_url()?>assets/imgs/menu-left.jpg"></td>
			<td id="menu_center_gall" align="center" style="font-weight: bold;color: #FFFFFF;font-size: 14px;">Gallery Categories</td>
			<td valign="top" width="4px" align="left"><img src="<?=base_url()?>assets/imgs/menu-right.jpg"></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><div style="height: 300px;width: 100%;background-color: #9CD8FC">
				<ul>
				<?php if(!empty($result)){
					foreach ($result as $item): 
				?>
				<li style="padding: 3px;"><?=$item->catname?></li>
				<?endforeach;} ?>
				</ul>
			 </div></td>
		</tr>
	</table>
	</td>
</tr>
<tr>
	<td colspan="3"  id="gal_middle" align="center"> 
		<div>
		<? foreach ($result as $row):?>
		<div style="height: 470px;">
		<table width="90%" cellpadding="5" cellspacing="5" align="center" >
			<tr>
				<td><div id="gallery_image"><img src="<?=base_url()?>assets/imgs/im.jpg"></div><div id="gall_botom_image"></div></td>
				<td><div id="gallery_image"><img src="<?=base_url()?>assets/imgs/im.jpg"></div><div id="gall_botom_image">wer</div></td>
				<td><div id="gallery_image"><img src="<?=base_url()?>assets/imgs/im.jpg"></div><div id="gall_botom_image">wer</div></td>
				<td><div id="gallery_image"><img src="<?=base_url()?>assets/imgs/im.jpg"></div><div id="gall_botom_image">wer</div></td>
			</tr>
			<tr>
				<td><div id="gallery_image"><img src="<?=base_url()?>assets/imgs/im.jpg"></div><div id="gall_botom_image">wer</div></td>
				<td><div id="gallery_image"><img src="<?=base_url()?>assets/imgs/im.jpg"></div><div id="gall_botom_image">wer</div></td>
				<td><div id="gallery_image"><img src="<?=base_url()?>assets/imgs/im.jpg"></div><div id="gall_botom_image">wer</div></td>
				<td><div id="gallery_image"><img src="<?=base_url()?>assets/imgs/im.jpg"></div><div id="gall_botom_image">wer</div></td>
			</tr>
			<tr><td colspan="4" width="100%"><div style="text-align: right;">more..</div></td></tr>
		</table>
		</div>
		<div id="gal_middle_line" style="height: 31px">sdf</div>
		<? endforeach; ?>
		</div>
	</td>
</tr>
<!--<tr>
	<td valign="bottom" width="2px"><img src="<?=base_url()?>assets/imgs/body-bottomLeft.jpg"></td>
	<td id="gal_center-botom" width="750px;" align="left" valign="bottom"></td>
	<td valign="bottom" width="2px;"><img src="<?=base_url()?>assets/imgs/body-bottomRight.jpg"></td>
</tr>
--></table>