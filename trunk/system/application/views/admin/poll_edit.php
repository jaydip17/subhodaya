<?
echo form_open_multipart("admin/poll/edit1") ?>
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
		<td style="font-size: 18px;" colspan='2' align='center'>Poll</td>
	</tr>
	<tr>
		<td>Question</td>
		<?=form_hidden('id',$result['0']->id)?>
		<td align="left"><?=form_input('question',$result['0']->question);?></td>
	</tr>
	<tr>
		<td>Display_date</td>
		<td><?=form_input('on_date',$result['0']->displaydate); ?></td>
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