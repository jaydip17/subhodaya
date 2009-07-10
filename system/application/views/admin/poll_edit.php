<?
echo form_open_multipart(base_url()."admin/poll/insert/") ?>
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
		<td>poll type</td>
		
		<td><?=form_dropdown('polltype',$options); ?></td>
	</tr>
	<tr>
		<td>Question</td>
		<td align="left"><?=form_input('question'); ?></td>
	</tr>
	<tr>
		<td>Insert_date</td>
		<td><?=form_input('on_date'); ?></td>
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