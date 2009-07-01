<?=form_open_multipart('admin/video')?>
<table>
	<tr>
		<th colspan='2' style="font-size: 16px">Videos</th>
	</tr>
	<tr>
		<td>video Name</td>
		<td><?=form_input() ?></td>
	</tr>
	<tr>
		<td>video Time</td>
		<td><?=form_input() ?></td>
	</tr>
	<tr>
		<td>video</td>
		<td><?=form_upload() ?></td>
	</tr>
	<tr>
		<td>Preview Image</td>
		<td><?=form_upload() ?></td>
	</tr>
	<tr>
		<td>active</td>
		<td><?=form_checkbox() ?></td>
	</tr>
</table>
<?=form_close() ?>