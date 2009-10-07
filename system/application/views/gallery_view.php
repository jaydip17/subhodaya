<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/cr.png);
padding-left: 20px;
}
</style>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top" width="2px"><img src="<?=base_url()?>assets/imgs/body-left.jpg"></td>
	<td id="gal_center-top" width="745px;" align="left">
			<div style="width: 50%;text-align: left;float: left;color: #8B0000;font-weight: bold;font-size: 14px;"><?=$result['0']->catname ?></div>
			<div style="text-align: right;color: #8B0000;font-weight: bold;font-size: 14px;">View Most Viewed</div>
	</td>
	<td valign="top" width="2px"><img src="<?=base_url()?>assets/imgs/body-right.jpg"></td>
	<td valign="top" rowspan="3" align="center" style="height: 500px;">
		<table  cellpadding="0" cellspacing="0" style="margin: 0px 3px 0px 3px;" width="95%">
		<tr>
			<td valign="top" width="4px"><img src="<?=base_url()?>assets/imgs/menu-left.jpg"></td>
			<td id="menu_center_gall" width="99%" align="center" style="font-weight: bold;color: #FFFFFF;font-size: 14px;">Gallery Categories</td>
			<td valign="top" width="4px" align="left"><img src="<?=base_url()?>assets/imgs/menu-right.jpg"></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><div style="height: 250px;background-color: #9CD8FC;font-size: 14px;">
				<ul>
				<?php if(!empty($result)){
					foreach ($result as $item): 
				?>
				<li style="padding: 3px;"><a href="<?=base_url()?>gallery/categeory/<?=$item->id?>"><?=$item->catname?></a></li>
				<?endforeach;} ?>
				</ul>
			 </div>
			 <div >
			 <img src="<?=base_url()?>assets/imgs/add.jpg">
			 </div>
			 </td>
		</tr>
	</table>
	</td>
</tr>
<tr>
	<td colspan="3"  id="gal_middle" align="center"> 
		<div>
		<? if(!empty($cats)){
		$count=0;
		foreach ($cats as $sub){ ?>
		<div style="height: 499px;">
		<?if($count!=0) {?>
			<div id="gal_middle_line" style="height: 31px">
				<div style="width: 50%;text-align: left;float: left;color: #8B0000;font-weight: bold;font-size: 14px;padding-left: 5px;"><?=$sub['name'] ?></div>
				<div style="text-align: right;color: #8B0000;font-weight: bold;font-size: 14px;">View Most Viewed</div>
			</div>
			<?} ?>
		<table width="90%" cellpadding="5" cellspacing="5" align="center" >
			<tr>
				<?$count1 = 1;
				foreach ($sub['subcats'] as $img){
					
				?>
				
				<td><div id="gallery_image" style="margin-bottom: 4px;"><a href="<?=base_url()?>gallery/inner/<?=$img['id']?>"><img src="<?=base_url()?>assets/gallery/thumimg<?=$img['imageid']?>.jpg" id="img" ></a></div>
				<div id="gall_botom_image" style="text-align: center;font-weight: bold;font-size: 14px;"><div style="margin-top: 3px;">
					<span><a href="<?=base_url()?>gallery/inner/<?=$img['id']?>"><?=$img['imagename']?></a></span><br>
					<span style="color:#000000;"><?=$img['date']?></span></div>
				</div></td>
				<? if($count1==4){
					$count1 = 0;
					echo '</tr><tr>';
				} $count1++;
				}?>
				<tr><td colspan="5" style="text-align: right;"><a href="<?=base_url()?>gallery/inner/<?=$sub['id'] ?>"><?=$more['0']->matter?></a></td></tr>
		</table>
		</div>
		<?$count++;}}?>
		</div>
	</td>
</tr>
<tr>
	<td valign="bottom" width="2px"><img src="<?=base_url()?>assets/imgs/body-bottomLeft.jpg"></td>
	<td id="gal_center-botom" width="750px;" align="left" valign="bottom"></td>
	<td valign="bottom" width="2px;"><img src="<?=base_url()?>assets/imgs/body-bottomRight.jpg"></td>
</tr>
</table>