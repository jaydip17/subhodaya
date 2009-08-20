
<center><?
if(isset($message) && !is_array($message) ) echo($message);?>
		<? 
		if(isset($message))
		if(is_array($message) ) {
			foreach ($message as $mess){
				echo $mess['error'];
			}
		}?>
		</center>
<?php 
$cat_array=array('name'=>'cateid');
echo form_open("admin/gallery/cate_fordropdoun/",$cat_array); 
?>
<table>
	<tr>
<td>Categeory</td>
		<?php // echo form_hidden('catid',$options)?>
		<?php $js = 'onchange="submit();"';?>
		<td><?=form_dropdown('catid',$options,'',$js)?></td>
	</tr>
</table>
<?=form_close();?>	
<?php
echo form_open_multipart(base_url()."admin/gallery/insert_image/") ?>
<table align="center">
	<tr>
		<td style="font-size: 18px;" colspan='2' align='center'>Add Galleery Images</td>
	</tr>

	<tr>
		<td>Sub-Categeory</td>
		<td><?=form_dropdown('subcate-id',$options1)?></td>
	</tr>
	<tr>
		<td>Image-name</td>
		<td><textarea rows="3" cols="50" name="imagename" id="imagename"></textarea></td>
	</tr>
	<tr>
		<td>Gallery-Image</td>
		<td><?=form_upload('image')?></td>
	</tr>
	<tr>
		<td>Active</td>
		<td><?=form_checkbox('active','1')?></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><?=form_submit('add','Add') ?></td>
	</tr>
</table>
<?=form_close() ?>