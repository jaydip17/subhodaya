<?echo form_open(base_url().'admin/gall/deleteimage/');?>
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
		<th>folder path</th>
		<th>
		Delete
		</th>
		<th>
		Edit
		</th>
	</tr>
<?php $i=1;
foreach ($query->result() as $item): 
echo form_hidden('categoryid',$item->categoryid);?>
<tr>
		<td><input type="checkbox" id='c<?=$i?>' name="removeid[]" value=<?=$item->id?>>
<?=$item->title?>
    </td>
		<td><?php $images_list = directory_map('./assets/gallery/thumbnail_images/'.$item->imagepath);
		 $totimgs = count($images_list);
		?> 
		<img src="<?=base_url()?>assets/gallery/thumbnail_images/<?=$item->imagepath?>/1_thumb.jpg">
		 </td>
		 <td><?=$item->imagepath?></td>
		<td><a
			href="<?=base_url()?>admin/gall/delete_names/<?=$item->imagepath?>/<?=$item->categoryid?>"
			onclick='return confirm("are you sure want to delete");'><img
			src="<?=base_url();?>assets/imgs/delete.png" border='0' /></a></td>
		<td><a href="<?=base_url()?>admin/gall/imageedit/<?=$item->id?>"><img
			src="<?=base_url();?>assets/imgs/edit.png" border='0' /></a></td>
	</tr>
<?php $i++; endforeach ;?>
<tr>
<tr>
		<td></td>
		<td><a  onclick="fun();" href="javascript:void(0)">checkall</a>&nbsp;
		<a  onclick="fun1();" href="javascript:void(0)">uncheckall</a></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
	</tr>
	<tr>
		<td></td>
		<td>
<? echo form_submit('remove','remove selected');?>  
</td>
<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan=4>
	  <?php echo $this->paginationnew->paginate1();?>
	  </td>
	</tr>

	</form>
<? }else { ?>
	
<h2>No Images in this categeory</h2>	
<? }?>
</table>

