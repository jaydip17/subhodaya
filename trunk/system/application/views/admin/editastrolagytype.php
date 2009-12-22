<?
echo form_open_multipart("admin/astrolagy/edit1/") ?>
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
		<td style="font-size: 18px;" colspan='2' align='center'>Edit Astrolagy</td>
	 </tr>
	 
     <tr>
		 <td>Zodic sun-sign</td>
		 <?=form_hidden('id',$edit['0']->id) ?>
		 <td align="left"><?=form_input('astrolagy_type',$edit['0']->astrolagy_type) ?></td>
	 </tr>
	  
	  <tr>
		 <td>Description</td>
		 <td style="text-align: left;">
		 <textarea rows="2" cols="60" id="description" name="description"><?=$edit['0']->description ?></textarea> 
		 </td>
	 </tr>
	 
	 <tr>
		<td>Display date</td>
		<?=form_hidden('id',$edit['0']->id) ?>
		<td align="left"><?=form_input('display_date',$edit['0']->display_date) ?></td>
	 </tr>
     
     <tr>
		<td colspan="2" align="center"><?=form_submit('save','Save') ?></td>
	</tr>
    
</table>		
<?=form_close() ?>