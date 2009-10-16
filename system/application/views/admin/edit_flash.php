<?echo form_open(base_url().'admin/gallery/deleteimage/');?>
 
<table align="center" width="400" id="tableadmin">
	<thead>
		<h2 style="color: olive">greeting images</h2>
	</thead>
    <?php if($query->num_rows() > 0)
{?>
   <tr>
		<th>
		Title
		</th>
		<th>
		Image
		</th>
		<th>
		Delete
		</th>
		<th>
		Edit
		</th>
	</tr>
   
<?php $i=1;
foreach ($query->result() as $item): 
?>
<tr>
		<td align="center">
       <?=$item->text?>
    </td>
		<td align="center"><img
			src="<?=base_url()?>assets/images/flash<?=$item->id?>_thumb.jpg"
			alt="img"></td>
		<td align="center"><a
			href="<?=base_url()?>admin/flash_greet/delete/<?=$item->id?>"
			onclick='return confirm("are you sure want to delete");'><img
			src="<?=base_url();?>assets/imgs/delete.png" border='0' /></a>
		</td>
		<td align="center"><a
			href="<?=base_url()?>admin/flash_greet/edit1/<?=$item->id?>">
			<img src="<?=base_url();?>assets/imgs/b_edit.png" border='0' /></a></td>
		</tr>

<?php $i++; endforeach ;?>
<tr>
	</form>
<? }else { ?>
	
<h2>No Slide Images Yet..</h2>	
<? }?>
</table>

