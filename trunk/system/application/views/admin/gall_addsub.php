<?php
echo form_open_multipart(base_url()."admin/gallery/subcat_insert/") ?>
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
<table align="center">
	<tr>
		<td style="font-size: 18px;" colspan='2' align='center'>Add Sub-Categeory</td>
	</tr>
	<tr>
		<td>Categeory</td>
		<td><?=form_dropdown('cate-id',$options)?></td>
	</tr>
	<tr>
		<td>Sub-Categeory</td>
		<td><textarea rows="3" cols="50" name="subcategeory" id="sub-categeory"></textarea></td>
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