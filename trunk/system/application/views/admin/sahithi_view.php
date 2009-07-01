<?=form_open_multipart('admin/sahithi') ?>
<table>
  <tr>
    <th colspan='2' style="font-size: 16px">Sahithi</th>
  </tr>
  <tr>
    <td>sahithi</td>
    <td><?=form_input()?></td>
  </tr>
  <tr>
  		<td colspan='2' align='center'><?=form_submit('submit','Add') ?></td>
  </tr>
</table>

<?=form_close() ?>