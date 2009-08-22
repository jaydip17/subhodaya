<?echo form_open(base_url().'admin/gallery/deleteimage/');?>
 
<table align="center" width="400" id="tableadmin">
	<thead>
		<h2 style="color: olive">Gallery images</h2>
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
	</tr>
   
<?php $i=1;
foreach ($query->result() as $item): 
?>
<tr>
		<td align="center">
       <?=$item->title?>
    </td>
		<td align="center"><img
			src="<?=base_url()?>assets/flash_images/image<?=$item->id?>_thumb.jpg"
			alt="img"></td>
		<td align="center"><a
			href="<?=base_url()?>admin/slideimages/delete/<?=$item->id?>"
			onclick='return confirm("are you sure want to delete");'><img
			src="<?=base_url();?>assets/imgs/delete.png" border='0' /></a></td>
		</tr>

<?php $i++; endforeach ;?>
<tr>

	
	</form>
<? }else { ?>
	
<h2>No Slide Images Yet..</h2>	
<? }?>
</table>

