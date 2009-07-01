<?
echo form_open_multipart(base_url()."admin/news/edit1/") ?>
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
		<td>Heading</td>
		<?=form_hidden('id',$edit['0']->id) ?>
		<td align="left"><?=form_input('heading',$edit['0']->heading) ?></td>
	</tr>
	<tr>
		<td>Summery</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="50" name="summary" id="summary"><?=$edit['0']->summery ?></textarea> 
		</td>
	</tr>
	<tr>
		<td>Description</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="60" id="description" name="description"><?=$edit['0']->description ?></textarea> 
		</td>
	</tr>
	<tr>
		<td>Breaking News</td>
		<td align="left"><?=form_checkbox('breaking_news','1') ?></td>
	</tr>

	<tr>
		<td colspan="2" align="right"><?=form_submit('save','Save') ?></td>
	</tr>
</table>
<?=form_close() ?>