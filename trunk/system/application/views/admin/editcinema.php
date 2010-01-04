<?
echo form_open_multipart("admin/cinema/edit1/") ?>
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
		<td style="font-size: 18px;" colspan='2' align='center'>Cinema Edit and Save</td>
	</tr>
	<tr>
		<td>Heading</td>
		<?=form_hidden('id',$edit['0']->id) ?>
		<td><textarea rows="2" cols="40" name="heading" id="heading"><?=$edit['0']->heading?></textarea></td>
	</tr>
	<tr>
		<td>Summery</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="50" name="summary" id="summary"><?=$edit['0']->summary ?></textarea> 
		</td>
	</tr>
	<tr>
		<td>Description</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="60" id="description" name="description"><?=$edit['0']->description ?></textarea> 
		</td>
	</tr>
	
	<tr>
		<td>Active</td>
		<td align="left"><?=form_checkbox('active','1') ?></td>
	</tr>
		
	
	<tr>
		<td colspan="2" align="right"><?=form_submit('save','Save') ?></td>
	</tr>
</table>
<?=form_close() ?>