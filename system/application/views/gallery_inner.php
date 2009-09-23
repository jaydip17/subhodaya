<table cellpadding="0" cellspacing="5px;" width="926">
	<tr>
		<td width="742" height="93" align="left" valign="top"><div style="width: 742px;height: 93px;border: 1px solid red;"></div></td>
		<td rowspan="2" width="180" align="center" valign="top"><div style="width: 180px;height: 900px;border: 1px solid red;background-color: gray;">addspace</div></td>
	</tr>
	<tr>
		<td valign="top" height="800">
		<div style="width: ;height: 413px;margin-top: 5px;">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen"><span id="pagenation"><?=$pagination?></span></td>
					<td id="gal_rightslide"></td>
				</tr>
				<tr>
					<td colspan="3" height="760"  id="gal_center1" valign="top" width="742">
					<table cellspacing="10" height="">
							<tr>
							<?php $count=1; foreach ($result as $row):?>
								<td   width="125" height="110" align="center">
								<div style="height: 95px;width: 130px;">
									<a href="<?=base_url();?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><img src="<?=base_url()?>assets/gallery/image<?=$row->id?>_thumb.jpg" id="img"></a>
								</div><div id="gall_botto_img"><sapn id="gall_names"><a href="<?=base_url();?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><?=$row->title?></a></span></div></td>
									<? if ($count==5)
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
					<tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen">
					<?=$pagination?>
					</td>
					<td id="gal_rightslide"></td>
				</tr>
				<tr><td id="gal_bottom" colspan="3"></td></tr>
			</table>
		</div>
			
	</td>
	</tr>
</table>