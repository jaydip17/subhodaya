
<?=form_open_multipart("admin/astrolagy/insert") ?>
 
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
		<td style="font-size: 18px;" colspan='2' align='center'>Astrolagy</td>
	  </tr>
	  <tr>
		<td>Select type</td>
		<td><?=form_dropdown('astrolagy_cat',$options)?></td>
	  </tr>
	   <tr>
		<td>Select zodiac sun-sign </td>
		<td><?=form_dropdown('astrolagy_type',$options1)?></td>
	   </tr>
	   <tr>
		 <td>Description</td>
		 <td style="text-align: left;">
			<textarea rows="3" cols="60" id="description" name="description"></textarea> 
		 </td>
	  </tr>
	     
	     <tr>
		<td>Display date </td>
		<td><?=form_input('display_date');?></td>
	   </tr>
        <tr>
		<td colspan="2" align="center"><?=form_submit('submit','submit') ?></td>
	</tr>

</table>
<?=form_close() ?>