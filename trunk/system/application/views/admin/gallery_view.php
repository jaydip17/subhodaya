<?=form_open_multipart('admin/gallery') ?>
<table>
	<tr>
		<th style="font-size: 16px;" colspan='2'>Gallery</th>
	</tr>
	<tr>
		<td>Gallery name</td>
		<td><?=form_input() ?></td>
	</tr>
	<tr>
		<td>Gallery category</td>
		<td><?=form_input() ?></td>
	</tr>
	<tr>
		
		<td colspan='2' align='center'><?=form_submit('submit','Add') ?></td>
	</tr>
</table>
<?=form_close() ?>