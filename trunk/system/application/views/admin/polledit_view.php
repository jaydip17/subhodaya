<!--<? print_r($details); ?>
<table align="center" width="50%" id="tableadmin">
<tr>
	<th>Question</th>
	<th>edit</th>
	<th>delete</th>
</tr>
</table>
--><script language="javascript">
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

echo form_open(base_url().'admin/news/delete');
 ?>
<table align="center" width="50%" id="tableadmin">
<tr><td colspan="3" align="center">Poll</td></tr>
   <?php if(!empty($details))
{?>
<tr>
		<th width='300px' style="text-align:center">
		Question
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
		<td width='300px'><input type="checkbox" id='c<?=$i++;?>' name="removeid[]" value=<?=$item->id?>><?=$item->question?>

</td>
		
		<td width='50px'><a
			href="<?=base_url()?>admin/poll/delete/<?=$item->id?>"
			onclick='return confirm("are you sure want to delete");'><img
			src="<?=base_url();?>assets/imgs/delete_on.gif" border='0' /></a></td>
		<td width='50px'><a href="<?=base_url()?>admin/poll/edit/<?=$item->id?>"><img
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
	  <?php echo $pagination;?>
	  </td>
	  </tr>
</table>
<? }else { ?>
	
<h2>Add film news to display</h2>	
<? }?>

</form>

