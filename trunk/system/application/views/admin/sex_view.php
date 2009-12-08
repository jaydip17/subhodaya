<?
echo form_open_multipart("admin/sex/insert") ?>
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
		<td style="font-size: 18px;" colspan='2' align='center'>Srungaram</td>
	</tr>
	<tr>
		<td align="left">Heading</td>
		<!--<td align="left"><?=form_input('heading') ?></td>
		--><td align="left"><textarea rows="2" cols="40" name="heading" id="heading"></textarea></td>
	</tr>
	<tr>
		<td align="left">English_Heading</td>
		<!--<td align="left"><?=form_input('heading') ?></td>
		--><td align="left"><textarea rows="2" cols="40" name="engheading" id="heading"></textarea></td>
	</tr>
	<tr>
		<td align="left">Summary</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="40" name="summary" id="summary"></textarea> 
		</td>
	</tr>
	<tr>
		<td align="left">Description</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="60" id="description" name="description"></textarea> 
		</td>
	</tr>
	<tr>
		<td align="left">Image(square shape)</td>
		<td align="left"><?=form_upload('image') ?></td>
	</tr>
	<tr>
		<td align="left">Active</td>
		<td align="left"><?=form_checkbox('active','1') ?></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><?=form_submit('add','Add') ?></td>
	</tr>
</table>
<?=form_close() ?>