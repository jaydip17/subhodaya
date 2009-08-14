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
<?=form_open_multipart('admin/greetings/insert') ?>
<table>
	<tr>
		<th colspan='2' style="font-size: 16px;">Greetings</th>
	</tr>
	<tr>
		<td>Greeting type</td>
		<td><?=form_dropdown('type',$options)?></td>
	</tr>
	<tr>
		<td>Heading</td>
		<td><textarea rows="3" cols="50" name="name" id="name"></textarea></td>
	</tr>
	<tr>
		<td>Summery</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="50" name="summery" id="summery"></textarea> 
		</td>
	</tr>
	<tr>
		<td>Greeting_Image</td>
		<td align="left"><?=form_upload('image') ?>Size:200x300</td>
	</tr>
	</tr>
		<tr>
		<td>Insert_Date</td>
		<td><?=form_input()?></td>
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
<?=form_close() ?>