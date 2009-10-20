<table align="center" width="95%" style="border: 1px solid #3789C3;">
<?php $flash_mesg=$this->session->flashdata('messagesent');
if($flash_mesg!=''){
?>
	<tr><td colspan="2" height="30px;" width="200px;" align="center"><span style="background-color: yellow;color: black;"><?=$flash_mesg?></span></td></tr>
	<?php }?>
	<tr>
		<td align="center"><img src="<?=base_url()?>assets/ads/Home3.jpg"></td>
		<td align="center"><img src="<?=base_url()?>assets/ads/Home4.jpg"></td>
	</tr>
</table>
