<?
echo form_open_multipart("admin/astrolagy/editcategeory/") ?>
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
		<td style="font-size: 16px;" colspan='2' align='center'>Edit Astrolagy categeory</td>
	</tr>
	
	<tr>
		<td>Astrolagy categeory</td>
		<?=form_hidden('id',$edit['0']->id) ?>
		<td align="left"><?=form_input('astrolagy_cat',$edit['0']->astrolagy_cat) ?></td>
	</tr>

    <tr>
		<td colspan="2" align="center"><?=form_submit('edit','edit') ?></td>
	</tr>

</table>
<?=form_close() ?>