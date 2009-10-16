<?=form_open_multipart('admin/flash_greet/edit') ?>
<? $data=array('name' => 'text',
			'value'=>$text['0']->text,
			'rows'=>2,
			'cols'=>27);
?>
<table>
	<tr>
		<td>Text:</td>
		<td><?=form_hidden('id',$text['0']->id)?>
			<?=form_textarea($data) ?>
		</td>
	</tr>
	<tr>
	<td>Link</td>
	<? $data1=array('name'  => 'link',
					'value' => $text['0']->link,
					'rows'  => 2,
					'cols'  =>27) ?>
	<td><?=form_textarea($data1) ?></td>
	</tr>
	<tr>
		<td colspan="2"><?=form_submit('submit','Save') ?></td>
	</tr>

</table>
<?=form_close() ?>