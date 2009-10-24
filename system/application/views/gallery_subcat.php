<!--<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/cr.png);
padding-left: 20px;
}
</style>
<table  cellpadding="0" cellspacing="0">
<tr>
	<td valign="top" width="2px"><img src="<?=base_url()?>assets/imgs/body-left.jpg"></td>
	<td  width="745px;" align="left" ><div id="gal_center-top">
			<div style="width: 50%;text-align: left;float: left;color: #8B0000;font-weight: bold;font-size: 14px;">fghf</div>
			<div style="text-align: right;color: #8B0000;font-weight: bold;font-size: 14px;">View Most Viewed</div>
	</div></td>
	<td valign="top" width="2px"><img src="<?=base_url()?>assets/imgs/body-right.jpg"></td>
	<td valign="top" rowspan="3" align="center">
		<table width="96%" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top"><img src="<?=base_url()?>assets/imgs/menu-left.jpg"></td>
			<td id="menu_center_gall" width="99%" align="left" style="font-weight: bold;color: #FFFFFF;font-size: 14px;">Gallery Categories</td>
			<td valign="top" width="4px" align="left"><img src="<?=base_url()?>assets/imgs/menu-right.jpg"></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><div style="height: 250px;width: 100%;background-color: #9CD8FC">
				<ul>
				<?php if(!empty($cate)){
					foreach ($cate as $item): 
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
	<td colspan="3"  id="gal_middle" align="center" valign="top"> 
		<table width="90%" cellpadding="5" cellspacing="5" align="center" >
			<tr>
			<?$count=1;
			 foreach ($result as $row): ?>
				<td><div id="gallery_image" style="margin-bottom: 4px;"><a href="<?=base_url()?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><img src="<?=base_url()?>assets/gallery/thumimg<?=$row->id?>.jpg"  id='img'></a></div>
				<div id="gall_botom_image" style="text-align: center;font-weight: bold;font-size: 14px;"><div style="margin-top: 3px;">
				<span><a href="<?=base_url()?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><?=$row->title?></a></span><br>
				</div>
				</div></td>
				<? if($count==4){
					$count = 0;
					echo '</tr><tr>';
				} $count++;
				endforeach;?>
		</table>
	</td>
</tr>
<tr>
	<td valign="bottom" width="2px" ><img src="<?=base_url()?>assets/imgs/body-bottomLeft.jpg"></td>
	<td  width="750px;" align="left" valign="bottom"><div id="gal_center-botom"></div></td>
	<td valign="bottom" width="2px;"><img src="<?=base_url()?>assets/imgs/body-bottomRight.jpg"></td>
</tr>
</table>-->
<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/cr.png);
padding-left: 20px;
}
</style>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td  width="2px" height="28"><img src="<?=base_url()?>assets/imgs/body-left.jpg"></td>
	<td id="gal_center-top" width="745px;" valign="bottom" height="28"></td>
	<td  width="2px" height="28" ><img src="<?=base_url()?>assets/imgs/body-right.jpg"></td>
	<td valign="top" rowspan="3" align="center" >
		<table  cellpadding="0" cellspacing="0" style="margin: 0px 3px 0px 3px;" width="95%">
		<tr>
			<td valign="top" width="4px"><img src="<?=base_url()?>assets/imgs/menu-left.jpg"></td>
			<td id="menu_center_gall" width="99%" align="center" style="font-weight: bold;color: #FFFFFF;font-size: 14px;">Gallery Categories</td>
			<td valign="top" width="4px" align="left"><img src="<?=base_url()?>assets/imgs/menu-right.jpg"></td>
		</tr>
			<tr>
			<td colspan="3" align="left"><div style="height: 250px;background-color: #9CD8FC;font-size: 14px;">
				<ul>
				<?php if(!empty($cate)){
					foreach ($cate as $item): 
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
	<td colspan="3"  id="gal_middle" align="center" height="850" valign="top"> 
		<table width="90%" cellpadding="5" cellspacing="5" align="center" >
			<tr>
			<?$count=1;
			 foreach ($result as $row):
			?>
				<td><div id="gallery_image" style="margin-bottom: 4px;">
				<a href="<?=base_url()?>gallery/inner/<?=$row->parentid?>"><img src="<?=base_url()?>assets/gallery/thumimg<?=$row->id?>.jpg"  id='img'></a></div>
				<div id="gall_botom_image" style="text-align: center;font-weight: bold;font-size: 14px;"><div style="margin-top: 3px;">
				<span><a href="<?=base_url()?>gallery/inner/<?=$row->parentid?>"><?=$row->title?></a></span><br>
				<span><?echo $row->insert_date; ?></span>
				</div>
				</div></td>
				<? if($count==4){
					$count = 0;
					echo '</tr><tr>';
				} $count++;
				endforeach;?>
		</table>
	</td>
</tr>
<tr>
	<td  width="2px" height="10" valign="top"><img src="<?=base_url()?>assets/imgs/body-bottomLeft.jpg"></td>
	<td id="gal_center-botom" width="750px;" align="left" height="10" valign="top"><?echo $paginate; ?></td>
	<td  width="2px;" height="10" valign="top"><img src="<?=base_url()?>assets/imgs/body-bottomRight.jpg"></td>
</tr>
</table>