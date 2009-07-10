<div><?=$newspoll['0']->question ?></div>
<table width="100%">
	<tr>
		<td align="left" width="20%"><?=$more['18']->matter ?></td>
		<td align="left" width="75%">
		<? for($i=0;$i<=$result['yes'];$i++){ ?>
		<img src="<?=base_url()?>assets/imgs/result4.jpg" border="0" style="float:left">
		<? } ?>
		</td>
	</tr>
	<tr>
		<td align="left"><?=$more['19']->matter ?></td>
		<td align="left">
		<? for($i=0;$i<=$result['no'];$i++){ ?>
		<img src="<?=base_url()?>assets/imgs/result4.jpg" border="0" style="float:left">
		<? } ?>
	</tr>
	<tr>
		<td align="left"><?=$more['20']->matter ?></td>
		<td align="left">
		<? for($i=0;$i<=$result['yn'];$i++){ ?>
		<img src="<?=base_url()?>assets/imgs/result4.jpg" border="0" style="float:left">
		<? } ?>
	</tr>
</table>