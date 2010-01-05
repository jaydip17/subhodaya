<?
echo form_open_multipart("admin/sahithi/edit1/") ?> 
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
		<td style="font-size:18px;" colspan='2' align='center'>Sahithi</td>
	</tr>
	<tr>
		<td>Heading</td>
		<?=form_hidden('cat_id',$edit['0']->cat_id) ?>
		<?=form_hidden('id',$edit['0']->id) ?>
		<td align="left"><?=form_input('heading',$edit['0']->heading) ?></td>
	</tr>
	
	<tr>
		<td>English heading</td>
		<?=form_hidden('cat_id',$edit['0']->cat_id) ?>
		<?=form_hidden('id',$edit['0']->id) ?>
		<td align="left"><?=form_input('engheading',$edit['0']->eng_heading) ?></td>
	</tr>
	
	
	<tr>
		<td>Summary</td>
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
		<td>Home page</td>
		<td align="left"><?=form_checkbox('homepage','1') ?></td>
	</tr>

	<tr>
		<td colspan="2" align="right"><?=form_submit('save','Save') ?></td>
	</tr>
</table>
<?=form_close() ?>