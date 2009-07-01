<?=form_open_multipart('admin/mahila') ?>
<table>
	<tr>
		<th style="font-size: 16px" colspan='2'>Mahila</th>
	</tr>
	<tr>
		<td>Mahila</td>
		<td><?=form_input() ?></td>
	</tr>
	<tr>
		<td colspan='2' align='center'><?=form_submit('submit','Add') ?></td>
	</tr>
</table>
<?=form_close() ?>