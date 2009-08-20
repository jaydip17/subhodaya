
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
echo form_open_multipart(base_url()."admin/gallery/edit1/") ?>
<table align="center">
	<tr>
		<td style="font-size: 18px;" colspan='2' align='center'>Edit gallery</td>
	</tr>
	<tr>
		<td>Image-name</td>
		<?php echo form_hidden('gall_id',$edit['0']->id)?>
		<td><textarea rows="3" cols="50" name="imagename" id="imagename"><?=$edit['0']->name?></textarea></td>
	</tr>
	<tr>
		<td>Active</td>
		<td><?=form_checkbox('active','1')?></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><?=form_submit('add','save') ?></td>
	</tr>
</table>
<?=form_close() ?>