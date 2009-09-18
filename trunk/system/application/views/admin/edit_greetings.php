<script language="javascript">
function fun()
{ var i;
  for(i=1;i<=10;i++)
 {
    var sn = 'c'+i;

    document.getElementById(sn).checked= true;
   // document.getElementById('c2').checked='true';
    
  }
}
function fun1()
{ var i;
  for(i=1;i<=10;i++)
 {
    var sn = 'c'+i;

    document.getElementById(sn).checked=false;
   
    
  }
}

</script>
<?php

$i=1;	

echo form_open('admin/greetings/delete');
 ?>
<table align="center" width="50%" id="tableadmin">
	<th colspan="3">
		Greetings 
	</th>
   <?php if(!empty($details))
{?>
<tr>
		<th width='300px' style="text-align:center">
		Image
		</th>

		<th width='50px'>
		Delete
		</th>
		<th width='50px'>
		Edit
		</th>
	</tr>
<?
foreach ($details as $item):

 ?>

<tr>
		<td width='300px' align="left"><input type="checkbox" id='c<?=$i++;?>' name="removeid[]" value=<?=$item->id?>>
		<img src="<?=base_url()?>assets/greetings/gree_img<?=$item->id?>_thumb.jpg" >
		<div><?=$item->name?></div>

</td>
		
		<td width='50px'><a
			href="<?=base_url()?>admin/greetings/delete/<?=$item->id?>"
			onclick='return confirm("are you sure want to delete");'><img
			src="<?=base_url();?>assets/imgs/delete_on.gif" border='0' /></a></td>
		<td width='50px'><a href="<?=base_url()?>admin/greetings/edit/<?=$item->id?>"><img
			src="<?=base_url();?>assets/imgs/b_edit.png" border='0' /></a></td>
	</tr>

<?php 
     
      endforeach ;?>
<tr>
	
	
	<tr>
		<td></td>
		<td><a  onclick="fun();" href="javascript:void(0)">checkall</a>&nbsp;
		<a  onclick="fun1();" href="javascript:void(0)">uncheckall</a></td>
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
	<tr>
	<td colspan =4>
	  <?php // echo $this->paginationnew->paginate();?>
	  </td>
	  </tr>
</table>
<? }else { ?>
	
<h2>Add film news to display</h2>	
<? }?>

</form>

