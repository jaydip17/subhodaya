<?
echo form_open_multipart(base_url()."admin/news/insert/") ?>
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
		<td style="font-size: 18px;" colspan='2' align='center'>News</td>
	</tr>
	<tr>
		<td>Select type</td>
		<td><?=form_dropdown('type',$options)?></td>
	</tr>
	<tr>
		<td>Heading</td>
		<!--<td align="left"><?=form_input('heading') ?></td>-->
		<td><textarea rows="3" cols="50" name="heading" id="heading"></textarea></td>
	</tr>
	<tr>
		<td>Summery</td>
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
		<td>Image</td>
		<td align="left"><?=form_upload('image') ?></td>
	</tr>
	<tr>
		<td>Breaking News</td>
		<td align="left"><?=form_checkbox('breaking_news','1') ?></td>
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