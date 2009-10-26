<?=form_open_multipart(base_url()."admin/ads/upload_ads") ?>
<table width='300'>
<?php
$addname=$this->uri->segment(4);
 ?>
	<tr>
		<th colspan='2'>upload new add</th>
	</tr>
	<tr>
		<td>Add</td>
		<td align='right'><?=form_upload('adimage') ?>
		<?=form_hidden('ad_name',$addname) ?></td>
	</tr>
	<tr>
		<td colspan='2' align='center'><?=form_submit('submit','Submit') ?></td>
	</tr>
</table>