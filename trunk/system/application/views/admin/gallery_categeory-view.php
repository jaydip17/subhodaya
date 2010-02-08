<?echo form_open(base_url().'admin/gall/deletecategeory/');?>
 <script type="javascript">
function fun()
{ var i;
  for(i=1;i<=10;i++)
 {
    var sn = 'c'+i;

    document.getElementById(sn).checked= true;
   // document.getElementById('c2').checked='true';
    
  }
} 
</script>
<table align="center" width="400" id="tableadmin" >
	<thead>
	  <h3>gallery categeories</h3>
	</thead>
   <?php if($query->num_rows() > 0)
{?>
<tr>
		<th>
		Categeory
		</th>

		<th width=174px>
<?php if(!isset($sub)){?>
View sub categeories
<?} else {?>
View Images	
<? }?>
</th>
		<th>
		Delete
		</th>
		<th>
		Edit
		</th>
	</tr>
<? $i=1;
foreach ($query->result() as $item):
echo  form_hidden('parentid',$item->parentid);
 ?>

<tr>
		<td><input type="checkbox" id='c<?=$i++;?>' name="removeid[]"
			value=<?=$item->id?>><?=$item->catname?>

</td>
		<td>
<?php if(!isset($sub)){ echo anchor('admin/gall/categeoryview/'.$item->id,'view all');?>
    
      <?php  } else{echo anchor('admin/gall/image_view/'.$item->id,'view images');}?>
      </td>
		<td><a
			href="<?=base_url()?>admin/gall/deletecategeory/<?=$item->id?>/<?=$item->parentid?>"
			onclick='return confirm("are you sure want to delete");'><img
			src="<?=base_url();?>assets/imgs/delete.png" border='0' /></a></td>
		<td><a href="<?=base_url()?>admin/gall/catedit/<?=$item->id?>"><img
			src="<?=base_url();?>assets/imgs/edit.png" border='0' /></a></td>
	</tr>

<?php 
     
      endforeach ;?>
<tr>
		
	<tr>
		<td></td>
		<td><a onclick="fun();" href="javascript:void(0)">checkall</a>&nbsp; <a
			onclick="fun1();" href="javascript:void(0)">uncheckall</a></td>
			<td></td>
			<td></td>
	</tr>
	<tr>
		<td></td>
		<td>
<? echo form_submit('remove','remove selected');?>  
</td>
<td></td>
		<td></td>
	</tr>

<? }else { ?>
	
<h2>No categeories to display</h2>	
<? }?>

</table>
</form>
<p> <?php echo $this->paginationnew->paginate1();?></p>
