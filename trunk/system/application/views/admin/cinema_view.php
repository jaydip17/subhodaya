<?=form_open_multipart('admin/cinema/') ?>
<table>
	<tr>
		<th colspan='2' style="font-size: 16px">Cinema</th>
	</tr>
	<tr>
		<td>Cinema</td>
		<td><?=form_input();?></td>
	</tr>
	<tr>
		<td>Trailor</td>
		<td><?=form_input();?></td>
	</tr>
	<tr>
		<td>Privew Image</td>
		<td><?=form_upload();?></td>
	</tr>
	<tr>
		<td>Preview Image</td>
		<td><?=form_upload();?></td>
	</tr>
	<tr>
		<td>Active</td>
		<td><?=form_checkbox();?></td>
	</tr>
</table>
<?=form_close() ?>