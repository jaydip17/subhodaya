<?
echo form_open_multipart("admin/greetings/edit1") ?>
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
		<td style="font-size: 18px;" colspan='2' align='center'>Greetings</td>
	</tr>
	<tr>
		<td>Name</td>
		<td style="text-align: left;">
		<?=form_hidden('id',$edit['0']->id) ?>
			<textarea rows="3" cols="50" name="name" id="name"><?=$edit['0']->name?></textarea> 
		</td>
	</tr>
	<tr>
		<td>Summery</td>
		<td style="text-align: left;">
			<textarea rows="3" cols="60" id="summery" name="summery"><?=$edit['0']->summery?></textarea> 
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