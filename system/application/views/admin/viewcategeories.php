<? echo form_open(base_url().'admin/videos/deletecategeory');?>

<table align="center" width="400" id="tableadmin">

    <thead>
		<h2 style="color: black">Vidoes</h2>
	</thead>
	
	<?php if($query->num_rows() > 0)
{?>
<tr>
		<th></th>
		<th>Categeory</th>
		
		<th>Delete</th>
		
		<th>Edit</th>
			
	</tr>
	
	<?php

$i=1;	


 ?><?
foreach ($query->result() as $item):
echo  form_hidden('id',$item->id);
 ?>
 
 <tr>
		<td><input type="checkbox" id='c<?=$i++;?>' name="removeid[]"
			value=<?=$item->id?>></td>
		<td><a href="<?=base_url();?>admin/videos/getvideos/<?=$item->id?>"><?=$item->name?></a></td>
		
		<td><a
			href="<?=base_url()?>admin/videos/deletecategeory/<?=$item->id?>"
			onclick='return confirm("are you sure want to delete");'><img
			src="<?=base_url();?>assets/imgs/delete_on.gif" border='0' /></a></td>
			
		 <td><a href="<?=base_url()?>admin/videos/editcategeory/<?=$item->id?>"><img
			src="<?=base_url();?>assets/imgs/b_edit.png" border='0' /></a></td>
	</tr>
	
	<?php 
     
      endforeach ;?>
      
      <tr>
	
	
	<tr>
		
		<td align="center" colspan='4'><a onclick="fun();" href="javascript:void(0)">checkall</a>&nbsp; <a
			onclick="fun1();" href="javascript:void(0)">uncheckall</a></td>
		
	</tr>
	
	<tr>
		
	 <td align="center" colspan='4'>
     <? echo form_submit('remove','remove selected');?>  
   </td>
		
	</tr>
	
 <? }else { ?>
 
 <h2>No categeories to display</h2>	
<a href="<?=base_url();?>admin/videos/addcategeory" style="color:purple">Click to Add Categeory</a>

<? }?>


</form>
	<p> <?//php echo $this->paginationnew->paginate();?></p>
	
	</table>