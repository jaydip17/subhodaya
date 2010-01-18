<?
echo form_open_multipart("admin/sahithi/insert") ?>
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
		<td style="font-size: 18px;" colspan='2' align='center'>Sahithi</td>
	</tr>
	<tr>
		<td>Select type</td>
		<td><?=form_dropdown('type',$options)?></td>
	</tr>
	<tr>
		<td>Heading</td>
		<!--<td align="left"><?=form_input('heading') ?></td>-->
		<td><textarea rows="2" cols="40" name="heading" id="heading"></textarea></td>
	</tr>
	
	<tr>
		<td>English heading</td>
		
		<td><textarea rows="2" cols="40" name="engheading" id="heading"></textarea></td>
	</tr>
	
	<tr>
		<td>Summary</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="50" name="summary" id="summary"></textarea> 
		</td>
	</tr>
	<tr>
		<td>Description</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="60" id="description" name="description"></textarea> 
		</td>
	</tr>
	<tr>
		<td>Image(245 X 184)</td>
		<td align="left"><?=form_upload('image') ?></td>
	</tr>
	<tr>
		<td>Home Page</td>
		<td align="left"><?=form_checkbox('homepage','1') ?></td>
	</tr>
	<tr>
		<td>Active</td>
		<td align="left"><?=form_checkbox('active','1') ?></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><?=form_submit('add','Add') ?></td>
	</tr>
</table>
<?=form_close() ?>