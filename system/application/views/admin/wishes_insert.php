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
<?=form_open_multipart('admin/birthdays/insert')?>
<table>
	<tr>
		<th colspan='2' style="font-size: 16px;">Birthdays</th>
	</tr>
	<tr>
		<td>Name</td>
		<td><textarea rows="2" cols="40" name="name" id="name"></textarea></td>
	</tr>
	<tr>
		<td>Birth-day</td>
		<td style="text-align: left;">
			<textarea rows="2" cols="40" name="birthday" ></textarea>(YYYY-MM-DD)
		</td>
	</tr>
	<tr>
		<td>Marriage-day</td>
		<td style="text-align: left;">
			<textarea rows="2" cols="40" name="marriage" ></textarea>(YYYY-MM-DD) 
		</td>
	</tr>
	<tr>
		<td>Photo</td>
		<td align="left"><?=form_upload('image')?>Size:670x500</td>
	</tr>
	</tr>
		<tr>
		<td>Active</td>
		<td align="left"><?=form_checkbox('active','1') ?></td>
	</tr>
	<tr>
		<td colspan='2' align='center'><?=form_submit('submit','Add')?></td>
	</tr>
</table>
<?=form_close();?>