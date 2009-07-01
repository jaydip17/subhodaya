<?=form_open_multipart('admin/greetings') ?>
<table>
	<tr>
		<th colspan='2' style="font-size: 16px;">Greetings</th>
	</tr>
	<tr>
		<td>Greetings</td>
		<td><?=form_input()?>size:</td>
	</tr>
	<tr>
		<td>Greetings</td>
		<td><?=form_input()?></td>
	</tr>
	<tr>
		<td colspan='2' align='center'><?=form_submit('submit','Add')?></td>
	</tr>
</table>
<?=form_close() ?>